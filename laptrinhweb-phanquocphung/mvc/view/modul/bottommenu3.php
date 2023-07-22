<?php
    $socialmodel = new SocialModel;
    $socials=$socialmodel->getAll(["trash"=>0,"status"=>1]);
?>

<div class="col-md-2 p-5 ">
    <?php 
    foreach ($socials as $social){?>
    <a href="<?php echo $social['link']?>" class="text-decoration-none"><?php echo $social['image']?></a>
    <?php }?>
</div>
