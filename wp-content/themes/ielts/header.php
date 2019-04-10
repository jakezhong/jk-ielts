<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8" />
    <meta name="MSSmartTagsPreventParsing" content="true" /><!--[if lte IE 9]><meta http-equiv="X-UA-Compatible" content="IE=Edge"/><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title><?php wp_title(); ?></title>
    <link type="text/plain" rel="author" href="../authors.txt" />
    <link type="image/x-icon" rel="shortcut icon" href="../favicon.ico" />
    <?php
    wp_head();
    ?>
</head>
<body <?php body_class(); ?>>
    <div class="site">
        <!-- START HEADER -->
        <header id="header">
            <div class="wrap">
                <nav role="nav">
                    <a class="logo"></a>
                    <?php
                        wp_nav_menu( array(
                            'menu'              => "Main Menu",
                            'menu_class'        => "",
                            'menu_id'           => "main-menu",
                            'container'         => "div",
                            'container_class'   => "desktop",
                            'theme_location'    => "main-menu",
                        ) );
                    ?>
                </nav>
            </div>
        </header>
        <!-- END HEADER -->
        <!-- START MAIN -->
        <main id="main" role="main">
        