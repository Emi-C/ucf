
				<div class="container section-filtri">
					<div class="container">
						<div class="row">
							<div class="col-md-12 center">
								<ul class="filtri">
									<li class="active inbl"><a data-filter="*"><b>MIX</b></a></li><br class="hidden-lg">
									<li class="visible-lg-inline-block"><a data-filter=".sport"><span class="visible-lg-inline-block">SPORT</span><i class="fa fa-trophy hidden-lg"></i></a></li>
									<li class="visible-lg-inline-block"><a data-filter=".cult"><span class="visible-lg-inline-block">CULTURA</span><i class="fa fa-graduation-cap hidden-lg"></i></a></li>
									<li class="visible-lg-inline-block"><a data-filter=".cinema"><span class="visible-lg-inline-block">CINEMA</span><i class="fa fa-video-camera hidden-lg"></i></a></li>
									<li class="visible-lg-inline-block"><a data-filter=".moda"><span class="visible-lg-inline-block">MODA</span><i class="fa fa-camera-retro hidden-lg"></i></a></li>
									<li class="visible-lg-inline-block"><a data-filter=".food"><span class="visible-lg-inline-block">ALIMENTAZIONE</span><i class="fa fa-cutlery hidden-lg"></i></a></li>
									<li class="visible-lg-inline-block"><a data-filter=".econom"><span class="visible-lg-inline-block">ECONOMIA</span><i class="fa fa-dollar hidden-lg"></i></a></li>
									<li class="visible-lg-inline-block"><a data-filter=".arti"><span class="visible-lg-inline-block">ARTI VISIVE</span><i class="fa fa-bank hidden-lg"></i></a></li>
									<li class="visible-lg-inline-block"><a data-filter=".innovazione"><span class="visible-lg-inline-block">INNOVAZIONE</span><i class="fa fa-bank hidden-lg"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="container">

					<div class="masonry">
					<?php
					$args = array(
						'nopaging' => true,
						'tag_id' => '48'
					);
					$myposts = get_posts($args);
						foreach ( $myposts as $post ) :  setup_postdata( $post );
					?>
						<div class="col-md-4 col-sm-6 col-xs-12 mason lilpadding <?php
						if(in_category('cultura')){echo"cult";}
						if(in_category('sport')){echo"sport";}
						if(in_category('economia')){echo"econom";}
						if(in_category('alimentazione')){echo"food";}
						if(in_category('arti')){echo"arti";}
						if(in_category('moda')){echo"moda";}
						if(in_category('innovazione')){echo"innovazione";}
						if(in_category('cinema')){echo"cinema";}?>">
							<a class="evid" href="<?php the_permalink(); ?>">
								<div class="content-wrapper mix">
									<!--<img src="img/4.jpg" class="img-responsive" alt="">-->
									<?php the_post_thumbnail( 'large', array( 'class' => 'img-responsive') ); ?>
									<span class="icona top"><img class="img-responsive"
									<?php
									if(in_category('cultura')){echo"src='/carteconti/wp-content/themes/carteconti/img/cult.png'";}
									if(in_category('sport')){echo"src='/carteconti/wp-content/themes/carteconti/img/sport.png'";}
									if(in_category('economia')){echo"src='/carteconti/wp-content/themes/carteconti/img/econ.png'";}
									if(in_category('alimentazione')){echo"src='/carteconti/wp-content/themes/carteconti/img/food.png'";}
									if(in_category('arti')){echo"src='/carteconti/wp-content/themes/carteconti/img/archi.png'";}
									if(in_category('moda')){echo"src='/carteconti/wp-content/themes/carteconti/img/moda.png'";}
									if(in_category('cinema')){echo"src='/carteconti/wp-content/themes/carteconti/img/cinema.png'";}
									if(in_category('innovazione')){echo"src='/carteconti/wp-content/themes/carteconti/img/innov.png'";}
									?>></span>
									<span class="titevid"><?php the_title();?></span>
									<span class="txtevid"><?php
									$myExcerpt = get_the_excerpt();
									$tags = array("<p>", "</p>");
									$myExcerpt = str_replace($tags, "", $myExcerpt);
									echo $myExcerpt;
									?></span>
									<!--<span class="icona bot"><i class="fa fa-plus"></i></span>-->
								</div>
							</a>
						</div>
						<?php
							endforeach;
						wp_reset_postdata();
						?>
					</div>

				</div>