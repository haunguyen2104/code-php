<section class="footer border-top py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="<?php echo home_url();?>">
                    <?php
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                  
                  if ( has_custom_logo() ) {
                      echo '<img class="img-fluid" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                  } else {
                      echo '<h1>' . get_bloginfo('name') . '</h1>';
                  }
                  ?>
                </a>
                <p>Hệ thống cửa hàng: hơn 4000 cửa hàng trên toàn quốc.<br>
                </p>
            </div>
            <div class="col-md-3">
                <h4>Thông tin cửa hàng</h4>
                <div class="w3-address">
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-phone fs-5" aria-hidden="true"> Số điện thoại</i>
                        </div>
                        <div class="w3-address-right">
                           
                            <p>+84 166 098 70 </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-envelope fs-5" aria-hidden="true"> Thư điện tử</i>
                        </div>
                        <div class="w3-address-right">
                            <p>Email :<a href="mailto:example@email.com"> tgdd@gmail.com</a></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-map-marker fs-5" aria-hidden="true"> Địa chỉ:</i> 
                        </div>
                        <div class="w3-address-right">
                            <p>Đường 30/4 CMT8 - Tây Ninh</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-md-3 footer-left">
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <?php get_sidebar('footer'); ?>
            </div>
        </div>
    </div>
</section>
<section class="copyright bg-dark">
    <div class="container text-center text-light my-2">
        &copy Bản thuộc quyền của Nguyễn Trung Hậu
    </div>
</section>
<?php wp_footer(); ?>
</body>

</html>