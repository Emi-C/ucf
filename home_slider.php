				<div class="container-fluid nopadding">
					<div id="revolutionSlider" class="rev_slider">
						<ul>
							<?php
							$args = array(
								'nopaging' => true,
								'tag_id' => '47'
							);
							$myposts = get_posts($args);
								foreach ( $myposts as $post ) :  setup_postdata( $post );
								$urlimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							?>
							<li data-transition="slideremovehorizontal" data-link="<?php the_permalink();?>">
								<img src="<?php echo $urlimg;?>" alt="<?php the_title();?>" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
								<div class="tp-caption tp-resizeme"
									id="layer-id"
									data-x="center"
									data-y="bottom"
									data-width="auto"
									data-height="auto"

									data-start="1000"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1500;e:Power2.easeInOut;"
									data-transform_out="opacity:0;s:300;s:300;"

									style="z-index: 2;">
										<img src="/carteconti/wp-content/themes/carteconti/img/gradient.png">
									</div>



								<div class="tp-caption tp-resizeme main-label"
									data-x="center"
									data-y="center"
									data-voffset="-60"
									data-width="full"
									data-fontsize=['62','45','30','20']
									data-lineheight=['72','56','42','28']
									data-start="1800"
									data-whitespace="normal"
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									data-mask_in="x:0px;y:0px;"
									style="z-index: 3; text-align:center;">

									<?php the_title();?>
								</div>

								<div class="tp-caption tp-resizeme bottom-label"
									data-x="center"
									data-y="center"
									data-voffset="70"
									data-whitespace="normal"
									data-width="300px"
									data-fontsize=['20','16','12','8']
									data-lineheight=['22','18','14','10']
									data-start="2000"
									data-transform_idle="o:1;"
									data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;"
									data-transform_out="opacity:0;s:500;"
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
									data-splitin="chars"
									data-splitout="none"
									data-elementdelay="0.005"

									style="z-index: 3; text-align:center;">
									<p><?php
										$myExcerpt = get_the_excerpt();
										$tags = array("<p>", "</p>");
										$myExcerpt = str_replace($tags, "", $myExcerpt);
										echo $myExcerpt;
										?></p>
								</div>
							</li>
							<?php
							endforeach;
							wp_reset_postdata();
							?>
						</ul>
					</div>
				</div>