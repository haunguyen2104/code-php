<?php 
    
    $pages=$data['pages'];
   
?>
<div class="my-3">
    
    <div class="form-control">
        <?php foreach($pages as $page) {?>
            <h2 class="col alert alert-danger text-center"><?php echo $page['title']; ?></h2>
        <div class="card-text"><?php echo nl2br($page['content']); ?></div>
    </div>
    <?php }?>
</div>