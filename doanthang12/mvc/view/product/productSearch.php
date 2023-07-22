<?php
  $products=$data['products'];
  $paging=$data['paging'];
  $totalRecords=$data['totalRecords'];
    ?>
<div class="container">
        
    <div id="brandname" class="row alert alert-warning text-center fw-bold">
   
        <?php echo "Tổng số sản phẩm tìm thấy: ".$totalRecords." sản phẩm";?>
    </div>

<!----------------------------------------------------->


          

<!----------------------------------------------------->
<!----------------------------------------------------->
    <div class="row borderofcard" style="   background:     #fff;">
    <?php foreach($products as $product){?>


<div class="col-md-3 col-sm-6 text-center card" "style="margin-bottom:10px;">
        <div class="card">
            <div><img src="<?php echo BASE_URL;?>public/upload/<?php echo $product['Image']?>" alt="hinhsp"
                    class="img-fluid"></div>
            <div class="card-body text-center alert alert-secondary">
                

                    <a class="card-title" 
              style="text-decoration: none;   color:#000;   font-weight: bold;"
              href="<?php echo BASE_URL.'product/productDetail/'.$product['alias']?>">
              <?php echo $product['productName']?></a>

                    <p class="card-text"> </span>
                <?php if($product['salePrice']!="") { ?>
                <span style="color:#000" class="text-decoration-line-through">$ <?php echo number_format($product['price'],2)?>
                    </span><span> -
                </span><span class="fw-bold fs-6 text-danger">$ <?php echo number_format($product['salePrice'],2)?>
                    </span>
                <?php }
          else {?>
                <span class="text-decoration-line-through">$ <?php echo number_format($product['price'],2)?> </span>
                < <?php }?> </p>
               <a href="<?php echo BASE_URL?>cart/add/<?php echo $product['productId']?>/<?php echo $product['productName']?>/<?php if($product['salePrice']<>0) echo $product['salePrice']; else echo $product['price']?>" class="btn btn-dark">Thêm vào giỏ hàng</a>
            </div>
        </div>
    </div>
    <?php }?>
</div>
<!----------------------------------------------------->



  

    <div class=row>
        <?php 
            $paging->createLinks();
          ?>
    </div>
</div>