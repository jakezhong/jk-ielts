<?php
    /* Template Name: Programs */
    get_header(); the_post();
?>

<?php get_template_part('inc/inc', 'banner'); ?>

<div class="missions-module">
    <div class="wrapper">
        <div class="spacer"></div>
        <?php
            $terms = get_terms( array(
                'taxonomy'      => 'program-type',
                'hide_empty'    => true,
            ) );
            $program_args = array(
                'post_type'         =>  'program',
                'posts_per_page'    =>  -1,
                'order'             =>  'ASC'
            );
            $programs = new WP_Query($program_args);
            if( $programs -> have_posts() && $terms ) :
                foreach ($terms as $term) :
        ?>
        <div class="cards">
            <div class="header wrap">
                <h3><?php echo $term -> name; ?>任务</h3>
            </div>
            <ul>
                <?php
                    while( $programs -> have_posts() ) : $programs -> the_post();
                    $type = get_the_terms( get_the_ID(), 'program-type' );
                        if( $type[0] -> slug == $term -> slug ) :
                            $start_time = get_field('start_time', false, false);
                            $display_time = new DateTime($start_time);
                            $img = get_field('image');
                ?>
                <li class="card">
                    <a href="<?php the_permalink(); ?>">
                        <picture class="image" style="background-image: url(<?php echo $img['url']; ?>)"></picture>
                        <div class="content">
                            <?php echo tag_wrap(get_the_title(), 'h4'); ?>
                            <ul>
                                <?php echo $start_time ? '<li>时间: '.$display_time->format('g:i A').'</li>' : ''; ?>
                            </ul>
                        </div>
                    </a>
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
</div>

<div class="spacer"></div>

<?php
    get_footer();
?>