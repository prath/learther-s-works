<?php
/**
 * Override Woo sidebar.php
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>

<aside class="col-md-3 rsidebar">
	<?php widget_product_categories();?>
	<?php widget_shopping_cart();?>
	<?php widget_featured_products();?>
	<?php widget_product_tag_cloud();?>
</aside>
