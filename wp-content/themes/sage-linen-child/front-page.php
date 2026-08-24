<?php
/**
 * Premium Sage Linen homepage.
 *
 * Uses native WordPress and WooCommerce queries so store data remains dynamic.
 */

defined( 'ABSPATH' ) || exit;

get_header();

$shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' );
$categories = function_exists( 'get_terms' ) ? get_terms( array(
    'taxonomy'   => 'product_cat',
    'hide_empty' => true,
    'number'     => 4,
    'parent'     => 0,
) ) : array();
$products = function_exists( 'wc_get_products' ) ? wc_get_products( array(
    'status'  => 'publish',
    'limit'   => 4,
    'featured'=> true,
    'return'  => 'objects',
) ) : array();
if ( empty( $products ) && function_exists( 'wc_get_products' ) ) {
    $products = wc_get_products( array( 'status' => 'publish', 'limit' => 4, 'return' => 'objects' ) );
}?>
<div class="sage-linen-home">
    <section class="sl-hero">
        <div class="sl-hero__content">
            <p class="sl-eyebrow"><?php esc_html_e( 'Timeless textiles for everyday living', 'sage-linen' ); ?></p>
            <h1><?php esc_html_e( 'Elevate every space with exceptional linen.', 'sage-linen' ); ?></h1>
            <p class="sl-lede"><?php esc_html_e( 'Thoughtfully selected textiles designed for comfort, quality and timeless style.', 'sage-linen' ); ?></p>
            <div class="sl-actions">
                <a class="sl-button sl-button--dark" href="<?php echo esc_url( $shop_url ); ?>"><?php esc_html_e( 'Shop collection', 'sage-linen' ); ?></a>
                <a class="sl-button sl-button--light" href="#sl-collections"><?php esc_html_e( 'Explore our range', 'sage-linen' ); ?></a>
            </div>
        </div>
        <div class="sl-hero__image" role="img" aria-label="<?php esc_attr_e( 'Natural linen textile detail', 'sage-linen' ); ?>"></div>
    </section>

    <section class="sl-trust" aria-label="<?php esc_attr_e( 'Sage Linen benefits', 'sage-linen' ); ?>">
        <div><strong><?php esc_html_e( 'Premium quality', 'sage-linen' ); ?></strong><span><?php esc_html_e( 'Selected to last beautifully.', 'sage-linen' ); ?></span></div>
        <div><strong><?php esc_html_e( 'Made for comfort', 'sage-linen' ); ?></strong><span><?php esc_html_e( 'Soft, considered essentials.', 'sage-linen' ); ?></span></div>
        <div><strong><?php esc_html_e( 'UK-based service', 'sage-linen' ); ?></strong><span><?php esc_html_e( 'Reliable support and delivery.', 'sage-linen' ); ?></span></div>
    </section>

    <section id="sl-collections" class="sl-section sl-collections">
        <div class="sl-section__intro"><p class="sl-eyebrow"><?php esc_html_e( 'The collection', 'sage-linen' ); ?></p><h2><?php esc_html_e( 'Explore our collections', 'sage-linen' ); ?></h2></div>
        <div class="sl-category-grid">
            <?php foreach ( $categories as $category ) : ?>
                <a class="sl-category-card" href="<?php echo esc_url( get_term_link( $category ) ); ?>">
                    <span><?php echo esc_html( $category->name ); ?></span><small><?php esc_html_e( 'Discover collection', 'sage-linen' ); ?></small>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="sl-feature">
        <div class="sl-feature__image" role="img" aria-label="<?php esc_attr_e( 'Soft neutral home interior', 'sage-linen' ); ?>"></div>
        <div class="sl-feature__content"><p class="sl-eyebrow"><?php esc_html_e( 'The Sage Linen difference', 'sage-linen' ); ?></p><h2><?php esc_html_e( 'Crafted for comfort. Designed to last.', 'sage-linen' ); ?></h2><p><?php esc_html_e( 'From everyday essentials to beautifully finished pieces, Sage Linen brings natural texture and quiet luxury into every room.', 'sage-linen' ); ?></p><a class="sl-text-link" href="<?php echo esc_url( $shop_url ); ?>"><?php esc_html_e( 'Discover the collection →', 'sage-linen' ); ?></a></div>
    </section>

    <?php if ( ! empty( $products ) ) : ?>
    <section class="sl-section sl-products">
        <div class="sl-section__intro sl-section__intro--row"><div><p class="sl-eyebrow"><?php esc_html_e( 'Selected for you', 'sage-linen' ); ?></p><h2><?php esc_html_e( 'Featured products', 'sage-linen' ); ?></h2></div><a class="sl-text-link" href="<?php echo esc_url( $shop_url ); ?>"><?php esc_html_e( 'View all products →', 'sage-linen' ); ?></a></div>
        <div class="sl-product-grid">
            <?php foreach ( $products as $product ) : ?>
                <article class="sl-product-card">
                    <a href="<?php echo esc_url( $product->get_permalink() ); ?>"><?php echo wp_kses_post( $product->get_image( 'woocommerce_thumbnail' ) ); ?></a>
                    <h3><a href="<?php echo esc_url( $product->get_permalink() ); ?>"><?php echo esc_html( $product->get_name() ); ?></a></h3>
                    <div class="sl-price"><?php echo wp_kses_post( $product->get_price_html() ); ?></div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

    <section class="sl-commercial"><p class="sl-eyebrow"><?php esc_html_e( 'For hospitality & business', 'sage-linen' ); ?></p><h2><?php esc_html_e( 'Beautiful textiles for considered spaces.', 'sage-linen' ); ?></h2><p><?php esc_html_e( 'Explore quality-led textile solutions for hotels, guest accommodation, restaurants and commercial spaces.', 'sage-linen' ); ?></p><a class="sl-button sl-button--light" href="<?php echo esc_url( $shop_url ); ?>"><?php esc_html_e( 'Explore solutions', 'sage-linen' ); ?></a></section>

    <section class="sl-newsletter"><div><p class="sl-eyebrow"><?php esc_html_e( 'Stay inspired', 'sage-linen' ); ?></p><h2><?php esc_html_e( 'Thoughtful textiles. Timeless comfort.', 'sage-linen' ); ?></h2></div><p><?php esc_html_e( 'Discover new collections, seasonal inspiration and considered updates from Sage Linen.', 'sage-linen' ); ?></p></section>
</div>
<?php get_footer(); ?>
