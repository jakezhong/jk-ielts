<?php
    get_header();
    the_post();
    $mission_ID = get_the_ID();
    $type = get_the_terms( get_the_ID(), 'mission-type' );
    $start_time = get_field('start_time', false, false);
    $display_time = new DateTime($start_time);
    $cache_time = $display_time;
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
                            <li>时间: <?php echo $display_time->format('g:i A') ?></li>
                        </ul>
                    </div>
                </div>
                <div class="main-content right-sidebar detail-center">
                    <aside class="content-sub">
                        <b-button v-b-modal.report-form-modal class="blue">立即打卡！</b-button>
                    </aside>
                </div>
                <div class="main-content right-sidebar detail-lower">
                    <div class="content-main">
                        <h3>具体流程:</h3>
                        <?php
                            if( have_rows('steps') ) :
                        ?>
                        <ol>
                        <?php
                            while( have_rows('steps') ) : the_row();
                                $step = get_sub_field('step');
                                $duration = get_sub_field('duration');
                        ?>
                            <li><?php
                                    $title = $step -> post_title;
                                    $step_start = $cache_time -> format('g:i');
                                    $step_end = $cache_time -> modify('+'.$duration.' minute')->format('g:i');
                                    echo $title.' '.$step_start.' - '.$step_end;
                                ?></li>
                        <?php
                                $step_start = $step_end;
                            endwhile;
                        ?>
                        </ol>
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
                            <h4>参考资料:</h4>
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
    <div class="spacer"></div>
    <?php get_template_part('inc/inc', 'report'); ?>
    <?php get_template_part('inc/inc', 'report-modal'); ?>
<?php get_footer(); ?>