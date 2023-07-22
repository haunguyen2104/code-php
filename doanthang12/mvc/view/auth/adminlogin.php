<?php
    if(isset($_SESSION['msg']))
    {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
?>

<!--Login-->
<div class="border border-primary form-control form-control-lg p-3 mb-2 bg-secondary text-white my-4"
 style="align-items: center; text-align: center; align-content: center; width: 500px; margin-left: 30%;"       
>

    <a style=" font-size:60px; font-weight:bold;">LOGIN</a>

    <form class="form-control form-control-lg p-3 mb-2 bg-secondary" action="<?php echo BASE_URL ?>auth/adminLogin/" method=post >
        <table class="text-white text-center" style=" margin-top:50px;">
            <tr>
                <td class="col-md-3" style="font-weight: bold; font-size: 25px;">
                    Username:
                </td>
                <td class="col-md-6"><input class="form-control" type="text" name=inputUsername
                        style=" border-radius: 3px; width: 200px;height: 35px; font-size:20px;">
                </td>
            </tr>
            <tr>
                <td class="col-md-3" style="font-weight: bold; font-size: 25px;">
                    Password:
                </td>
                <td><input class="form-control" type="password" name=inputPassword
                        style=" border-radius: 3px; width: 200px;height: 35px; font-size:20px;">
                </td>
            </tr>
        </table>
        <hr>
        <div class="col" style="margin-top:10px;">
            <input class="btn btn-warning" type="submit" name='login' value="Login"
            style="background:black;color:yellow; font-size: 20px;font-weight:bold; border-radius: 10px;"
               >
            <input class="btn btn-warning" type="Reset" value=Reset
                style="background:black;color:yellow; font-size: 20px;font-weight:bold; border-radius: 10px;">
        </div>
    </form>
</div>

