				<section class="testata" style="background-color:#e74b3b;">
					<div class="container">
						<div class="row center">
							<div class="col-md-12">
								<?php if ( function_exists('yoast_breadcrumb') ) 
								{yoast_breadcrumb('<ul class="briciole"><li>','</li></ul>');} ?>
							</div>
						</div>
						<div class="row center">
							<div class="col-md-12">
								<h1>Risultati per: <?php echo get_query_var('s') ?></h1>
							</div>
						</div>
					</div>
				</section>

				