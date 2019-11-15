$(document).ready(function() {
	//ricerca desk e mob
	$(".searchtg").click(function(){
		$(".searchtg").toggleClass("active");
		$(".formsearch").toggleClass("active");
		$(".formsearch").toggle();
		$(".txtsearch").val("");
		if ($(".formsearch").hasClass("active")){
			$(".searchtg").html("<i class='fa fa-times'></i>");
			$(".txtsearch").focus();
		}else{
			$(".searchtg").html("<i class='fa fa-search'></i>");
		}	
	});
	$(".subsearch").click(function(){
		if($(".txtsearch").val()!=""){
			$("#searchForm").submit();
		}
	});
	$(".subsearchMob").click(function(){
		if($(".txtsearchMob").val()!=""){
			$("#searchFormMob").submit();
		}
	});


	//toggle menu mobile
	$('.btnmenu').click(function(){
		$('.mobmenu').css('height','100vh');
		$('body').css('overflow','hidden');
	});
	$('.tgbtnx').click(function(){
		$('.mobmenu').css('height','0vh');
		$('body').css('overflow','auto');
	});


	//popola menu mobile
	$(".menu-voci li").each(function() {
		$(this).clone().appendTo(".mobilemenu .voci");
	});
	
	//padding main=altezza header
	var ptm=$('header').height();
	$('.main').css('padding-top',ptm);
	
	//torna su
	var scrollTrigger = 100 // px
    function backToTop() {
		var scrollH = $(window).scrollTop();
		if (scrollH > scrollTrigger) {
			$('#totop').addClass('show');
		} else {
			$('#totop').removeClass('show');
		}
	};
    backToTop(); //@document ready
    $(window).on('scroll', function () { //@each scroll
        backToTop();
    });
	
    $('#totop').on('click', function() {
        $('html,body').animate({scrollTop: 0}, 700,function(){$('#totop').removeClass('show');});
    });
	
	//sticky sidebar (ptm lo prendo da padding body, è altezza header)
	jQuery('footer').imagesLoaded( function() {
		var pbm=$('footer').height();
		jQuery(".sidebar").each(function(){
			jQuery(this).sticky({topSpacing:ptm+20,bottomSpacing:pbm+20,responsiveWidth:true});
		});
	});
	
	
	
	$('body').mouseleave(function() {
		if(Cookies.get('addio')!=1){
			$('.addio').css('height','100vh');
			$('.addio').css('padding-top','80px');
			$('body').css('overflow','hidden');
			Cookies.set('addio', 1, {expires: 3});
		};
	});

	$('.addiobtnx').click(function(){
		$('.addio').css('height','0vh');
		$('.addio').css('padding-top','0px');
		$('body').css('overflow','auto');
	});
	
});

