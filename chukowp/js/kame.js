$(function()
{
	// 初期化------------
	$("#list_eto").hide();
	$("#show_eto").click(function(){$("#list_eto").toggle("fast");});
	$("#list_okinawa").hide();
	$("#show_okinawa").click(function(){$("#list_okinawa").toggle();});
	$("#list_message").hide();
	$("#show_message").click(function(){$("#list_message").toggle();});
	$("div#show_img").hide();
	$("div#tate_img").hide();



	$( 'input[name="type"]:radio' ).change( function()
	{
		var type_id=$( this ).val();
		/*追加20141226*/
		var show_kame_area="";
		switch(type_id)
		{
			case "1":show_kame_area="(1) 忠孝南蛮荒焼一升甕";break;
			case "2":show_kame_area="(2) 忠孝南蛮荒焼三升甕";break;
			case "3":show_kame_area="(3) 忠孝南蛮荒焼五升甕";break;
			case "4":show_kame_area="(4) 忠孝南蛮瓶一升";break;
			case "5":show_kame_area="(5) 忠孝南蛮瓶赤紐3.2L";break;
		}
		$("span#show_kame_area").html(show_kame_area);
		//一旦起こして該当部分を選択不可に
		$("div.layoutlist").css("color", "#444");
		$("div.layoutlist").css("text-decoration", "none");
		$("input[name=layout]").removeAttr("disabled");

		$("div#orient_tate").css("color", "#444");
		$("div#orient_tate").css("text-decoration", "none");
		$("div#orient_tate input[type=radio]").removeAttr("disabled");

		if(
			type_id==1　||
			type_id==2　||
			type_id==3
		)
		{
			$("div#layoutno5").css("text-decoration", "line-through"); $("div#layoutno5").css("color", "#ccc"); $("div#layoutno5 input[type=radio]").attr("disabled", "disabled");
			$("div#layoutno6").css("text-decoration", "line-through");$("div#layoutno6").css("color", "#ccc"); $("div#layoutno6 input[type=radio]").attr("disabled", "disabled");
			$("div#layoutno7").css("text-decoration", "line-through");$("div#layoutno7").css("color", "#ccc"); $("div#layoutno7 input[type=radio]").attr("disabled", "disabled");
			$("div#layoutno8").css("text-decoration", "line-through");$("div#layoutno8").css("color", "#ccc"); $("div#layoutno8 input[type=radio]").attr("disabled", "disabled");

			$("div#orient_tate").css("text-decoration", "line-through");$("div#orient_tate").css("color", "#ccc"); $("div#orient_tate input[type=radio]").attr("disabled", "disabled");
		}
	});
	$( 'input[name="layout"]:radio' ).change( function() {
		var layout_id=$( this ).val();

		// 20141226
		var show_layout_area="";
		switch(layout_id)
		{
		 case "1":show_layout_area="(1) 横書き文字のみ";break;
		 case "2":show_layout_area="(2) 横書き　文字・イラスト１点（上）";break;
		 case "3":show_layout_area="(3) 横書き　文字・イラスト１点（下）";break;
		 case "4":show_layout_area="(4) 横書き　文字・イラスト（ななめ）";break;
		 case "5":show_layout_area="(5) 縦書き　文字のみ";break;
		 case "6":show_layout_area="(6) 縦書き　文字・イラスト１点（上）";break;
		 case "7":show_layout_area="(7) 縦書き　文字・イラスト１点（下）";break;
		 case "8":show_layout_area="(8) 縦書き　イラスト（ななめ）";break;
		}
		$("span#show_layout_area").html(show_layout_area);


		//初期化
		if(layout_id==1){$("div#show_img").css("background-image", "url(http://gift.chukogura.com/images/layout2.jpg)");}
		if(layout_id==2){$("div#show_img").css("background-image", "url(http://gift.chukogura.com/images/layout2.jpg)");}
		if(layout_id==3){$("div#show_img").css("background-image", "url(http://gift.chukogura.com/images/layout2.jpg)");}
		if(layout_id==4){$("div#show_img").css("background-image", "url(http://gift.chukogura.com/images/layout2.jpg)");}
		if(layout_id==5)
		{
			$("div#show_img").css("background-image", "url(images/layout2.jpg)");
			$("#show_img").addClass("tate-area");
			$("#yoko-line").addClass("tate-area");
		}
		if(layout_id==6){$("div#show_img").css("background-image", "url(http://gift.chukogura.com/images/layout2.jpg)");}
		if(layout_id==7){$("div#show_img").css("background-image", "url(http://gift.chukogura.com/images/layout2.jpg)");}
		if(layout_id==8){$("div#show_img").css("background-image", "url(http://gift.chukogura.com/images/layout2.jpg)");}
	});

	$( 'input[name="orient"]:radio' ).change( function() {
		var orient=$( this ).val();
		if(orient=="横")
		{
			$("div#show_img").show();
			$("div#tate_img").hide();
		}
		if(orient=="縦")
		{
			$("div#show_img").hide();
			$("div#tate_img").show();
		}

	});

	$( 'input[name="font1"]:radio' ).change( function() {
		var font1=$( this ).val();
		var show_font_area="";
		switch(font1)
		{
			case "1":show_font_area="楷書体";break;
			case "2":show_font_area="般若";break;
			case "3":show_font_area="クラフト墨";break;
//			case "4":show_font_area="まるもじRDW7";break;
			case "4":show_font_area="京円";break;
		}
		$("span#show_font_area").html(show_font_area);
	});
	$( 'input[name="font2"]:radio' ).change( function() {
		var font2=$( this ).val();
		var show_font_area_sub="";
		switch(font2)
		{
			case "1":show_font_area_sub="楷書体";break;
			case "2":show_font_area_sub="丸ゴシック";break;
			case "3":show_font_area_sub="楷書体";break;
		}
		$("span#show_font_area_sub").html(show_font_area_sub);
	});
	$( 'input[name="each-image"]:radio' ).change( function() {
		var img=$( this ).val();
		var show_illust_area="";
		$("span#show_illust_area").html("<img src='/images/"+img+"' style='width:80px;margin-left:16px;'>");
	});

/* 文字数カウントを廃止
	$("input#str1").keyup(function()
	{
		var tmp=$("input#str1").val();
		var len=8-tmp.length;
		if(len<0)
		{
			$("span#len1").text("入力文字数が多すぎます");
			$("span#len1").css("color","#f00");
		}else
		{
			$("span#len1").text("あと"+len+"文字入力できます。");
			$("span#len1").css("color","#444");
		}
	});
	$("input#str2").keyup(function()
	{
		var tmp=$("input#str2").val();
		var len=7-tmp.length;
		if(len<0)
		{
			$("span#len2").text("入力文字数が多すぎます");
			$("span#len2").css("color","#f00");
		}else
		{
			$("span#len2").text("あと"+len+"文字入力できます。");
			$("span#len2").css("color","#444");
		}
	});
	$("input#str3").keyup(function()
	{
		var tmp=$("input#str3").val();
		var len=10-tmp.length;
		if(len<0)
		{
			$("span#len3").text("入力文字数が多すぎます");
			$("span#len3").css("color","#f00");
		}else
		{
			$("span#len3").text("あと"+len+"文字入力できます。");
			$("span#len3").css("color","#444");
		}
	});
	$("input#str4").keyup(function()
	{
		var tmp=$("input#str4").val();
		var len=10-tmp.length;
		if(len<0)
		{
			$("span#len4").text("入力文字数が多すぎます");
			$("span#len4").css("color","#f00");
		}else
		{
			$("span#len4").text("あと"+len+"文字入力できます。");
			$("span#len4").css("color","#444");
		}
	});
*/
	$("input#show").click(function()
	{

// 20150205
var t=$( 'input[name="type"]:checked').val();
if(t==undefined)
{
	alert("手順１でご購入の甕をお選びください。");
}
var t=$( 'input[name="orient"]:checked').val();
if(t==undefined)
{
	alert("手順２で文字とイラストのレイアウトをお選びください。");
}

		var str1=$("input#str1").val();
		var str2=$("input#str2").val();
		var str3=$("input#str3").val();
		var str4=$("input#str4").val();
		var str5=$("input#str5").val();
		$("#output1").text(str1);
		$("#output2").text(str2);
		$("#output3").text(str3);
		$("#output4").text(str4);
		$("#output5").text(str5);
		$("#tate_output1").text(str1);
		$("#tate_output2").text(str2);
		$("#tate_output3").text(str3);
		$("#tate_output4").text(str4);
		$("#tate_output5").text(str5);
		var offset = $("#proc-show").offset().top;
		$('html,body').animate({ scrollTop: offset }, 'slow');
	});
	$("input#reset").click(function()
	{

		$("span#show_kame_area").text("");
		$("span#show_layout_area").text("");
		$("span#show_illust_area").text("");
		$("span#show_font_area").text("");
		$("span#show_font_area_sub").text("");

		$("#output1").text("");
		$("#output2").text("");
		$("#output3").text("");
		$("#output4").text("");
		$("#output5").text("");

		$("#tate_output1").text("");
		$("#tate_output2").text("");
		$("#tate_output3").text("");
		$("#tate_output4").text("");
		$("#tate_output5").text("");

                var offset = $("#proc-3").offset().top;
	        $('html,body').animate({ scrollTop: offset }, 'slow');
	});
});