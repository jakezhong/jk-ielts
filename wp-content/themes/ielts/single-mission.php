<?php
    // Start the session
    session_start();

    get_header(); the_post();
    
    $mission_ID = get_the_ID();
    $type = get_the_terms( get_the_ID(), 'mission-type' );
    $mission_args = array(
        'post_type'     =>      'mission',
        'post_parent'   =>      $mission_ID,
    );
    $missions = new WP_Query($mission_args);
    $img = get_field('image');

    // Update current time with program time
    if( $_SESSION["start_time"] ) {
        if( $_SESSION["mission_ID"] == $mission_ID ) { 
            // Come back to same mission, use the program time
            $start_time = $_SESSION["start_time"];
        } else {
            // Come to other missions, use their own time
            $start_time = get_field('start_time', false, false);
        }
    } else {
        $start_time = get_field('start_time', false, false);
    }
    if( $start_time ) {
        $display_time = new DateTime($start_time);
        $cache_time = $display_time;
    }
?>
    <section class="banner image" style="background-image: url(<?php echo $img['url']; ?>);"></section>

    <section class="mission-detail">
        <div class="wrap">
            <div class="main-detail main-frame">
                <div class="main-content detail-upper">
                    <div class="header">
                        <?php echo tag_wrap(get_the_title(), 'h3'); ?>
                        <ul>
                            <li>类型: <?php echo $type[0] -> name; ?></li>
                            <?php echo $start_time ? '<li>时间: '.$display_time->format('g:i A').'</li>' : ''; ?>
                        </ul>
                    </div>
                </div>
                <?php
                    if( $missions -> have_posts() ) :
                ?>
                <!-- <div class="main-content right-sidebar detail-center">
                    <aside class="content-sub">
                        <b-button v-b-modal.report-form-modal class="blue">立即打卡！</b-button>
                    </aside>
                </div> -->
                <div class="main-content right-sidebar detail-lower">
                    <div class="content-main">
                        <?php the_content(); ?>
                        <div class="spacer"></div>
                        <h3>选择内容</h3>
                        <b-list-group class="links-list">
                            <?php
                                while( $missions -> have_posts() ) : $missions -> the_post();
                            ?>
                            <b-list-group-item href="<?php the_permalink(); ?>" class="link gray"><?php echo get_field('name') ? get_field('name') : get_the_title(); ?></b-list-group-item>
                            <?php
                                endwhile; wp_reset_postdata();
                            ?>
                        </b-list-group>
                    </div>
                </div>
                <?php
                    else :
                ?>
                <div class="main-content right-sidebar detail-lower">
                    <div class="content-main">
                        <?php the_content(); ?>
                        <div class="spacer"></div>
                        <?php
                            if( have_rows('steps') ) :
                        ?>
                        <h3>具体流程</h3>
                        <ol class="steps">
                        <?php
                            while( have_rows('steps') ) : the_row();
                                $step = get_sub_field('step');
                                $duration = get_sub_field('duration');
                        ?>
                            <li><?php
                                    $title = $step -> post_title;
                                    $step_start = $cache_time -> format('g:i');
                                    $step_end = $cache_time -> modify('+'.$duration.' minute')->format('g:i');
                                    echo $title.': '.$step_start.' - '.$step_end;
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
                            <h3>参考资料:</h3>
                            <b-list-group class="links-list">
                                <?php
                                    foreach( $resources as $post ) :
                                    setup_postdata($post);
                                ?>
                                <b-list-group-item href="<?php the_permalink(); ?>" class="link gray"><?php echo get_field('name') ? get_field('name') : get_the_title(); ?></b-list-group-item>
                                <?php
                                    endforeach;
                                    wp_reset_postdata();
                                ?>
                            </b-list-group>
                        </div>
                        <?php
                            endif;
                        ?>
                    </aside>
                </div>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </section>
    <div class="spacer"></div>
    <?php //get_template_part('inc/inc', 'report'); ?>
    <?php //get_template_part('inc/inc', 'report-modal'); ?>
<?php get_footer(); ?>