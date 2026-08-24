<?php
defined( 'ABSPATH' ) || exit;
$logo_url = get_stylesheet_directory_uri() . '/assets/images/sage-linen-logo.png';
$shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' );
$account_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : wp_login_url();
?>
    </main>
    <footer class="sl-site-footer">
        <div class="sl-footer-grid">
            <div class="sl-footer-brand"><img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"><p><?php esc_html_e( 'Thoughtful textiles for beautiful everyday living.', 'sage-linen' ); ?></p></div>
            <div><h3><?php esc_html_e( 'Shop', 'sage-linen' ); ?></h3><?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'fallback_cb' => false, 'menu_class' => 'sl-footer-links' ) ); ?><a href="<?php echo esc_url( $shop_url ); ?>"><?php esc_html_e( 'View all products', 'sage-linen' ); ?></a></div>
            <div><h3><?php esc_html_e( 'Customer care', 'sage-linen' ); ?></h3><a href="<?php echo esc_url( $account_url ); ?>"><?php esc_html_e( 'My account', 'sage-linen' ); ?></a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'sage-linen' ); ?></a><a href="<?php echo esc_url( home_url( '/delivery-returns/' ) ); ?>"><?php esc_html_e( 'Delivery & returns', 'sage-linen' ); ?></a></div>
            <div><h3><?php esc_html_e( 'Stay inspired', 'sage-linen' ); ?></h3><p><?php esc_html_e( 'Follow new collections and considered updates from Sage Linen.', 'sage-linen' ); ?></p></div>
        </div>
        <div class="sl-footer-bottom"><span>© <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?></span><span><?php esc_html_e( 'Privacy · Terms · Cookies', 'sage-linen' ); ?></span></div>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
