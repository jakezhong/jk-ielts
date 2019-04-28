<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8" />
    <meta name="MSSmartTagsPreventParsing" content="true" /><!--[if lte IE 9]><meta http-equiv="X-UA-Compatible" content="IE=Edge"/><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title><?php wp_title(); ?></title>
    <link type="text/plain" rel="author" href="../authors.txt" />
    <link type="image/x-icon" rel="shortcut icon" href="../favicon.ico" />
    <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css"/>
    <?php
    wp_head();
    ?>
</head>
<body <?php body_class(); ?>>
    <div class="site" id="app">
        <!-- START HEADER -->
        <header id="header">
            <div class="wrap">
                <nav id="nav" role="nav">
                    <a href="<? echo get_home_url(); ?>" class="logo">
                        <img src="<?php echo get_home_url(); ?>/ui/svg/logo.svg" alt="">
                    </a>
                    <div class="desktop">
                    <?php
                        wp_nav_menu( array(
                            'menu'              => 'Main Menu',
                            'menu_class'        => '',
                            'menu_id'           => 'main-menu',
                            'container'         => 'div',
                            'container_class'   => 'desktop',
                            'theme_location'    => 'main-menu',
                        ) );
                    ?>
                    </div>
                    <div class="mobile">
                        <h1 class="title"><?php echo get_bloginfo(); ?></h1>
                        <?php
                            wp_nav_menu( array(
                                'menu'              =>  'Main Menu',
                                'menu_class'        =>  '',
                                'menu_id'           =>  'mobile-menu',
                                'container'         =>  'div',
                                'container_class'   =>  'mobile-menu-container',
                                'theme_location'    =>  'main-menu',
                                'walker'            =>  new Menu_Walker(),
                                'link_before'       =>  '<svg class="icon_%3$s"><use xlink:href="../ui/svg/sprites.svg#icon_%3$s"></use></svg>',
                            ) );

                            class Menu_Walker extends Walker_Nav_Menu {
                                function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
                                    $title = $item->title;
                                    $attr_title = $item->attr_title;
                                    $permalink = $item->url;
                                    $output .= "<li class='" .  implode(" ", $item->classes) . "'>";
                                    if( $permalink && $permalink != '#' ) {
                                        $output .= '<a href="' . $permalink . '">';
                                        $output .= '<svg class="icon_'.$attr_title.'"><use xlink:href="../ui/svg/sprites.svg#icon_'.$attr_title.'"></use></svg>';
                                        $output .= $title;
                                        $output .= '</a>';
                                    }

                                }
                            }
                        ?>
                    </div>
                </nav>
            </div>
        </header>
        <!-- END HEADER -->
        <!-- START MAIN -->
        <main id="main" role="main">
        