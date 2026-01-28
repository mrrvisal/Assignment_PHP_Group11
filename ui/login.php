<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background: linear-gradient(to right, #4e54c8, #8f94fb);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-card {
        background: white;
        padding: 2rem;
        border-radius: 1rem;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
    }

    .social-icons img {
        width: 32px;
        margin: 0 10px;
        cursor: pointer;
    }

    .google-btn {
        width: 100%;
        padding: 12px;
        background-color: #645f56;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .google-btn:hover {
        background-color: #d497c3;
    }

    .google-icon {
        width: 20px;
        height: 20px;
    }

    .register-link {
        text-align: center;
        margin-top: 20px;
        color: #666;
    }

    .register-link a {
        color: #4CAF50;
        text-decoration: none;
        font-weight: bold;
    }

    .register-link a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="login-card text-center">
        <h4 class="mb-3">Sign in with email</h4>
        <p class="text-muted">Make a new doc to bring your words, data, and teams together. For free</p>
        <form method="POST" action="../../controllers/auth_controller.php">
            <div class="mb-3 text-start">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="txt_email" required placeholder="Enter your email">
            </div>
            <div class="mb-3 text-start">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="txt_password" required
                    placeholder="Enter your password">
            </div>
            <div class="mb-3 text-end">
                <a href="forgot_password.php" class="text-decoration-none">Forgot password?</a>
            </div>
            <button type="submit" class="btn btn-primary w-100" name="btn_login" value="Login">Login</button>
        </form>
        <hr>
        <p class="text-muted">Or sign in with</p>
        <div class="social-icons d-flex justify-content-center">
            <!-- Google Login Button -->
            <button type="button" class="google-btn" onclick="googleLogin()">
                <img src="../assets/icons/google.png" alt="">
                Login with Google
            </button>
        </div>
        <p class="text-muted">It's you have account? <a href="register.php">Register</a></p>
    </div>
    <!-- Firebase SDK Scripts (compat versions for traditional script tags) -->
    <script src="https://www.gstatic.com/firebasejs/10.7.0/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.7.0/firebase-auth-compat.js"></script>
    <script src="../assets/js/firebase_auth.js"></script>
</body>

</html>