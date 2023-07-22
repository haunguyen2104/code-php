<?php
  $products=$data['products'];
  $paging=$data['paging'];
  $brand=$data['brand'];
?>

<div class="row alert alert-danger text-center fw-bold">
    <div class="col-md-12 fs-2"><?php echo $brand['brandName']?></div>
</div>
<div class="row">
    <?php foreach($products as $product){?>
    <div class="col-md-4 col-sm-6 text-center card">
        <div><img src="<?php echo BASE_URL ?>public/upload/<?php echo $product['Image']?>" alt="hinhsp"
                class="img-fluid"></div>
        <div class="alert alert-success">
            <p><i class=" fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
            </p><a href="<?php echo BASE_URL.'product/productDetail/'.$product['alias']?>"
                class="text-decoration-none fw-bold"> <?php echo $product['productName']?></a><br>
            <?php if($product['salePrice']!="") { ?>
            <span class="text-decoration-line-through"><?php echo number_format($product['price'],2)?> $</span><span> -
            </span><span class="fw-bold fs-6 text-danger"><?php echo number_format($product['salePrice'],2)?> $</span>
            <?php }
          else {?>
            <span class="text-decoration-line-through"><?php echo number_format($product['price'],2)?> $</span>
            < <?php }?> 
            <a href="<?php echo BASE_URL?>cart/add/<?php echo $product['productId']?>/<?php echo $product['productName']?>/<?php if($product['salePrice']<>0) echo $product['salePrice']; else echo $product['price']?>" class="btn btn-primary">Thêm vào giỏ hàng</a>
        </div>
    </div>
    <?php }?>
</div>

<div class="row">
    <?php $paging->createLinks();

      ?>
</div>