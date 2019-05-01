<?php 
    if ( have_rows('sidebars') ) :
?>
<aside class="content-sub">
<?php
        while ( have_rows('sidebars') ) : the_row();
            if ( get_row_layout() == 'resources' ) :
?>
    <div class="sidebar sidebar-list">
        <h3>参考资料:</h3>
        <?php if ( have_rows('resources') ) : ?>
        <b-list-group class="links-list">
            <?php
                while ( have_rows('resources') ) : the_row();
                    if ( get_sub_field('type') == 'internal' ) :
                        $post_object = get_field('internal_resource');
                        if ( $post_object ) :
                            $post = $post_object;
                            setup_postdata( $post ); 
                            echo '<b-list-group-item href="'.get_the_permalink().'" class="link gray">'.get_sub_field('name').'</b-list-group-item>';
                            wp_reset_postdata();
                        endif;
                    elseif ( get_sub_field('type') == 'external' ) :
                        echo '<b-list-group-item href="'.get_sub_field('external_link').'" class="link gray">'.get_sub_field('name').'</b-list-group-item>';
                    endif;
                endwhile;
            ?>
        </b-list-group>
        <?php endif; ?>
    </div>
    <?php 
            endif;
        endwhile;
    ?>
</aside>

<?php
    endif;
?>