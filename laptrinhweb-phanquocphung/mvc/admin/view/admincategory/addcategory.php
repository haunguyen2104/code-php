<?php
$cats = $data['cats'];
?>

<div class="row btn-success"><?php if (isset($_SESSION['msg'])) {
                                        echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);
                                    }
                                    ?>
    </div>
<div class="col-md-9 border border-primary form-control form-control-lg p-3 mb-2 bg-secondary text-white">
    <h2 class="text-center">THÊM NHÓM SẢN PHẨM</h2>
        <form class="form-control form-control-lg p-3 mb-2 bg-secondary text-white" method="POST" action="" enctype="multipart/form-data">
            <table class="table text-white">
                <tr>
                    <td><label for="inputCatName">Cat Name</label></td>
                    <td><input type="text" name="inputCatName" required></td>
                </tr>
                <tr>
                    <td><label for="input">Alias</label></td>
                    <td><input type="text" name=inputAlias></td>
                </tr>
                
                    <td><label for="inputStatus">Status</label></td>
                    <td>
                        <select name="inputStatus" id="inputStatus" required>
                            <option value="0">Ẩn</option>
                            <option value="1" selected>Hiện</option>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td><input class="btn btn-primary" type="submit" name="submit" value="Submit">
                        <input class="btn btn-primary" type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>