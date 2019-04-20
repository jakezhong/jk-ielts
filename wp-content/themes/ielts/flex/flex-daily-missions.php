<div class="daily-missions">
    <div class="wrap">
        <div class="header section-header">
            <h2>今日打卡任务</h2>
            <h4><?php echo date('Y年m月d日'); ?></h4>
        </div>
        <?php
            $terms = get_terms( array(
                'taxonomy' => 'mission-item-type',
                'hide_empty' => false,
            ) );
            if( have_rows('items') ) :
                foreach ($terms as $term) :
        ?>
        <div class="cards">
            <div class="header">
                <h3>听力打卡</h3>
            </div>
            <ul>
                <?php 
                    while( have_rows('items') ) : the_row();
                    $item = get_the_field('item');
                ?>
                <li class="mission-card">
                    <a href="#">
                        <div class="content">
                            <h4>剑桥雅思11 Test1 听力</h4>
                            <ul>
                                <li>时间: 9:00 - 11:00 AM</li>
                            </ul>
                        </div>
                        <picture class="image" style="background-image: url(https://picsum.photos/600/300)"></picture>
                    </a>
                </li>
                <?php
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