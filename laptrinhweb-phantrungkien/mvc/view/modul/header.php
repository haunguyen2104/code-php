<?php
  $brandmodel = new BrandModel;
  $brands=$brandmodel->getAll(['trash'=>0,'status'=>1]);
  $catmodel = new CategoryModel;
  $cats=$catmodel->getAll(['trash'=>0,'status'=>1]);
  $linkmodel= new LinkModel;
  $links=$linkmodel->getAll(['trash'=>0,'status'=>1,'position'=>'globalnav']); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <title>AURORA</title>
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
    <div class="header" id="home">
        <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i>152a - Trần Quang Khải - Quận 1</li>
            <li>AURORA STORE</li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i>aurora@example.com</li>
        </ul>
        </div>
    </div>
    <header class="container-fluid">
        <div class="row">
            <div>
                <a href="<?php echo BASE_URL?>" class="col-md-4" style="float:left; padding-left:100px">
                    <img src="<?php echo BASE_URL ?>public/img/Kien_logo.jpg" style="height:150px" alt="brand">
                </a>
                
                <div class="col-md-4 header-middle" style="float:left; padding-top:50px">                
                    <form class="d-flex" method=post action="<?php echo BASE_URL.'product/productSearch/'.LIMIT.'/0'?>">
                    <input type="search" name="search" placeholder="Nhập nội dung..." required="">         
                    <input type="submit" value=" "> <i style="margin-left:-35px;padding-top:18px" class="fa fa-search" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                    </form>
                </div>            
                

                <div class="col-md-4 agileits-social top_content" style="float:left;padding-right:100px">
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                        <li class="share">Share On : </li>
                        <li><a href="https://www.facebook.com/" class="facebook">
                            <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                        <li><a href="https://twitter.com/" class="twitter"> 
                            <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                        <li><a href="https://www.instagram.com/" class="instagram">
                            <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                    </ul>
                </div>
            </div>

            <nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo BASE_URL?>">AURORA STORE</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Shop
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <?php foreach($cats as $cat){?>
                                    <li><a class="dropdown-item"
                                            href="<?php echo BASE_URL ?>product/productByCat/<?php echo $cat['alias'].'/'.LIMIT.'/0'?>"><?php echo $cat['catName'] ?></a>
                                    </li>
                                    <?php }?>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Thương hiệu
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <?php foreach($brands as $brand){?>
                                    <li><a class="dropdown-item"
                                            href="<?php echo BASE_URL ?>product/productByBrand/<?php echo $brand['alias'].'/'.LIMIT.'/0'?>"><?php echo $brand['brandName'] ?></a>
                                    </li>
                                    <?php }?>
                                </ul>
                            </li>
                            <?php foreach ($links as $link) {?>
                            <li class="nav-item">
                                <a class="nav-link " href="<?php echo BASE_URL.$link['link'] ?>"
                                    id="navbarDropdown2" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><?php echo $link['title']?></a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>

                    <div class="top_nav_right">
                        <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                            <?php
                            $cart=new cart;
                            if($cart-> getCount()!=0) echo '('.$cart->getCount().')';
                            ?>
                        </span>
                        <?php include_once PATH_TO_MODUL."cart.php"; ?>
                    </div>
                    <button type="button" class="btn btn-success">Đăng Nhập</button></div>
                <div>
            </nav>
        </div>
    </header>