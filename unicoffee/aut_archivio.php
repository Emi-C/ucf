							<div class="container">
								<div class="row center">
									<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
										<div class="auth">
											<div class="authpic">
												<?php
													// Retrieve The Post's Author ID
													$user_id = get_the_author_meta('ID');
													// Set the image size. Accepts all registered images sizes and array(int, int)
													$size = 'thumbnail';

													// Get the image URL using the author ID and image size params
													$imgURL = get_cupp_meta($user_id, $size);

													// Print the image on the page
													echo '<img class="img-responsive" src="'.$imgURL.'" alt="'.get_the_author_meta('display_name').'">';?>
												<p><strong><?php the_author();?></strong></p>
											</div>
											<blockquote>
												<p><?php the_author_meta( 'description' ); ?></p>
											</blockquote>
											<ul class="social-icons">
												<li class="social-icons-linkedin"><a href="<?php the_author_meta('url');?>" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
												<li class="social-icons-twitter"><a href="http://www.twitter.com/<?php the_author_meta('twitter');?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="blog-posts center">
										<?php 
										if ( have_posts() ) : while ( have_posts() ) : the_post(); 
											$urlimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
										?>

											<div class="post-image">
												<a class="img-thumbnail imgtestata" href="<?php the_permalink(); ?>" style="background: transparent url('<?php echo $urlimg; ?>') no-repeat center center; background-size:cover;">
												</a>												
											</div>

											<div class="post-content push-top">

												<h2 class="short"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
											<?php 
											endwhile;
											?>
											<div class="pagine">				
											<?php pagination_bar(); ?>
											</div>
											<?php
											endif; ?>
									</div>
								</div>
							</div>	
						</div>	