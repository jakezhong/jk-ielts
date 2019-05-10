<?php get_header(); the_post(); ?>

<?php get_template_part('inc/inc', 'banner'); ?>

<div class="spacer"></div>

<section class="plans-module">
    <div class="wrap">
        <div class="header">
            <?php echo tag_wrap(get_the_title(), 'h2'); ?>
        </div>
        <div class="main-content right-sidebar">
            <div class="content-main">
                <?php the_content(); ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<div class="spacer"></div>

<?php get_footer(); ?>