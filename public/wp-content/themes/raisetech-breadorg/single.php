<?php
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	if( is_plugin_active( 'smart-custom-fields/smart-custom-fields.php' ) && is_single() ) {
		$price = SCF::get( 'price' );
	}
?>
		<?php get_header(); ?>
		<div class="p-page-title__wrap">
			<div class="p-page-title">
				<h1 class="main"><?php the_title(); ?></h1>
			</div>
			<?php echo $thumnail = has_post_thumbnail() ? get_the_post_thumbnail( $page->ID, "large", $args = array( "class" => "p-page-title__bg" ) ) : '<div class="no-thumbnail"></div>'; ?>
		</div>
		<article class="p-contents">
			<?php
				if( have_posts() ) :
					while( have_posts() ) :
						the_post();
						the_content();
						if( $price ) :
						?>
							<p>料金: <?php echo esc_html( $price ); ?> 円</p>
						<?php
						endif;
					endwhile;
				endif;
			?>
		</article><!--/.p-contens-->
		<?php if ( $wp_query -> max_num_pages > 1 ) : ?>
			<?php wp_pagenavi(); ?>
		<?php endif; ?>
	</main><!--/.l-main-->
<?php get_sidebar( ); ?>
<?php get_footer(); ?>
