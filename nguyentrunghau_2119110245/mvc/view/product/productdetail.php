<?php
  $currentproduct=$data['currentproduct'];
  $sameProducts=$data['sameProducts']
?>
<div class="card mb-3" >
    <div class="col alert alert-warning text-center fs-3 fw-bold">CHI TIẾT SẢN PHẨM</div>

        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?php echo BASE_URL ?>public/upload/<?php echo $currentproduct['Image'];?>" class="img-fluid" alt="hinhsp">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $currentproduct['productName'];?></h5>
                    <p class="card-text"><?php echo $currentproduct['detail'];?></p>
                      <p class="card-text">
                      <?php if($currentproduct['salePrice']!="") { ?>
        <span class="text-decoration-line-through"><?php echo number_format($currentproduct['price'],2)?>  $</span><span> - </span><span class="fw-bold fs-5 text-danger"><?php echo number_format($currentproduct['salePrice'],2)?> $</span>
         <?php }
          else {?>
             <span class="text-decoration-line-through"><?php echo number_format($currentproduct['price'],2)?> $</span><
          <?php }?>
                      </p>
                      <a href="<?php echo BASE_URL?>cart/add/<?php echo $currentproduct['productId']?>/<?php echo $currentproduct['productName']?>/<?php if($currentproduct['salePrice']<>0) echo $currentproduct['salePrice']; else echo $currentproduct['price']?>" class="btn btn-primary">Thêm vào giỏ hàng</a>
             </div>
         </div>

            <div class="row">
                 <div class="col alert alert-info fw-bold text-center fs-5">CÁC SẢN PHẨM TƯƠNG TỰ</div>
         </div>
                  <div class="row">
                    
                  <?php foreach($sameProducts as $sameProduct){?>
                  <div class="col-md-4 col-sm-6 text-center card">
                    <div><img src="<?php echo BASE_URL;?>public/upload/<?php echo $sameProduct['Image']?>" alt="hinhsp" class="img-fluid"></div>
                    <div class="alert alert-success">
                      <p><i class=" fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                      </p><a href="<?php echo BASE_URL.'product/productDetail/'.$sameProduct['alias']?>" class="text-decoration-none"> <?php echo $sameProduct['productName']?></a><br>
                      <?php if($sameProduct['salePrice']!="") { ?>
                      <span class="text-decoration-line-through"><?php echo number_format($sameProduct['price'],0)?></span><span> - </span><span class="fw-bold fs-5 text-danger"><?php echo number_format($sameProduct['salePrice'],0)?></span>
                      <?php }
                        else {?>
                          <span class="text-decoration-line-through"><?php echo number_format($sameProduct['price'],0)?></span><
                        <?php }?>
                        <a href="<?php echo BASE_URL?>cart/add/<?php echo $sameProduct['productId']?>/<?php echo $sameProduct['productName']?>/<?php if($sameProduct['salePrice']<>0) echo $sameProduct['salePrice']; else echo $sameProduct['price']?>" class="btn btn-primary">Thêm vào giỏ hàng</a>
                    </div>
                  </div>
                <?php }?>
                                        
                  </div>
      

                </div>
              </div>