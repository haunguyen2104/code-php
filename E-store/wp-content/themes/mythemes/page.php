<?php get_header(); ?>
<section class="maincontent">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <?php the_title(); ?>
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>