$(window).load(function(){
	
	//メインスライド
	$('.rslides').responsiveSlides();
	
	//要素の高さを揃える
	var element_h = 0;
	$('.Arrange').each(function(){
		get_h = $(this).height();
		if(get_h >= element_h){
			element_h = get_h;
		};
	});
	$('.Arrange').height(element_h);
	var element_h2 = 0;
	$('.Arrange2').each(function(){
		get_h2 = $(this).height();
		if(get_h2 >= element_h2){
			element_h2 = get_h2;
		};
	});
	$('.Arrange2').height(element_h2);
	
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
	
	
	//グローバルナビアクティブ化
	var url = location.href;
	var url_array = split_slash(url);
	
	if(url_array[3] == ''){
		$('#g_navi li').eq(0).addClass('active');
	}else{
		$('#g_navi li').each(function(){
			var this_href = $(this).find('a').attr('href');
			if(this_href.indexOf(url_array[3]) != -1){ $(this).addClass('active'); }
		});
	}
	
	function split_slash(str){
		var array = str.split("/");
		return array;
	}
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

