<div class="l-container">
	<article class="l-main">
		<?php get_header(); ?>
		<div class="p-mainvisual">
			<h2>ダミーサイト</h2>
		</div>
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
										<a href="<?php the_permalink(); ?>">詳しく見る</a>
									</div>
								</li>
							<?php
						endwhile;
					endif;
				?>
			</ul>
		</article><!--/.p-contens-->
    </article><!--/.l-main-->
<?php get_sidebar( ); ?>
<?php get_footer(); ?>
