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
<h1>XEM DANH SÁCH LIÊN KẾT</h1>
<form class="form-control form-control-lg p-3 mb-2 bg-secondary text-white">
<table class="table text-white ">
  <thead class="thead-light">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Mã Link</th>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Vị trí</th>
      <th scope="col">Orders</th>
      <th scope="col">Trạng thái</th>
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
      
      <td><?php echo $link['order'] ?></td>
      <td><a href="<?php echo BASE_URL ?>adminlink/linkToggleStatus/<?php echo $link['id'] ?>" ><?php if ($link['status']) echo '<i class="fas fa-check text-info"></i>';else echo '<i class="fas fa-times text-danger"></i>' ?></a></td> 
      <td><a class="text-danger" href="<?php echo BASE_URL ?>adminlink/linkToggleTrash/<?php echo $link['id'] ?>" onclick="return confirm('Bạn có chắc chắn xóa liên kết này không?');">Xóa|</a><a class="text-warning" href="<?php echo BASE_URL.'adminlink/updatelink/'.$link['id'] ?>">|Sửa</a></td>
    </tr>
  <?php }?>
  </tbody>
</table>
</form>

<?php 
  $paging->createLinks(); 
?>

</div>
