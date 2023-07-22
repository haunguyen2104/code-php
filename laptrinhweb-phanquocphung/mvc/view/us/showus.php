<?php 
    
    $us=$data['us'];

?>
<div>
    <div class="form-control">
        <?php foreach($us as $u) {?>
            <h2 class="col alert alert-danger text-center"><?php echo $u['title']; ?></h2>
            <div class="card-text"><?php echo nl2br($u['content']); ?></div>
    </div>
    <?php }?>
</div>