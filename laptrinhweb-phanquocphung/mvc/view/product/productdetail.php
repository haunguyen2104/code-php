<?php 
  $p = $data['currentProduct'];
  $products=$data['sameProducts'];
?>

<div class="rol">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
              <img src="<?php echo BASE_URL;?>public/upload/<?php echo $p['image']; ?>" class="img-fluid" alt="hinhsp">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $p['productName']; ?></h5>
                <div><?php echo $p['detail']; ?>
                </div>
                  <?php if($p['saleprice']!='') {?>
                <p class="card-text"><span class="text-decoration-line-through"><?php echo number_format($p['price'],0) ?></span>$ <span class="text-danger  fs-3"><?php echo number_format($p['saleprice'],0) ?>$</span></p>
                <?php } else{
                   ?>
                    <p><span class="text-decoration-none fs-3"><?php echo number_format($p['price'],0) ?>$</span></p>
                   <?php } ?>
                  <a href="<?php echo BASE_URL ?>cart/add/<?php echo $p['productId'] ?>/<?php echo $p['productName'] ?>/<?php if($p['saleprice']!=0) echo $p['saleprice']; else echo $p['price']; ?>" class="btn btn-primary">Thêm vào giỏ hàng</a>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="col alert alert-danger">SẢN PHẨM CÙNG LOẠI</div>
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
                <a href="<?php echo BASE_URL.'product/productDetail/'.$product['alias'] ?>" class="btn btn-primary">Thêm vào giỏ hàng</a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        </div>
        