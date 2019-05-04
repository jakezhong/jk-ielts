<?php
    /* Template Name: Home */
    get_header(); the_post();
?>

<section class="banner general">
    <h2>今日打卡任务</h2>
    <h4><?php echo date('Y年n月j日'); ?></h4>
</section>

<?php
    get_template_part('flex/flex','loop');
    get_footer();
?>