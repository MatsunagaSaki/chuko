$(window).load(function(){
	
	//メインスライド
	$('.rslides').responsiveSlides();
	
	//タブ切り替え
	var tabElement = $('#tab');
	var targetInfo;
	var infoElement = $('.info_style');
	tabElement.find('a').click(function(){
		tabElement.find('a').removeClass('active');
		$(this).addClass('active');
		targetInfo = $(this).attr('href');
		infoElement.hide();
		$(targetInfo).show();
		return false;
	});
	
	//TOPスクロール
	$('#toTop').click(function(){
		$('body, html').not(':animated').animate({ scrollTop: 0 }, 500);
		return false;
	});
	
	//アコーディオン
	$('#acBtnMain').click(function(){
		$('#g_navi').slideToggle(300);
		return false;
	});
	
	$('#g_navi ul li span').click(function(){
		if($(this).hasClass('close')){
			$(this).removeClass('close');
			$(this).addClass('open');
		}else{
			$(this).removeClass('open');
			$(this).addClass('close');
		};
		$(this).next('ul').slideToggle(300);
		return false;
	});
	
	$('.btnClose').click(function(){
		$('#g_navi').slideToggle(300);
		return false;
	});
	
});
//jetpackCDN対応
$(function(){
$("img").error(function() {
	var m = /^http:\/\/i[0-2]\.wp\.com\/(.*)$/.exec($(this).attr("src"));
	if (m && m[1]) {
		$(this).attr("src", "http://" + m[1]);
	}
	return true;
});
});