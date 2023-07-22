<?php get_header();?>

    <section class="maincontent">
        <div class="container">
        <div class="row" style="min-height:300px;">
        <?php echo do_shortcode('[img-slider id="42"]'); ?>
        </div>
        <section class="maincontent">
        <div class="container">
            <h1 class="text-center"> DANH MỤC SẢN PHẨM</h1>
            <nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
              <div class="container">
                <div>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <?php $args = array( 
                        'hide_empty' => 0,
                        'taxonomy' => 'product_cat',
                        'orderby' => 'id',
                        'parent' => 0
                        ); 
                       
                        $cates = get_categories( $args ); 
                        foreach ( $cates as $cate ) {  ?>
                          <?php 
                            $thumbnail_id = get_woocommerce_term_meta($cate->term_id, 'thumbnail_id', true );
                          ?>
                        <li>
                      hhhhhhhhhhhhhhhhh
                          <a href="<?php echo get_term_link($cate->slug, 'product_cat'); ?>"><?php echo $cate->name; ?></a>
                        </li>
                      <?php } ?>

                      <script>
                            jQuery('.owl-carousel').owlCarousel({
                              loop: true,
                              0: {
                                items: 1,
                                nav: true
                              },
                              600: {
                                items: 2,
                                nav: false
                              },
                              1000: {
                                items: 3,
                                nav: true,
                                loop: flase,
                                margin: 20
                              }
                            }
                          )
                      </script>
                  </div>
                </div>
              </div>
            </nav>
        </div>
      </section>
                <div class="row mb-3">
                    <h3>       </h3>
                    <h3 class="home_title "> Sản phẩm mới </h3>
                        <div class="row">
                            <?php
                                $args= array(
                                    'post_type' =>'product',
                                    'posts_per_page' => 8,
                                );
                                $getposts=new WP_query( $args);
                                global $wp_query; $wp_query ->in_the_loop = true;
                                global $product;
                            ?>
                            <?php while ($getposts ->have_posts()) : $getposts -> the_post();?>
                            <div class="col-md-3 mb-3 ">
                                <div class="product-item">
                                    <div class="image-cart text-center">
                                        <a href="<?php the_permalink();?>">
                                        <?php echo get_the_post_thumbnail(get_the_ID(),'thumnail',array
                                        ('class'=>'img-fluid thumnail') );?>
                                        </a>
                                       
                                    </div>
                                    <div class="product-info">
                                        <h3 class="text-center m-0 p-1">
                                            <a href="<?php the_permalink();?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>
                                         <h5 class="text-center m-0 p-1">Gia: 
                                            <?php echo $product->get_price_html
                                                (); ?> 
                                         </h5>
                                        <a class="btn btn-success form-control text-center" href="<?php bloginfo('url');?>?
                                        add-to-cart=<?php the_ID();?>"> Thêm vào giỏ </a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata();?>
                            </div>
                </div>
                <div class="row mb-3">
                    
                    <h3 class="home_title"> SẢN PHẨM KHUYẾN MÃI</h3>
                        <div class="row">
                            <?php $args2 = array( 
                                            'post_type' => 'product',
                                            'posts_per_page' => 10, 
                                            'meta_query'     => array(
                                                'relation' => 'OR',
                                                array(
                                                    'key'           => '_sale_price',
                                                    'value'         => 0,
                                                    'compare'       => '>',
                                                    'type'          => 'numeric'
                                                )
                                            )
                                        );
                                            $getposts=new WP_query( $args2);
                                            global $wp_query; $wp_query ->in_the_loop = true;
                                            global $product;
                                        ?>
                            <?php while ($getposts ->have_posts()) : $getposts -> the_post();?>
                            <div class="col-md-3 mb-3">
                                <div class="product-item">
                                    <div class="image-cart text-center">
                                        <a href="<?php the_permalink();?>">
                                        <?php echo get_the_post_thumbnail(get_the_ID(),'thumnail',array
                                        ('class'=>'img-fluid thumnail') );?>
                                        </a>
                                       
                                    </div>
                                    <div class="product-info">
                                        <h3 class="text-center m-0 p-1">
                                            <a href="<?php the_permalink();?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>
                                         <h5 class="text-center m-0 p-1">Gia: 
                                            <?php echo $product->get_price_html
                                                (); ?>
                                         </h5>
                                        <a class="btn btn-success form-control text-center" href="<?php bloginfo('url');?>?
                                        add-to-cart=<?php the_ID();?>"> Thêm vào giỏ </a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata();?>
                            </div>
                        </div>
                    
                </div>

        
    </section>
    <?php get_footer(); ?>