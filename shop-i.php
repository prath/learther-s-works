<?php
/**
 * Shop-i Page
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */

include 'header.php';
?>

<main role="main">

	<?php
	include '__partials/hero-inner.php';
	?>

	<?php
	page_title('Shop', 'Shop', 'Shop Title');
	?>

	<div class="container main-content">
		<?php include '__partials/products-twelve-items.php'; ?>
	</div>

	<div class="container">
		<?php include '__partials/email-subscribe.php'; ?>
	</div>

</main>
<?php
include 'footer.php';
?>
