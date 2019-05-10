<?php
    $title = get_field('custom_title') ? get_field('custom_title') : get_the_title();
    $date = get_field('add_date');
?>
<section class="banner general">
    <h2><?php echo $title; ?></h2>
    <?php if( $date ) : ?>
    <h4><?php echo date('Y年n月j日'); ?></h4>
    <?php endif; ?>
</section>