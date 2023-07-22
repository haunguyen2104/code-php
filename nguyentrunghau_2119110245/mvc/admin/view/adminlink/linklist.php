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
  $links=$data['links'];
  $paging=$data['paging'];
?>
<a class="btn btn-primary" href="#" role="button">Link</a>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">SST</th>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Position</th>
      <th scope="col">Order</th>
      <th scope="col">Link</th>
      <th scope="col">Status</th>
      <th scope="col">Trash</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $i=1;
    foreach($links as $p) {
  ?>
    <tr>
      <th scope="row"><?php echo $i++ ?></th>
      <td><?php echo $p['id'] ?></td>
      <td><?php echo $p['title'] ?></td>    
      <td><?php echo $p['Position'] ?></td>    
      <td><?php echo $p['order'] ?></td>    
      <td><?php echo $p['link'] ?></td>    
      <td><a href='<?php echo BASE_URL?>adminlink/linkToggleStatus/<?php echo $p['id']?>'><?php if ($p['status']==1) echo '<i class="fas fa-check-square text-success"></i>'; else echo '<i class="fas fa-times text-danger"></i>' ?></a></td> 
      <td><?php echo $p['trash'] ?></td>
      <td><a href="<?php echo BASE_URL?>adminlink/linkToggleTrash/<?php echo $p['id']?>" onclick='return confirm ("Bạn có chắc chắn muốn xóa liên kết này không?")'>Xóa</a>|<a href="<?php echo BASE_URL?>adminlink/updatelink/<?php echo $p['id']?>">Sửa</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php $paging->createLinks();?>
