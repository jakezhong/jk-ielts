<?php
    /* Template Name: Resources */
    get_header(); the_post();
?>
<section class="banner general">
    <h2>参考资料</h2>
</section>
<div class="spacer"></div>
<section class="plans-module">
    <div class="wrap">
        <b-list-group class="links-list">
            <b-list-group-item v-for="type in types" href="#" class="link gray">雅思{{type.text}}参考资料</b-list-group-item>
        </b-list-group>
    </div>
</section>
<div class="spacer"></div>
<?php
    get_footer();
?>