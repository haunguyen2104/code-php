<?php
$imagemodel = new ImageModel;
$images = $imagemodel->getAll(['trash' => 0, 'status' => 1, 'position' => 1]);

?>


<div class="container">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="<?php echo BASE_URL . 'public/img/' . $images[0]['image']; ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <?php unset($images[0]); ?>
      <?php foreach ($images as $image) { ?>
        <div class="carousel-item">
          <img src="<?php echo BASE_URL . 'public/img/' . $image['image']; ?>" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="my-3 mx-4 col-md-3 ">
        <nav class="navbar navbar-expand-lg navbar-light ">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="btn btn-primary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Xem sản phẩm theo giá
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  
                  <li><a class="dropdown-item" href="<?php echo BASE_URL ?>product/productByPriceUp/<?php echo LIMIT.'/0' ?>">Thấp đến cao</a></li>
                  <li><a class="dropdown-item" href="<?php echo BASE_URL ?>product/productByPriceDown/<?php echo LIMIT.'/0' ?>">Cao đến thấp</a></li>
                  </ul>
                </li>
              </ul>
        </nav>
        </div> 