<?php
/**
 * WordPress Widgets Mixin
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 *
 * @todo : - form alignment di search dan subscribe.
 */
?>

<?php
/**
 * ====================================================================================================
 * TABLE OF CONTENTS
 * ====================================================================================================
 *
 * 1. widget_categories
 * 2. widget_pages
 * 3. widget_archive
 * 4. widget_recent_comments
 * 5. widget_search
 * 6. widget_archive_dropdown
 * 7. widget_recent_posts
 * 8. widget_meta
 * 9. widget_rss
 * 10. widget_popular_posts
 * 11. widget_nav_menu
 * 12. widget_tags
 * 13. widget_newsletter
 * 14. widget_categories_dropdown
 * 15. widget_text
 *
 * ====================================================================================================
 */
?>

<?php
/**
 * Widget Categories
 * @return Template
 */
function widget_categories()
{
?>
<section class="widget widget_categories">
	<h2 class="widget-title">
		Categories.
	</h2>
	<div class="widget-body">
		<ul>
			<li>
				<a href="#">Web Design</a>
				<span class="count">5</span>
			</li>
			<li>
				<a href="#">Technology</a>
			</li>
			<li>
				<a href="#">Science &amp; Fiction</a>
			</li>
			<li>
				<a href="#">Development</a>
				<ul class="children">
					<li>
						<a href="#">Web Development</a>
					</li>
					<li>
						<a href="#">App Development</a>
						<ul class="children">
							<li>
								<a href="#">Web Development</a>
							</li>
							<li>
								<a href="#">App Development</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">Web Development</a>
			</li>
			<li>
				<a href="#">App Development</a>
			</li>
			<li>
				<a href="#">Augmented Reality</a>
			</li>
			<li>
				<a href="#">Interface Design</a>
			</li>
			<li>
				<a href="#">Artificial Intelligent</a>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Pages
 * @return Template
 */
function widget_pages()
{
?>
<section class="widget widget_pages">
	<h2 class="widget-title">
		Pages.
	</h2>
	<div class="widget-body">
		<ul>
			<li>
				<a href="#">Blog</a>
			</li>
			<li>
				<a href="#">Cart</a>
			</li>
			<li>
				<a href="#">Checkout</a>
			</li>
			<li>
				<a href="#">Front Page</a>
			</li>
			<li>
				<a href="#">My Account</a>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Archives
 * @return Template
 */
function widget_archive()
{
?>
<section class="widget widget_archive">
	<h2 class="widget-title">
		Archives.
	</h2>
	<div class="widget-body">
		<ul>
			<li>
				<a href="#">January 2013</a>
				<span class="count">5</span>
			</li>
			<li>
				<a href="#">February 2012</a>
				<span class="count">5</span>
			</li>
			<li>
				<a href="#">March 2013</a>
				<span class="count">5</span>
			</li>
			<li>
				<a href="#">April 2013</a>
				<span class="count">5</span>
			</li>
			<li>
				<a href="#">May 2013</a>
				<span class="count">5</span>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Recent Comments
 * @return Template
 */
function widget_recent_comments()
{
?>
<section class="widget widget_recent_comments">
	<h2 class="widget-title">
		Recent Comments.
	</h2>
	<div class="widget-body">
		<ul>
			<li>John Doe on
				<a href="http://" target="_blank">Lorem Ipsum</a>
			</li>
			<li>John Doe on
				<a href="http://" target="_blank">Heyho Let's Go! this Murica, We don't need to hold back</a>
			</li>
			<li>John Doe on
				<a href="http://" target="_blank">American Jesus</a>
			</li>
			<li>John Doe on
				<a href="http://" target="_blank">Grey Area in Asia</a>
			</li>
			<li>John Doe on
				<a href="http://" target="_blank">Cute little Guy</a>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Search
 * @return Template
 */
function widget_search()
{
?>
<section class="widget widget_search">
	<h2 class="widget-title">
		Search.
	</h2>
	<div class="widget-body">
		<form class="form-inline" action="" method="" accept-charset="utf-8">
			<div class="form-group">
				<label class="sr-only" for="exampleInputEmail2">Search</label>
				<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Search">
			</div>
			<button type="submit" class="btn">Search <i class="fa fa-angle-right btn-icon"></i></button>
		</form>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Archive Dropdown
 * @return Template
 */
function widget_archive_dropdown()
{
?>
<section class="widget widget_archive_dropdown">
	<h2 class="widget-title">
		Archive Dropdown.
	</h2>
	<div class="widget-body">
		<select name="archive-dropdown">
			<option value="">Select Month</option>
			<option value="">January 2013 (5)</option>
			<option value="">February 2013 (5)</option>
			<option value="">March 2013 (5)</option>
			<option value="">April 2013 (5)</option>
			<option value="">May 2013 (5)</option>
		</select>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Recent Posts
 * @return Template
 */
function widget_recent_posts()
{
?>
<section class="widget widget_recent_posts">
	<h2 class="widget-title">
		Recent Posts.
	</h2>
	<div class="widget-body">
		<ul>
			<li>
				<a href="http://" target="_blank">Veggies sunt bona vobis.</a>
				<span class="post-date">January 1st, 2013</span>
			</li>
			<li>
				<a href="http://" target="_blank">Bona vobis, proinde vos postulo</a>
				<span class="post-date">February 1st, 2013</span>
			</li>
			<li>
				<a href="http://" target="_blank">Turnip greens napa cabbage</a>
				<span class="post-date">March 1st, 2013</span>
			</li>
			<li>
				<a href="http://" target="_blank">Tomato summer purslane beetroot</a>
				<span class="post-date">April 1st, 2013</span>
			</li>
			<li>
				<a href="http://" target="_blank">Prairie turnip dulse winter purslane napa</a>
				<span class="post-date">May 1st, 2013</span>
			</li>
			<li>
				<a href="http://" target="_blank">Soybean broccoli maize lotus root</a>
				<span class="post-date">June 1st, 2013</span>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Meta
 * @return Template
 */
function widget_meta()
{
?>
<section class="widget widget_meta">
	<h2 class="widget-title">
		Meta.
	</h2>
	<div class="widget-body">
		<ul>
			<li>
				<a href="#">Log in</a>
			</li>
			<li>
				<a href="#">Entries RSS</a>
			</li>
			<li>
				<a href="#">Comments RSS</a>
			</li>
			<li>
				<a href="#">WordPress.org</a>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget RSS
 * @return Template
 */
function widget_rss()
{
?>
<section class="widget widget_rss">
	<h2 class="widget-title">
		RSS.
	</h2>
	<div class="widget-body">
		<ul>
			<li>
				<a href="http://" target="_blank">Home Page and Front Page Templates</a>
				<span class="rss-date">January 1st, 2013</span>
				<div class="rssSummary">Chip Bennett, Team Rep and Administrator of the WordPress Theme Review Team, wrote a comprehensive post about around home ...</div>
				<cite>John William Doe</cite>
			</li>
			<li>
				<a href="http://" target="_blank">Chip Bennett, Team Rep</a>
				<span class="rss-date">January 1st, 2013</span>
				<div class="rssSummary">Chip Bennett, Team Rep and Administrator of the WordPress Team, wrote a comprehensive post about the intricacy around home ...</div>
				<cite>John William Doe</cite>
			</li>
			<li>
				<a href="http://" target="_blank">Administrator of the WordPress Theme Review Team</a>
				<span class="rss-date">January 1st, 2013</span>
				<div class="rssSummary">Administrator of the WordPress Theme Review Team, wrote a comprehensive post about the intricacy around home ...</div>
				<cite>John William Doe</cite>
			</li>
			<li>
				<a href="http://" target="_blank">The intricacy around home</a>
				<span class="rss-date">January 1st, 2013</span>
				<div class="rssSummary">Team Rep and Administrator of the Review Team, wrote a comprehensive post about the intricacy around home ...</div>
				<cite>John William Doe</cite>
			</li>
			<li>
				<a href="http://" target="_blank">WordPress Theme Review</a>
				<span class="rss-date">January 1st, 2013</span>
				<div class="rssSummary">Chip Bennett, Team Rep and Administrator of the WordPress Theme Review Team, wrote a comprehensive post about the intricacy ...</div>
				<cite>John William Doe</cite>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Popular Posts
 * @return Template
 */
function widget_popular_posts()
{
?>
<section class="widget widget_popular_posts">
	<h2 class="widget-title">
		Popular Posts.
	</h2>
	<div class="widget-body">
		<ul>
			<li>
				<article class="widget-post">
					<img src="assets/front/dummy-images/banner/cat1.png" alt="" />
					<div class="widget-post-content">
						<a href="http://" target="_blank">Veggies sunt bona vobis, proinde vos postulo</a>
						<span class="post-date">January 1st, 2013</span>
					</div>
				</article>
			</li>
			<li>
				<article class="widget-post">
					<img src="assets/front/dummy-images/banner/cat2.png" alt="" />
					<div class="widget-post-content">
						<a href="http://" target="_blank">Turnip greens napa cabbage</a>
						<span class="post-date">January 1st, 2013</span>
					</div>
				</article>
			</li>
			<li>
				<article class="widget-post">
					<img src="assets/front/dummy-images/banner/cat3.png" alt="" />
					<div class="widget-post-content">
						<a href="http://" target="_blank">Tomato summer purslane beetroot</a>
						<span class="post-date">January 1st, 2013</span>
					</div>
				</article>
			</li>
			<li>
				<article class="widget-post">
					<img src="assets/front/dummy-images/banner/cat1.png" alt="" />
					<div class="widget-post-content">
						<a href="http://" target="_blank">Prairie turnip dulse winter purslane napa</a>
						<span class="post-date">January 1st, 2013</span>
					</div>
				</article>
			</li>
			<li>
				<article class="widget-post">
					<img src="assets/front/dummy-images/banner/cat2.png" alt="" />
					<div class="widget-post-content">
						<a href="http://" target="_blank">Soybean broccoli maize lotus root</a>
						<span class="post-date">January 1st, 2013</span>
					</div>
				</article>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Link/Nav Menu
 * @return Template
 */
function widget_nav_menu()
{
?>
<section class="widget widget_nav_menu">
	<h2 class="widget-title">
		Link.
	</h2>
	<div class="widget-body">
		<ul>
			<li>
				<a href="#"> <i class="icon-circle-blank"></i>Web Design</a>
			</li>
			<li>
				<a href="#"> <i class="icon-circle-blank"></i>Development</a>
			</li>
			<li>
				<a href="#"> <i class="icon-circle-blank"></i>App Development</a>
			</li>
			<li>
				<a href="#"> <i class="icon-circle-blank"></i>Technology</a>
			</li>
			<li>
				<a href="#"> <i class="icon-circle-blank"></i>Science &amp; Fiction</a>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Tags
 * @return Template
 */
function widget_tags()
{
?>
<section class="widget widget_tags">
	<h2 class="widget-title">
		Tags.
	</h2>
	<div class="widget-body">
		<a href="" target="_blank" class="btn-tags">html</a>
		<a href="" target="_blank" class="btn-tags">css</a>
		<a href="" target="_blank" class="btn-tags">javascript</a>
		<a href="" target="_blank" class="btn-tags">WordPress</a>
		<a href="" target="_blank" class="btn-tags">PHP</a>
		<a href="" target="_blank" class="btn-tags">nodejs</a>
		<a href="" target="_blank" class="btn-tags">JAVA</a>
		<a href="" target="_blank" class="btn-tags">pearl</a>
		<a href="" target="_blank" class="btn-tags">Python</a>
		<a href="" target="_blank" class="btn-tags">web design</a>
		<a href="" target="_blank" class="btn-tags">web development</a>
		<a href="" target="_blank" class="btn-tags">ui/ux design</a>
		<a href="" target="_blank" class="btn-tags">mobile app development</a>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Newsletter
 * @return Template
 */
function widget_newsletter()
{
?>
<section class="widget">
	<h2 class="widget-title">
		Newsletter.
	</h2>
	<div class="widget-body">
		<p>Get our monthly newsletter, Latest news &amp; buzz.</p>
		<p>
			<form class="form-inline" action="" method="" accept-charset="utf-8">
				<div class="form-group">
					<label class="sr-only" for="exampleInputEmail2">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail2" placeholder="your email">
				</div>
				<button type="submit" class="btn">Subscribe <i class="fa fa-angle-right btn-icon"></i></button>
			</form>
		</p>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Categories Dropdown
 * @return Template
 */
function widget_categories_dropdown()
{
?>
<section class="widget widget_categories_dropdown">
	<h2 class="widget-title">
		Categories Dropdown.
	</h2>
	<div class="widget-body">
		<select name="archive-dropdown">
			<option value="">Select Categories</option>
			<option value="">Augmented Reality</option>
			<option value="">Interface Design</option>
			<option value="">Artificial Intelligent</option>
			<option value="">Development</option>
			<option value="">Science &amp; Fiction</option>
		</select>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Text
 * @return Template
 */
function widget_text()
{
?>
<section class="widget widget_text">
	<h2 class="widget-title">
		Text.
	</h2>
	<div class="widget-body textwidget">
		<p>
			<strong>Large image: linked in a caption</strong>
			<br/>
		</p>
		<div class="wp-caption alignnone">
			<a href="">
				<img src="assets/front/dummy-images/banner/cat1.png" alt="" />
			</a>
			<p class="wp-caption-text">This image is 960 by 720 pixels.</p>
		</div>
		<p>
			<strong>Text</strong>
			<br/>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
			<br/>
			<br/>
			<strong>Select element with long value</strong>
		</p>
		<form id="" method="" action="">
			<select>
				<option>Select element with long value value value long value value value</option>
			</select>
		</form>
	</div>
</section>
<?php
}
?>
