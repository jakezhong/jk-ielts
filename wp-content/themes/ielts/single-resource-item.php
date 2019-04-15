<?php get_header(); the_post(); ?>
    <section class="main-content">
        <div class="header">
            <?php echo tag_wrap(get_the_title(), 'h1'); ?>
            <h4>资料介绍</h4>
            <ul>
                <li></li>
            </ul>
        </div>
        <div class="content-main">
            <?php the_content(); ?>
        </div>
    </section>
<?php get_footer(); ?>