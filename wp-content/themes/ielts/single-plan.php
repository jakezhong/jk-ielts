<?php get_header(); the_post(); ?>
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
<?php get_footer(); ?>