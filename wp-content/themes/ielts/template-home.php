<?php
    /* Template Name: Home */
    get_header(); the_post();
    
    get_template_part('inc/inc', 'banner');

    get_template_part('flex/flex','loop');

    get_footer();
?>