<?php
    get_header();
    the_post();
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
                        <p><?php the_field('introduction'); ?></p>
                        <?php the_content(); ?>
                        <div class="spacer"></div>
                    </div>
                    <aside class="content-sub">
                        <div class="sidebar sidebar-list">
                            <h3>参考文件</h3>
                            <?php
                                $file = get_field('file');
                                if( $file ) :
                            ?>
                            <b-list-group class="links-list">
                                <b-list-group-item href="<?php echo $file['url']; ?>" class="link gray" target="_blank"><?php echo $file['title']; ?></b-list-group-item>
                            </b-list-group>
                            <?php
                                endif;
                            ?>
                        </div>
                    </aside>
                </div>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </section>
    <div class="spacer"></div>
<?php get_footer(); ?>