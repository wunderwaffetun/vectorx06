jQuery(function($){
	$(document).mouseup( function(e){
		var div = $( ".popup .window" );
		if ( !div.is(e.target)
		    && div.has(e.target).length === 0 ) {
// 			$(".popup .window video").each(function (index, el){
// 				$(el).get(0).pause();
// 			});
			$('.gplay_video').each(function(){
				this.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*')
			});
            //$(".popup .window video").get(0).pause();
			$('.popup').fadeOut();
		}
	});
	
	$(window).on('resize', function(){
		kostul();
	});
	
});

function kostul() {
	let coord = $("#form-name2").offset();
	$(".block-arrow").offset({ left: coord.left - 420, top: coord.top });
}

function showVideo(id) {
	$(id).fadeIn();
	$(id +' .gplay_video').each(function(){
		this.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*')
	});
}

$(function(){
	$('.docs-page .list .item .name').click(function() {
		$(this).toggleClass('active');
		$(this).next('.text').slideToggle();
	});
	$('.faq-block .list .item .name').click(function() {
		$(this).toggleClass('active');
		$(this).next('.text').slideToggle();
	});
	$('.menubg').click(function() {
		$('.menubg').fadeOut();
		$('.mobile-menu').removeClass('opened');
	});
	$('.header .menu-button').click(function() {
		$('.menubg').fadeIn();
		$('.mobile-menu').addClass('opened');
	});
	$('.about-page .gallery-block .list').slick({
	});
	var slider = $('.about-page .gallery-block .list');
	$('.sl-count__total').text( slider.slick("getSlick").slideCount);
	$('.about-page .gallery-block .list').on('afterChange', function(event, slick, currentSlide){
	     $(".sl-count__current").text(currentSlide + 1);
	});
	$('.about-page .docs-block .list .slider').slick({
		variableWidth: true,
		dots: true
	});
});

$(function(){
  $('.minimized').click(function(event) {
	  console.log('start min');
    var i_path = $(this).attr('src');
    $('body').append('<div id="overlay"></div><div id="magnify"><img src="'+i_path+'"><div id="close-popup"><i></i></div></div>');
    $('#magnify').css({
     left: ($(document).width() - $('#magnify').outerWidth())/2,
     // top: ($(document).height() - $('#magnify').outerHeight())/2 upd: 24.10.2016
            top: ($(window).height() - $('#magnify').outerHeight())/2
   });
    $('#overlay, #magnify').fadeIn('fast');
  });
  
  $('body').on('click', '#close-popup, #overlay', function(event) {
    event.preventDefault();
    $('#overlay, #magnify').fadeOut('fast', function() {
      $('#close-popup, #magnify, #overlay').remove();
    });
  });
});

$(function(){
	$(".news-nav ul li").click(function () {
		let id = $(this).data('id');
		$(".news-nav ul li").removeClass('active');
		$(this).addClass('active');
		$(".news-items").hide();
		$(".news-items[data-id='" + id + "']").show();
	});
});