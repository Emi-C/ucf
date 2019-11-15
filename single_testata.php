				<section class="testata" style="background-color:#c03a31">
					<div class="container">
						<div class="row center">
							<div class="col-md-12">
								<?php if ( function_exists('yoast_breadcrumb') )
								{yoast_breadcrumb('<ul class="briciole"><li>','</li></ul>');} ?>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row center">
						<div class="col-md-12">
							<?php
							if ( have_posts() ) : while ( have_posts() ) : the_post();

							?>

							<div class="post-content push-top">

								<h1 style="color:#e94c45"><?php the_title(); ?></h1>

								<?php
								$data=explode(" ",get_the_date());
								?>
								<div class="post-meta">
									<span><i class="fa fa-calendar"></i> <?php the_date() ?> </span>
								</div>
							</div>
							<?php endwhile; endif; ?>
							<hr>
						</div>
					</div>
				</div>