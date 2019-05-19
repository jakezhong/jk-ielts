<?php
    /* Template Name: Resources */
    get_header(); the_post();
    $types = get_terms( array(
        'taxonomy'      =>  'resource-type',
        'hide_empty'    =>  false,
        'parent'        =>  0
    ) );
    if( isset($_GET['search']) && $_GET['searcg'] != '' ) {
        $search = $_GET['search'];
    }
    if( isset($_GET['type']) && $_GET['type'] != '' ) {
        $program_type = $_GET['type'];
    }
?>


<?php get_template_part('inc/inc', 'banner'); ?>

<div class="spacer"></div>

<div class="filter">
    <div class="wrap">
        <template>
            <b-form action="<?php the_permalink() ?>" method="get">
                <input type="text" name="search" class="search-bar form-control" aria-describedby="emailHelp" placeholder="搜索关键字..." <?php echo isset($_GET['search']) ? "value='{$_GET['search']}'" : '' ?>>
                <?php
                    if( $types ) :
                ?>
                <select name="type"  class="form-control select-bar">
                    <option value="null" selected>选择一个类别</option>
                    <?php foreach ($types as $type) : ?>
                    <option value="<?php echo $type->slug; ?>"<?php echo $type->slug == $program_type ? ' selected' : ''; ?>><?php echo $type->name; ?></option>
                    <?php endforeach; ?>
                </select>
                <?php
                    endif;
                ?>
                <b-button class="btn" type="submit" variant="primary">搜索</b-button>
            </b-form>
        </template>
    </div>
</div>

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
                'posts_per_page'    =>      -1,
            );

            if( $program_type ) {
                $filter = array(
                    'tax_query' => array(
                        array(
                            'taxonomy'  => 'resource-type',
                            'field'     => 'slug',
                            'terms'     => $program_type,
                        ),
                    ),
                );
                $resource_args = array_merge($resource_args, $filter);
            }

            if( $search ) {
                $resource_args = array_merge($resource_args, array(
                    's' => $search,
                ));
            }

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
                            $information = get_field('information');
                            if( $information ) :
                        ?>
                        <ul>
                            <li><?php echo $information[0]['title'].': '.$information[0]['content']; ?></li>
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