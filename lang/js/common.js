$(window).load(function(){
	
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
	
	$('#g_navi ul li a').click(function(){
		if($(this).hasClass('close')){
			$(this).removeClass('close');
			$(this).addClass('open');
		}else{
			$(this).removeClass('open');
			$(this).addClass('close');
		};
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

