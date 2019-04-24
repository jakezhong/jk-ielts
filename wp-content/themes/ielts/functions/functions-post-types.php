<?php

/*
// Sample Register Post
$postName         = 'Newsroom'; // Name of post type
$postNameSlug     = 'news-post'; // Name of post type
$postNameSingular = 'News Post'; // Singular Name
$postNamePlural   = 'News Posts'; // Plural Name
$postDashIcon     = 'dashicons-admin-post'; // Define Dashicon | Commonly Used: News = dashicons-welcome-widgets-menus, Clients - dashicons-businessman, Team - dashicons-groups, Event - dashicons-calendar, Full List - https://developer.wordpress.org/resource/dashicons/

register_post_type(
	$postNameSlug, array(
		'labels' => array(
	       'name' => $postName,
	       'singular_name' => $postNameSingular,
	       'add_new' => 'Add ' . $postNameSingular,
	       'add_new_item' => 'Add ' . $postNameSingular,
	       'edit_item' => 'Edit ' . $postNameSingular,
	       'search_items' => 'Search ' . $postNamePlural,
	       'not_found' => 'No ' . $postNamePlural. ' found',
	       'not_found_in_trash' => 'No ' . $postNamePlural. ' found in trash'
	    ),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
        'menu_icon' => $postDashIcon,
		'hierarchical' => true,
		'rest_api' => true,
		'rewrite' => array( 'slug' => $postNameSlug ),
		'query_var' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => false,
		'has_archive' => false,
		'supports' => array(
    		'title',
    		'editor',
    		'author',
    		'thumbnail', //featured image, theme must also support thumbnails
    		'excerpt',
    		'trackbacks',
    		'custom-fields',
    		'comments',
    		'revisions',
    		'page-attributes' //template and menu order, hierarchical must be true
		)
	)
);

// Sample Register Taxonomy
$taxonomyName         = 'News Type';
$taxonomyNameSlug     = 'news-type';
$taxonomyNameSingular = 'News Type';
$taxonomyNamePlural   = 'News Types';
register_taxonomy(
	$taxonomyNameSlug, array( $postNameSlug ), array(
		'hierarchical' => true, // Category or Tag functionality
		'query_var' => true,
		'rewrite' => array( 'slug' => $taxonomyNameSlug ),
		'labels' => array(
		     'name' => $taxonomyName,
		     'singular_name' => $taxonomyNameSingular,
		     'search_items' => 'Search ' . $taxonomyNamePlural,
		     'popular_items' => 'Popular ' . $taxonomyNamePlural,
		     'all_items' => 'All ' . $taxonomyNamePlural,
		     'parent_item' => null,
		     'parent_item_colon' => null,
		     'edit_item' => 'Edit ' . $taxonomyNameSingular,
		     'update_item' => 'Update ' . $taxonomyNameSingular,
		     'add_new_item' => 'Add New ' . $taxonomyNameSingular,
		     'new_item_name' => 'New ' . $taxonomyNameSingular,
		     'separate_items_with_commas' => 'Separate ' . $taxonomyNamePlural . ' with commas',
		     'add_or_remove_items' => 'Add or remove ' . $taxonomyNamePlural,
		     'choose_from_most_used' => 'Choose from most used ' . $taxonomyNamePlural
		 )
	)
);


// Change Capitlites for Members Plugin
// Repalce 'capability_type' => 'post', with this
'map_meta_cap' => true,
'capability_type' => $postNameSlug,
'capabilities' => array(
	'edit_post'          => 'edit_'.$postNameSlug, 
	'read_post'          => 'read_'.$postNameSlug, 
	'delete_post'        => 'delete_'.$postNameSlug, 
	'edit_posts'         => 'edit_'.$postNameSlug, 
	'edit_others_posts'  => 'edit_others_'.$postNameSlug, 
	'publish_posts'      => 'publish_'.$postNameSlug',       
	'read_private_posts' => 'read_private_'.$postNameSlug, 
	'create_posts'       => 'edit_'.$postNameSlug, 
),
*/


// // Sample Register Post
// $postName         = '时间表'; // Name of post type
// $postNameSlug     = 'schedule'; // Name of post type
// $postNameSingular = '时间表'; // Singular Name
// $postNamePlural   = '时间表'; // Plural Name
// $postDashIcon     = 'dashicons-calendar-alt'; // Define Dashicon | Commonly Used: News = dashicons-welcome-widgets-menus, Clients - dashicons-businessman, Team - dashicons-groups, Event - dashicons-calendar, Full List - https://developer.wordpress.org/resource/dashicons/

