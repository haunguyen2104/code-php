<?php 
    
    $linkmodel = new LinkModel;
    $links=$linkmodel->getAll(["trash"=>0,"status"=>1]);

?>
<div class="my-3">
    
    <div class="form-control">
        <?php foreach($links as $link) {?>
            <a href="<?php echo $link['link']?>" class="text-decoration-none"><?php echo $link['title']?></a>
        
    </div>
    <?php }?>
</div> 