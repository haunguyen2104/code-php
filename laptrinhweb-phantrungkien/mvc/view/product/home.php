<?php
  $products=$data['products'];
  $paging=$data['paging'];
?>
<div class="container">
    <div class="row">
        <div class="col-md-3 p-5"> <img src="<?php echo BASE_URL ?>public/upload/Kien_Sale.jpg" width="100%" class="img-fluid" alt=""> </div>
        <?php
        foreach($products as $product){
        ?>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="card">
            <img src="<?php echo BASE_URL ?>public/upload/<?php echo $product['image']?>" class="card-img-top" alt="hinhsp">
            <div class="card-body text-center alert alert-secondary">
              <a href="<?php echo BASE_URL.'product/productDetail/'.$product['alias']?>" class='text-decoration-none'>
              <?php echo $product['productName']?></a>
              <p class="card-text">
                  <span class="fw-bold">Giá: </span>
                  <span class=' text-decoration-line-through'><?php echo number_format($product['price'],0).'₫'?></span>
                  <span> - </span>
                  <span class="text-danger fw-bold"><?php echo number_format($product['salePrice'],0).'₫'?></span>
              </p>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <a href="<?php echo BASE_URL?>cart/add/<?php echo $product['productId'] ?>/<?php echo $product['productName'] ?>/<?php if($product['salePrice']<>0) echo $product['salePrice']; else echo $product['price'] ?>"
                  class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                  Thêm vào giỏ
                </a>
              </div>
            </div>
          </div><br>
        </div>
        <?php } ?>
    </div>

    <div class=row>
        <?php 
        $paging->createLinks();
      ?>
    </div>
</div>