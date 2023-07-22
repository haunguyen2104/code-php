<div class='row button btn-warning'>
  <?php
    if(!empty($_SESSION['msg']))
    {
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
  ?>
</div>
<?php
  $products=$data['products'];
  $paging=$data['paging'];
?>
<a class="btn btn-primary" href="#" role="button">Link</a>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">SST</th>
      <th scope="col">ProductID</th>
      <th scope="col">productName</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
      <th scope="col">Trash</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $i=1;
    foreach($products as $p) {
  ?>
    <tr>
      <th scope="row"><?php echo $i++ ?></th>
      <td class='text-center'><?php echo $p['productId'] ?></td>
      <td><?php echo $p['productName'] ?></td>
      <td><?php echo number_format($p['price'],0) ?></td>     
      <td><a href='<?php echo BASE_URL?>adminproduct/productToggleStatus/<?php echo $p['productId']?>'><?php if ($p['status']==1) echo '<i class="fas fa-check-square text-success"></i>'; else echo '<i class="fas fa-times text-danger"></i>' ?></a></td> 
      <td><?php echo $p['trash'] ?></td>
      <td><a href="<?php echo BASE_URL?>adminproduct/productToggleTrash/<?php echo $p['productId']?>" onclick='return confirm ("Bạn có chắc chắn muốn xóa sản phẩm này không?")'>Xóa</a>|<a href="<?php echo BASE_URL?>adminproduct/updateproduct/<?php echo $p['productId']?>">Sửa</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php $paging->createLinks();?>