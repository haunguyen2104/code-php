<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobile Shop</title>
  <link rel="stylesheet" href="<?php echo BASE_URL ?>public/css/bootstrap.min.css">
  <script src="<?php echo BASE_URL ?>public/js/popper.min.js"></script>
  <script src="<?php echo BASE_URL ?>public/js/bootstrap.min.js"></script>

  <script src="https://kit.fontawesome.com/fb3aa5052d.js" crossorigin="anonymous"></script>
</head>

<body>
  <header class="container bg-light">
    <div class="row">
      <div class="col-md-4"><a href="<?php echo BASE_URL ?>"><img src="<?php echo BASE_URL; ?>public/img/Phung_logo.png" alt="brand"></a></div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <?php if (isset($_SESSION['username'])) echo "Xin chào " . $_SESSION['username'] ?>
        <a class="btn-primary" href="<?php echo BASE_URL ?>auth/adminLogout"><button class='btn-primary'>Đăng xuất</button></a>
      </div>
    </div>

  </header>
  <div class="container my-5">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <h5 class="card-header">BẢNG ĐIỂU KHIỂN</h5>



          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Quản lý sản phẩm
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <a class="nav-link btn btn-success" href="<?php echo BASE_URL ?>adminproduct/addproduct/">Thêm sản phẩm</a>
                  <a class="nav-link btn btn-success" href="<?php echo BASE_URL ?>adminproduct/productlist/<?php echo LIMIT . '/0' ?>">Xem danh sách sản phẩm</a>
                  <a class="nav-link btn btn-success" href="<?php echo BASE_URL ?>adminproduct/productlistInTrash/<?php echo LIMIT . '/0' ?>">Xem thùng rác</a>
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
                  <a class="nav-link btn btn-success" href="<?php echo BASE_URL ?>admincategory/addcategory/">Thêm nhóm sản phẩm</a>
                  <a class="nav-link btn btn-success" href="<?php echo BASE_URL ?>admincategory/categorylist/<?php echo LIMIT . '/0' ?>">Xem danh sách nhóm sản phẩm</a>
                  <a class="nav-link btn btn-success" href="<?php echo BASE_URL ?>admincategory/categorylistInTrash">Xem thùng rác</a>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Quản lý liên kết
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <a class="nav-link btn btn-success" href="<?php echo BASE_URL ?>adminLink/addLink/">Thêm liên kết</a>
                  <a class="nav-link btn btn-success" href="<?php echo BASE_URL ?>adminLink/linkList/<?php echo LIMIT . '/0' ?>">Xem danh sách liên kết</a>
                  <a class="nav-link btn btn-success" href="<?php echo BASE_URL ?>adminLink/linkListInTrash/<?php echo LIMIT . '/0' ?>">Xem thùng rác</a>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Quản lý hình ảnh
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <a class="nav-link btn btn-success" href="<?php echo BASE_URL ?>adminImage/addImage/">Thêm hình ảnh</a>
                  <a class="nav-link btn btn-success" href="<?php echo BASE_URL ?>adminImage/imageList/<?php echo LIMIT . '/0' ?>">Xem danh sách hình ảnh</a>
                  <a class="nav-link btn btn-success" href="<?php echo BASE_URL ?>adminImage/imageListInTrash/<?php echo LIMIT . '/0' ?>">Xem thùng rác</a>
                </div>
              </div>
            </div>

            
          </div>

        </div>


      </div>
      <div class='col-md-9'>
        <?php require_once PATH_TO_ADMINVIEW . $view . ".php" ?>
      </div>
    </div>
  </div>
</body>
</html>