<?php 
    $imgs = $data['imgs'];
    $oldimg = $data['oldimg'];
?>
<div class="row btn-success"><?php if(isset($_SESSION['msg']))
        {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        </div>
<div class="col-md-9 border border-primary form-control form-control-lg p-3 mb-2 bg-secondary text-white">
    <h2 class="text-center">CẬP NHẬT HÌNH ẢNH</h2>
        <form class="form-control form-control-lg p-3 mb-2 bg-secondary text-white" method="POST" action="" enctype="multipart/form-data">
        <table class="table text-white">
        <tr>
                <td class="col-md-3"><label for = "inputTitle">Tiêu đề hình ảnh</label></td>
                <td><input type="text" name=inputTitle required value="<?php echo $oldimg['title'] ?>"></td>
            </tr>
            <tr>
                <td><label for="inputFileUpload">Hình ảnh</label></td>
                <td><input type="file" name="inputFileUpload">(Hình cũ: <?php echo $oldimg['image']; ?>)</td>
            </tr>
            <tr>
                    <td><label for = "inputStatus">Status</label></td>
                    <td>
                        <select name="inputStatus" id="inputStatus" required>
                            <option value="0" <?php if($oldimg['status']==0) echo "selected"?> >Ẩn</option>
                            <option value="1" <?php if($oldimg['status']==0) echo "selected"?> >Hiện</option>
                    </td>
            </tr>
            <tr>
                <tr>
                    <td><label for = "inputTrash">Trash</label></td>
                    <td>
                        <select name="inputTrash" id="inputTrash" required>
                            <option value="0" <?php if($oldimg['status']==0) echo "selected"?> >Không</option>
                            <option value="1" <?php if($oldimg['status']==0) echo "selected"?> >Trash</option>
                    </td>
                </tr>
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