<?php
    /* Template Name: Plans */
    get_header(); the_post();
?>
<section class="banner general">
    <?php echo tag_wrap(get_the_title(), 'h2'); ?>
</section>

<div class="spacer"></div>

<section class="plans-module">
    <div class="wrap">
        <b-card no-body>
            <b-tabs pills card>
                <?php
                    $plan_args = array(
                        'post_type'         =>  'plan',
                        'order'             =>  'ASC',
                        'posts_per_page'    =>  -1,
                    );
                    $plans = new WP_Query($plan_args);
                    if ( $plans -> have_posts() ) :
                        while ( $plans -> have_posts() ) : $plans -> the_post();
                ?>
                <b-tab title="<?php the_title(); ?>" active>
                    <div class="plan-field main-content right-sidebar">
                        <div class="content-main">
                            <?php the_content(); ?>
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </b-tab>
                <?php
                        endwhile; wp_reset_postdata();
                    endif;
                ?>
            </b-tabs>
        </b-card>
    </div>
</section>

<div class="spacer"></div>

<?php
    get_footer();
?>