# penting diingat :

- pada header dibagian paling bawah, nanti akan code seperti di bawah ini:

			<?php
				/**
				 * Header BG
				 */
			?>
			<?php
				include 'parts/hero-inner.php';
				hero_inner();
			?>

			<?php
				/**
				 * Page title, Breadcrumbs and Title Separator
				 *
				 * loc : parts/page-title.php
				 */
			?>
			<?php
				page_title('About', '', 'About');
			?>

	buat opsi untuk menghilangkan 'Header BG' pada admin di bagian page. defaultnya halaman menggunakan Header BG. tapi ada opsi untuk disable misal di page home yang menggunakan visual composer.

	Page title juga sama, ada opsi untuk disable.
