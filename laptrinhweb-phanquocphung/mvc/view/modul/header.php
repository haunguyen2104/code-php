<?php
$brandmodel = new BrandModel;
$brands = $brandmodel->getAll(['trash' => 0, 'status' => 1]);
$catmodel = new CategoryModel;
$cats = $catmodel->getAll(['trash' => 0, 'status' => 1]);
$linkmodel = new LinkModel;
$links = $linkmodel->getAll(['trash' => 0, 'status' => 1, 'position' => 'globalnav']);
$pagemodel = new PageModel;
$pages = $pagemodel->getAll(['trash' => 0, 'status' => 1]);
$postmodel = new PostModel;
$post = $postmodel->getAll(['trash' => 0, 'status' => 1]);
$usmodel = new UsModel;
$us = $usmodel->getAll(['trash' => 0, 'status' => 1]);
$topicmodel = new TopicModel;
$topics = $topicmodel->getAll(['trash' => 0, 'status' => 1]);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobile Shop</title>
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css">
  <script src="<?php echo BASE_URL; ?>public/js/popper.min.js"></script>
  <script src="<?php echo BASE_URL; ?>public/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a08d068640.js" crossorigin="anonymous"></script>

  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="LtOL7GFl"></script>
</head>

<body>
  <header class="container">
    <div class="row">
      <div class="col-md-3"><a class="navbar-brand" href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/img/Phung_logo.png" alt="brand"></a></div>
      <div class="col-md-3">


        <form class="d-flex my-2" method="POST" action="<?php echo BASE_URL ?>product/productSearch/<?php echo LIMIT . '/0' ?>">
          <input class="form-control me-2" type="search" name=searchKey placeholder="Search" aria-label="Search">
          <button type="submit" class="btn btn-outline-success">Search</button>
        </form>

      </div>
      <div class="col-md-3">
        <span data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fas fa-shopping-cart my-2 fs-3" id="carticon"></i>
          <?php
          $cart = new Cart;
          if ($cart->getCount() != 0) echo '(' . $cart->getCount() . ')';
          ?>
        </span>
      </div>
      <div class="col-md-3 my-2">
        <?php if (isset($_SESSION['username'])) {
          echo "Xin chào " . $_SESSION['username'] ?>


          <a class="btn-primary" href="<?php echo BASE_URL ?>auth/adminLogout"><button class='btn-primary fs-5'>Đăng xuất</button></a>
        <?php } else { ?>
          <a class="btn btn-primary my-2 fs-5" href="<?php echo BASE_URL; ?>auth/adminLogin/">Đăng nhập</a>
        <?php } ?>
      </div>

      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo BASE_URL; ?>">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sản phẩm
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php foreach ($cats as $cat) { ?>
                      <li><a class="dropdown-item" href="<?php echo BASE_URL ?>product/productByCat/<?php echo $cat['alias'] . '/' . LIMIT . '/0' ?>/"> <?php echo $cat['catName'] ?> </a></li>
                    <?php } ?>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Thương Hiệu
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php foreach ($brands as $brand) { ?>
                      <li><a class="dropdown-item" href="<?php echo BASE_URL ?>product/productByBrand/<?php echo $brand['alias'] . '/' . LIMIT . '/0' ?>/"><?php echo $brand['brandName'] ?></a></li>
                    <?php } ?>
                  </ul>
                </li>


                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tin tức theo chủ đề
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php foreach ($topics as $topic) { ?>
                      <li><a class="dropdown-item" href="<?php echo BASE_URL ?>news/newsbybrand/<?php echo $topic['alias'] . '/' . LIMIT . '/0' ?>/"><?php echo $topic['topicName'] ?></a></li>
                    <?php } ?>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Về chúng tôi
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php foreach ($us as $u) { ?>
                      <li><a class="dropdown-item" href="<?php echo BASE_URL ?>us/showus/<?php echo $u['usId'] ?>"><?php echo $u['title'] ?></a></li>
                    <?php } ?>
                  </ul>
                </li>

              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

  </header>