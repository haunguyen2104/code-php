<div class="col-md-9">
        <h2>CHECK OUT</h2>
    <div class="row btn-success">
        <?php if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
    </div>

    <div class="row">
        <form action="" method="post">
            <table>
                <tr>
                    <td class="col-md-3"><label for="">Họ tên</label></td>
                    <td><input type="text" name="inputFullname" required></td>
                </tr>
                <tr>
                    <td class="col-md-3"><label for="">Địa chỉ</label></td>
                    <td><input type="text" name="inputAddress" required></td>
                </tr>
                <tr>
                    <td class="col-md-3"><label for="">Điện thoại</label></td>
                    <td><input type="phone" name="inputPhone" required></td>
                </tr>
                <tr>
                    <td class="col-md-3"><label for="">Email</label></td>
                    <td><input type="email" name="inputEmail" required></td>
                </tr>
                <tr>
                    <td class="col-md-3"><label for="">Ghi chú</label></td>
                    <td><textarea name="inputNote" cols=50 row=5></textarea></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>