<?php 
  require_once PATH_TO_MODUL.'header.php';
?>
<?php 
  require_once PATH_TO_MODUL.'slide.php';
?>

<div class="container mt-3">
    <div class="row">
     

    <div class="col-md-3"> </div>  
    <div class="col-md-3">
            <?php 
                  require_once PATH_TO_MODUL.'leftcategorymenu.php';
                ?>
        </div>
        <div class="col-md-3"> 
            <?php 
                require_once PATH_TO_MODUL.'leftbrandmenu.php';
                ?></div>

    </div>
    <div class="row">

        <div class="col">

            <?php
              include_once PATH_TO_VIEW.$viewname.'.php';
            ?>

        </div>
    </div>
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
            <p class="text-primary">Liên hệ chúng tôi qua:</p>
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
<?php 
        require_once PATH_TO_MODUL.'cart.php';
      ?>
</body>

</html>