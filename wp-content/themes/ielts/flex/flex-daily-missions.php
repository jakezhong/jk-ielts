<div class="daily-missions">
    <div class="wrapper">
        <div class="spacer"></div>
        <?php
            $terms = get_terms( array(
                'taxonomy'      => 'program-type',
                'hide_empty'    => true,
            ) );
            if( have_rows('items') ) :
                foreach ($terms as $term) :
        ?>
        <div class="cards">
            <div class="header wrap">
                <h3><?php echo $term -> name; ?>打卡</h3>
            </div>
            <ul>
                <?php
                while( have_rows('items') ) : the_row();
                    $item = get_sub_field('item');
                    if( $item ) :
                        $post = $item;
                        setup_postdata( $post );
                        $type = get_the_terms( get_the_ID(), 'program-type' );
                        if( $type[0] -> slug == $term -> slug ) :
                            $start_time = get_field('start_time');
                            $img = get_field('image');
                ?>
                <li class="card">
                    <a href="<?php the_permalink(); ?>">
                        <picture class="image" style="background-image: url(<?php echo $img['url']; ?>)"></picture>
                        <div class="content">
                            <?php echo tag_wrap(get_the_title(), 'h4'); ?>
                            <ul>
                                <li>时间: <?php echo $start_time; ?></li>
                            </ul>
                        </div>
                    </a>
                </li>
                <?php
                        endif;
                        wp_reset_postdata();
                    endif;
                endwhile;
                ?>
            </ul>
        </div>
        <div class="spacer"></div>
        <?php
                endforeach;
            endif;
        ?>
    </div>
</div>
<div class="spacer"></div>