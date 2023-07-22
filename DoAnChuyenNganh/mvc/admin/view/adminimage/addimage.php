<div class="col-md-9 border border-primary form-control form-control-lg p-3 mb-2 bg-secondary text-white">
<h1 class="text-center">THÊM HÌNH ẢNH</h1>
<div class="row btn-success"><?php if (isset($_SESSION['msg'])) {
                                        echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);
                                    }
                                    ?>
    </div>
        <form class="form-control form-control-lg p-3 mb-2 bg-secondary text-white" method="POST" action="" enctype="multipart/form-data">
            <table class="table text-white">
                <tr>
                    <td class="col-md-3"><label for="inputImageName">Tiêu đề hình ảnh</label></td>
                    <td><input type="text" name=inputImageName required></td>
                </tr>
                <tr>
                    <td><label for="inputFileUpload">Hình ảnh</label></td>
                    <td><input type="file" name="inputFileUpload" required></td>
                </tr>
                <tr>
                    <td><label for="inputPosition">Position</label></td>
                    <td><input type="text" name="inputPosition" required></td>
                </tr>
                <tr>
                    <td><label for="inputStatus">Trạng thái</label></td>
                    <td>
                        <select name="inputStatus" id="inputStatus" required>
                            <option value="0">Ẩn</option>
                            <option value="1" selected>Hiện</option>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="btn btn-outline-warning" type="submit" name="submit" value="Submit"
                        style="font-size:25px; width:120px;">
                        <input class="btn btn-outline-warning" type="reset" name="reset" value="Reset"
                        style="font-size:25px; width:120px;">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>