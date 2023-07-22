<?php
/*
Template Name: Trang chu
*/
?>
<? php 
    $args=array(
            'post_type'=> 'product',
            'posts_per_page'=> 8,
    );
    $getposts = new WP_query($args);
    global $wp_query; $wp_query->in_the_loop = true;
    global $product;
?>
<div class="row">
                <?php while ($getposts ->have_posts()) : $getposts -> the_post();?>
                            <div class="col-md-3">
                                <div class="product-item">
                                    <div class="image-cart">
                                        <a href="<?php the_permalink();?>">
                                            <?php echo get_the_post_thumbnail(get_the_ID(),'thumnail',array
                                            ('class'=>'img-fluid thumnail') );?>
                                        </a>
                                        <a class="addcart text-center" href="<?php bloginfo('url');?>?
                                        add-to-cart=<?php the_ID();?>"> Thêm vào giỏ </a>
                                    </div>
                                    <h3 class="text-center m-0 p-1">
                                            <a href="<?php the_permalink();?>">
                                                <?php the_title(); ?>
                                            </a>
                                     </h3>
                                     <h5 class="text-center m-0 p-1">Gía: 
                                            <?php echo $product->get_price_html
                                                (); ?> <sup>đ</sup>
                                    </h5>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata();?>
</div>
