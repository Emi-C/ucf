
							<div class="container-fluid" id="maincont">
								<div class="row">
									<?php
									if ( have_posts() ) : while ( have_posts() ) : the_post();
									$art=get_the_ID();
									?>
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

										<?php the_content();?>
										</div>
										<hr>
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
										<div class="center post-share push-top">
											<h3 class="hsha">SHARE!</h3><br>
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


									<?php endwhile; endif; ?>


									</div>
<script>
$('.shareico').click(function(event) {
	var art=<?php echo get_the_ID();?>;
	var social=$(this).attr('id').replace("soc","");

	$.ajax({
		type: 'POST',
		url: "/carteconti/wp-content/themes/carteconti/share.php",
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
		url: "/carteconti/wp-content/themes/carteconti/voti.php",
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