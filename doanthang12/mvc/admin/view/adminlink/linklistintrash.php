<div class="row button btn-warning">
<?php 
  if(!empty($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
?>
</div>

<?php 
$links = $data['links'];
$paging = $data['paging'];
?>
<div class="border border-primary form-control form-control-lg p-3 mb-2 bg-secondary text-white text-center">
<h1 class="text-center">THÙNG RÁC</h1>
<form class="form-control form-control-lg p-3 mb-2 bg-secondary text-white">
<table class="table text-white">
  <thead class="thead-light">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Mã liên kết</th>
      <th scope="col">Tiêu đê</th>
      <th scope="col">Vị trí</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Trash</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
  $i = 1;
  foreach ($links as $link) {?>
    <tr>
      <th scope="row"><?php echo $i++ ?></th>
      <td><?php echo $link['id'] ?></td>
      <td><?php echo $link['title'] ?></td>
      <td><?php echo $link['Position'] ?></td>
      <td><a href="<?php echo BASE_URL ?>adminLink/linkToggleStatus/<?php echo $link['id'] ?>" ><?php if ($link['status']) echo '<i class="fas fa-check text-info"></i>';else echo '<i class="fas fa-times text-danger"></i>' ?></a></td> 
      
      <td><?php echo $link['trash'] ?></td>
      <td><a class="text-warning" href="<?php echo BASE_URL ?>adminLink/linkDelete/<?php echo $link['id'] ?>" onclick="return confirm('Bạn có chắc chắn xóa vĩnh viễn hình ảnh này không?');">Xóa vĩnh viễn|</a><a class="text-light" href="<?php echo BASE_URL.'adminLink/linkToggleTrash/'.$link['id'] ?>">|Khôi phục</a></td>
    </tr>
  <?php }?>
  </tbody>
</table>
</form>
<?php 
  $paging->createLinks(); 
?>
</div>