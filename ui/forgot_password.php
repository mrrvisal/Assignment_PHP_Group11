<!-- forgot-password.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Forgot Password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body { background-color: #f1f3f5; }
    .auth-card {
      background: #f8f9fa;
      border-radius: 8px;
      padding: 2rem;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .auth-title { font-weight: 600; }
    .link-muted { color: #6c757d; text-decoration: underline; }
  </style>
</head>
<body>
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="auth-card">
          <h4 class="auth-title mb-4 text-center">Forgot Password</h4>
          <form>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
              <div class="form-text">We’ll send you a password reset link.</div>
            </div>
            <div class="d-grid mt-3">
              <button type="submit" class="btn btn-dark">Send Reset Link</button>
            </div>
          </form>
          <div class="text-center mt-4">
            <small>
              <a href="login.html" class="link-muted">Back to Login</a> | 
              <a href="register.html" class="link-muted">Create Account</a>
            </small>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
