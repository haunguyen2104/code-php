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
  $cats=$data['cats'];
  $paging=$data['paging'];
?>
<a class="btn btn-primary" href="#" role="button">Link</a>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">SST</th>
      <th scope="col">Cat ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Status</th>
      <th scope="col">Trash</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $i=1;
    foreach($cats as $c) {
  ?>
    <tr>
      <th scope="row"><?php echo $i++ ?></th>
      <td><?php echo $c['catId'] ?></td>
      <td><?php echo $c['catName'] ?></td>
      <td><a href='<?php echo BASE_URL?>admincategory/categoryToggleStatus/<?php echo $c['catId']?>'><?php if ($c['status']==1) echo '<i class="fas fa-check-square text-success"></i>'; else echo '<i class="fas fa-times text-danger"></i>' ?></a></td> 
      <td><?php echo $c['trash'] ?></td>
      <td><a href="<?php echo BASE_URL?>admincategory/categoryToggleTrash/<?php echo $c['catId']?>" onclick='return confirm ("Bạn có chắc chắn muốn xóa nhóm sản phẩm này không?")'>Xóa</a>|<a href="<?php echo BASE_URL?>admincategory/updatecategory/<?php echo $c['catId']?>">Sửa</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php $paging->createLinks();?>