// register_post_type(
// 	$postNameSlug, array(
// 		'labels' => array(
// 	       'name' => $postName,
// 	       'singular_name' => $postNameSingular,
// 	       'add_new' => 'Add ' . $postNameSingular,
// 	       'add_new_item' => 'Add ' . $postNameSingular,
// 	       'edit_item' => 'Edit ' . $postNameSingular,
// 	       'search_items' => 'Search ' . $postNamePlural,
// 	       'not_found' => 'No ' . $postNamePlural. ' found',
// 	       'not_found_in_trash' => 'No ' . $postNamePlural. ' found in trash'
// 	    ),
// 		'public' => true,
// 		'show_ui' => true,
// 		'capability_type' => 'post',
//         'menu_icon' => $postDashIcon,
// 		'hierarchical' => true,
// 		'rest_api' => true,
// 		'rewrite' => array( 'slug' => $postNameSlug ),
// 		'query_var' => true,
// 		'show_in_nav_menus' => true,
// 		'exclude_from_search' => false,
// 		'has_archive' => false,
// 		'supports' => array(
//     		'title',
//     		'editor',
//     		'author',
//     		'thumbnail', //featured image, theme must also support thumbnails
//     		'excerpt',
//     		'trackbacks',
//     		'custom-fields',
//     		'comments',
//     		'revisions',
//     		'page-attributes' //template and menu order, hierarchical must be true
// 		)
// 	)
// );

// // Sample Register Post
// $postName         = '任务表'; // Name of post type
// $postNameSlug     = 'missions'; // Name of post type
// $postNameSingular = '任务表'; // Singular Name
// $postNamePlural   = '任务表'; // Plural Name
// $postDashIcon     = 'dashicons-list-view'; // Define Dashicon | Commonly Used: News = dashicons-welcome-widgets-menus, Clients - dashicons-businessman, Team - dashicons-groups, Event - dashicons-calendar, Full List - https://developer.wordpress.org/resource/dashicons/

// register_post_type(
// 	$postNameSlug, array(
// 		'labels' => array(
// 	       'name' => $postName,
// 	       'singular_name' => $postNameSingular,
// 	       'add_new' => 'Add ' . $postNameSingular,
// 	       'add_new_item' => 'Add ' . $postNameSingular,
// 	       'edit_item' => 'Edit ' . $postNameSingular,
// 	       'search_items' => 'Search ' . $postNamePlural,
// 	       'not_found' => 'No ' . $postNamePlural. ' found',
// 	       'not_found_in_trash' => 'No ' . $postNamePlural. ' found in trash'
// 	    ),
// 		'public' => true,
// 		'show_ui' => true,
// 		'capability_type' => 'post',
//         'menu_icon' => $postDashIcon,
// 		'hierarchical' => true,
// 		'rest_api' => true,
// 		'rewrite' => array( 'slug' => $postNameSlug ),
// 		'query_var' => true,
// 		'show_in_nav_menus' => true,
// 		'exclude_from_search' => false,
// 		'has_archive' => false,
// 		'supports' => array(
//     		'title',
//     		'editor',
//     		'author',
//     		'thumbnail', //featured image, theme must also support thumbnails
//     		'excerpt',
//     		'trackbacks',
//     		'custom-fields',
//     		'comments',
//     		'revisions',
//     		'page-attributes' //template and menu order, hierarchical must be true
// 		)
// 	)
// );

// // Sample Register Post
// $postName         = '学习计划'; // Name of post type
// $postNameSlug     = 'plan'; // Name of post type
// $postNameSingular = '学习计划'; // Singular Name
// $postNamePlural   = '学习计划'; // Plural Name
// $postDashIcon     = 'dashicons-excerpt-view'; // Define Dashicon | Commonly Used: News = dashicons-welcome-widgets-menus, Clients - dashicons-businessman, Team - dashicons-groups, Event - dashicons-calendar, Full List - https://developer.wordpress.org/resource/dashicons/

