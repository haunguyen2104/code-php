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
  $images=$data['images'];
  $paging=$data['paging'];
?>
<a class="btn btn-primary" href="#" role="button">Link</a>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">SST</th>
            <th scope="col">ID</th>
            <th scope="col">image</th>
            <th scope="col">Status</th>
            <th scope="col">Trash</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
    $i=1;
    foreach($images as $p) {
  ?>
        <tr>
            <th scope="row"><?php echo $i++ ?></th>
            <td><?php echo $p['id'] ?></td>
            <td><?php echo $p['image'] ?></td>
            <td><a
                    href='<?php echo BASE_URL?>adminimage/imageToggleStatus/<?php echo $p['id']?>'><?php if ($p['status']==1) echo '<i class="fas fa-check-square text-success"></i>'; else echo '<i class="fas fa-times text-danger"></i>' ?></a>
            </td>
            <td><?php echo $p['trash'] ?></td>
            <td><a href="<?php echo BASE_URL?>adminimage/imageDelete/<?php echo $p['id']?>"
                    onclick='return confirm ("Bạn có chắc chắn muốn xóa hình ảnh này vĩnh viễn không?")'>Xóa vĩnh
                    viễn</a>|<a href="<?php echo BASE_URL?>adminimage/imageToggleTrash/<?php echo $p['id']?>">Khôi
                    phục</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php $paging->createLinks();?>