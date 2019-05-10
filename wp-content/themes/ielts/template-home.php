<?php
    /* Template Name: Home */
    get_header(); the_post();
?>

<?php get_template_part('inc/inc', 'banner'); ?>

<?php get_template_part('flex/flex','loop'); ?>

<?php get_footer(); ?>