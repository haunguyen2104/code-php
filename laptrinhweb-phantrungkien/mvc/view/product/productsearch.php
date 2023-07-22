<?php
  $products=$data['products'];
  $paging=$data['paging'];
  $totalRecords=$data['totalRecords'];
?>
<div class="container">
  <div class='row'>
    <?php echo "Tổng số sản phẩm tìm thấy: ".$totalRecords." sản phẩm";?>
  </div>
    <div class="row">
        <?php foreach($products as $product){?>
          <div class="col-md-3">
              <div class="card">
                <img src="<?php echo BASE_URL;?>public/upload/<?php echo $product['image']?>" class="card-img-top" alt="hinhsp">
                <div class="card-body text-center alert alert-secondary">
                  <h5 class="card-title"><?php echo $product['productName']?></h5>
                  <?php if($product['salePrice']!="") { ?>
                  <p class="card-text">
                    <span class="fw-bold">Giá: </span> 
                    <span class="text-danger fw-bold"><?php echo number_format($product['price'],0).'₫'?></span>
                    <span> - </span>
                    <span class=' text-decoration-line-through'> <?php echo number_format($product['salePrice'],0).'₫'?></span>
                  </p>
                  <?php }
                  else {?>
                  <span class="text-decoration-line-through"><?php echo number_format($product['price'],0).'₫'?></span>
                  <?php }?>
                  <a href="<?php echo BASE_URL?>cart/add/<?php echo $product['productId'] ?>/<?php echo $product['productName'] ?>/<?php if($product['salePrice']<>0) echo $product['salePrice']; else echo $product['Price'] ?>"
                  class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                  Thêm vào giỏ
                  </a>
                </div>
              </div>
            </div>
        <?php }?>
    </div>
  </div>
  
  <div class=row>
      <?php $paging->createLinks(); ?>
  </div>
</div>