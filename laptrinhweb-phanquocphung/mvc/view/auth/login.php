<?php
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<div class="border border-primary form-control form-control-lg p-3 mb-2 bg-secondary text-white my-4">
<h1 class="text-center">ĐĂNG NHẬP</h1>
    <form class="form-control form-control-lg p-3 mb-2 bg-secondary" action="<?php echo BASE_URL ?>auth/adminLogin/" method=post>
        <table class="text-white text-center">
            <tr>
                <td class="col-md-3">Username: </td>
                <td class="col-md-6"><input class="form-control"  type="text" name=inputUsername></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input class="form-control" type="password"  name=inputPassword></td>
            </tr>
        </table>
        <hr>
        <div class="col">
            <input class="btn btn-info" type="submit" name='login' value="Login"> 
            <input class="btn btn-info" type="Reset" value=Reset>
        </div>
    </form>
</div>
<footer class="container-fluid bg-dark">
    <div class="row">
          <?php require_once PATH_TO_MODUL.'bottommenu1.php';?>
          <?php require_once PATH_TO_MODUL.'bottommenu2.php';?>  
    </div>
      </footer>
