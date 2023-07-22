<div class="row button btn-warning">
    <?php 
  if(!empty($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
?>
</div>

<?php 
$products = $data['products'];
$paging = $data['paging'];
?>
<div class="border border-primary form-control form-control-lg p-3 mb-2 bg-secondary text-white text-center">
    <h1 >XEM DANH SÁCH SẢN PHẨM</h1>
    <form class="form-control form-control-lg p-3 mb-2 bg-secondary text-white">
        <table class="table text-white ">
            <thead class="thead-light" >
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Mã sản phẩm</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Trash</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody  >

                <?php
  $i = 1;
  foreach ($products as $p) {?>
                <tr>
                    <th scope="row"><?php echo $i++ ?></th>
                    <td><?php echo $p['productId'] ?></td>
                    <td style="text-align:left;"><?php echo $p['productName'] ?></td>
                    <td><a
                            href="<?php echo BASE_URL ?>adminproduct/productToggleStatus/<?php echo $p['productId'] ?>"><?php if ($p['status']) echo '<i class="fas fa-check text-info"></i>';else echo '<i class="fas fa-times text-danger"></i>' ?></a>
                    </td>
                    <td><?php echo $p['price'] ?></td>

                    <td><?php echo $p['trash'] ?></td>

                    <td><a class="text-danger"
                            href="<?php echo BASE_URL ?>adminproduct/productToggleTrash/<?php echo $p['productId'] ?>"
                            onclick="return confirm('Bạn có chắc chắn xóa sản phẩm này không?');">Xóa|</a><a
                            class="text-warning"
                            href="<?php echo BASE_URL.'adminproduct/updateproduct/'.$p['productId'] ?>">|Sửa</a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </form>

    <?php 
  $paging->createLinks(); 
?>

</div>