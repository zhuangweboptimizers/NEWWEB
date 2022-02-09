<?php
/**
 * Pay for order form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-pay.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 5.2.0
 */

defined( 'ABSPATH' ) || exit;

$totals = $order->get_order_item_totals(); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.OverrideProhibited
?>

<table class="shop_table">
	<thead>
		<tr>
			<th class="product-name"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
			<th class="product-quantity"><?php esc_html_e( 'Qty', 'woocommerce' ); ?></th>
			<th class="product-total"><?php esc_html_e( 'Totals', 'woocommerce' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php if ( count( $order->get_items() ) > 0 ) : ?>
			<?php foreach ( $order->get_items() as $item_id => $item ) : ?>
				<?php
				if ( ! apply_filters( 'woocommerce_order_item_visible', true, $item ) ) {
					continue;
				}
				?>
				<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_order_item_class', 'order_item', $item, $order ) ); ?>">
					<td class="product-name">
						<?php
							echo wp_kses_post( apply_filters( 'woocommerce_order_item_name', esc_html( $item->get_name() ), $item, false ) ); // @codingStandardsIgnoreLine

							do_action( 'woocommerce_order_item_meta_start', $item_id, $item, $order, false );

							wc_display_item_meta( $item );

							do_action( 'woocommerce_order_item_meta_end', $item_id, $item, $order, false );
						?>
					</td>
					<td class="product-quantity"><?php echo apply_filters( 'woocommerce_order_item_quantity_html', ' <strong class="product-quantity">' . sprintf( '&times;&nbsp;%s', esc_html( $item->get_quantity() ) ) . '</strong>', $item ); ?></td><?php // @codingStandardsIgnoreLine ?>
					<td class="product-subtotal"><?php echo uncode_switch_stock_string( $order->get_formatted_line_subtotal( $item ) ); ?></td><?php // @codingStandardsIgnoreLine ?>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
	</tbody>
	<tfoot>
		<?php if ( $totals ) : ?>
			<?php foreach ( $totals as $total ) : ?>
				<tr>
					<th scope="row" colspan="2"><?php echo uncode_switch_stock_string( $total['label'] ); ?></th><?php // @codingStandardsIgnoreLine ?>
					<td class="product-total"><?php echo uncode_switch_stock_string( $total['value'] ); ?></td><?php // @codingStandardsIgnoreLine ?>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
	</tfoot>
</table>
