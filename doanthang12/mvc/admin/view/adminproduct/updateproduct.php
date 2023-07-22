<?php
$cats = $data['cats'];
$brands = $data['brands'];
$oldproduct = $data['oldproduct'];
?>
<div class="row btn-success"><?php if (isset($_SESSION['msg'])) {
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                }
                                ?>
</div>
<div id="formupdate" class="row border border-success form-control form-control-lg p-3 mb-2 bg-secondary text-white">
    <h1 class="text-center">CẬP NHẬT SẢN PHẨM</h1>
    <form class="form-control form-control-lg p-3 mb-2 bg-secondary text-white" method="POST" action=""
        enctype="multipart/form-data">
        <table class="table text-white ">
            <tr >
                <td class="col-md-3"><label for="inputProductName">Tên sản phẩm</label></td>
                <td ><input style="width: 370px;"id="inputtext" type="text" name=inputProductName required value="<?php echo $oldproduct['productName'] ?>">
                </td>
            </tr>
            <tr>
                <td class="col-md-3"><label for="input">Đường dẫn</label></td>
                <td ><input type="text" name=inputAlias style="width: 370px;" value="<?php echo $oldproduct['alias'] ?>"></td>
            </tr>
            <tr>
                <td class="col-md-3"><label for="inputCatId">Tên nhóm sản phẩm</label></td>
                <td><select name="inputCatId" id="inputCatId">
                        <?php foreach ($cats as $cat) { ?>
                        <option value="<?php echo $cat['catId'] ?>"
                            <?php if ($oldproduct['catId'] == $cat['catId']) echo "selected" ?>>
                            <?php echo $cat['catName'] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="col-md-3"><label for="inputBrandId">Tên thương hiệu</label></td>
                <td><select name="inputBrandId" id="inputBrandId">
                        <?php foreach ($brands as $brand) { ?>
                        <option value="<?php echo $brand['brandId'] ?>"
                            <?php if ($oldproduct['brandId'] == $brand['brandId']) echo "selected" ?>>
                            <?php echo $brand['brandName'] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="inputFileUpload">Hình ảnh</label></td>
                <td><input type="file" name="inputFileUpload">(Hình cũ: <?php echo $oldproduct['Image']; ?>)</td>
            </tr>
            <tr>
                <td><label for="inputStatus">Trạng thái</label></td>
                <td>
                    <select name="inputStatus" id="inputStatus" required>
                        <option value="0" <?php if ($oldproduct['status'] == 0) echo "selected" ?>>Ẩn</option>
                        <option value="1" selected <?php if ($oldproduct['status'] == 0) echo "selected" ?>>Hiện
                        </option>
                </td>
            </tr>
            <tr>
                <td><label for="inputTrash">Trash</label></td>
                <td>
                    <select name="inputTrash" id="inputTrash" required>
                        <option value="0" <?php if ($oldproduct['status'] == 0) echo "selected" ?>>Không</option>
                        <option value="1" <?php if ($oldproduct['status'] == 0) echo "selected" ?>>Trash</option>
                </td>
            </tr>
            </tr>
            <tr>
                <td><label for="inputDetail">Chi tiết sản phẩm</label></td>
                <td>
                    <textarea required name="inputDetail" id="inputDetail" cols="80"
                        rows="10" style="width: 680px;"><?php echo $oldproduct['detail'] ?></textarea>
                </td>
            </tr>
            <tr>
                <td><label for="inputPrice">Giá</label></td>
                <td><input type="number" name="inputPrice" step="0.01" max=3000 min=1
                        value="<?php echo $oldproduct['price'] ?>"></td>
            </tr>
            <tr>
                <td><label for="inputSalePrice">Giá khuyến mãi</label></td>
                <td><input type="number" name="inputSalePrice" step="0.01" max=3000 min=1
                        value="<?php echo $oldproduct['salePrice'] ?>" style=""></td>
            </tr>
            <tr>
                <td></td>
                <td id="btninput">
                    <input id="nutnhan" class="btn btn-outline-warning" type="submit" name="submit" value="Submit"
                        >

                    <input id="nutnhan" class="btn btn-outline-warning" type="reset" name="reset" value="Reset"
                        >
                </td>
            </tr>
        </table>
    </form>
</div>