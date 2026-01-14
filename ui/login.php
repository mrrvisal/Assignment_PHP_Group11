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
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      max-width: 400px;
      width: 100%;
    }
    .social-icons img {
      width: 32px;
      margin: 0 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="login-card text-center">
    <h4 class="mb-3">Sign in with email</h4>
    <p class="text-muted">Make a new doc to bring your words, data, and teams together. For free</p>
    <form>
      <div class="mb-3 text-start">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="you@example.com">
      </div>
      <div class="mb-3 text-start">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="••••••••">
      </div>
      <div class="mb-3 text-end">
        <a href="#" class="text-decoration-none">Forgot password?</a>
      </div>
      <button type="submit" class="btn btn-primary w-100">Get Started</button>
    </form>
    <hr>
    <p class="text-muted">Or sign in with</p>
    <div class="social-icons d-flex justify-content-center">
      <img src="https://cdn-icons-png.flaticon.com/512/281/281764.png" alt="Google">
      <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook">
      <img src="https://cdn-icons-png.flaticon.com/512/0/747.png" alt="Apple">
    </div>
  </div>
</body>
</html>
