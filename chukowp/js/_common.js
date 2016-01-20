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
	var gNaviSize = $('#g_navi').find('a').size();
	for(var i = 0; i < gNaviSize; i++){
		var getHref = $('#g_navi').find('a').eq(i).attr('href').replace('.html','');
		if(url.indexOf(getHref) != -1){
			$('#g_navi').find('a').eq(i).parent('li').addClass('active');
			console.log(getHref);
		};
	};
	
	
});