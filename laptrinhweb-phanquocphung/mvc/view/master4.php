<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobile Shop</title>
  <link rel="stylesheet" href="<?php echo BASE_URL;?>public/css/bootstrap.min.css" >
  <script src="<?php echo BASE_URL;?>public/js/popper.min.js"></script>
  <script src="<?php echo BASE_URL;?>public/js/bootstrap.min.js" ></script>

  <script src="https://kit.fontawesome.com/fb3aa5052d.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="container bg-light">
    <div class="row">
        <div class="col-md-4"><a class="navbar-brand" href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL;?>public/img/Phung_logo.png" alt="brand"></a></div>
        <div class="col-md-4"></div>
          
    </div>

</header>
<div class="container">
<?php require_once PATH_TO_VIEW.$viewname.'.php'; ?>
</div>


   



</body>
</html>