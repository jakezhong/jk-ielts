<?php
    /* Template Name: Plans */
    get_header(); the_post();
?>

<?php get_template_part('inc/inc', 'banner'); ?>

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
                        $count = 0;
                        while ( $plans -> have_posts() ) : $plans -> the_post();
                ?>
                <b-tab title="<?php the_title(); ?>"<?php $count == 0 ? ' active' : ''; ?>>
                    <div class="plan-field main-content right-sidebar">
                        <div class="content-main">
                            <?php the_content(); ?>
                        </div>
                        <?php 
                            if ( have_rows('sidebar') ) :
                        ?>
                        <aside class="content-sub sidebar">
                        <?php
                                while ( have_rows('sidebar') ) : the_row();
                                    if ( get_row_layout() == 'image_sidebar' ) :
                                        $img = get_sub_field('image');
                        ?>
                            <div class="sidebar-field sidebar-image">
                                <h4><?php the_sub_field('title'); ?></h4>
                                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                                <p class="content"><?php the_sub_field('content'); ?></p>
                            </div>
                            <?php
                                    endif;
                                endwhile;
                            ?>
                        </aside>
                        <?php
                            endif;
                        ?>
                    </div>
                </b-tab>
                <?php
                        $count ++;
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