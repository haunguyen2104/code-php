<div class="row button btn-warning">
<?php 
  if(!empty($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
?>
</div>

<?php 
$cats = $data['cats'];
$paging = $data['paging'];
?>
<div class="border border-primary form-control form-control-lg p-3 mb-2 bg-secondary text-white text-center">
<h1>XEM DANH SÁCH NHÓM SẢN PHẨM</h1>
<form class="form-control form-control-lg p-3 mb-2 bg-secondary text-white">
<table class="table text-white">
  <thead class="thead-light ">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">CatId</th>
      <th scope="col">CatName</th>
      <th scope="col">Status</th>
      <th scope="col">Trash</th> 
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  </div>
  <?php
  $i = 1;
  foreach ($cats as $cat) {?>
    <tr>
      <th scope="row"><?php echo $i++ ?></th>
      <td><?php echo $cat['catId'] ?></td>
      <td><?php echo $cat['catName'] ?></td>
      <td><a href="<?php echo BASE_URL ?>admincategory/categoryToggleStatus/<?php echo $cat['catId'] ?>" ><?php if ($cat['status']) echo '<i class="fas fa-check text-info"></i>';else echo '<i class="fas fa-times text-danger"></i>' ?></a></td> 
      <td><?php echo $cat['trash'] ?></td>
      <td><a class="text-danger"  href="<?php echo BASE_URL ?>admincategory/categoryToggleTrash/<?php echo $cat['catId'] ?>" onclick="return confirm('Bạn có chắc chắn xóa sản phẩm này không?');">Xóa|</a><a class="text-warning" href="<?php echo BASE_URL.'admincategory/updatecategory/'.$cat['catId'] ?>">|Sửa</a></td>
    </tr>
  <?php }?>
  </tbody>
</table>
</form>
<?php 
  $paging->createLinks(); 
?>
  