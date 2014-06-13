<?php
/**
 * Partial Page Title
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
function page_title($title='', $breadcrumbs1='', $breadcrumbs2='')
{
?>
<header class="page-title">
	<?php breadcrumbs($breadcrumbs1, $breadcrumbs2);?>
	<h1>
		<?php echo $title;?>
	</h1>
	<div class="title-separator">
	</div>
</header>
<?php
}
?>
