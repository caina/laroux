function fadeIn(i,elements,duration,callback){
if(i >= elements.length)
    typeof callback == 'function' && callback();
else
    elements.eq(i).fadeIn(duration,function(){
       fadeIn(i+1,elements,duration,callback);
    });        
;}
var WhWid = $(window).width();
$(document).ready(function() {

	CapaSlider = $('.fatherSlides').bxSlider({
		auto: false,
		useCss:true,
		speed:200,
		pager:false,
		mode:'fade',
		controls:false,
		pagination:false,
		onSliderLoad: function(){
			if (WhWid < 768){
				$('.itemDestHome[data-number="1"]').addClass('current');
				setTimeout(function() {
					CapaSlider.goToSlide(1);
				}, 5);
			}else{
				$('.itemDestHome[data-number="0"]').addClass('current');
				setTimeout(function() {
					CapaSlider.goToSlide(0);
				}, 5);
			}
		},
		onSlideBefore: function(){
			var curSlide = CapaSlider.getCurrentSlide();
			$('.itemDestHome').removeClass('current');
			$('.itemDestHome[data-number="'+curSlide+'"]').addClass('current');
		}
	});

	$('.itemDestHome').hover(function(e) {
		$('.itemDestHome').removeClass('current');
		$(this).addClass('current');
		e.preventDefault();
		var number = $(this).data('number');
		CapaSlider.goToSlide(number);
		return false;
	});

	$('#openNav').click(function(event) {
		if ($(this).hasClass('active')) {
			$('#header').removeClass('active');
			$('html').removeClass('dontScroll');
			$(this).removeClass('active');
			$('nav li').removeClass('active');
		}else{
			$('#header').addClass('active');
			$('html').addClass('dontScroll');
			$(this).addClass('active');
			/*ul = $('.allLinks');
			fadeIn(0,ul.find('li'),20);*/
		}
	});


	$('.mainNav li').hover(function(){
		if (WhWid > 768){
			if($(this).closest(".containerUls").length>0){
			} else {
				$('nav li').removeClass('active');
				$(this).addClass('active');
			}
		}
	});
	$('.closeCntUls').click(function() {
		if ($(this).parent('.itemMenu').hasClass('active')){
			$(this).parent('.itemMenu').removeClass('active');
		} else {
			$('nav li.active').removeClass('active');
			$(this).parent('.itemMenu').addClass('active');
		}
	});

	//$(".mainArticle header h1").fitText(0.8);



    //var bottom = $('.mainNav').offset().top();
	/*$('.containerUls').mouseleave(function() {
		$('nav li').removeClass('active');
	});*/
	$('.overlayMenu').hover(function() {
		//alert('as');
		$('.mainNav li').removeClass('active');
	});
	$('.overlayMenu').click(function() {
		$('#openNav').removeClass('active');
		$('#header').removeClass('active');
		$('html').removeClass('dontScroll');
		$(this).removeClass('active');
		$('nav li').removeClass('active');
	});

	$('#closeNavLk').click(function(event) {
		$('#header').removeClass('active');
		$('#openNav').removeClass('active');
		setTimeout(function() {
			$('.mainNav li').removeClass('active');
		}, 100);
	});
	$('#backgroundSlider div').each(function(){
		var urlImg = $(this).find('img').attr('src');
		$(this).css('backgroundImage','url('+urlImg+')');
	});
});

$(window).resize(function(){
	var hWid = $(window).height();
	var headerHei = $('#header').height();
	var newHCnt = (hWid - headerHei - 400);
	//$('.mainNav').css('maxHeight',+newHCnt);
});
$(window).scroll(function(){ 
	if ($(this).scrollTop() > 1000){
		$('.topoDoSite').fadeIn();
	}else{
		$('.topoDoSite').fadeOut();
	}
});

$('.topoDoSite').click(function(){
	$("html, body").animate({scrollTop: 0 }, 600);
	return false;
});
$('.mediaImage a').click(function(event){
	$('body').addClass('popUpTrue');
});
$('.overClickPopUp, .closePopUp').click(function(event){
	$('body').removeClass('popUpTrue');
});
if(window.location.href.indexOf("#video") > -1) {
   $('body').addClass('popUpTrue');
}
// POPUP VIDEO
// Find all YouTube and Vimeo videos
var $allVideos = $("iframe[src^='//player.vimeo.com'], iframe[src^='//www.youtube.com']"),
    // The element that is fluid width
    $fluidEl = $("body");
// Figure out and save aspect ratio for each video
$allVideos.each(function() {
  $(this)
    .data('aspectRatio', this.height / this.width)
    // and remove the hard coded width/height
    .removeAttr('height')
    .removeAttr('width');
});
// When the window is resized
$(window).resize(function() {
  var newWidth = $fluidEl.width();
  // Resize all videos according to their own aspect ratio
  $allVideos.each(function() {
    var $el = $(this);
    $el
      .width(newWidth)
      .height(newWidth * $el.data('aspectRatio'));
  });
// Kick off one resize to fix all videos on page load
}).resize();
/*$('.grid').masonry({
	columnWidth: '.grid-sizer',
	itemSelector: '.grid-item',
	percentPosition: true,
	originTop: true,
	shelfOrder: 1

});*/
jQuery(window).on('load', function(){ var $ = jQuery;
var $container = $('.grid');
    $container.masonry({
		percentPosition: true,
		shelfOrder: 1,
		columnWidth: '.grid-sizer',
        gutterWidth: 15,
        itemSelector: '.grid-item'
    });
});

