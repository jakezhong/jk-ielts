<?php
    /* Template Name: Programs */
    get_header(); the_post();
    // if( isset($_GET['program-type']) && $_GET['program-type'] != '' ) {
    //     $program_type = $_GET['program-type'];
    // }
    // if( isset($_GET['search']) && $_GET['searcg'] != '' ) {
    //     $search = $_GET['search'];
    // }
    // $types = get_terms( array(
    //     'taxonomy'      =>  'program-type',
    //     'hide_empty'    =>  false,
    //     'parent'        =>  0
    // ) );
    // $tags = get_terms( array(
    //     'taxonomy'      =>  'program-tag',
    //     'hide_empty'    =>  true,
    //     'parent'        =>  0
    // ) );
?>
<?php get_template_part('inc/inc', 'banner'); ?>

<div class="missions-module">
    <div class="wrapper">
        <div class="spacer"></div>
<!-- 
        <template>
            <div>
                <b-form action="<?php get_permalink(); ?>" method="GET">
                    <input type="text" name="search" placeholder="Search keywords" <?php echo isset($_GET['search']) ? "value='{$_GET['search']}'" : '' ?> />
                    <?php
                        if( $types ) :
                    ?>
                    <b-form-select name="program-type" class="mb-3">
                        <option :value="null">Please select an option</option>
                        <option value="">All</option>
                        <option value="test">刷题</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <?php foreach ($types as $type) : ?>
                        <option value="<?php echo $type->slug; ?>"><?php echo $type->name; ?></option>
                        <?php endforeach; ?>
                    </b-form-select>
                    <?php
                        endif;
                    ?>
                    <b-button type="submit" variant="primary">Submit</b-button>
                </b-form>
            </div>
        </template> -->
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