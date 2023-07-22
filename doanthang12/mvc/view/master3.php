<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/3bda6caee1.js" crossorigin="anonymous"></script>

    <!--Css-->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>public/css/mystyle.css">

    <link rel="stylesheet" href="<?php echo BASE_URL ?>public/css/sty.css">
    <script src="<?php echo BASE_URL ?>public/js/popper.min.js"></script>
    <script src="<?php echo BASE_URL ?>public/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/3bda6caee1.js" crossorigin="anonymous"></script>


</head>
<?php 
  require_once PATH_TO_MODUL.'header.php';
?>

<body>
    <header class="container">
        <div class="row">

            <div class="col-md-4 " style="margin-left: 100px;">
                
            </div>
        </div>
    </header>
    <div class="container">

        <?php
        include_once PATH_TO_VIEW.$viewname.'.php';
        ?>

    </div>
    <footer class="container-fluid bg-dark">
    <div class="row">

        <?php 
        require_once PATH_TO_MODUL.'bottommenu1.php';
        ?>
        <?php 
        require_once PATH_TO_MODUL.'bottommenu2.php';
        ?>


        <div class="col-md-2 p-3">
            <p class="text-warning">Liên hệ chúng tôi qua:</p>
            <div class=mb-1>
                <a href="https://www.facebook.com/" class='btn btn-secondary'> <i
                        class="fab fa-facebook-square text-white-50"></i> </a>
                <a href="https://www.instagram.com/" class='btn btn-secondary'> <i
                        class="fab fa-instagram-square text-white-50"></i> </a>
                <a href="https://www.google.com.vn/" class='btn btn-secondary'> <i
                        class="fab fa-google-plus-square text-white-50"></i> </a>
            </div>
            <div class=mb-1>
                <a href="https://twitter.com/" class='btn btn-secondary'> <i
                        class="fab fa-twitter-square text-white-50">
                    </i> </a>
                <a href="https://youtube.com/" class='btn btn-secondary'> <i
                        class="fab fa-youtube-square text-white-50">
                    </i> </a>
                <a href="https://tiktok.com/" class='btn btn-secondary'> <i class="fab fa-tiktok text-white-50">
                    </i> </a>
            </div>
        </div>
    </div>

    </footer>
</body>

</html>