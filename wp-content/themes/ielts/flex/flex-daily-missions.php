<div class="daily-missions">
    <div class="wrap">
        <div class="header section-header">
            <h2>今日打卡任务</h2>
            <h4><?php echo date('Y年m月d日'); ?></h4>
        </div>
        <?php
            $terms = get_terms( array(
                'taxonomy'      => 'mission-type',
                'hide_empty'    => true,
            ) );
            if( have_rows('items') ) :
                foreach ($terms as $term) :
        ?>
        <div class="cards">
            <div class="header">
                <h3><?php echo $term -> name; ?>打卡</h3>
            </div>
            <ul>
                <?php
                while( have_rows('items') ) : the_row();
                    $item = get_sub_field('item');
                    $type = get_the_terms( get_the_ID(), 'mission-type' );
                    if( $item ) :
                        $post = $item;
                        setup_postdata( $post );
                        if( $type[0] -> slug == $term -> slug ) :
                ?>
                <li class="mission-card">
                    <a href="<?php the_permalink(); ?>">
                        <div class="content">
                            <?php echo tag_wrap(get_the_title(), 'h4'); ?>
                            <h6>时间: <?php the_field('start_time'); ?></h6>
                        </div>
                        <picture class="image" style="background-image: url(https://picsum.photos/600/300)"></picture>
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
        <div class="divider"></div>
        <?php
                endforeach;
            endif;
        ?>
    </div>
</div>