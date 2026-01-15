<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Luxury Shop</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .register-container {
        max-width: 500px;
        margin: 50px auto;
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
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
        margin-top: 20px;
    }

    .google-btn:hover {
        background-color: #357abd;
    }

    .google-icon {
        width: 20px;
        height: 20px;
    }

    .divider {
        display: flex;
        align-items: center;
        margin: 30px 0;
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

    .login-link {
        text-align: center;
        margin-top: 20px;
        color: #666;
    }

    .login-link a {
        color: #007bff;
        text-decoration: none;
    }

    .login-link a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="register-container">
        <h1 class="text-center mb-4">📝 Register</h1>

        <form method="POST" action="../../controllers/auth_controller.php">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input id="name" type="text" name="txt_name" required class="form-control"
                    placeholder="Enter your full name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" name="txt_email" required class="form-control"
                    placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input id="pass" type="password" name="txt_password" required class="form-control"
                    placeholder="Create a password">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input id="phone" type="text" name="txt_phone" required class="form-control"
                    placeholder="Enter your phone number">
            </div>
            <button type="submit" name="btn_register" class="btn btn-primary w-100">Register</button>
        </form>

        <div class="divider"><span>or</span></div>

        <!-- Google Registration Button -->
        <button type="button" class="google-btn" onclick="googleRegister()">
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
            Register with Google
        </button>

        <div class="login-link">
            Already have an account? <a href="login.php">Login here</a>
        </div>

        <!-- Firebase SDK Scripts (compat versions for traditional script tags) -->
        <script src="https://www.gstatic.com/firebasejs/10.7.0/firebase-app-compat.js"></script>
        <script src="https://www.gstatic.com/firebasejs/10.7.0/firebase-auth-compat.js"></script>

        <!-- Firebase Auth Script (REMOVED type="module") -->
        <script src="../../assets/js/firebase_auth.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>