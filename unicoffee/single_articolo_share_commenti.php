
							<div class="container-fluid" id="maincont">
								<div class="row">									
									<?php 
									if ( have_posts() ) : while ( have_posts() ) : the_post(); 
									?>
									<div class="col-md-3 col-lg-2 hidden-xs hidden-sm">
										<aside class="sidebar" id="sidebar-share">
											<h3 class="center">Share</h3>
											<div class="tab-content tabshare center">
<?php
$art=get_the_ID();
$conta = $wpdb->get_var("SELECT conta FROM {$wpdb->prefix}art_share where art=$art and social=1");
if (!$conta) {$conta=0;}
?>
												<a id="soc1" class="shareico" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook-official"></i></a><span class="soccount"><?php echo $conta; ?></span><br>
<?php
$conta = $wpdb->get_var("SELECT conta FROM {$wpdb->prefix}art_share where art=$art and social=2");
if (!$conta) {$conta=0;}
?>
												<a id="soc2" class="shareico" href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></a><span class="soccount"><?php echo $conta; ?></span><br>
<?php
$conta = $wpdb->get_var("SELECT conta FROM {$wpdb->prefix}art_share where art=$art and social=3");
if (!$conta) {$conta=0;}
?>
												<a id="soc3" class="shareico" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a><span class="soccount"><?php echo $conta; ?></span><br>
<?php
$conta = $wpdb->get_var("SELECT conta FROM {$wpdb->prefix}art_share where art=$art and social=4");
if (!$conta) {$conta=0;}
?>
												<a id="soc4" class="shareico" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=http://www.unicoffee.it" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-linkedin"></i></a><span class="soccount"><?php echo $conta; ?></span>
											</div>
										</aside>
									</div>
									<div class="col-md-6 col-lg-offset-1 col-md-offset-0">
										<div class="content push-bottom">
										
										<?php the_content();?>
										</div>
										<div class="center">
											<h3 class="vota">VOTA QUESTO ARTICOLO!</h3>
<?php
$conta = $wpdb->get_var("SELECT COUNT(*) FROM {$wpdb->prefix}art_vote where art=".$art);
$media = $wpdb->get_var("SELECT sum(val) as somma FROM {$wpdb->prefix}art_vote where art=".$art);
if($conta!=0){$media=$media/$conta;}
?>
											<br>
											<div class="voti">
												<div class="voto <?php if($media>0.5){echo"voted"; }?>" id="v1"></div>
												<div class="voto <?php if($media>1.5){echo"voted"; }?>" id="v2"></div>
												<div class="voto <?php if($media>2.5){echo"voted"; }?>" id="v3"></div>
												<div class="voto <?php if($media>3.5){echo"voted"; }?>" id="v4"></div>
												<div class="voto <?php if($media>4.5){echo"voted"; }?>" id="v5"></div>
											</div>
											<br>
											<span class="vresult hidden-xs"> <?php echo $conta; ?> votanti totali, media: <?php echo round($media, 2) ?></span>
											<p class="vresult visible-xs"> <?php echo $conta; ?> votanti totali, media: <?php echo round($media, 2) ?></p>
										</div>
										<div class="center post-share hidden-lg hidden-md push-top">
											<h3 class="hsha">SHARE!</h3>
<?php
$conta = $wpdb->get_var("SELECT conta FROM {$wpdb->prefix}art_share where art=$art and social=1");
if (!$conta) {$conta=0;}
?>
											<div class="center inbl">
												<a id="1soc" class="shareico little" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook-official"></i></a><br><span class="soccount"><?php echo $conta; ?></span>
											</div>
<?php
$conta = $wpdb->get_var("SELECT conta FROM {$wpdb->prefix}art_share where art=$art and social=2");
if (!$conta) {$conta=0;}
?>
											<div class="center inbl">
												<a id="2soc" class="shareico little" href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></a><br><span class="soccount"><?php echo $conta; ?></span>
											</div>
<?php
$conta = $wpdb->get_var("SELECT conta FROM {$wpdb->prefix}art_share where art=$art and social=3");
if (!$conta) {$conta=0;}
?>
											<div class="center inbl">
												<a id="3soc" class="shareico little" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a><br><span class="soccount"><?php echo $conta; ?></span>
											</div>
<?php
$conta = $wpdb->get_var("SELECT conta FROM {$wpdb->prefix}art_share where art=$art and social=4");
if (!$conta) {$conta=0;}
?>
											<div class="center inbl">
												<a id="4soc" class="shareico little" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=http://www.unicoffee.it" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-linkedin"></i></a><br><span class="soccount"><?php echo $conta; ?></span>
											</div>
										</div>
										
										<hr class="tall">
										
										<div class="auth-block-single">
											<!--<h3 class="hauth"><i class="fa fa-user"></i> L'autore</h3>-->
											<div class="img-thumbnail">
												<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
													<?php
													// Retrieve The Post's Author ID
													$user_id = get_the_author_meta('ID');
													// Set the image size. Accepts all registered images sizes and array(int, int)
													$size = 'thumbnail';

													// Get the image URL using the author ID and image size params
													$imgURL = get_cupp_meta($user_id, $size);

													// Print the image on the page
													echo '<img class="img-responsive" src="'. $imgURL .'" alt="'.get_the_author_meta('display_name').'">';?>
												</a>
											</div>
											<p><strong class="name"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author();?></a></strong></p>
											<p><?php the_author_meta( 'description' ); ?> </p>
											<ul class="social-icons">
												<li class="social-icons-linkedin"><a href="<?php the_author_meta('url');?>" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
												<li class="social-icons-twitter"><a href="http://www.twitter.com/<?php the_author_meta('twitter');?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											</ul>
										</div>
										
									<?php endwhile; endif; ?>
										
<?php if (comments_open()) : ?>

<div class="center push-top push-bottom">
	<a class="btncommenti" id="togcom">Mostra i commenti</a>
</div>


<div id="disqus_thread" style="display:none;"></div>
<script>
    (function() {
        var d = document, s = d.createElement('script');
        
        s.src = '//universitycoffee.disqus.com/embed.js';
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<?php endif; // comments_open ?>

									</div>
<script>	
$('.shareico').click(function(event) {
	var art=<?php echo get_the_ID();?>;
	var social=$(this).attr('id').replace("soc","");
	
	$.ajax({
		type: 'POST',
		url: "/wp-content/themes/unicoffee/share.php",
		data: {art:art,social:social}
	})
	
	.done(function(data) {
		var shares=parseInt($("#soc"+social).next(".soccount").html());
		var sharez=parseInt($("#"+social+"soc").next(".soccount").html());
		$("#soc"+social).next(".soccount").html(shares+1);
		$("#"+social+"soc").next(".soccount").html(sharez+1);
	})
					
	.fail(function(data) {
		alert('errore!');
	});		
});
  
$('.voto').click(function(event) {
	var art=<?php echo get_the_ID();?>;
	var voto=$(this).attr('id').replace("v","");
	
	$.ajax({
		type: 'POST',
		url: "/wp-content/themes/unicoffee/voti.php",
		data: {art:art,voto:voto}
	})
	
	.done(function(data) {
		$('.vresult').html("Grazie per aver votato!");
	})
					
	.fail(function(data) {
		alert('errore, ricarica la pagina!');
	});		
});

$('#togcom').click(function(){
	$(this).hide();
	$('#disqus_thread').show();
});
</script>