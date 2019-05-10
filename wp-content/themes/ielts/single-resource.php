<?php
    get_header(); the_post();
    
    $resource_ID = get_the_ID();
    $resource_args = array(
        'post_type'     =>      'resource',
        'post_parent'   =>      $resource_ID,
    );
    $resources = new WP_Query($resource_args);
    $img = get_field('image');
?>
    <section class="banner image" style="background-image: url(<?php echo $img['url']; ?>);"></section>

    <section class="mission-detail">
        <div class="wrap">
            <div class="main-detail main-frame">
                <div class="main-content detail-upper">
                    <div class="header">
                        <?php echo tag_wrap(get_the_title(), 'h2'); ?>
                        <?php
                            if( have_rows('information') ) :
                        ?>
                        <ul>
                            <?php
                                while( have_rows('information') ) : the_row();
                            ?>
                            <li><?php the_sub_field('title'); ?>: <span><?php
                                if( get_sub_field('type') == 'link' ) :
                                    echo '<a href="'.get_sub_field('content').'" target="_blank">'.get_sub_field('content').'</a>';
                                else :
                                    the_sub_field('content');
                                endif;
                                ?></span></li>
                            <?php
                                endwhile;
                            ?>
                        </ul>
                        <?php
                            endif;
                        ?>
                    </div>
                </div>
                <?php
                    if( $resources -> have_posts() ) :
                ?>
                <div class="main-content right-sidebar detail-lower">
                    <div class="content-main">
                        <?php the_content(); ?>
                        <div class="spacer"></div>
                        <h3>选择资料</h3>
                        <b-list-group class="links-list">
                            <?php
                                while( $resources -> have_posts() ) : $resources -> the_post();
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
                        <?php
                            $file = get_field('file');
                            $video = get_field('video_link');
                            if( $file || $video ) :
                                if( $file ) {
                                    $link = $file['url'];
                                    $title = $file['title'];
                                } elseif( $video ) {
                                    $link = $video;
                                    $title = '观看视频';
                                }
                        ?>
                        <div class="spacer"></div>
                        <h3>相关文件</h3>
                        <b-list-group class="links-list">
                            <b-list-group-item href="<?php echo $link; ?>" class="link gray" target="_blank"><?php echo $title; ?></b-list-group-item>
                        </b-list-group>
                        <?php
                            endif;
                        ?>
                    </div>
                </div>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </section>
    <div class="spacer"></div>
<?php get_footer(); ?>