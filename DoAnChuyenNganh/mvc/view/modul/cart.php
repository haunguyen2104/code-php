<?php
  $cart=new Cart;
  $cartItems=$cart->getItems();
?>
<form action="<?php echo BASE_URL?>cart/update" method=post>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header  bg-success">
          <h5 class="modal-title" id="exampleModalLabel" style='color: white; font-family: Times New Roman;font-weight: bold;'>Giỏ Hàng</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">

          <div class="row" style="font-family: Times New Roman;   font-size:16px;">
            <div class="col-md-1 text-center">STT</div>
            <div class="col-md-4 text-center">Tên Hàng</div>
            <div class="col-md-3 text-center">Đơn Giá</div>
            <div class="col-md-1 text-center">Số Lượng</div>
            <div class="col-md-3 text-center">Thành Tiền</div>
          </div>

        <?php if(empty($cartItems))echo "<h1 style='font-family: Times New Roman; font-style: italic;'; >Giỏ hàng của bạn đang rỗng.</h1>";
        else
        {$i=1;
          foreach($cartItems as $productId=>$item){
        ?>
          <div class="row">
            <div class="col-md-1 text-center"><?php echo $i++;?></div>
            <div class="col-md-4" style="text-align: justify;"><?php echo $item['productName'];?></div>
            <div class="col-md-3 text-center"><?php echo number_format($item['price'],0);?></div>
            <div class="col-md-1 text-center"><input class='text-center' type="number" name="<?php echo $productId;?>" min=0 max=100 step=1 value="<?php echo $item['quantity'];?>"></div>
            <div class="col-md-3 text-center"><?php echo number_format($cart->getSubTotal($productId),0)?></div>
          </div>
          <?php }}?>
          <div class="row" >
            <div class="col-md-5"></div>
            <div class="col-md-3 text-center">Tổng Thành Tiền:</div>
            <div class="col-md-1"></div>
            <div class="col-md-3 text-center"><?php echo number_format($cart->getTotal(),0);?></div>
          </div>


        </div>
        <div class="modal-footer"style="font-family: Times New Roman; ">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-success" value ="Save changes">
          <a href="<?php echo BASE_URL?>cart/checkout" class="btn btn-warning">Check Out</a>

        </div>
      </div>
    </div>
  </div>
</form>

<?php
  if(isset($_SESSION['update']))
  {
    echo "<script>carticon.click()</script>";
    unset($_SESSION['update']);
  }
?>