// register_post_type(
// 	$postNameSlug, array(
// 		'labels' => array(
// 	       'name' => $postName,
// 	       'singular_name' => $postNameSingular,
// 	       'add_new' => 'Add ' . $postNameSingular,
// 	       'add_new_item' => 'Add ' . $postNameSingular,
// 	       'edit_item' => 'Edit ' . $postNameSingular,
// 	       'search_items' => 'Search ' . $postNamePlural,
// 	       'not_found' => 'No ' . $postNamePlural. ' found',
// 	       'not_found_in_trash' => 'No ' . $postNamePlural. ' found in trash'
// 	    ),
// 		'public' => true,
// 		'show_ui' => true,
// 		'capability_type' => 'post',
//         'menu_icon' => $postDashIcon,
// 		'hierarchical' => true,
// 		'rest_api' => true,
// 		'rewrite' => array( 'slug' => $postNameSlug ),
// 		'query_var' => true,
// 		'show_in_nav_menus' => true,
// 		'exclude_from_search' => false,
// 		'has_archive' => false,
// 		'supports' => array(
//     		'title',
//     		'editor',
//     		'author',
//     		'thumbnail', //featured image, theme must also support thumbnails
//     		'excerpt',
//     		'trackbacks',
//     		'custom-fields',
//     		'comments',
//     		'revisions',
//     		'page-attributes' //template and menu order, hierarchical must be true
// 		)
// 	)
// );

// Sample Register Post
$postName         = '时间表'; // Name of post type
$postNameSlug     = 'schedule'; // Name of post type
$postNameSingular = '时间表'; // Singular Name
$postNamePlural   = '时间表'; // Plural Name
$postDashIcon     = 'dashicons-pressthis'; // Define Dashicon | Commonly Used: News = dashicons-welcome-widgets-menus, Clients - dashicons-businessman, Team - dashicons-groups, Event - dashicons-calendar, Full List - https://developer.wordpress.org/resource/dashicons/

register_post_type(
	$postNameSlug, array(
		'labels' => array(
	       'name' => $postName,
	       'singular_name' => $postNameSingular,
	       'add_new' => 'Add ' . $postNameSingular,
	       'add_new_item' => 'Add ' . $postNameSingular,
	       'edit_item' => 'Edit ' . $postNameSingular,
	       'search_items' => 'Search ' . $postNamePlural,
	       'not_found' => 'No ' . $postNamePlural. ' found',
	       'not_found_in_trash' => 'No ' . $postNamePlural. ' found in trash'
	    ),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
        'menu_icon' => $postDashIcon,
		'hierarchical' => true,
		'rest_api' => true,
		'rewrite' => array( 'slug' => $postNameSlug ),
		'query_var' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => false,
		'has_archive' => false,
		'supports' => array(
    		'title',
    		'editor',
    		'author',
    		'thumbnail', //featured image, theme must also support thumbnails
    		'excerpt',
    		'trackbacks',
    		'custom-fields',
    		'comments',
    		'revisions',
    		'page-attributes' //template and menu order, hierarchical must be true
		)
	)
);

// Sample Register Post
$postName         = '项目'; // Name of post type
$postNameSlug     = 'program'; // Name of post type
$postNameSingular = '项目'; // Singular Name
$postNamePlural   = '项目'; // Plural Name
$postDashIcon     = 'dashicons-pressthis'; // Define Dashicon | Commonly Used: News = dashicons-welcome-widgets-menus, Clients - dashicons-businessman, Team - dashicons-groups, Event - dashicons-calendar, Full List - https://developer.wordpress.org/resource/dashicons/

register_post_type(
	$postNameSlug, array(
		'labels' => array(
	       'name' => $postName,
	       'singular_name' => $postNameSingular,
	       'add_new' => 'Add ' . $postNameSingular,
	       'add_new_item' => 'Add ' . $postNameSingular,
	       'edit_item' => 'Edit ' . $postNameSingular,
	       'search_items' => 'Search ' . $postNamePlural,
	       'not_found' => 'No ' . $postNamePlural. ' found',
	       'not_found_in_trash' => 'No ' . $postNamePlural. ' found in trash'
	    ),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
        'menu_icon' => $postDashIcon,
		'hierarchical' => true,
		'rest_api' => true,
		'rewrite' => array( 'slug' => $postNameSlug ),
		'query_var' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => false,
		'has_archive' => false,
		'supports' => array(
    		'title',
    		'editor',
    		'author',
    		'thumbnail', //featured image, theme must also support thumbnails
    		'excerpt',
    		'trackbacks',
    		'custom-fields',
    		'comments',
    		'revisions',
    		'page-attributes' //template and menu order, hierarchical must be true
		)
	)
);

