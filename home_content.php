
							<div class="container-fluid" id="maincont">
								<div class="row">
									<div class="col-md-3 col-lg-2 hidden-xs hidden-sm">
										<aside>
											<h3 class="center">Naviga il sito</h3>
											<div class="tab-content">
												<a href="/share" class="navileft">link test 1</a>
												<a href="/share" class="navileft">link test 1</a>
											</div>
										</aside>
									</div>
									<div class="col-md-6 col-lg-offset-1 col-md-offset-0">
										<div class="content push-bottom">
<?php
$post = get_post(45);
$title = $post->post_title;
$content = $post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
echo '<h1>'.$title.'</h1>';
echo $content;
?>
										</div>

									</div>