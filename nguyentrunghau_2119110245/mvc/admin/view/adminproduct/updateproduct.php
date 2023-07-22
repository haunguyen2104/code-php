
<?php
    $cats=$data['cats'];
    $brands=$data['brands'];
    $oldproduct=$data['oldproduct'];
?>
<div class="col-md-9">
    <h2>Update Product</h2>
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
                    <td class='col-md-9'><input type="text" name="inputProductName" require value='<?php echo $oldproduct['productName']?>'></td>
                </tr>

                <tr>
                    <td class='col-md-3'><label for="">Alias</label></td>
                    <td class='col-md-9'><input type="text" name="inputAlias" value='<?php echo $oldproduct['alias']?>'></td>
                </tr>

                <tr>
                    <td class='col-md-3'><label for="">Category Name</label></td>
                    <td class='col-md-9'>
                        <select name="inputCatId">
                            <?php foreach($cats as $cat) { ?>
                            <option value="<?php echo $cat['catId']?>"<?php if($oldproduct['catId']==$cat['catId']) echo 'selected'?>>
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
                            <option value="<?php echo $brand['brandId']?>" <?php if($oldproduct['brandId']==$brand['brandId']) echo 'selected'?>>
                                <?php echo $brand['brandName']?>
                            </option>

                            <?php }?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class='col-md-3'><label for="">Detail (Chi tiết)</label></td>
                    <td>
                        <textarea name="inputDetail" require  cols="80" rows="10" ><?php echo $oldproduct['detail']?></textarea>
                    </td>
                </tr>

                <tr>
                    <td class='col-md-3'><label for="">Price</label></td>
                    <td class='col-md-9'><input type="number" name="inputPrice" max=100000000 min=10000 step=1000 value='<?php echo $oldproduct['price']?>'></td>
                </tr>

                <tr>
                    <td class='col-md-3'><label for="">Sale Price</label></td>
                    <td class='col-md-9'><input type="number" name="inputSalePrice" max=100000000 min=10000 step=1000 value='<?php echo $oldproduct['salePrice']?>'>
                    </td>
                </tr>

                <tr>
                    <td class='col-md-3'><label for="">Image</label></td>
                    <td class='col-md-9'><input type="file" name="inputFileUpload">(</t>Hình cũ: <?php echo $oldproduct['Image']?>)</td>
                </tr>

                <tr>
                    <td class='col-md-3'><label for="">Status</label></td>
                    <td class='col-md-9'>
                        <select name="inputStatus" >
                            <option value="1" <?php if($oldproduct['status']==1) echo 'selected'?>>Hiện</option>
                            <option value="0" <?php if($oldproduct['status']==0) echo 'selected'?>>Ẩn</option>
                        </select>
                    </td>
                </tr>

                
                <tr>
                    <td class='col-md-3'><label for="">Trash</label></td>
                    <td class='col-md-9'>
                        <select name="inputTrash" >
                            <option value="1" <?php if($oldproduct['status']==1) echo 'selected'?>>Trash</option>
                            <option value="0" <?php if($oldproduct['status']==0) echo 'selected'?>>Không</option>
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