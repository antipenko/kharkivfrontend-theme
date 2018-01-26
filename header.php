<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php $responsiveToggleId = get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ? 'mobile-menu' : 'site-navigation' ?>
<!--	<header class="site-header">-->
<!--		<div class="title-bar" data-responsive-toggle="site-navigation">-->
<!--			<div class="title-bar-title">-->
<!--				<!--<a href="--><?php ///*echo esc_url( home_url( '/' ) ); */?><!--" rel="home">-->
<!--					--><?php ///*if(has_custom_logo()) : */?>
<!--						--><?php
///*							$custom_logo_id = get_theme_mod( 'custom_logo' );
//							$ima    ge = wp_get_attachment_image_src( $custom_logo_id , 'full' );
//						 */?>
<!--					 	<img src="--><?php ///*echo $image[0] */?><!--" alt="--><?php ///*bloginfo( 'name' ); */?><!--" />-->
<!--					--><?php ///*else : */?>
<!--						--><?php ///*bloginfo( 'name' ); */?>
<!--					--><?php ///*endif */?>
<!--				</a>-->-->
<!--			</div>-->
<!--			<div class="title-bar-right">-->
<!--				<button class="menu-icon" type="button" data-toggle="--><?php //echo $responsiveToggleId ?><!--"></button>-->
<!--			</div>-->
<!--		</div>-->
<!---->
<!--		<nav id="site-navigation" class="main-navigation top-bar">-->
<!--			<div class="top-bar-left">-->
<!--				<ul class="menu">-->
<!--					<li class="home">-->
<!--						<a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">-->
<!--							--><?php //if(has_custom_logo()) : ?>
<!--								--><?php
//									$custom_logo_id = get_theme_mod( 'custom_logo' );
//									$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
//								 ?>
<!--							 	<img src="--><?php //echo $image[0] ?><!--" alt="--><?php //bloginfo( 'name' ); ?><!--" />-->
<!--							--><?php //else : ?>
<!--								--><?php //bloginfo( 'name' ); ?>
<!--							--><?php //endif ?>
<!--						</a>-->
<!--					</li>-->
<!--				</ul>-->
<!--			</div>-->
<!--			<div class="top-bar-right">-->
<!--				--><?php //foundationpress_top_bar_r(); ?>
<!---->
<!--				--><?php //if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
<!--					--><?php //get_template_part( 'template-parts/mobile-top-bar' ); ?>
<!--				--><?php //endif; ?>
<!--			</div>-->
<!--		</nav>-->
<!--	</header>-->

    <header>
        <div class="header_inner_wrap">
            <div class="header_inner">
<!--                <a class="scroll-link logo" href="#intro"><img class="logo-img" alt="logo" src="/img/logo-small.png"/></a>-->

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="scroll-link logo" rel="home">
                    <?php if(has_custom_logo()) : ?>
                        <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
                        <img src="<?php echo $image[0] ?>" class="logo-img" alt="<?php bloginfo( 'name' ); ?>" />
                    <?php else : ?>
                        <?php bloginfo( 'name' ); ?>
                    <?php endif ?>
                </a>

                <button class="toggle-menu-button"></button>
                <nav class="header_menu" id="header_menu">
<!--                        <li class="header_menu-list_item"><a class="scroll_spy_link scroll-link header_menu-list_item-link " href="#speakers">speakers</a></li>-->
<!--                        <li class="header_menu-list_item"><a class="scroll_spy_link scroll-link header_menu-list_item-link " href="#agenda">agenda</a></li>-->
<!--                        <li class="header_menu-list_item"><a class="scroll_spy_link scroll-link header_menu-list_item-link " href="#map">location</a></li>-->
<!--                        <li class="header_menu-list_item"><a class="menu-button" href="#" target="_blank">Get Ticket</a></li>-->
                        <?php foundationpress_top_bar_r(); ?>
                </nav>
            </div>
        </div>
    </header>

