				<hr>
				
				<div class="container">
					
					<div class="row push-top center">
						<div class="col-md-12">
							<div class="striped">
								<h1>Le <strong>Novit&agrave;</strong></h1>
							</div>
							
						</div>
					</div>
					
					<div class="row push-top">
						<div class="col-md-12">
						
							<div class="owl-carousel owl-theme" id="owl-novita">
							<?php 
							$myposts = get_posts('posts_per_page=6');
								foreach ( $myposts as $post ) :  setup_postdata( $post );
								$urlimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							?>
								<div class="owlwrpnov <?php
									if(in_category('cultura')){echo"cult";}
									if(in_category('sport')){echo"sport";}
									if(in_category('economia')){echo"econom";}
									if(in_category('alimentazione')){echo"food";}
									if(in_category('arti')){echo"arti";}
									if(in_category('moda')){echo"moda";}
									if(in_category('innovazione')){echo"innovazione";}
									if(in_category('cinema')){echo"cinema";}?>" style="background: transparent url('<?php echo $urlimg; ?>') no-repeat center center; background-size:cover;">
									<a class="evid" href="<?php the_permalink(); ?>">
										<div class="content-wrapper">
											<!--<img src="img/4.jpg" class="img-responsive" alt="">-->
											<!--<?php the_post_thumbnail( 'large', array( 'class' => 'img-responsive') ); ?>-->
											<span class="icona top novi"><img
											<?php
											if(in_category('cultura')){echo"src='/wp-content/themes/unicoffee/img/cult.png'";}
											if(in_category('sport')){echo"src='/wp-content/themes/unicoffee/img/sport.png'";}
											if(in_category('economia')){echo"src='/wp-content/themes/unicoffee/img/econ.png'";}
											if(in_category('alimentazione')){echo"src='/wp-content/themes/unicoffee/img/food.png'";}
											if(in_category('arti')){echo"src='/wp-content/themes/unicoffee/img/archi.png'";}
											if(in_category('moda')){echo"src='/wp-content/themes/unicoffee/img/moda.png'";}
											if(in_category('cinema')){echo"src='/wp-content/themes/unicoffee/img/cinema.png'";}
											if(in_category('innovazione')){echo"src='/wp-content/themes/unicoffee/img/innov.png'";}
											?>></span>
											<span class="titevid novi"><?php the_title();?></span>
											<span class="txtevid novi"><?php
											$myExcerpt = get_the_excerpt();
											$tags = array("<p>", "</p>");
											$myExcerpt = str_replace($tags, "", $myExcerpt);
											echo $myExcerpt;
											?></span>
											
										</div>
									</a>
								</div>
								<?php
								endforeach;
								wp_reset_postdata();
								?>								
							</div>
						</div>
						
					</div>
			
				</div>