<section class="plans-module">
    <div class="wrap">
        <?php
            $plan_args = array(
                'post_type'         =>  'plan-item',
                'order'             =>  'DESC',
                'posts_per_page'    =>  -1,
            );
            $plans = new WP_Query($plan_args);
            if ( $plans -> have_posts() ) :
                while ( $plans -> have_posts() ) : $plans -> the_post();
        ?>
        <div class="plan-field main-content right-sidebar">
            <div class="content-main">
                <div class="header">
                    <?php echo tag_wrap(get_the_title(), 'h2'); ?>
                </div>
                <?php the_content(); ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
        <?php
                endwhile; wp_reset_postdata();
            endif;
        ?>
    </div>
</section>