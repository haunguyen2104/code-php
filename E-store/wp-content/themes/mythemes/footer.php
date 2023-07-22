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
              <p>Hệ thống cửa hàng:<br>
			          - 	Store 1: 93 Rạch Bùng Binh,Phường 9, Quận 3<br>
				        -   Store 2: 350 Điện Biên Phủ, phường 17, Quận Bình Thạnh<br>
        	  </p>
            </div>
            <div class="col-md-3">
            <h4>Store <span>Information</span></h4>
			<div class="w3-address">
				<div class="w3-address-grid">
					<div class="w3-address-left">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="w3-address-right">
						<h6>Phone Number</h6>
						<p>+1 234 567 8901</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3-address-grid">
					<div class="w3-address-left">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>
					<div class="w3-address-right">
						<h6>Email Address</h6>
						<p>Email :<a href="mailto:example@email.com"> biistore@example.com</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3-address-grid">
					<div class="w3-address-left">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="w3-address-right">
						<h6>Location</h6>
						<p>152a - Trần Quang Khải - Quận 1 - TPHCM</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
            </div>
            <div class="col-md-3">
            <div class="col-md-3 footer-left">
            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                <li><a href="#" class="facebook">
                  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="twitter"> 
                  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="instagram">
                  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="pinterest">
                  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
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
        &copy Bản thuộc quyền của Vannebii
        </div>
    </section>
     <?php wp_footer(); ?>
</body>
</html>