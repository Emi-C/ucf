						<div class="col-md-3 col-lg-2 col-lg-offset-1 col-md-offset-0 hidden-sm hidden-xs">
							<aside class="sidebar" id="sidebar">				
								<h3 class="center">Vedi anche</h3>
								<?php 
								if(in_category('sport')){$varcat='sport';}														
								if(in_category('cultura')){$varcat='cultura';}														
								if(in_category('cinema')){$varcat='cinema';}														
								if(in_category('moda')){$varcat='moda';}														
								if(in_category('alimentazione')){$varcat='alimentazione';}														
								if(in_category('economia')){$varcat='economia';}														
								if(in_category('arti')){$varcat='arti';}
								if(in_category('innovazione')){$varcat='innovazione';}
								$this_post = $post->ID;
								$args = array(
									'category_name' => $varcat,
									'posts_per_page' => 4,
									'post__not_in' => array($this_post)
								);
								$myposts = get_posts($args);
								?>
								<div class="tab-content <?php echo $varcat ?>">
									
									<ul class="vedianche">
									<?php 												
									foreach ( $myposts as $post ) :  setup_postdata( $post );
									?>
										<li>
											<div class="post-image">
												<div class="img-thumbnail">
													<a href="<?php the_permalink(); ?>">
														<?php 
														$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); 

														if ($image) : ?>
															<img src="<?php echo $image[0]; ?>" class="thumb-sidebar" alt="" />
														<?php endif; ?>
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
												<div class="post-meta">
													<?php
													echo get_the_date();												
													?>
												</div>
											</div>
											
										</li>
										<hr>
										<?php
										endforeach;						
										wp_reset_postdata();
										?>
									</ul>
								</div>
							</aside>
						</div>
						<div class="col-xs-12 hidden-md hidden-lg">
							<aside id="sdb">				
								<h3 class="center">Vedi anche</h3>
								<?php 
								if(in_category('sport')){$varcat='sport';}														
								if(in_category('cultura')){$varcat='cultura';}														
								if(in_category('cinema')){$varcat='cinema';}														
								if(in_category('moda')){$varcat='moda';}														
								if(in_category('alimentazione')){$varcat='alimentazione';}														
								if(in_category('economia')){$varcat='economia';}														
								if(in_category('arti')){$varcat='arti';}	
								if(in_category('innovazione')){$varcat='innovazione';}	
								$this_post = $post->ID;
								$args = array(
									'category_name' => $varcat,
									'posts_per_page' => 4,
									'post__not_in' => array($this_post)
								);
								$myposts = get_posts($args);
								?>
								<div class="tab-content <?php echo $varcat ?>">
									
									<ul class="vedianche">
									<?php 												
									foreach ( $myposts as $post ) :  setup_postdata( $post );
									?>
										<li>
											<div class="post-image">
												<div class="img-thumbnail">
													<a href="<?php the_permalink(); ?>">
														<?php 
														$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); 

														if ($image) : ?>
															<img src="<?php echo $image[0]; ?>" class="thumb-sidebar" alt="" />
														<?php endif; ?>
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
												<div class="post-meta">
													<?php
													echo get_the_date();												
													?>
												</div>
											</div>
											
										</li>
										<hr>
										<?php
										endforeach;						
										wp_reset_postdata();
										?>
									</ul>
								</div>
							</aside>
						</div>
					</div>
				</div>