// Sample Register Taxonomy
$taxonomyName         = '项目分类';
$taxonomyNameSlug     = 'program-type';
$taxonomyNameSingular = '项目分类';
$taxonomyNamePlural   = '项目分类';
register_taxonomy(
	$taxonomyNameSlug, array( $postNameSlug ), array(
		'hierarchical' => true, // Category or Tag functionality
		'query_var' => true,
		'rewrite' => array( 'slug' => $taxonomyNameSlug ),
		'labels' => array(
		     'name' => $taxonomyName,
		     'singular_name' => $taxonomyNameSingular,
		     'search_items' => 'Search ' . $taxonomyNamePlural,
		     'popular_items' => 'Popular ' . $taxonomyNamePlural,
		     'all_items' => 'All ' . $taxonomyNamePlural,
		     'parent_item' => null,
		     'parent_item_colon' => null,
		     'edit_item' => 'Edit ' . $taxonomyNameSingular,
		     'update_item' => 'Update ' . $taxonomyNameSingular,
		     'add_new_item' => 'Add New ' . $taxonomyNameSingular,
		     'new_item_name' => 'New ' . $taxonomyNameSingular,
		     'separate_items_with_commas' => 'Separate ' . $taxonomyNamePlural . ' with commas',
		     'add_or_remove_items' => 'Add or remove ' . $taxonomyNamePlural,
		     'choose_from_most_used' => 'Choose from most used ' . $taxonomyNamePlural
		 )
	)
);

// Sample Register Post
$postName         = '任务步骤'; // Name of post type
$postNameSlug     = 'step'; // Name of post type
$postNameSingular = '任务步骤'; // Singular Name
$postNamePlural   = '任务步骤'; // Plural Name
$postDashIcon     = 'dashicons-pressthis'; // Define Dashicon | Commonly Used: News = dashicons-welcome-widgets-menus, Clients - dashicons-businessman, Team - dashicons-groups, Event - dashicons-calendar, Full List - https://developer.wordpress.org/resource/dashicons/

register_post_type(
	$postNameSlug, array(
		'labels' => array(
	       'name' => $postName,
	       'singular_name' => $postNameSingular,
	       'add_new' => 'Add ' . $postNameSingular,
	       'add_new_item' => 'Add ' . $postNameSingular,
	       'edit_item' => 'Edit ' . $postNameSingular,
	       'search_items' => 'Search ' . $postNamePlural,
	       'not_found' => 'No ' . $postNamePlural. ' found',
	       'not_found_in_trash' => 'No ' . $postNamePlural. ' found in trash'
	    ),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
        'menu_icon' => $postDashIcon,
		'hierarchical' => true,
		'rest_api' => true,
		'rewrite' => array( 'slug' => $postNameSlug ),
		'query_var' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => false,
		'has_archive' => false,
		'supports' => array(
    		'title',
    		'editor',
    		'author',
    		'thumbnail', //featured image, theme must also support thumbnails
    		'excerpt',
    		'trackbacks',
    		'custom-fields',
    		'comments',
    		'revisions',
    		'page-attributes' //template and menu order, hierarchical must be true
		)
	)
);

// Sample Register Post
$postName         = '任务'; // Name of post type
$postNameSlug     = 'mission'; // Name of post type
$postNameSingular = '任务'; // Singular Name
$postNamePlural   = '任务'; // Plural Name
$postDashIcon     = 'dashicons-pressthis'; // Define Dashicon | Commonly Used: News = dashicons-welcome-widgets-menus, Clients - dashicons-businessman, Team - dashicons-groups, Event - dashicons-calendar, Full List - https://developer.wordpress.org/resource/dashicons/

