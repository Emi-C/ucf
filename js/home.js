	jQuery(document).ready(function() {
		/*jQuery('.evid').hover(function(){
			jQuery(this).find('.icona.bot>i').toggleClass('fa-spin');
		});*/		//mix
		jQuery('.masonry').imagesLoaded( function() {
			var jgrid = jQuery('.masonry').isotope({});
			jQuery('.filtri a').click(function() {
			  var filterValue = jQuery(this).attr('data-filter');
			  jgrid.isotope({ filter: filterValue });
			  jQuery('.filtri li').removeClass('active');
			  jQuery(this).parent().addClass('active');
			});
		});				//evidenza
		jQuery("#revolutionSlider").revolution({
		  sliderType:"standard",
		  sliderLayout:"fullwidth",
		  delay:9000,
		  navigation: {
			  arrows:{enable:true}				
		  },			
		  responsiveLevels:[1200,992,768,480],
		  gridwidth: [1170,750,460,280],
		  gridheight: [600,450,350,300]	
		});	
		//novità
		jQuery("#owl-novita").owlCarousel({
			"autoPlay": true,
			"autoplayTimeout": 4000,
			"loop":true,
			"margin":4,
			responsive:{
				0:{
					items:1
				},
				768:{					items:3
				}
			}
		});
	});
	//loader
jQuery('.body').imagesLoaded( function() {
	jQuery('.loader').fadeOut();
	jQuery('body.home').css('overflow','auto');
	jQuery(window).trigger('resize');
});
