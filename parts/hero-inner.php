<?php
/**
 * Partial Hero Inner
 *
 * acts as header BG on every page other than home that have revo/slider
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>

<?php
/**
 * Hero Inner
 * @return Template
 */
function hero_inner($wbg=true)
{
?>
<div class="container hero inner">

	<?php //Image ?>
	<?php
		if($wbg) {
	?>
	<img src="assets/front/dummy-images/slider/1.jpg" alt="slider">
	<?php
		}
	?>
	<?php //Hero Text ?>
	<?php //Button CTA ?>

</div>
<?php
}
?>
