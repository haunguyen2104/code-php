<?php
$news = $data['currentNews'];
$newss=$data['sameNews'];
?>


<div class="row my-3">
  <div class="form-control">
    <div class="col alert alert-danger text-center"><h5 ><?php echo $news['title']; ?></h5></div>
    <img src="<?php echo BASE_URL;?>public/upload/<?php echo $news['image'] ?>" class="img-fluid img-thumbnail" alt="hinhsp">
    <div class="row mx-3"><?php echo $news['content']; ?></div>
  </div>
  <div class="col alert alert-danger text-center"><h5>Tin cùng chủ đề</h5></div>
  <div class="row">
          <?php foreach($newss as $news) {?>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body text-center alert alert-info">
              <img src="<?php echo BASE_URL;?>public/upload/<?php echo $news['image']; ?>" class="card-img-top" alt="hinhsp">
                <a href="<?php echo BASE_URL.'news/newsByDetail/'.$news['alias'] ?>" class="text-decoration-none"><h5 class="card-title"><?php echo $news['title']; ?></h5></a>
                
                <a href="<?php echo BASE_URL. 'news/newsByDetail/'.$news['alias'] ?>">Chi tiết</a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
</div>