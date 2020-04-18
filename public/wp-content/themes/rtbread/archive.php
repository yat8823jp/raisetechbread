		<?php get_header(); ?>
		<div class="p-page-title">
			<h1 class="main">Menu:
				<span class="sub"><?php echo esc_html( single_term_title( '', false ) ); ?></span>
			</h1>
		</div>
		<article class="p-archive__description">
			<?php echo category_description(); ?>
		</article>
		<article class="p-contents">
			<ul class="c-cards">
				<?php
					if( have_posts() ) :
						while( have_posts() ) :
							the_post();
							?>
								<li class="c-card">
									<div class="thumnail">
										<?php
											if ( has_post_thumbnail() ) :
												the_post_thumbnail();
											else :
												?><div class="no-thumbnail"></div><?php
											endif;
										?>
									</div>
									<div class="block">
										<h3 class="title"><?php the_title(); ?></h3>
										<p><?php the_excerpt(); ?></p>
										<a href="<?php the_permalink(); ?>" class="detail-bt">詳しく見る</a>
									</div>
								</li>
							<?php
						endwhile;
					endif;
				?>
			</ul>
		</article><!--/.p-contens-->
		<?php if ( $wp_query -> max_num_pages > 1 ) : ?>
			<?php wp_pagenavi(); ?>
		<?php endif; ?>
	</article><!--/.l-main-->
<?php get_sidebar( ); ?>
<?php get_footer(); ?>
