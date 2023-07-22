<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AURORA STORE</title>
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/easy-responsive-tabs.css">

    <script src="<?php echo BASE_URL; ?>public/js/popper.min.js"></script>
    <script src="<?php echo BASE_URL; ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>public/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo BASE_URL; ?>public/js/jquery.countup.js"></script>
    <script src="<?php echo BASE_URL; ?>public/js/move-top.js"></script>
    <script src="<?php echo BASE_URL; ?>public/js/jquery.easing.min.js"></script>
    <script src="https://kit.fontawesome.com/c564314e0d.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="container bg-light">
    <div class="row">
        <div class="col-md-4"><img src="<?php echo BASE_URL ?>public/img/Kien_logo.jpg" style='width:120px;height:120px' alt="brand"></div>
        <div class="col-md-4"></div>
          <div class="col-md-4">
   
              <button class='btn-primary'>Đăng xuất</button>
          </div>
    </div>

</header>
<div class="container">
    <div class="row">
        <div class="col-md-3">
			    <div class="card">
                <h5 class="card-header">AURORA</h5>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              Quản lý sản phẩm
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <a class="nav-link btn btn-success" href="<?php echo BASE_URL?>/adminproduct/addproduct/">Thêm sản phẩm</a>
                            <a class="nav-link btn btn-success" href="<?php echo BASE_URL?>/adminproduct/productlist/<?php echo LIMIT.'/0'?>">Xem danh sách sản phẩm</a>
                            <a class="nav-link btn btn-success" href="<?php echo BASE_URL?>/adminproduct/productListInTrash/<?php echo LIMIT.'/0'?>">Xem thùng rác</a>
                            </div>
                          </div>
                       </div> 
                       <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="false" aria-controls="collapseTwo">
                              Quản lý nhóm sản phẩm
                            </button>
                          </h2>
                          <div id="collapsetwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <a class="nav-link btn btn-success" href="<?php echo BASE_URL?>/adminproduct/productAdd/">Thêm nhóm sản phẩm</a>
                            <a class="nav-link btn btn-success" href="<?php echo BASE_URL?>/adminproduct/productlist/<?php echo LIMIT.'/0'?>">Xem danh sách nhóm sản phẩm</a>
                            <a class="nav-link btn btn-success" href="<?php echo BASE_URL?>/adminproduct/productListInTrash/<?php echo LIMIT.'/0'?>">Xem thùng rác</a>
                            </div>
                          </div>
                       </div>                      
                  </div>
              </div>
        </div>
<div class='col-md-9'>
<?php require_once PATH_TO_ADMINVIEW .$view.".php"?>
</div>
    </div>
</div>


   <footer class="container-fluid row bg-dark">
   @copyright 2020
    </footer>



</body>
</html>