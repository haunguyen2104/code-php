<?php
  $products=$data['products'];
  $paging=$data['paging'];
?>
<div id='tieude'class="container-fluid">Sản phẩm khuyến mãi</div>
<div class="container">
  <div class="row">

            <div id="sale"class="col-md-3 p-5"><img src="<?php echo BASE_URL ?>public/img/Hau_Sale.jpg" class="img-fluid" alt="sale">
              </div>

            <?php
              foreach($products as $product){
            ?>
            <div class="col-md-3">
          <div class="card">
            <img src="<?php echo BASE_URL ?>public/upload/<?php echo $product['Image']?>" class="card-img-top" alt="hinhsp">
          <div class="card-body text-center alert alert-secondary">
            <a class="card-title" 
             
              href="<?php echo BASE_URL.'product/productDetail/'.$product['alias']?>">
              <?php echo $product['productName']?></a>

            <p class="card-text"><span class="fw-bold">Giá: </span><span class="text-danger fw-bold">$<?php echo number_format($product['salePrice'],2)?> </span>
                    <span> - </span><span class=' text-decoration-line-through'>$ <?php echo number_format($product['price'],2)?></span> </p>

              <a href="<?php echo BASE_URL?>cart/add/<?php echo $product['productId']?>/<?php echo $product['productName']?>/<?php if($product['salePrice']<>0) echo $product['salePrice']; else echo $product['price']?>" class="btn btn-dark">Thêm vào giỏ hàng</a>
            </div>
          </div>
        </div>

            
            <?php
              }
            ?>
  </div> 
  <div class=row id="paging">
  
          <?php 
            $paging->createLinks();
          ?>
        </div>
</div>