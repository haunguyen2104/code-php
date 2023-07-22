<?php 
  $posts = $data['posts'];
  $paging = $data['paging'];
  
?>

<div class = "container">
  <div class="row">
    <?php foreach($posts as $post){?>
  
          <div class="col-md-3">
            <div class="card">
              <img src="<?php echo BASE_URL;?>public/upload/<?php echo $post['image'] ?>" class="card-img-top" alt="hinhsp">
              <div class="card-body text-center alert alert-info">
                <a href="<?php echo BASE_URL.'post/postDetail/'.$post['alias'] ?>"  class = 'text-decoration-none'><h2><?php echo $post['title']?></h2></a>
                <div >
                <p>--------------------------</p>
                  <p class="text-primary "><?php echo $post['alias'] ?></p>
                  </div>
                  <a href="<?php echo BASE_URL.'post/postDetail/'.$post['alias'] ?>" class="btn btn-primary">Xem Thêm</a>
              </div>
            </div>
          </div>
            
            <?php } ?>
            </div>
            <div class="row">
            <?php $paging->createLinks(); ?>
            </div>
  </div>