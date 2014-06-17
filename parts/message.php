<?php
/**
 * Partial WooCommerce Message
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>

<?php
/**
 * Page Title
 * @return Template
 */
function woo_msg($msg='')
{
?>
<div class="woocommerce-message">
	<?php echo $msg;?>
</div>
<?php
}
?>
