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
        background: rgb(173, 173, 173);

    }

    .register-container {
        max-width: 400px;
        margin: 20px auto;
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
        background-color: #645f56;
    }

    .google-btn {
        background-color: #645f56;
    }

    .google-icon {
        width: 20px;
        height: 20px;
    }

    .divider {
        display: flex;
        align-items: center;
        margin: 10px 0;
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
        <h1 class="text-center mb-4">Create Account</h1>

        <form method="POST" action="../../controllers/auth_controller.php">
            <div class="mb-2">
                <label for="name" class="form-label">Name</label>
                <input id="name" type="text" name="txt_name" required class="form-control"
                    placeholder="Enter your full name">
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" name="txt_email" required class="form-control"
                    placeholder="Enter your email">
            </div>
            <div class="mb-2">
                <label for="pass" class="form-label">Password</label>
                <input id="pass" type="password" name="txt_password" required class="form-control"
                    placeholder="Create a password">
            </div>
            <div class="mb-2">
                <label for="phone" class="form-label">Phone</label>
                <input id="phone" type="text" name="txt_phone" required class="form-control"
                    placeholder="Enter your phone number">
            </div>
            <button type="submit" name="btn_register" class="btn btn-dark  w-100">Register</button>
        </form>

        <div class="divider"><span>or</span></div>

        <!-- Google Registration Button -->
        <button type="button" class="google-btn text-dark bg-light border border-1 border-black"
            onclick="googleRegister()">
            <img src="https://cdn-icons-png.flaticon.com/512/300/300221.png" style="height: 25px;" alt="">

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