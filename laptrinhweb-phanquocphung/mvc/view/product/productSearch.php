<?php 
  $products = $data['products'];
  $paging = $data['paging'];
  $totalRecords=$data['totalRecords'];
?>

<div class = "container">
  <div class="row">
    <?php echo "Tổng số sản phầm tìm thấy: ".$totalRecords." sản phẩm."; ?>
  </div>
  <div class="row">
    <?php foreach($products as $product){?>
  
          <div class="col-md-3">
            <div class="card">
              <img src="<?php echo BASE_URL;?>public/upload/<?php echo $product['image'] ?>" class="card-img-top" alt="hinhsp">
              <div class="card-body text-center alert alert-info">
                <a href="<?php echo BASE_URL.'product/productDetail/'.$product['alias'] ?>"  class = 'text-decoration-none'><?php echo $product['productName']?></a>
                <p class="card-text"><span class="text-decoration-line-through"><?php echo number_format($product['price'],0) ?></span> <span class="text-danger"><?php echo number_format($product['saleprice'],0) ?></span></p>
                <div >
                <p>--------------------------</p>
                  <p class="text-primary "><?php echo $product['alias'] ?></p>
                  </div>
                <a href="<?php echo BASE_URL ?>cart/add/<?php echo $product['productId'] ?>/<?php echo $product['productName'] ?>/<?php if($product['saleprice']!=0) echo $product['saleprice']; else echo $product['price']; ?>" class="btn btn-primary">Thêm vào giỏ hàng</a>
              </div>
            </div>
          </div>
            
            <?php } ?>
            </div>
            <div class="row">
            <?php $paging->createLinks(); ?>
            </div>
  </div>