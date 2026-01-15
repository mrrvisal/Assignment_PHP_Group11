<?php
session_start();
require_once(__DIR__ . "/config/Database.php");

// Logout logic
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php"); // redirect to self after logout
    exit();
}

// Check login status
$userLoggedIn = isset($_SESSION['user_id']);

// If logged in, fetch user data
if ($userLoggedIn) {
    $conn = Database::getInstance()->getConnection();
    $user_id = $_SESSION['user_id'];
    $stmt = $conn->prepare("SELECT * FROM tbl_register WHERE id = ? LIMIT 1");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc() ?: [];
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-3">

    <h1>Home Page</h1>

    <!-- Buttons -->
    <?php if (!$userLoggedIn): ?>
    <!-- Show Login/Register when not logged in -->
    <a href="./views/auth/register.php" class="btn btn-info text-white">Register</a>
    <a href="./views/auth/login.php" class="btn btn-success text-white">Login</a>
    <?php else: ?>
    <!-- Show Logout when logged in -->
    <form method="post" style="display:inline;">
        <button type="submit" name="logout" class="btn btn-danger">Logout</button>
    </form>
    <?php endif; ?>

    <!-- User info table if logged in -->
    <?php if ($userLoggedIn): ?>
    <table class="table mt-3">
        <?php if (!empty($row['image'])): ?>
        <tr>
            <th>Profile Image</th>
            <td>
                <img src="./assets/images/profiles/<?= htmlspecialchars($row['image']) ?>" alt="Profile"
                    class="rounded-circle" width="100" height="100" style="object-fit: cover;">
            </td>
        </tr>
        <?php endif; ?>
        <tr>
            <th>ID</th>
            <td><?= htmlspecialchars($row['id']) ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?= htmlspecialchars($row['name']) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= htmlspecialchars($row['email']) ?></td>
        </tr>
        <tr>
            <th>Role</th>
            <td><?= htmlspecialchars($row['role']) ?></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><?= htmlspecialchars($row['phone']) ?></td>
        </tr>
        <tr>
            <th>Created At</th>
            <td><?= htmlspecialchars($row['created_at']) ?></td>
        </tr>
        <tr>
            <th>Image</th>
            <td>
                <img src="<?php if($row['avatar'] == "default_avatar.jpg") echo "./assets/images/profiles/" . htmlspecialchars($row['avatar']); else echo $row['avatar']; ?>"
                    alt="Profile" width="100" height="100" style="object-fit: cover;">
            </td>
        </tr>
    </table>
    <?php endif; ?>

</body>

</html>