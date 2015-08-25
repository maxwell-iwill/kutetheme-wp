<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget
 *
 * @author 		KuteTheme
 * @package 	THEME/WooCommerce
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<?php do_action( 'woocommerce_before_mini_cart' ); ?>

<?php  
    $cart_count =  WC()->cart->cart_contents_count ;
    $check_out_url = WC()->cart->get_cart_url();
    $kt_used_header = kt_option('kt_used_header', '1');
?>
<?php if( $kt_used_header == 1 ):?>
<div id="cart-block" class="shopping-cart-box col-xs-5 col-sm-2">
    <a class="cart-link" href="<?php echo esc_url( $check_out_url ); ?>" target="_blank">
        <span class="title"><?php _e( 'Shopping cart', 'kutetheme' ); ?></span>
        <span class="total"><?php echo sprintf ( _n( '%d item', '%d items', esc_attr( $cart_count ), 'kutetheme' ), esc_attr( $cart_count ) ) ?></span>
        <span><?php _e( '-', 'kutetheme' ); ?></span> 
        <?php echo WC()->cart->get_cart_total() ?>
        <span class="notify notify-left"><?php echo esc_attr( $cart_count ); ?></span>
    </a>
    <?php do_action('kt_mini_cart_content', $check_out_url ); ?>
</div>
<?php elseif( $kt_used_header == 2 ):?>
    <div class="col-xs-5 col-sm-2 group-button-header">
    <?php
        if(defined( 'YITH_WOOCOMPARE' )): global $yith_woocompare; $count = count($yith_woocompare->obj->products_list); ?>
        <a href="#" class="btn-compare yith-woocompare-open"><?php _e( "Compare", 'kutetheme') ?><span>(<?php echo $count ?>)</span></a>
    <?php endif; ?>
    <?php if( function_exists( 'YITH_WCWL' ) ):
        $wishlist_url = YITH_WCWL()->get_wishlist_url(); ?>
        <a class="btn-heart" href="<?php echo $wishlist_url; ?>"><?php _e( 'Wishlists', 'kutetheme') ?></a>
    <?php endif; ?>
    <div class="btn-cart" id="cart-block">
        <a title="<?php _e( 'My cart', 'kutetheme' ) ?>" href="<?php echo esc_url($check_out_url);?>"><?php _e('Cart', 'kutetheme' );?></a>
        <span class="notify notify-right"><?php echo $cart_count; ?></span>
        <?php do_action('kt_mini_cart_content', $check_out_url ); ?>
    </div>
    </div>
<?php endif;?>
<?php do_action( 'woocommerce_after_mini_cart' ); ?>