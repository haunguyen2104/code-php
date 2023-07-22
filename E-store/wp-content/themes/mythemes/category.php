<?php get_header();?>
    <section class="maincontent">
        <div class="container">
            <div class="row my-3">
                <div class="col-md-9">
                <?php
                 $categories = get_the_category();
                if ( ! empty ( $categories ) ){
                    echo "<h3 class='category_title'>".$categories[0]->name."</h3>";
                }
                ?>
                    <?php if(have_posts()): ?> 
                    <?php while(have_posts()): ?>
                    <?php the_post(); ?>
                    <div class="row mb-3 post_category_item">
                        <div class="col-md-3">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail("medium", ['class' => 'img-fluid'] ); ?>
                                </a>
                        </div>
                        <div class="col-md-9">
                            <h3 class="post_title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div> 
                    <?php endwhile; ?>
                    <?php else:?>
                        <h3>Dang cap nhat noi dung</h3>
                    <?php endif; ?>
                </div>
                <div class="col-md-3">
                    <?php get_sidebar() ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer() ?>