register_post_type(
	$postNameSlug, array(
		'labels' => array(
	       'name' => $postName,
	       'singular_name' => $postNameSingular,
	       'add_new' => 'Add ' . $postNameSingular,
	       'add_new_item' => 'Add ' . $postNameSingular,
	       'edit_item' => 'Edit ' . $postNameSingular,
	       'search_items' => 'Search ' . $postNamePlural,
	       'not_found' => 'No ' . $postNamePlural. ' found',
	       'not_found_in_trash' => 'No ' . $postNamePlural. ' found in trash'
	    ),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
        'menu_icon' => $postDashIcon,
		'hierarchical' => true,
		'rest_api' => true,
		'rewrite' => array( 'slug' => $postNameSlug ),
		'query_var' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => false,
		'has_archive' => false,
		'supports' => array(
    		'title',
    		'editor',
    		'author',
    		'thumbnail', //featured image, theme must also support thumbnails
    		'excerpt',
    		'trackbacks',
    		'custom-fields',
    		'comments',
    		'revisions',
    		'page-attributes' //template and menu order, hierarchical must be true
		)
	)
);

// Sample Register Taxonomy
$taxonomyName         = '任务分类';
$taxonomyNameSlug     = 'mission-type';
$taxonomyNameSingular = '任务分类';
$taxonomyNamePlural   = '任务分类';
register_taxonomy(
	$taxonomyNameSlug, array( $postNameSlug ), array(
		'hierarchical' => true, // Category or Tag functionality
		'query_var' => true,
		'rewrite' => array( 'slug' => $taxonomyNameSlug ),
		'labels' => array(
		     'name' => $taxonomyName,
		     'singular_name' => $taxonomyNameSingular,
		     'search_items' => 'Search ' . $taxonomyNamePlural,
		     'popular_items' => 'Popular ' . $taxonomyNamePlural,
		     'all_items' => 'All ' . $taxonomyNamePlural,
		     'parent_item' => null,
		     'parent_item_colon' => null,
		     'edit_item' => 'Edit ' . $taxonomyNameSingular,
		     'update_item' => 'Update ' . $taxonomyNameSingular,
		     'add_new_item' => 'Add New ' . $taxonomyNameSingular,
		     'new_item_name' => 'New ' . $taxonomyNameSingular,
		     'separate_items_with_commas' => 'Separate ' . $taxonomyNamePlural . ' with commas',
		     'add_or_remove_items' => 'Add or remove ' . $taxonomyNamePlural,
		     'choose_from_most_used' => 'Choose from most used ' . $taxonomyNamePlural
		 )
	)
);

// Sample Register Taxonomy
$taxonomyName         = '任务标签';
$taxonomyNameSlug     = 'mission-tag';
$taxonomyNameSingular = '任务标签';
$taxonomyNamePlural   = '任务标签';
register_taxonomy(
	$taxonomyNameSlug, array( $postNameSlug ), array(
		'hierarchical' => true, // Category or Tag functionality
		'query_var' => true,
		'rewrite' => array( 'slug' => $taxonomyNameSlug ),
		'labels' => array(
		     'name' => $taxonomyName,
		     'singular_name' => $taxonomyNameSingular,
		     'search_items' => 'Search ' . $taxonomyNamePlural,
		     'popular_items' => 'Popular ' . $taxonomyNamePlural,
		     'all_items' => 'All ' . $taxonomyNamePlural,
		     'parent_item' => null,
		     'parent_item_colon' => null,
		     'edit_item' => 'Edit ' . $taxonomyNameSingular,
		     'update_item' => 'Update ' . $taxonomyNameSingular,
		     'add_new_item' => 'Add New ' . $taxonomyNameSingular,
		     'new_item_name' => 'New ' . $taxonomyNameSingular,
		     'separate_items_with_commas' => 'Separate ' . $taxonomyNamePlural . ' with commas',
		     'add_or_remove_items' => 'Add or remove ' . $taxonomyNamePlural,
		     'choose_from_most_used' => 'Choose from most used ' . $taxonomyNamePlural
		 )
	)
);
// Sample Register Post
$postName         = '学习计划'; // Name of post type
$postNameSlug     = 'plan'; // Name of post type
$postNameSingular = '学习计划'; // Singular Name
$postNamePlural   = '学习计划'; // Plural Name
$postDashIcon     = 'dashicons-pressthis'; // Define Dashicon | Commonly Used: News = dashicons-welcome-widgets-menus, Clients - dashicons-businessman, Team - dashicons-groups, Event - dashicons-calendar, Full List - https://developer.wordpress.org/resource/dashicons/

