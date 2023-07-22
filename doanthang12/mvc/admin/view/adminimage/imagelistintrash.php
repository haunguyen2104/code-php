<div class="row button btn-warning">
<?php 
  if(!empty($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
?>
</div>

<?php 
$imgs = $data['imgs'];
$paging = $data['paging'];
?>
<div class="border border-primary form-control form-control-lg p-3 mb-2 bg-secondary text-white text-center">
<h1 class="text-center">THÙNG RÁC</h1>
<form class="form-control form-control-lg p-3 mb-2 bg-secondary text-white">
<table class="table text-white">
  <thead class="thead-light">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">ID</th>
      <th scope="col">Tiêu đê</th>
      <th scope="col">Position</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Trash</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
  $i = 1;
  foreach ($imgs as $img) {?>
    <tr>
      <th scope="row"><?php echo $i++ ?></th>
      <td><?php echo $img['id'] ?></td>
      <td><?php echo $img['title'] ?></td>
      <td><?php echo $img['position'] ?></td>
      <td><a href="<?php echo BASE_URL ?>adminimage/imageToggleStatus/<?php echo $img['id'] ?>" ><?php if ($img['status']) echo '<i class="fas fa-check text-info"></i>';else echo '<i class="fas fa-times text-danger"></i>' ?></a></td> 
      
      <td><?php echo $img['trash'] ?></td>
      <td><a class="text-warning" href="<?php echo BASE_URL ?>adminimage/imageDelete/<?php echo $img['id'] ?>" onclick="return confirm('Bạn có chắc chắn xóa vĩnh viễn hình ảnh này không?');">Xóa vĩnh viễn|</a><a class="text-light" href="<?php echo BASE_URL.'adminimage/imageToggleTrash/'.$img['id'] ?>">|Khôi phục</a></td>
    </tr>
  <?php }?>
  </tbody>
</table>
</form>
<?php 
  $paging->createLinks(); 
?>
</div>