<?php
$news = $data['news'];
$paging = $data['paging'];
$topic = $data['topic'];

?>

<div class="row">
          <div class="col alert alert-danger text-center"><?php echo $topic['topicName']?></div>
        <div class="row">
          <?php foreach($news as $new) {?>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body text-center alert alert-info">
              <img src="<?php echo BASE_URL;?>public/upload/<?php echo $new['image']; ?>" class="card-img-top" alt="hinhsp">
                <a href="<?php echo BASE_URL.'news/newsByDetail/'.$new['alias'] ?>" class="text-decoration-none"><h5 class="card-title"><?php echo $new['title']; ?></h5></a>
                
                <a href="<?php echo BASE_URL. 'news/newsByDetail/'.$new['alias'] ?>">Chi tiết</a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="row">
       <?php $paging->createLinks();?>
        </div>
        </div>
