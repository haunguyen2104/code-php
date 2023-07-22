<div class="col-md-9 border border-primary form-control form-control-lg p-3 mb-2 bg-secondary text-white">
<h1 class="text-center">THÊM LIÊN KẾT</h1>
<div class="row btn-success"><?php if (isset($_SESSION['msg'])) {
                                        echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);
                                    }
                                    ?>
    </div>
        <form class="form-control form-control-lg p-3 mb-2 bg-secondary text-white" method="POST" action="" enctype="multipart/form-data">
            <table class="table text-white">
                <tr>
                    <td class="col-md-3"><label for="inputImageName">Tiêu đề</label></td>
                    <td><input type="text" name=inputImageName required></td>
                </tr>
                
                <tr>
                    <td><label for="inputPosition">Vị trí</label></td>
                    <td>
                        <select name="inputPosition" id="inputPosition" required>
                            <option>bottommenu1</option>
                            <option>bottommenu2</option>
                            <option>globalnav</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="inputFileUpload">Hình ảnh</label></td>
                    <td><input type="file" name="inputFileUpload" required></td>
                </tr>
                <tr>
                    <td><label for="inputLink">Link</label></td>
                    <td><input type="text" name=inputLink required></td>
                </tr>
                <tr>
                    <td><label for="inputOrders">Orders</label></td>
                    <td><input type="text" name=inputOrders required></td>
                </tr>
                <tr>
                    <td><label for="inputStatus">Trạng thái</label></td>
                    <td>
                        <select name="inputStatus" id="inputStatus">
                            <option value="0">Ẩn</option>
                            <option value="1" selected>Hiện</option>
                    </td>
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