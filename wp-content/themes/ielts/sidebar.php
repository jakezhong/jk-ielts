<?php 
    if ( have_rows('sidebars') ) :
?>
<aside class="content-sub">
<?php
        while ( have_rows('sidebars') ) : the_row();
            if ( get_row_layout() == 'resources' ) :
?>
    <div class="sidebar sidebar-list">
        <h4>参考资料:</h4>
        <?php if ( have_rows('resources') ) : ?>
        <ul>
            <?php
                while ( have_rows('resources') ) : the_row();
                    if ( get_sub_field('type') == 'internal' ) :
                        $post_object = get_field('internal_resource');
                        if ( $post_object ) :
                            $post = $post_object;
                            setup_postdata( $post ); 
                            echo '<li><a href="'.get_the_permalink().'">'.get_sub_field('name').'</a></li>';
                            wp_reset_postdata();
                        endif;
                    elseif ( get_sub_field('type') == 'external' ) :
                        echo '<li><a href="'.get_sub_field('external_link').'" target="_blank">'.get_sub_field('name').'</a></li>';
                    endif;
                endwhile;
            ?>
        </ul>
        <?php endif; ?>
    </div>
</aside>
<?php
            endif;
        endwhile;
?>
<?php
    endif;
?>