<?php
    get_header();
    the_post();
    $program_id = get_the_ID();
    $type = get_the_terms( get_the_ID(), 'program-type' );
    $missions = get_field('missions');
    $start_time = get_field('start_time');
?>
    <section class="mission-detail">
        <div class="wrap">
            <div class="main-detail main-frame">
                <div class="main-content right-sidebar detail-upper">
                    <picture class="content-main image full-bg" style="background-image: url(https://picsum.photos/900/450);">
                    </picture>
                    <div class="content-sub title">
                        <?php echo tag_wrap(get_the_title(), 'h3'); ?>
                        <ul>
                            <li>类型: <?php echo $type[0] -> name; ?></li>
                            <li>时间: <?php echo $start_time; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="main-content right-sidebar detail-lower">
                    <div class="content-main">
                        <?php
                            if( $missions ) :
                        ?>
                        <h3>任务列表</h3>
                        <ul class="links-list">
                        <?php
                            foreach( $missions as $post ) :
                                setup_postdata($post);
                        ?>
                            <li class="link">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php
                            endforeach;
                            wp_reset_postdata();
                        ?>
                        </ul>
                        <?php
                            endif;
                        ?>
                    </div>
                    <aside class="content-sub">
                        <?php
                            $resources = get_field('resources');
                            if( $resources ) :
                        ?>
                        <div class="sidebar sidebar-list">
                            <h4>参考资料</h4>
                            <ul>
                                <?php
                                    foreach( $resources as $post ) :
                                    setup_postdata($post);
                                ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                <?php
                                    endforeach;
                                    wp_reset_postdata();
                                ?>
                            </ul>
                        </div>
                        <?php
                            endif;
                        ?>
                    </aside>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>