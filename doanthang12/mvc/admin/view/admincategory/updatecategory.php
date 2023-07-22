<?php 
    $cats = $data['cats'];
    $oldcat = $data['oldcat'];
?>
<div class="row btn-success"><?php if(isset($_SESSION['msg']))
        {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
</div>
<div class="col-md-9 border border-primary form-control form-control-lg p-3 mb-2 bg-secondary text-white">
    <h2 class="text-center">CẬP NHẬT NHÓM SẢN PHẨM</h2>
    <form class="form-control form-control-lg p-3 mb-2 bg-secondary text-white" method="POST" action=""
        enctype="multipart/form-data">
        <table class="table text-white">
            <tr>
                <td class="col-md-3"><label for="inputCatName">CatName</label></td>
                <td><input type="text" name=inputCatName required value="<?php echo $oldcat['catName'] ?>"></td>
            </tr>
            <tr>
                <td><label for="input">Alias</label></td>
                <td><input type="text" name=inputAlias value="<?php echo $oldcat['alias'] ?>"></td>
            </tr>
            <tr>
                <td><label for="inputStatus">Status</label></td>
                <td>
                    <select name="inputStatus" id="inputStatus" required>
                        <option value="0" <?php if($oldcat['status']==0) echo "selected"?>>Ẩn</option>
                        <option value="1" <?php if($oldcat['status']==0) echo "selected"?>>Hiện</option>
                </td>
            </tr>
            <tr>
            <tr>
                <td><label for="inputTrash">Trash</label></td>
                <td>
                    <select name="inputTrash" id="inputTrash" required>
                        <option value="0" <?php if($oldcat['status']==0) echo "selected"?>>Không</option>
                        <option value="1" <?php if($oldcat['status']==0) echo "selected"?>>Trash</option>
                </td>
            </tr>
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