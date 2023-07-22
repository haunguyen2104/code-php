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
      <header class="container">
          <div class="row">
              <div class="col-md-4"><img src="<?php echo BASE_URL;?>public/img/Kien_Logo.jpg"  style='width:120px;height:120px' alt="brand"></div>
      </header>
      <div class="container">
        <?php require_once PATH_TO_VIEW.$view.'.php';?>
        <div class="card">
        </div>
      </div>
    <footer class="container-fluid bg-dark">
    </footer>
    </body>
</html>