<?php
/**
 * Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Set up Meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">
	<!-- Remove Microsoft Edge's & Safari phone-email styling -->
	<meta name="format-detection" content="telephone=no,email=no,url=no">

	<!-- Add external fonts below (GoogleFonts / Typekit) -->
<!--    <link href="https://www.dafontfree.net/embed/bWljcm9zb2Z0LXlhaGVpLXJlZ3VsYXImZGF0YS8xL20vMjkwL2NoaW5lc2UubXN5aC50dGY" rel="stylesheet" type="text/css"/>-->

	<?php wp_head(); ?>
</head>

<body <?php body_class('no-outline'); ?>>
<?php wp_body_open(); ?>

<!-- <div class="preloader hide-for-medium">
	<div class="preloader__icon"></div>
</div> -->

<!-- BEGIN of header -->
    <header class="header">
        <div class="grid-container full menu-grid-container">
            <div class="grid-x grid-margin-x">
                <div class="medium-2 small-12 cell">
                    <div class="logo text-center medium-text-left hide-for-small-only">
                        <h1><?php show_custom_logo(); ?><span class="css-clip"><?php echo get_bloginfo( 'name' ); ?></span></h1>
                    </div>
                </div>
                <div class="medium-10 small-12 cell ">
                    <div class="menu-wrapper">
                        <?php if ( has_nav_menu( 'header-menu' ) ) : ?>
                            <div class="title-bar hide-for-medium align-justify" data-responsive-toggle="main-menu" data-hide-for="medium">
                                <div class="logo text-center medium-text-left">
                                    <h1><?php show_custom_logo(); ?><span class="css-clip"><?php echo get_bloginfo( 'name' ); ?></span></h1>
                                </div>
                                <button class="menu-icon" type="button" data-toggle aria-label="Menu" aria-controls="main-menu"><span></span></button>
                            </div>
                            <nav class="top-bar" id="main-menu">
                                <?php wp_nav_menu( array(
                                    'theme_location' => 'header-menu',
                                    'menu_class'     => 'menu header-menu',
                                    'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown" data-submenu-toggle="true" data-multi-open="false" data-close-on-click-inside="false">%3$s</ul>',
                                    'walker'         => new Foundation_Navigation()
                                ) ); ?>
                            </nav>
                                <div class="header__links-wrapper flex-container align-middle hide-for-small-only">
                                    <?php if (have_rows('header_links', 'options')) : ?>
                                        <ul class="header__links">
                                            <?php while (have_rows('header_links', 'options')) : the_row();
                                                $header_link = get_sub_field('header_link');
                                                ?>
                                                <li class="header__link">
                                                    <a href="<?=$header_link['url']?>"><?=$header_link['title']?></a>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                    <a href="" class="search-btn fa" data-btn="search"></a>
                                    <?php get_search_form(); ?>
                                </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>


<!-- END of header -->