register_post_type(
	$postNameSlug, array(
		'labels' => array(
	       'name' => $postName,
	       'singular_name' => $postNameSingular,
	       'add_new' => 'Add ' . $postNameSingular,
	       'add_new_item' => 'Add ' . $postNameSingular,
	       'edit_item' => 'Edit ' . $postNameSingular,
	       'search_items' => 'Search ' . $postNamePlural,
	       'not_found' => 'No ' . $postNamePlural. ' found',
	       'not_found_in_trash' => 'No ' . $postNamePlural. ' found in trash'
	    ),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
        'menu_icon' => $postDashIcon,
		'hierarchical' => true,
		'rest_api' => true,
		'rewrite' => array( 'slug' => $postNameSlug ),
		'query_var' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => false,
		'has_archive' => false,
		'supports' => array(
    		'title',
    		'editor',
    		'author',
    		'thumbnail', //featured image, theme must also support thumbnails
    		'excerpt',
    		'trackbacks',
    		'custom-fields',
    		'comments',
    		'revisions',
    		'page-attributes' //template and menu order, hierarchical must be true
		)
	)
);

// Sample Register Taxonomy
$taxonomyName         = '学习计划分类';
$taxonomyNameSlug     = 'plan-type';
$taxonomyNameSingular = '学习计划分类';
$taxonomyNamePlural   = '学习计划分类';
register_taxonomy(
	$taxonomyNameSlug, array( $postNameSlug ), array(
		'hierarchical' => true, // Category or Tag functionality
		'query_var' => true,
		'rewrite' => array( 'slug' => $taxonomyNameSlug ),
		'labels' => array(
		     'name' => $taxonomyName,
		     'singular_name' => $taxonomyNameSingular,
		     'search_items' => 'Search ' . $taxonomyNamePlural,
		     'popular_items' => 'Popular ' . $taxonomyNamePlural,
		     'all_items' => 'All ' . $taxonomyNamePlural,
		     'parent_item' => null,
		     'parent_item_colon' => null,
		     'edit_item' => 'Edit ' . $taxonomyNameSingular,
		     'update_item' => 'Update ' . $taxonomyNameSingular,
		     'add_new_item' => 'Add New ' . $taxonomyNameSingular,
		     'new_item_name' => 'New ' . $taxonomyNameSingular,
		     'separate_items_with_commas' => 'Separate ' . $taxonomyNamePlural . ' with commas',
		     'add_or_remove_items' => 'Add or remove ' . $taxonomyNamePlural,
		     'choose_from_most_used' => 'Choose from most used ' . $taxonomyNamePlural
		 )
	)
);

// Sample Register Post
$postName         = '参考资料'; // Name of post type
$postNameSlug     = 'resource'; // Name of post type
$postNameSingular = '参考资料'; // Singular Name
$postNamePlural   = '参考资料'; // Plural Name
$postDashIcon     = 'dashicons-pressthis'; // Define Dashicon | Commonly Used: News = dashicons-welcome-widgets-menus, Clients - dashicons-businessman, Team - dashicons-groups, Event - dashicons-calendar, Full List - https://developer.wordpress.org/resource/dashicons/

register_post_type(
	$postNameSlug, array(
		'labels' => array(
	       'name' => $postName,
	       'singular_name' => $postNameSingular,
	       'add_new' => 'Add ' . $postNameSingular,
	       'add_new_item' => 'Add ' . $postNameSingular,
	       'edit_item' => 'Edit ' . $postNameSingular,
	       'search_items' => 'Search ' . $postNamePlural,
	       'not_found' => 'No ' . $postNamePlural. ' found',
	       'not_found_in_trash' => 'No ' . $postNamePlural. ' found in trash'
	    ),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
        'menu_icon' => $postDashIcon,
		'hierarchical' => true,
		'rest_api' => true,
		'rewrite' => array( 'slug' => $postNameSlug ),
		'query_var' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => false,
		'has_archive' => false,
		'supports' => array(
    		'title',
    		'editor',
    		'author',
    		'thumbnail', //featured image, theme must also support thumbnails
    		'excerpt',
    		'trackbacks',
    		'custom-fields',
    		'comments',
    		'revisions',
    		'page-attributes' //template and menu order, hierarchical must be true
		)
	)
);

