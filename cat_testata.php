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
						<div class="row center">
							<div class="col-md-12">
								<h1><?php single_cat_title(); ?></h1>
							</div>
						</div>
					</div>
				</section>

				