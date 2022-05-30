<?php
/**
 * Show error messages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/notices/error.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! $notices ) {
	return;
}

?>

<div class="woocommerce-error woo-alert-group" role="alert">
	<?php foreach ( $notices as $notice ) : ?>
		<div<?php echo wc_get_notice_data_attr( $notice ); ?> class="alert -danger -small">
			<p class="alert-message">
				<?php echo wc_kses_notice( $notice['notice'] ); ?>
			</p>
		</div>
	<?php endforeach; ?>
</div>