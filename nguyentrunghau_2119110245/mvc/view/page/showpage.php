<!--<div class="card">
    <div class="card-body">
        <h2 class="card-title">NỘI DUNG BÀI VIẾT</h2>       
        <div class="card-header">
            <h5 class="card-header"> Featured</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.
	        Muelles lo las veces que con se los pasan llenando. Borrachos hule duro y el tu al mármol, viciosa en bajaba árboles sepultura tierra, tierra bajo la es el y. Lo musgos sus en amor plata en.
	        Cosas lo aire de mujer escaleras mío manos.
	        Huevos faraón con árboles heridas ligeros dios para los desnuda.
	        Tránsito musgos con que desangradas tierra con. La de venas y entonces no desnudo de, al celeste de del todo, en duro vengo la con. Es de nunca las diana pisan que, mi pulso diminutas lenta sillas, para horizonte y y las de desgarrados. Mujer.</p>
	        <a href="#" class="btn btn-primary">Go somewhere</a>
	    </div> 
    </div>
 </div>-->

 <?php
$pages = $data['pages'];
?>
<?php foreach ($pages as $page) { ?>
<div class="card-body">
              <h2 class="card-title"><?php echo $page['title'] ?></h2>
              <p class="card-text"><?php echo $page['content'] ?></p>
            </div>
            <?php } ?>
