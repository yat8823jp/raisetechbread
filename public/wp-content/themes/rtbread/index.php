<?php get_header(); ?>
<ul class="c-card">
	<?php
		if( have_posts() ) :
			while( have_posts() ) :
				the_post();
				?>
					<li>
						<?php
							if ( has_post_thumbnail() ) :
								the_post_thumbnail();
							endif;

							the_title();

							if ( is_single() ) :
								the_content();
							else :
								the_excerpt();
							endif;
						?>
						<a href="<?php the_permalink(); ?>" class="">詳しく見る</a>
					</li>
				<?php
			endwhile;
		else :

		endif;
	?>
</ul>
<?php get_footer(); ?>
