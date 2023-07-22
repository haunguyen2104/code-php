<?php
    if(isset($_SESSION['msg']))
    {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
?>

<!--Login-->
<div class="border border-primary form-control form-control-lg p-3 mb-2 bg-warning text-white my-4"
        style="border:2px solid black;
        background:#ffc107;
        border-radius: 5px;
        margin:0px 100px;
        height:350px;
        width:500px;
        margin-left: 700px;"
>

    <a style="margin-left: 35%; font-size:60px; font-weight:bold;">LOGIN</a>

    <form class="form-control form-control-lg p-3 mb-2 bg-secondary" action="<?php echo BASE_URL ?>auth/adminLogin/"
        method=post >
        <table class="text-white text-center" style="margin-left: 100px; margin-top:50px;">
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
        <div class="col" style="margin-left: 150px; margin-top:46px;">
            <input class="btn btn-info" type="submit" name='login' value="Login"
                style=" padding: 8px 25px; background:black;color:yellow; font-size: 20px;font-weight:bold; border-radius: 10px">
            <input class="btn btn-info" type="Reset" value=Reset
                style=" padding: 8px 25px; background:black;color:yellow; font-size: 20px;font-weight:bold; border-radius: 10px; margin-bottom:10px;">
        </div>
    </form>
</div>