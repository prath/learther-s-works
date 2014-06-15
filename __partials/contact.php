<?php
/**
 * Partial Blog Entry
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>


<div class="blog-entry">

	<div class="entry-content">
		<img src="assets/front/dummy-images/blog/med1.jpg" alt="">
	</div>

</div>

<div class="two-cols-panel">
	<div class="left-panel">
		<div class="left-item bordered">
			<h3 class="section-title dark tab-content-title">
				Location
			</h3>
		</div>
	</div>
	<div class="right-panel">

		<strong>
			Leather's Works
		</strong>
		<br>
		<br>
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
</div>

<div class="two-cols-panel">
	<div class="left-panel">
		<div class="left-item bordered">
			<h3 class="section-title dark tab-content-title">
				Leave a Message
			</h3>
		</div>
	</div>
	<div class="right-panel">

		<form id="commentform" method="post" action="http://localhost/indam/wp/wp-comments-post.php" class="comment-form">

			<p class="comment-form-comment">
				<label for="comment">Name</label>
				<input type="text"class="form-control" aria-required="true" placeholder="Your Name">
			</p>

			<p class="comment-form-comment">
				<label for="comment">Email</label>
				<input type="email"class="form-control" aria-required="true" placeholder="Your email">
			</p>

			<p class="comment-form-comment">
				<label for="comment">Website</label>
				<input type="text"class="form-control" aria-required="true" placeholder="Your website">
			</p>

			<p class="comment-form-comment">
				<label for="comment">Message</label>
				<textarea id="comment" class="form-control" aria-required="true" rows="8" cols="45" name="comment" placeholder="Your Comment"></textarea>
			</p>

			<p class="form-submit">
				<button id="submit" type="submit" value="Submit" name="submit" class="btn">
				Send Message <i class="fa fa-angle-right btn-icon"></i>
				</button>
			</p>

		</form>

	</div>
</div>
