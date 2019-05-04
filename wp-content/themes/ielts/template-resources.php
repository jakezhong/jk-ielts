<?php
    /* Template Name: Resources */
    get_header();
    the_post();
?>
<section class="banner general">
    <h2>参考资料</h2>
</section>

<div class="spacer"></div>

<section class="resources-module">
    <div class="wrapper">
        <?php
            $terms = get_terms( array(
                'taxonomy'      => 'resource-type',
                'hide_empty'    => true,
            ) );
            $resource_args = array(
                'post_type'         =>      'resource',
                'post_parent'       =>      0,
                'posts_per_page'    =>  -1
            );
            $resources = new WP_Query($resource_args);
            if( $resources -> have_posts() && $terms ) :
                foreach ($terms as $term) :
        ?>
        <div class="cards">
            <div class="header wrap">
                <h3><?php echo $term -> name; ?>资料</h3>
            </div>
            <ul>
                <?php
                    while( $resources -> have_posts() ) : $resources -> the_post();
                    $type = get_the_terms( get_the_ID(), 'resource-type' );
                        if( $type[0] -> slug == $term -> slug ) :
                            $img = get_field('image');
                ?>
                <li class="card">
                    <picture class="image" style="background-image: url(<?php echo $img['url']; ?>)"></picture>
                    <div class="content">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                    </a></h4>
                        <?php
                            if( have_rows('information') ) :
                        ?>
                        <ul>
                            <?php
                                while( have_rows('information') ) : the_row();
                            ?>
                            <li><?php the_sub_field('title'); ?>: <?php
                                if( get_sub_field('type') == 'link' ) :
                                    echo '<a href="'.get_sub_field('content').'" target="_blank">'.get_sub_field('content').'</a>';
                                else :
                                    the_sub_field('content');
                                endif;
                                ?></li>
                            <?php
                                endwhile;
                            ?>
                        </ul>
                        <?php
                            endif;
                        ?>
                    </div>
                </li>
                <?php
                        endif;
                    endwhile;
                    wp_reset_postdata();
                ?>
            </ul>
        </div>
        <div class="spacer"></div>
    <?php
            endforeach;
        endif;
    ?>
    </div>
</section>

<div class="spacer"></div>

<?php
    get_footer();
?>