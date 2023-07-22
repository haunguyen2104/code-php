<?php
if(isset($_SESSION['msg']))
{
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<form action="<?php echo BASE_URL?>auth/adminlogin" method="post">
    <table>
        <tr>
            <td>Username</td><td><input type="text" name="inputUsername" value=""></td>
        </tr>
        <tr>
            <td>Password</td><td><input type="password" name=inputPassword value=""></td>
        </tr>
        <tr>
            <td colspan=2><input type="submit" name='login' value="Login"></td>
        </tr>
    </table>
</form>