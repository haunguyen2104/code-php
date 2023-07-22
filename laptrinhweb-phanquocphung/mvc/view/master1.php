<?php require_once PATH_TO_MODUL.'header.php';?>
<?php require_once PATH_TO_MODUL.'slide.php';?>
<?php require_once PATH_TO_MODUL.'cart.php'; ?>
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-3">
          <?php require_once PATH_TO_MODUL.'leftcategorymenu.php';?>
          <?php require_once PATH_TO_MODUL.'leftbandmenu.php';?>
        </div>
      <div class="col-md-9">
          <?php include_once PATH_TO_VIEW.$viewname.'.php';?>
      
      </div>
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