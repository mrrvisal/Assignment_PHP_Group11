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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Luxury Shop</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    .login-container {
        background-color: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 30px;
    }

    table {
        width: 100%;
    }

    td {
        padding: 10px 0;
    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 14px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 12px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .forgot-password {
        text-align: center;
        margin-top: 15px;
    }

    .forgot-password a {
        color: #666;
        text-decoration: none;
    }

    .forgot-password a:hover {
        text-decoration: underline;
    }

    .divider {
        display: flex;
        align-items: center;
        margin: 20px 0;
    }

    .divider::before,
    .divider::after {
        content: "";
        flex: 1;
        border-bottom: 1px solid #ddd;
    }

    .divider span {
        padding: 0 10px;
        color: #999;
        font-size: 14px;
    }

    .google-btn {
        width: 100%;
        padding: 12px;
        background-color: #4285F4;
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
        background-color: #357abd;
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
    <div class="login-container">
        <h1>🔐 Login</h1>

        <form method="POST" action="../../controllers/auth_controller.php">
            <table border="0">
                <tr>
                    <td>Email</td>
                    <td><input id="email" type="email" name="txt_email" required placeholder="Enter your email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input id="pass" type="password" name="txt_password" required placeholder="Enter your password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="btn_login" value="Login"></td>
                </tr>
            </table>
        </form>

        <div class="divider"><span>or</span></div>

        <!-- Google Login Button -->
        <button type="button" class="google-btn" onclick="googleLogin()">
            <svg class="google-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill="#fff"
                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                <path fill="#fff"
                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                <path fill="#fff"
                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                <path fill="#fff"
                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
            </svg>
            Login with Google
        </button>

        <div class="forgot-password">
            <a href="forgot_password.php">Forgot Password?</a>
        </div>

        <div class="register-link">
            Don't have an account? <a href="register.php">Register here</a>
        </div>
    </div>

    <!-- Firebase SDK Scripts (compat versions for traditional script tags) -->
    <script src="https://www.gstatic.com/firebasejs/10.7.0/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.7.0/firebase-auth-compat.js"></script>

    <!-- Firebase Auth Script -->
    <script src="../../assets/js/firebase_auth.js"></script>
</body>

</html>