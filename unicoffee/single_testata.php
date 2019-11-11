				<section class="testata" style="background-color:#<?php
											if(in_category('cultura')){echo"c03a31"; }
											if(in_category('sport')){echo"3c98d9";}
											if(in_category('economia')){echo"2cba9a";}
											if(in_category('alimentazione')){echo"e77d32";}
											if(in_category('arti')){echo"34495c";}
											if(in_category('moda')){echo"9a5bb3";}
											if(in_category('cinema')){echo"f0c430";}
											if(in_category('innovazione')){echo"006600";}
											?>;">
					<div class="container">
						<div class="row center">
							<div class="col-md-12">
								<?php if ( function_exists('yoast_breadcrumb') ) 
								{yoast_breadcrumb('<ul class="briciole"><li>','</li></ul>');} ?>
							</div>
						</div>
						<!--<div class="row">
							<div class="col-md-12">
								<h1><?php the_title(); ?></h1>
							</div>
						</div>-->
					</div>
				</section>

				<div class="container">
					<div class="row center">
						<div class="col-md-12">
							<?php 
							if ( have_posts() ) : while ( have_posts() ) : the_post(); 
							$urlimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							?>
							<div class="img-thumbnail imgtestata" style="background: transparent url('<?php echo $urlimg; ?>') no-repeat center center; background-size:cover;"></div>
							<?php /*the_post_thumbnail( 'large', array( 'class' => 'img-responsive') ); */?>

							<div class="post-content push-top">

								<h1 style="color:#<?php
										if(in_category('cultura')){echo"e94c45";}
										if(in_category('sport')){echo"3c98d9";}
										if(in_category('economia')){echo"2cba9a";}
										if(in_category('alimentazione')){echo"e77d32";}
										if(in_category('arti')){echo"34495c";}
										if(in_category('architettura')){echo"34495c";}
										if(in_category('moda')){echo"9a5bb3";}
										if(in_category('cinema')){echo"f0c430";}
										if(in_category('innovazione')){echo"006600";}
										?>;"><?php the_title(); ?>
								</h1>
								
								<?php 
								$data=explode(" ",get_the_date());								
								?>
								<div class="post-meta">
									<span><i class="fa fa-calendar"></i> <?php the_date() ?> </span>
									<span>&nbsp;<i class="fa fa-user"></i> Scritto da <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('display_name'); ?></a> </span>
								</div>
							</div>
							<?php endwhile; endif; ?>
							<hr>
						</div>
					</div>
				</div>