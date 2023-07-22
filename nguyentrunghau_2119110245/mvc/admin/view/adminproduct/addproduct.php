
<?php
    $cats=$data['cats'];
    $brands=$data['brands'];
?>
<div class="col-md-9">
    <h2>Add Product</h2>
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
                    <td class='col-md-3'><label for="">Product Name:</label></td>
                    <td class='col-md-9'><input type="text" name="inputProductName" require></td>
                </tr>

                <tr>
                    <td class='col-md-3'><label for="">Alias</label></td>
                    <td class='col-md-9'><input type="text" name="inputAlias"></td>
                </tr>

                <tr>
                    <td class='col-md-3'><label for="">Category Name</label></td>
                    <td class='col-md-9'>
                        <select name="inputCatId">
                            <?php foreach($cats as $cat) { ?>
                            <option value="<?php echo $cat['catId']?>">
                                <?php echo $cat['catName']?>
                            </option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class='col-md-3'><label for=""></label></td>
                    <td class='col-md-9'>
                        <select name="inputBrandId">
                            <?php foreach($brands as $brand) { ?>
                            <option value="<?php echo $brand['brandId']?>">
                                <?php echo $brand['brandName']?>
                            </option>

                            <?php }?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class='col-md-3'><label for="">Detail (Chi tiết)</label></td>
                    <td>
                        <textarea name="inputDetail" cols="80" rows="10" require></textarea>
                    </td>
                </tr>

                <tr>
                    <td class='col-md-3'><label for="">Price</label></td>
                    <td class='col-md-9'><input type="number" name="inputPrice" max=100000000 min=10000 step=1000></td>
                </tr>

                <tr>
                    <td class='col-md-3'><label for="">Sale Price</label></td>
                    <td class='col-md-9'><input type="number" name="inputSalePrice" max=100000000 min=10000 step=1000>
                    </td>
                </tr>

                <tr>
                    <td class='col-md-3'><label for="">Image</label></td>
                    <td class='col-md-9'><input type="file" name="inputFileUpload"></td>
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