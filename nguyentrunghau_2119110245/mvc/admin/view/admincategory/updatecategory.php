
<?php
    $oldcat=$data['oldcat'];
?>
<div class="col-md-9">
    <h2>Update Category</h2>
    <div class="row btn-success">
    <?php if (isset($_SESSION['msg'])) 
    {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }?>
    </div>
    <div class="row">
        <form action="" method=post enctype='multipart/form-data'>
            <table>

                <tr>
                    <td class='col-md-3'><label for="">Category Name:</label></td>
                    <td class='col-md-9'><input type="text" name="inputCatName" require value='<?php echo $oldcat['catName']?>'></td>
                </tr>

                <tr>
                    <td class='col-md-3'><label for="">Alias</label></td>
                    <td class='col-md-9'><input type="text" name="inputAlias" value='<?php echo $oldcat['alias']?>'></td>
                </tr>

                <tr>
                    <td class='col-md-3'><label for="">Status</label></td>
                    <td class='col-md-9'>
                        <select name="inputStatus" >
                            <option value="1" <?php if($oldcat['status']==1) echo 'selected'?>>Hiện</option>
                            <option value="0" <?php if($oldcat['status']==0) echo 'selected'?>>Ẩn</option>
                        </select>
                    </td>
                </tr>

                
                <tr>
                    <td class='col-md-3'><label for="">Trash</label></td>
                    <td class='col-md-9'>
                        <select name="inputTrash" >
                            <option value="1" <?php if($oldcat['status']==1) echo 'selected'?>>Trash</option>
                            <option value="0" <?php if($oldcat['status']==0) echo 'selected'?>>Không</option>
                        </select>
                    </td>
                </tr>

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