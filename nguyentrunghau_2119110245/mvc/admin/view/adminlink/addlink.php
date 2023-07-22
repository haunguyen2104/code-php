
<?php
    
    ?>
    <div class="col-md-9">
        <h2>Add Link</h2>
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
                        <td class='col-md-3'><label for="">Title:</label></td>
                        <td class='col-md-9'><input type="text" name="inputtitle" require></td>
                    </tr>
    
                    <tr>
                        <td class='col-md-3'><label for="">Image:</label></td>
                        <td class='col-md-9'><input type="text" name="inputImage"></td>
                    </tr>
                    <tr>
                        <td class='col-md-3'><label for="">Link:</label></td>
                        <td class='col-md-9'><input type="text" name="inputlink"></td>
                    </tr>
                    <tr>
                        <td class='col-md-3'><label for="">Order:</label></td>
                        <td class='col-md-9'><input type="text" name="inputorder"></td>
                    </tr>
                    <tr>
                        <td class='col-md-3'><label for="">Position:</label></td>
                        <td class='col-md-9'><input type="text" name="inputPosition"></td>
                    </tr>
    
                    <tr>
                        <td class='col-md-3'><label for="">Status</label></td>
                        <td class='col-md-9'>
                            <select name="inputStatus" id="">
                                <option value="1">Hiện</option>
                                <option value="0">Ẩn</option>
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