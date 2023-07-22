<?php

$oldimage=$data['oldimage'];
?>

<div class=col-md-9>
    <h2>UPDATE IMAGE</h2>
    <div class="row btn-success">
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    </div>
    <div class=row>
        <form action="" method=post enctype='multipart/form-data'>
        
        <table>
            <tr>
                <td class=col-md-3><label>Image ID</label></td>
                <td><input type='text' name=inputid  value='<?php echo $oldimage['id']?>'></td>
            </tr>

            <tr>
                <td class=col-md-3><label>Title</label></td>
                <td><input type='text' name=inputtitle required value='<?php echo $oldimage['title']?>'></td>
            </tr>
            <tr>
                <td class=col-md-3><label>Image</label></td>
                <td><input type='text'  name=inputimage required value='<?php echo $oldimage['image']?>'></td>
            </tr>
            <tr>
                <td class=col-md-3><label>Image Name</label></td>
                <td><input type='text'  name=inputimageName required value='<?php echo $oldimage['imageName']?>'></td>
            </tr>

            <tr>
                <td class=col-md-3><label>Position</label></td>
                <td><input type='text'  name=inputposition required value='<?php echo $oldimage['position']?>'></td>
            </tr>


            <tr>
                <td class=col-md-3><label>Status</label></td>
                <td>
                    <select name="inputStatus">
                        <option value="0" <?php if($oldimage['status']==0)    echo "selected"?>>Ẩn</option>
                        <option value="1" <?php if($oldimage['status']==1)    echo "selected"?>>Hiện</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td class=col-md-3><label>Trash</label></td>
                <td>
                    <select name="inputTrash">
                        <option value="0" <?php if($oldimage['trash']==0)    echo "selected"?>>Không</option>
                        <option value="1" <?php if($oldimage['trash']==1)    echo "selected"?>>Trash</option>
                    </select>
                </td>
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