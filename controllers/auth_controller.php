<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once '../models/User.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Start session at the top
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Handle direct form submissions from views
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new AuthController();

    if (isset($_POST['btn_register'])) {
        $controller->register();
    }

    if (isset($_POST['btn_login'])) {
        $controller->login();
    }

    if (isset($_POST['btn_forgot'])) {
        $controller->forgot();
    }

    if (isset($_POST['btn_verify'])) {
        $controller->verifyOtp();
    }

    if (isset($_POST['btn_reset'])) {
        $controller->resetPassword();
    }

    if (isset($_POST['google_login'])) {
        $controller = new AuthController();
        $controller->googleLogin();
    }

    if (isset($_POST['google_register'])) {
        $controller = new AuthController();
        $controller->googleRegister();
    }

    exit();
}

// Handle GET requests for Google Login (alternative method)
if (isset($_GET['google_login'])) {
    $controller = new AuthController();
    $controller->googleLogin();
    exit();
}

class AuthController
{

    public function register()
    {
        $name = trim($_POST['txt_name']);
        $email = trim($_POST['txt_email']);
        $pass = password_hash($_POST['txt_password'], PASSWORD_BCRYPT);
        $phone = trim($_POST['txt_phone']);

        if (User::create($name, $email, $pass, $phone)) {
            header("Location: ../views/auth/login.php");
            exit();
        } else {
            echo "<script>alert('Registration failed! Please try again.'); window.location.href='../views/auth/register.php';</script>";
            exit();
        }
    }

    public function login()
    {
        $email = trim($_POST['txt_email']);
        $password = $_POST['txt_password'];

        $user = User::findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['avatar'] = $user['avatar'] ?? '';
            $_SESSION['logged_in'] = true;

            User::updateLastLogin($user['id']);

            header("Location: ../ui/index.php");
            exit();
        } else {
            echo "<script>alert('Invalid email or password.'); window.location.href='../views/auth/login.php';</script>";
            exit();
        }
    }

    /**
     * Google Login Handler
     * Creates or logs in user with Google account
     */
    public function googleLogin()
    {
        // Get data from POST
        $email = $_POST['email'] ?? '';
        $name = $_POST['name'] ?? '';
        $avatar = $_POST['avatar'] ?? '';
        $uid = $_POST['uid'] ?? '';

        // Log received data for debugging
        error_log("Google Login - Received: email=$email, name=$name, uid=$uid");

        // Validate required fields
        if (empty($email) || empty($uid)) {
            $error = "❌ Missing Google account information. Email: $email, UID: $uid";
            error_log($error);
            echo $error;
            exit();
        }

        try {
            // Check if user exists
            $user = User::findByEmail($email);

            if (!$user) {
                // Create new Google user
                error_log("Creating new Google user: $email");
                $created = User::createGoogleUser($name, $email, $avatar, $uid);

                if (!$created) {
                    $error = "❌ Failed to create Google user account.";
                    error_log($error);
                    echo $error;
                    exit();
                }

                // Get the newly created user
                $user = User::findByEmail($email);

                if (!$user) {
                    $error = "❌ Failed to retrieve created user.";
                    error_log($error);
                    echo $error;
                    exit();
                }

                error_log("User created successfully with ID: " . $user['id']);
            } else {
                error_log("User exists: " . $user['id']);
            }

            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['avatar'] = $user['avatar'] ?? '';
            $_SESSION['auth_provider'] = $user['auth_provider'] ?? 'google';
            $_SESSION['logged_in'] = true;

            error_log("Session set for user: " . $user['id']);

            // Update last login
            User::updateLastLogin($user['id']);

            // Clean output buffer and redirect
            while (ob_get_level()) {
                ob_end_clean();
            }

            // Determine correct redirect path
            $scriptPath = $_SERVER['SCRIPT_FILENAME'];
            if (strpos($scriptPath, 'views/auth') !== false) {
                header("Location: ../../index.php");
            } else {
                header("Location: ../index.php");
            }
            exit();
            
        } catch (Exception $e) {
            $error = "❌ Error: " . $e->getMessage();
            error_log($error);
            echo $error;
            exit();
        }
    }

    /**
     * Google Register Handler
     * Creates new user with Google account (registration only)
     */
    public function googleRegister()
    {
        // Get data from POST
        $email = $_POST['email'] ?? '';
        $name = $_POST['name'] ?? '';
        $avatar = $_POST['avatar'] ?? '';
        $uid = $_POST['uid'] ?? '';
        
        // Validate required fields
        if (empty($email) || empty($uid)) {
            echo "❌ Missing Google account information.";
            exit();
        }   
        // Check if user already exists
        $user = User::findByEmail($email);
        if ($user) {
            echo "❌ User with this email already exists.";
            exit();
        }   
        // Create new Google user
        if (User::createGoogleUser($name, $email, $avatar, $uid )) {
            header("Location: ../views/auth/login.php");
            exit();
        } else {
            echo "❌ Registration failed! Please try again.";
            exit();
        }
    }   

    public function forgot()
    {
        $email = $_POST['txt_email'];
        $otp = rand(100000, 999999);

        if (User::updateOtp($email, $otp)) {
            $_SESSION['reset_email'] = $email;

            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'eivisal617@gmail.com';
                $mail->Password = 'negn jwda gmkt kqac'; // App Password
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->setFrom('luxury@gmail.com', 'Luxury');
                $mail->addAddress($email);
                $mail->addReplyTo('eivisal617@gmail.com', 'Luxury');

                $mail->isHTML(true);
                $mail->Subject = 'Your OTP Code - Luxery';
                $mail->Body = "
                <html>
                <head>
                    <style>
                        body { font-family: Arial, sans-serif; }
                        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                        .otp-code { font-size: 32px; font-weight: bold; color: #4CAF50; }
                        .footer { margin-top: 20px; font-size: 12px; color: #666; }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <h2>Password Reset OTP</h2>
                        <p>Your OTP code is:</p>
                        <p class='otp-code'>$otp</p>
                        <p>This code will expire in 5 minutes.</p>
                        <p>If you didn't request this, please ignore this email.</p>
                        <div class='footer'>
                            <p>Luxery Team</p>
                        </div>
                    </div>
                </body>
                </html>
                ";
                $mail->AltBody = "Your OTP code is: $otp\n\nThis code will expire in 5 minutes.";

                if ($mail->send()) {
                    // Clean output buffer and redirect
                    while (ob_get_level()) {
                        ob_end_clean();
                    }
                    header("Location: ../views/auth/verify_otp.php");
                    exit();
                } else {
                    throw new Exception("Failed to send email");
                }
            } catch (Exception $e) {
                error_log("Email sending failed: " . $e->getMessage());
                echo "Failed to send OTP. Please try again later.";
            }
        } else {
            echo "❌ Email not found in our system!";
        }
    }

    public function verifyOtp()
    {
        $otp = $_POST['txt_otp'];
        $email = $_SESSION['reset_email'];

        if (User::verifyOtp($email, $otp)) {
            header("Location: ../views/auth/reset_password.php");
            exit();
        } else {
            echo "❌ Invalid or expired OTP.";
        }
    }

    public function resetPassword()
    {
        $newpass = $_POST['txt_newpass'];
        $confirmpass = $_POST['txt_confirmpass'];
        $email = $_SESSION['reset_email'];

        if ($newpass === $confirmpass) {
            if (User::resetPassword($email, $newpass)) {
                header("Location: ../views/auth/login.php");
                exit();
            } else {
                echo "❌ Error updating password.";
            }
        } else {
            echo "❌ Passwords do not match.";
        }
    }
}