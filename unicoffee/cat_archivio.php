				<div class="container">
					<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post(); 
						$urlimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					?>
					<div class="row center">
						<div class="col-md-12">
							<a class="img-thumbnail imgtestata" href="<?php the_permalink(); ?>" style="background: transparent url('<?php echo $urlimg; ?>') no-repeat center center; background-size:cover;"></a>												
							<div class="post-content push-top">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p>
								<?php
								$myExcerpt = get_the_excerpt();
								$tags = array("<p>", "</p>");
								$myExcerpt = str_replace($tags, "", $myExcerpt);
								echo $myExcerpt;
								?>
								</p>

								<?php 
								$data=explode(" ",get_the_date());								
								?>
												
								<div class="post-meta">
									<span><i class="fa fa-calendar"></i> <?php echo get_the_date() ?> </span>
									<span>&nbsp;<i class="fa fa-user"></i> Scritto da <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('display_name'); ?></a> </span>
								</div>
							</div>
											
							<hr class="tall">
						</div>
					</div>
					<?php 
					endwhile;
					?>
					<div class="pagine">				
					<?php pagination_bar(); ?>
					</div>
					<?php
					endif; ?>
									
				</div>