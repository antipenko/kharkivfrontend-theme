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


    <header>
        <div class="header_inner_wrap">
            <div class="header_inner">
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
                        <?php foundationpress_top_bar_r(); ?>
                    <?php
                        if( $headerButton = get_field('header-button', 'option')) : ?>
                        <li class="header_menu-list_item">
                            <a class="menu-button" href=" <?php echo $headerButton ; ?> " target="_blank">For Sponsor</a>
                        </li>
                    <?php endif; ?>
                </nav>
            </div>
        </div>
    </header>

