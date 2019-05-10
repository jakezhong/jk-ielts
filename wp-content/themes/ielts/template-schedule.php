<?php
    /* Template Name: Schedule */
    get_header(); the_post();
?>

<?php get_template_part('inc/inc', 'banner'); ?>

<div class="spacer"></div>

<?php get_template_part('flex/flex', 'loop'); ?>

<div class="spacer"></div>

<?php
    get_footer();
?>