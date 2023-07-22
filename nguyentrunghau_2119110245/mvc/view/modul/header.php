<?php
    $brandmodel = new BrandModel;
    $brands=$brandmodel->getAll(['trash'=>0,'status'=>1]);

    $catmodel = new CategoryModel;
    $cats=$catmodel->getAll(['trash'=>0,'status'=>1]);

    $linkmodel = new LinkModel;
    $links=$linkmodel->getAll(['trash'=>0,'status'=>1,'position'=>'globalnav']);
?>
	
  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Electronic Store</title>
        <link rel="stylesheet" href="<?php echo BASE_URL ?>public/css/bootstrap.min.css">
        <script src="<?php echo BASE_URL ?>public/js/popper.min.js"></script>
        <script src="<?php echo BASE_URL ?>public/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/3bda6caee1.js" crossorigin="anonymous"></script>


      </head>
    <body>
        <header class="container">
            <div class="row">
                <div class="col-md-4">
                  <a href="<?php echo BASE_URL?>">
                    <img src="<?php echo BASE_URL?>public/img/Hau_Logo.png" width="120px" alt="brand">
                   </a>
                </div>
                <div class="col-md-4">

                    <form class="d-flex" method=post action ='<?php echo BASE_URL.'product/productSearch/'.LIMIT.'/0'?>'> 
                        <input name = 'searchKey' class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    
                </div>
                <div class="col-md-4">
                
                <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class="fas fa-shopping-cart fs-4 "id=carticon>
                  <?php $cart =new Cart;
                  if($cart->getCount()!=0)
                  echo '('.$cart->getCount().')'?>
                  </i>
                </span>
                
                <button type="button" class="btn btn-success">Đăng Nhập</button>
                </div>
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                          <a class="navbar-brand fw-bold" href="<?php echo BASE_URL?>">Electronic Store</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Sản Phẩm 
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                 <?php foreach($cats as $cat){?>
                                  <li><a class="dropdown-item" href="<?php echo BASE_URL?>product/productByCat/<?php echo $cat['alias'].'/'.LIMIT.'/0'?>"><?php echo $cat['catName']?></a></li>
                                  <?php }?>
                                </ul>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Thương Hiệu
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                  <?php foreach($brands as $brand){?>
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL?>product/productByBrand/<?php echo $brand['alias'].'/'.LIMIT.'/0'?>"><?php echo $brand['brandName']?></a></li>
                                  <?php }?>
                                </ul>
                              </li>
                              <?php foreach($links as $link){?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL.$link['link']?>"><?php echo $link['title']?></a>
                                </li>
                              <?php }?>
                            </ul>
                            
                          </div>
                        </div>
                      </nav>
                </div>
            
            </div>
        </header>