// Sample Register Taxonomy
$taxonomyName         = '参考资料分类';
$taxonomyNameSlug     = 'resource-type';
$taxonomyNameSingular = '参考资料分类';
$taxonomyNamePlural   = '参考资料分类';
register_taxonomy(
	$taxonomyNameSlug, array( $postNameSlug ), array(
		'hierarchical' => true, // Category or Tag functionality
		'query_var' => true,
		'rewrite' => array( 'slug' => $taxonomyNameSlug ),
		'labels' => array(
		     'name' => $taxonomyName,
		     'singular_name' => $taxonomyNameSingular,
		     'search_items' => 'Search ' . $taxonomyNamePlural,
		     'popular_items' => 'Popular ' . $taxonomyNamePlural,
		     'all_items' => 'All ' . $taxonomyNamePlural,
		     'parent_item' => null,
		     'parent_item_colon' => null,
		     'edit_item' => 'Edit ' . $taxonomyNameSingular,
		     'update_item' => 'Update ' . $taxonomyNameSingular,
		     'add_new_item' => 'Add New ' . $taxonomyNameSingular,
		     'new_item_name' => 'New ' . $taxonomyNameSingular,
		     'separate_items_with_commas' => 'Separate ' . $taxonomyNamePlural . ' with commas',
		     'add_or_remove_items' => 'Add or remove ' . $taxonomyNamePlural,
		     'choose_from_most_used' => 'Choose from most used ' . $taxonomyNamePlural
		 )
	)
);

// Sample Register Post
$postName         = '打卡'; // Name of post type
$postNameSlug     = 'report'; // Name of post type
$postNameSingular = '打卡'; // Singular Name
$postNamePlural   = '打卡'; // Plural Name
$postDashIcon     = 'dashicons-pressthis'; // Define Dashicon | Commonly Used: News = dashicons-welcome-widgets-menus, Clients - dashicons-businessman, Team - dashicons-groups, Event - dashicons-calendar, Full List - https://developer.wordpress.org/resource/dashicons/

register_post_type(
	$postNameSlug, array(
		'labels' => array(
	       'name' => $postName,
	       'singular_name' => $postNameSingular,
	       'add_new' => 'Add ' . $postNameSingular,
	       'add_new_item' => 'Add ' . $postNameSingular,
	       'edit_item' => 'Edit ' . $postNameSingular,
	       'search_items' => 'Search ' . $postNamePlural,
	       'not_found' => 'No ' . $postNamePlural. ' found',
	       'not_found_in_trash' => 'No ' . $postNamePlural. ' found in trash'
	    ),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
        'menu_icon' => $postDashIcon,
		'hierarchical' => true,
		'rest_api' => true,
		'rewrite' => array( 'slug' => $postNameSlug ),
		'query_var' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => false,
		'has_archive' => false,
		'supports' => array(
    		'title',
    		'editor',
    		'author',
    		'thumbnail', //featured image, theme must also support thumbnails
    		'excerpt',
    		'trackbacks',
    		'custom-fields',
    		'comments',
    		'revisions',
    		'page-attributes' //template and menu order, hierarchical must be true
		)
	)
);

// Sample Register Taxonomy
$taxonomyName         = '打卡分类';
$taxonomyNameSlug     = 'report-type';
$taxonomyNameSingular = '打卡分类';
$taxonomyNamePlural   = '打卡分类';
register_taxonomy(
	$taxonomyNameSlug, array( $postNameSlug ), array(
		'hierarchical' => true, // Category or Tag functionality
		'query_var' => true,
		'rewrite' => array( 'slug' => $taxonomyNameSlug ),
		'labels' => array(
		     'name' => $taxonomyName,
		     'singular_name' => $taxonomyNameSingular,
		     'search_items' => 'Search ' . $taxonomyNamePlural,
		     'popular_items' => 'Popular ' . $taxonomyNamePlural,
		     'all_items' => 'All ' . $taxonomyNamePlural,
		     'parent_item' => null,
		     'parent_item_colon' => null,
		     'edit_item' => 'Edit ' . $taxonomyNameSingular,
		     'update_item' => 'Update ' . $taxonomyNameSingular,
		     'add_new_item' => 'Add New ' . $taxonomyNameSingular,
		     'new_item_name' => 'New ' . $taxonomyNameSingular,
		     'separate_items_with_commas' => 'Separate ' . $taxonomyNamePlural . ' with commas',
		     'add_or_remove_items' => 'Add or remove ' . $taxonomyNamePlural,
		     'choose_from_most_used' => 'Choose from most used ' . $taxonomyNamePlural
		 )
	)
);