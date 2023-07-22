<div class="col-md-9 border border-primary form-control form-control-lg p-3 mb-2 bg-secondary text-white">
<h1 class="text-center">CHECK OUT</h1>
    <div class="row btn-success"><?php if (isset($_SESSION['msg'])) {
                                        echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);
                                    }
                                    ?>
    </div>
        <form class="form-control form-control-lg p-3 mb-2 bg-secondary text-white" method="POST" action="">
            <table class="table text-white">
                <tr>
                    <td class="col-md-3"><label for="inputFullname">Họ tên: </label></td>
                    <td><input type="text" name=inputFullname required></td>
                </tr>
                <tr>
                    <td class="col-md-3"><label>Địa chỉ: </label></td>
                    <td><input type="text" name=inputAddress required></td>
                </tr>
                <tr>
                    <td class="col-md-3"><label>Điện thoại: </label></td>
                    <td><input type="phone" name=inputPhone required></td>
                </tr>
                <tr>
                    <td class="col-md-3"><label>Email: </label></td>
                    <td><input type="email" name=inputEmail required></td>
                </tr>
                <tr>
                    <td  class="col-md-3"><label">Ghi chú: </label></td>
                    <td ><textarea name="inputNote" cols=50 rows=5></textarea></td>
                </tr>
                <tr>
                    <td><input class="btn btn-primary" type="submit" name="submit" value="Submit">
                        <input class="btn btn-primary" type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
