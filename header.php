<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=10,11">

	<title><?php wp_title(); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<header class="site-header">
	<section class="site-logo">
    	<h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?> <?php bloginfo( 'description' ); ?></a></h1>
    </section>
    <nav class="main-navigation">
    <label for="touch-drop-menu" class="toggle">Menu</label>
    <input type="checkbox" id="touch-drop-menu">
    	<ul>
        	<li class="menu-item-our-brands">
            	<label for="touch-drop-brands" class="toggle">Our Brands</label>
                <!-- <a href="#">Our Brands</a> -->
                <input type="checkbox" id="touch-drop-brands">
                	<?php
					$header_brands_menu_parameters = array(
						'theme_location'	=> 'Header Brands Menu',
						'menu'				=> '',
						'container'			=> '',
						'container-class'	=> 'sub-menu',
						'container-id'		=> '',
						'menu-class'		=> '',
						'menu-id'			=> '',
						'echo'				=> false,
						'fallback_cb'		=> '',
						'before'			=> '',
						'after'				=> '',
						'before'			=> '',
						'link_before'		=> '',
						'link_after'		=> '',
						'items_wrap'		=> '<ul class="sub-menu">%3$s</ul>',
						'depth'				=> 0,
						'walker'			=> ''
					);
					echo wp_nav_menu( $header_brands_menu_parameters );
					?>
            </li>
            <li class="menu-item-press-room">
            	<label for="touch-drop-press" class="toggle">Press Room</label>
                <!-- <a href="#">Press Room</a> -->
                <input type="checkbox" id="touch-drop-press">
                	<?php
					$header_press_menu_parameters = array(
						'theme_location'	=> 'Header Press Menu',
						'menu'				=> '',
						'container'			=> '',
						'container-class'	=> 'sub-menu',
						'container-id'		=> '',
						'menu-class'		=> '',
						'menu-id'			=> '',
						'echo'				=> false,
						'fallback_cb'		=> '',
						'before'			=> '',
						'after'				=> '',
						'before'			=> '',
						'link_before'		=> '',
						'link_after'		=> '',
						'items_wrap'		=> '<ul class="sub-menu">%3$s</ul>',
						'depth'				=> 0,
						'walker'			=> ''
					);
					echo wp_nav_menu( $header_press_menu_parameters );
					?>
            </li>
            <li>
            	<a href="/the-tucker-mission/">Our Story</a>
            </li>
            <li>
            	<a href="/shop/">Shop</a>
            </li>
        </ul>
    </nav>
    <section class="side-navigation">
    	<section class="social-navigation">
        	<a class="facebook" href="http://facebook.com/tuckertoys" target="_blank">Facebook</a>
            <a class="twitter" href="http://twitter.com/tuckertoys" target="_blank">Twitter</a>
            <a class="instagram" href="https://www.instagram.com/tucker_toys/" target="_blank">Instagram</a>
            <a class="pinterest" href="http://www.pinterest.com/tuckertoys/" target="_blank">Pinterest</a>
        </section>
    	<section class="shopping-navigation">
        	<h3>Get Playing,<br>Shop Now!</h3>
            <a class="shopping-cart" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo WC()->cart->cart_contents_count; ?></a>
            <div>
            	<a class="account" href="<?php echo get_option( 'woocommerce_myaccount_page_id' ); ?>">My Account</a>
            	<a class="checkout" href="<?php echo WC()->cart->get_checkout_url(); ?>">Checkout</a>
            </div>
        </section>
    </section>
</header>
	<?php /* echo dslc_hf_get_header(); */ ?>
<main class="site-main">