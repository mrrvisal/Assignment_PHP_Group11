<h1>Reset Password</h1>
<form method="POST" action="../../controllers/auth_controller.php">
    <input type="password" name="txt_newpass" placeholder="New Password" required>
    <input type="password" name="txt_confirmpass" placeholder="Confirm Password" required>
    <input type="submit" name="btn_reset" value="Reset Password">
</form>