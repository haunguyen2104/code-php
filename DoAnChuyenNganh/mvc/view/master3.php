<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/3bda6caee1.js" crossorigin="anonymous"></script>


</head>

<body>
    <header class="container">
        <div class="row">

            <div class="col-md-4 " style="margin-left: 100px;">
                <a href="<?php echo BASE_URL;?>">
                    <img src="<?php echo BASE_URL?>public/img/logo.png" width="300px" height=180px alt="brand">
                </a>
            </div>
        </div>
    </header>
    <div class="container">

        <?php
        include_once PATH_TO_VIEW.$viewname.'.php';
        ?>

    </div>
    <footer class="container-fluid bg-dark">

    </footer>
</body>

</html>