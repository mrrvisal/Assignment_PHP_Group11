<h1>Login</h1>
<form method="POST" action="../../controllers/auth_controller.php">
    <table border="0">
        <tr>
            <td>Email</td>
            <td><input id="email" type="email" name="txt_email" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input id="pass" type="password" name="txt_password" required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="btn_login" value="Login"></td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="forgot_password.php">Forgot Password?</a>
            </td>
        </tr>
    </table>
</form>