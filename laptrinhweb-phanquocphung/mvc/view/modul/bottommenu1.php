<?php
    $pagemodel = new PageModel;
    $pages=$pagemodel->getAll(["trash"=>0,"status"=>1]);
?>

<div class="col-md-3 p-5 ">
    <?php 
    foreach ($pages as $page){?>
    <a href="<?php echo BASE_URL."page/showPage/".$page['pageId']?>" class="text-decoration-none"><?php echo $page['title']?></a><br>
    <?php }?>
</div>

