<?php

$oldlink=$data['oldlink'];
?>

<div class=col-md-9>
    <h2>UPDATE LINK</h2>
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
                <td class=col-md-3><label>Title</label></td>
                <td><input type='text' name=inputtitle required value='<?php echo $oldlink['title']?>'></td>
            </tr>
            <tr>
                <td class=col-md-3><label>Position</label></td>
                <td><input type='text'  name=inputposition required value='<?php echo $oldlink['Position']?>'></td>
            </tr>
            <tr>
                <td class=col-md-3><label>Orders</label></td>
                <td><input type='text'  name=inputorder required value='<?php echo $oldlink['order']?>'></td>
            </tr>
            <tr>
                <td class=col-md-3><label>Link</label></td>
                <td><input type='text'  name=inputlink required value='<?php echo $oldlink['link']?>'></td>
            </tr>
           


            <tr>
                <td class=col-md-3><label>Status</label></td>
                <td>
                    <select name="inputStatus">
                        <option value="0" <?php if($oldlink['status']==0)    echo "selected"?>>Ẩn</option>
                        <option value="1" <?php if($oldlink['status']==1)    echo "selected"?>>Hiện</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td class=col-md-3><label>Trash</label></td>
                <td>
                    <select name="inputTrash">
                        <option value="0" <?php if($oldlink['trash']==0)    echo "selected"?>>Không</option>
                        <option value="1" <?php if($oldlink['trash']==1)    echo "selected"?>>Trash</option>
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