<?php
defined( 'ABSPATH' ) || exit;
$logo_url = get_stylesheet_directory_uri() . '/assets/images/sage-linen-logo.png';
$shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' );
$account_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : wp_login_url();
$cart_url = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/cart/' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="sage-linen-site">
    <div class="sl-announcement"><span><?php esc_html_e( 'Premium quality textiles · UK delivery · Trusted service', 'sage-linen' ); ?></span></div>
    <header class="sl-site-header">
        <div class="sl-header-inner">
            <button class="sl-menu-toggle" type="button" aria-controls="sl-mobile-nav" aria-expanded="false"><span></span><span></span><span></span><b class="screen-reader-text"><?php esc_html_e( 'Open menu', 'sage-linen' ); ?></b></button>
            <nav class="sl-desktop-nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'sage-linen' ); ?>">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'fallback_cb' => false, 'menu_class' => 'sl-nav-list' ) ); ?>
                <a href="<?php echo esc_url( $shop_url ); ?>"><?php esc_html_e( 'Shop', 'sage-linen' ); ?></a>
            </nav>
            <a class="sl-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
            <div class="sl-header-actions">
                <button class="sl-search-toggle" type="button" aria-controls="sl-search-panel" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open search', 'sage-linen' ); ?>">⌕</button>
                <a href="<?php echo esc_url( $account_url ); ?>" aria-label="<?php esc_attr_e( 'My account', 'sage-linen' ); ?>">♙</a>
                <a href="<?php echo esc_url( $cart_url ); ?>" class="sl-cart-link" aria-label="<?php esc_attr_e( 'Shopping cart', 'sage-linen' ); ?>">♧<span class="sl-cart-count"><?php echo function_exists( 'WC' ) && WC()->cart ? absint( WC()->cart->get_cart_contents_count() ) : 0; ?></span></a>
            </div>
        </div>
        <div id="sl-search-panel" class="sl-search-panel" hidden>
            <?php get_search_form(); ?>
        </div>
        <nav id="sl-mobile-nav" class="sl-mobile-nav" hidden aria-label="<?php esc_attr_e( 'Mobile navigation', 'sage-linen' ); ?>">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'fallback_cb' => false, 'menu_class' => 'sl-mobile-list' ) ); ?>
            <a href="<?php echo esc_url( $shop_url ); ?>"><?php esc_html_e( 'Shop all', 'sage-linen' ); ?></a>
            <a href="<?php echo esc_url( $account_url ); ?>"><?php esc_html_e( 'Account', 'sage-linen' ); ?></a>
            <a href="<?php echo esc_url( $cart_url ); ?>"><?php esc_html_e( 'Cart', 'sage-linen' ); ?></a>
        </nav>
    </header>
    <main id="main" class="sl-main">
