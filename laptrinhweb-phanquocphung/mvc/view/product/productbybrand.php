<?php 
  $products=$data['products'];
  $paging = $data['paging'];
  $brand = $data['brand'];
?>

<div class="row">
          <div class="col alert alert-danger"><?php echo $brand['brandName']?></div>
        <div class="row">
          <?php foreach($products as $product) {?>
          <div class="col-md-4">
            <div class="card">
              <img src="<?php echo BASE_URL;?>public/upload/<?php echo $product['image']; ?>" class="card-img-top" alt="hinhsp">
              <div class="card-body text-center alert alert-info">
                
                <a href="<?php echo BASE_URL.'product/productDetail/'.$product['alias'] ?>" class="text-decoration-none"><h5 class="card-title"><?php echo $product['productName']; ?></h5></a>
                <?php if($product['saleprice']!='') {?>
                <p class="card-text"><span class="text-decoration-line-through"><?php echo number_format($product['price'],0) ?>$</span> <span class="text-danger fs-3"><?php echo number_format($product['saleprice'],0) ?>$</span></p>
                <?php } else{
                   ?>
                    <p><span class="text-decoration-none fs-3"><?php echo number_format($product['price'],0) ?>$</span></p>
                   <?php } ?>
                <a href="<?php echo BASE_URL ?>cart/add/<?php echo $product['productId'] ?>/<?php echo $product['productName'] ?>/<?php if($product['saleprice']!=0) echo $product['saleprice']; else echo $product['price']; ?>" class="btn btn-primary">Thêm vào giỏ hàng</a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="row">
       <?php $paging->createLinks();?>
        </div>
        </div>