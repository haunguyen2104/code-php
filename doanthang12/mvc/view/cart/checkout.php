
<div class="col-md-9">
    <h2>Check Out</h2>
    <div class="row btn-success">
    <?php if (isset($_SESSION['msg'])) 
    {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }?>
    </div>
    <div class="row">
        <form action="" method=post >
            <table>

                <tr>
                    <td class='col-md-3'><label f>Họ và tên:</label></td>
                    <td class='col-md-9'><input type="text" name="inputFullname" require></td>
                </tr><!--Name-->


                <tr>
                    <td class='col-md-3'><label >Địa chỉ:</label></td>
                    <td class='col-md-9'><input type="text" name="inputAddress" require></td>
                </tr> <!--Diachi-->

                <tr>
                    <td class='col-md-3'><label >Số điện thoại:</label></td>
                    <td class='col-md-9'><input type="phone" name="inputPhone" require></td>
                </tr><!--phone-->

                <tr>
                    <td class='col-md-3'><label>Email:</label></td>
                    <td class='col-md-9'><input type="email" name="inputEmail" require></td>
                </tr><!--mail-->

                <tr>
                    <td class='col-md-3'><label>Ghi chú:</label></td>
                    <td class='col-md-9'><textarea cols=70 rows=10 name="inputNote" require></textarea></td>
                </tr><!--note-->


                <tr>
                    <td class='col-md-3'>
                        <input type="submit" name="submit" value=Submit>
                        <input type="reset" name="reset" value=Reset>
                    </td>
                </tr>



            </table>
        </form>
    </div>
</div>