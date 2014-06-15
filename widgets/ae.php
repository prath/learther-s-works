<?php
/**
 * Aestik Widgets Mixin
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>

<?php
/**
 * ====================================================================================================
 * TABLE OF CONTENTS
 * ====================================================================================================
 *
 * 1. widget_about
 * 2. widget_testimonial
 * 3. widget_recent_news
 *
 * ====================================================================================================
 */
?>

<?php
/**
 * Widget About
 * @return Template
 */
function widget_about()
{
?>
<section class="widget widget_about">
	<h2 class="widget-title">
		Our Workshop.
	</h2>
	<div class="widget-body">

		<p>Leather's Works is a Minimalist WooCommerce Theme.</p>
		<address>
			<strong>Leather's Works.</strong>
			<br>Jl. Cibaduyut No. 1
			<br>Kecamatan Cigondewah
			<br>Bandung - Indonesia
			<br>47201
			<br>
			<abbr title="Phone">Ph:</abbr>
			<a href="tel:123-4567890">123-4567890</a>
			<br>
			<abbr title="Email">Email:</abbr>
			<a href="mailto:#">first.last@example.com</a>
		</address>

	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Testimonial
 * @return Template
 */
function widget_testimonial()
{
?>
<section class="widget widget_testimonial">
	<h2 class="widget-title">
		Testimonials.
	</h2>
	<div class="widget-body">
		<blockquote>
			<p>
				“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras leo elit, ornare eget tincidunt ut, molestie a dui. In elit sapien, euismod sit amet orci non, convallis bibendum tellus. Aenean sapien mauris, fermentum et tempus at, interdum vel dolor. Etiam dictum hendrerit mollis.”
				<cite class="name">−
					JOHN WILLIAM DOE
				</cite>
			</p>
		</blockquote>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Recent News
 * @return Template
 */
function widget_recent_news($col='')
{
?>
<section class="widget widget_recent_news">
	<h2 class="widget-title">
		News.
	</h2>
	<div class="widget-body">
		<ul class="row-stretched">
			<li class="col-md-<?php echo $col;?>">
				<article class="excerpt">
					<h3 class="excerpt-title">
						<a href="">Climb leg rub face on everything.</a>
					</h3>
					<div class="meta-info">12 january 2013</div>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</p>
				</article>
			</li>
			<li class="col-md-<?php echo $col;?>">
				<article class="excerpt">
					<h3 class="excerpt-title">
						<a href="">Drop in axle roll-in rail slide noseblunt.</a>
					</h3>
					<div class="meta-info">12 january 2013</div>
					<p>
						It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.
					</p>
				</article>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>
