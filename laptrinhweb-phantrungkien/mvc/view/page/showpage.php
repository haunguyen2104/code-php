<?php
$pages = $data['pages'];
?>
<?php foreach ($pages as $page) { ?>
<div class="card-body">
  <h2 class="card-title"><?php echo $page['title'] ?></h2>
  <p class="card-text"><?php echo $page['content'] ?></p>
</div>
<?php } ?>