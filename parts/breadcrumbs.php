<?php
/**
 * Partial Breadcrumbs
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>

<?php
/**
 * Breadcrumbs
 * @return Template
 */
function breadcrumbs($secondSegment='', $lastSegment='')
{
?>
<nav class="woocommerce-breadcrumb breadcrumb">
	<a class="home" href="">
		Home
	</a>
	<?php
		if($secondSegment !== '') {
	?>
	/
	<a class="home" href="">
		<?php echo $secondSegment;?>
	</a>
	<?php
		}
	?>
	<?php
		if($lastSegment !== '') {
	?>
	<?php echo ' / '.$lastSegment;?>
	<?php
		}
	?>
</nav>
<?php
}
?>
