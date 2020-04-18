		<?php get_header(); ?>
		<div class="p-page-title__wrap">
			<div class="p-page-title">
				<h1 class="main">Page not found.</h1>
			</div>
			<div class="no-thumbnail"></div>'; ?>
		</div>
		<article class="p-contents">
			<p>恐れ入りますがアクセスされたページは存在しません</p>
		</article><!--/.p-contens-->
		<?php if ( $wp_query -> max_num_pages > 1 ) : ?>
			<?php wp_pagenavi(); ?>
		<?php endif; ?>
	</article><!--/.l-main-->
<?php get_sidebar( ); ?>
<?php get_footer(); ?>
