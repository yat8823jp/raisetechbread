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
					else :
						?>
							<li class="c-card">お探しの商品は見つかりませんでした</li>
						<?php
					endif;
				?>
			</ul>
		</article><!--/.p-contens-->
