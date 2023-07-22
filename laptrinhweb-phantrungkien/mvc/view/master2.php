<?php require_once PATH_TO_MODUL.'header.php'; ?>
<?php require_once PATH_TO_MODUL.'slide.php'; ?> 
        <div class ="content container">
          <?php require_once PATH_TO_VIEW.$view.".php"; ?>
        </div>
  
<footer class="container-fluid bg-dark">
<div class="row">
<?php require_once PATH_TO_MODUL.'bottommenu1.php'; ?>
<?php require_once PATH_TO_MODUL.'bottommenu2.php'; ?>
<div class="col-md-2 p-3">
	<p class="text-primary">Liên hệ chúng tôi qua:</p>
	<div class=mb-1>
	<ul class="social-nav model-3d-0 footer-social w3_agile_social">
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
</footer>
    </body>
</html>