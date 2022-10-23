		<?php get_header(); ?>
		<div class="p-page-title">
			<h1 class="main">Menu:
				<span class="sub"><?php echo esc_html( single_term_title( '', false ) ); ?></span>
			</h1>
		</div>
		<article class="p-archive__description">
			<?php echo category_description(); ?>
		</article>

		<?php get_template_part( "components/archive" ); ?>

		<?php if ( $wp_query -> max_num_pages > 1 ) : ?>
			<?php wp_pagenavi(); ?>
		<?php endif; ?>
	</main><!--/.l-main-->
<?php get_sidebar( ); ?>
<?php get_footer(); ?>
