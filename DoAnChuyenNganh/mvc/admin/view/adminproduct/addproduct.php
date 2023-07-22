<?php
$cats = $data['cats'];
$brands = $data['brands'];
?>

<div class="col-md-9 border border-primary form-control form-control-lg p-3 mb-2 bg-secondary text-white">
    <h1 class="text-center">THÊM SẢN PHẨM</h1>
    <div class="row btn-success"><?php if (isset($_SESSION['msg'])) {
                                        echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);
                                    }
                                    ?>
    </div>
    <form class="form-control form-control-lg p-3 mb-2 bg-secondary text-white" method="POST" action=""
        enctype="multipart/form-data">
        <table class="table text-white">
            <tr>
                <td class="col-md-3"><label for="inputProductName">Tên sản phẩm</label></td>
                <td><input type="text" name=inputProductName required></td>
            </tr>
            <tr>
                <td><label for="input">Đường dẫn</label></td>
                <td><input type="text" name=inputAlias></td>
            </tr>
            <tr>
                <td><label for="inputCatId">Nhóm sản phẩm</label></td>
                <td><select name="inputCatId" id="inputCatId">
                        <?php foreach ($cats as $cat) { ?>
                        <option value="<?php echo $cat['catId'] ?>"><?php echo $cat['catName'] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="inputBrandId">Tên thương hiệu</label></td>
                <td><select name="inputBrandId" id="inputBrandId">
                        <?php foreach ($brands as $brand) { ?>
                        <option value="<?php echo $brand['brandId'] ?>"><?php echo $brand['brandName'] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="inputFileUpload">Hình ảnh</label></td>
                <td><input type="file" name="inputFileUpload"></td>
            </tr>
            <tr>
                <td><label for="inputStatus">Trạng thái</label></td>
                <td>
                    <select name="inputStatus" id="inputStatus" required>
                        <option value="0">Ẩn</option>
                        <option value="1" selected>Hiện</option>
                </td>
            </tr>
            </tr>
            <tr>
                <td><label for="inputDetail">Chi tiết sản phẩm</label></td>
                <td>
                    <textarea required name="inputDetail" id="inputDetail" cols="50" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td><label for="inputPrice">Giá</label></td>
                <td><input type="number" name="inputPrice" step="0.01" max=3000 min=1></td>
            </tr>
            <tr>
                <td><label for="inputSalePrice">Giá khuyến mãi</label></td>
                <td><input type="number" name="inputSalePrice" step="0.01" max=3000 min=1>$</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align:center;">
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