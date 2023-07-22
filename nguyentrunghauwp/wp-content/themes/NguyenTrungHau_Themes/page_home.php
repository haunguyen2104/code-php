<?php
/*
Template Name: Trang chu
*/
?>
<?php $args = array( 
        'post_type' => 'product',
        'posts_per_page' => 8
        ); 
        $getproduct_new = new WP_query( $args);
        global $wp_query; $wp_query->in_the_loop = true;
        global $product;
?>
<div class="row">
<?php while ($getproduct_new->have_posts()) : $getproduct_new->the_post();?>
                <div class="col-md-3 mb-3">
                    <div class="product-item">
                        <div class="image-cart">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'image img-fluid thumnail') ); ?>  
                            </a>
                        </div>
                        <h3 class='text-center m-0 p-1'>
                            <a href="<?php the_permalink(); ?>" class='fs-6'>
                                <?php the_title(); ?>  
                            </a>
                        </h3>
                        <h5 class='text-center m-0 p-1'>Giá:<?php echo $product->get_price_html(); ?></h5>
                        <a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>" class="btn btn-primary form-control" style='text-center' >Thêm vào giỏ hàng</a>

                    </div>
                </div>
                <?php endwhile; wp_reset_postdata();?>
</div>
