<?php
    /* Template Name: Schedule */
    get_header(); the_post();
?>

<section class="banner general">
    <h2>本周时间表</h2>
    <h4><?php echo date('Y年n月j日'); ?></h4>
</section>

<div class="spacer"></div>

<?php get_template_part('flex/flex', 'loop'); ?>

<div class="spacer"></div>

<?php
    get_footer();
?>