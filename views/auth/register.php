<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container p-5">
    <h1>Register</h1>
    <form method="POST" action="../../controllers/auth_controller.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input id="name" type="text" name="txt_name" required class="form-control"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input id="email" type="email" name="txt_email" required class="form-control"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input id="pass" type="password" name="txt_password" required class="form-control"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input id="phone" type="text" name="txt_phone" required class="form-control"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="btn_register" value="Register" class="btn btn-primary">
                </td>
            </tr>
        </table>
    </form>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>