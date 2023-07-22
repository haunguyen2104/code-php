
<?php require_once PATH_TO_MODUL.'header.php';?>
<?php require_once PATH_TO_MODUL.'slide.php';?>
<?php require_once PATH_TO_MODUL.'cart.php'; ?>

    <div class="container my-3">
      <?php include_once PATH_TO_VIEW.$viewname.'.php';?>
       
    </div>
    <footer class="container-fluid bg-light">
          <div class="row">
          <?php require_once PATH_TO_MODUL.'bottommenu1.php';?>
          <?php require_once PATH_TO_MODUL.'bottommenu2.php';?>
          <?php require_once PATH_TO_MODUL.'bottommenu3.php';?>
          <?php require_once PATH_TO_MODUL.'bottommenu4.php';?>
      </footer>
      <?php require_once PATH_TO_MODUL.'map.php';?>
      
</body>
</html>