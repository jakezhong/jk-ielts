<?php
    /* Template Name: Home */
    get_header(); the_post();
?>

<section class="banner general">
    <h2>今日打卡任务</h2>
    <h4>2019年4月19日</h4>
</section>

<?php
    get_template_part('flex/flex','loop');

    get_footer();
?>