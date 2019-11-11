<link rel="stylesheet" href="/wp-content/themes/unicoffee/css/owl.carousel.min.css">
<link rel="stylesheet" href="/wp-content/themes/unicoffee/css/owl.theme.default.min.css">
				<div class="container">
					<div class="row center">
						<div class="col-md-12">
							<div class="img-thumbnail imgtestata" style="background: transparent url('/wp-content/themes/unicoffee/img/travolta.gif') no-repeat center center; background-size:cover;"></div>												
							<div class="post-content push-top">
								<h2>La pagina che cercavi non esiste...</h2>
								<p>
								Per&ograve; possiamo suggerirti alcuni articoli freschi freschi!
								</p>								
							</div>
											
							<hr class="tall">
						</div>
					</div>
					<div class="row push-top">
						<div class="col-md-12">
						
							<div class="owl-carousel owl-theme" id="owl-novita">
								<?php 
								$args = array(
									'nopaging' => true,
									'tag_id' => '47'
								);
								$myposts = get_posts($args);
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
			</div>
			
<script src="/wp-content/themes/unicoffee/js/vendor/owl.carousel.min.js"></script>
<script>
jQuery("#owl-novita").owlCarousel({
	"autoPlay": true,
	"autoplayTimeout": 4000,
	"loop":true,
	"margin":4,
	responsive:{
		0:{
			items:1
		},
		768:{
			items:3
		}
	}
});
</script>