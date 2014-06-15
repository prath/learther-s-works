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

<?php
/**
 * Page Title Home
 * @return Template
 */
function page_title_home($title='', $subtitle='')
{
?>
<header class="page-title">
	<div class="subtitle"><?php echo $subtitle;?></div>
	<h1>
		<?php echo $title;?>
	</h1>
	<div class="title-separator">
	</div>
</header>
<?php
}
?>

<?php
/**
 * Page Title
 * @return Template
 */
function page_title_blog($title='', $breadcrumbs1='', $breadcrumbs2='')
{
?>
<header class="page-title">
	<?php breadcrumbs($breadcrumbs1, $breadcrumbs2);?>
	<h1>
		<?php echo $title;?>
	</h1>
	<div class="entry-meta">
		<time class="post-date" datetime="2014-06-06T13:02:22+00:00">June 6, 2014</time>
		by&nbsp;
		<a href="">John William Doe&nbsp;</a>
	</div>
	<div class="title-separator">
	</div>
</header>
<?php
}
?>
