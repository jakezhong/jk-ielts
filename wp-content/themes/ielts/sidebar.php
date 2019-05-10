<?php 
    if ( have_rows('sidebar') ) :
?>
<aside class="content-sub sidebar">
<?php
        while ( have_rows('sidebar') ) : the_row();
            if ( get_row_layout() == 'image_sidebar' ) :
                $img = get_sub_field('image');
?>
    <div class="sidebar-field sidebar-image">
        <h4><?php the_sub_field('title'); ?></h4>
        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
        <p class="content"><?php the_sub_field('content'); ?></p>
    </div>
    <?php
            endif;
        endwhile;
    ?>
</aside>
<?php
    endif;
?>