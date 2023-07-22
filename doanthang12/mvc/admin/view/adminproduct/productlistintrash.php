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
<h1 class="text-center">THÙNG RÁC</h1>
<form class="form-control form-control-lg p-3 mb-2 bg-secondary text-white">
<table class="table text-white">
  <thead class="thead-light">
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
  <tbody>
  
  <?php
  $i = 1;
  foreach ($products as $p) {?>
    <tr>
      <th scope="row"><?php echo $i++ ?></th>
      <td><?php echo $p['productId'] ?></td>
      <td><?php echo $p['productName'] ?></td>
      <td><a href="<?php echo BASE_URL ?>adminproduct/productToggleStatus/<?php echo $p['productId'] ?>" ><?php if ($p['status']) echo '<i class="fas fa-check text-info"></i>';else echo '<i class="fas fa-times text-danger"></i>' ?></a></td> 
      <td><?php echo $p['price'] ?></td>
      <td><?php echo $p['trash'] ?></td>
      <td><a class="text-warning" href="<?php echo BASE_URL ?>adminproduct/productDelete/<?php echo $p['productId'] ?>" onclick="return confirm('Bạn có chắc chắn xóa vĩnh viễn sản phẩm này không?');">Xóa vĩnh viễn|</a><a class="text-light" href="<?php echo BASE_URL.'adminproduct/productToggleTrash/'.$p['productId'] ?>">|Khôi phục</a></td>
    </tr>
  <?php }?>
  </tbody>
</table>
</form>
<?php 
  $paging->createLinks(); 
?>
</div>