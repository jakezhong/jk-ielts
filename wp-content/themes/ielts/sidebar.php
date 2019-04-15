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
                $link = get_sub_field('resource');
                    if ( $link ) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        echo '<li><a href="'.$link_url.'" target="'.$link_target.'">'.$link_title.'</a></li>';
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