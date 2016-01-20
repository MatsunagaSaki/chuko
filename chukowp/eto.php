<?PHP

$images_array=array();
/*
$images_array[]="5_07.gif";
$images_array[]="5_08.gif";
$images_array[]="5_09.gif";
$images_array[]="5_10.gif";
$images_array[]="5_11.gif";
$images_array[]="5_12.gif";
$images_array[]="5_13.gif";
$images_array[]="5_14.gif";
$images_array[]="5_15.gif";
$images_array[]="5_16.gif";
$images_array[]="5_17.gif";
$images_array[]="5_18.gif";
$images_array[]="5_31.gif";// 辰
$images_array[]="5_32.gif";// 辰
$images_array[]="5_33.gif";// 辰
$images_array[]="5_34.gif";// 巳
$images_array[]="5_35.gif";// 巳
$images_array[]="5_36.gif";// 巳
$images_array[]="5_37.gif";// 午
$images_array[]="5_38.gif";// 午
$images_array[]="5_39.gif";// 午
$images_array[]="5_40.gif";// 羊
$images_array[]="5_41.gif";// 羊
$images_array[]="5_42.gif";// 羊
$images_array[]="5_19.gif"; //申
$images_array[]="5_20.gif"; //申
$images_array[]="5_21.gif"; //申
$images_array[]="5_22.gif";// 酉
$images_array[]="5_23.gif";// 酉
$images_array[]="5_24.gif";// 酉
$images_array[]="5_25.gif";// 戌
$images_array[]="5_26.gif";// 戌
$images_array[]="5_27.gif";// 戌
$images_array[]="5_28.gif";// 亥
$images_array[]="5_29.gif";// 亥
$images_array[]="5_30.gif";// 亥
*/

$images_array[]="ne-1.gif";
$images_array[]="ne-2.gif";
$images_array[]="ne-3.gif";
$images_array[]="ushi-1.gif";
$images_array[]="ushi-2.gif";
$images_array[]="ushi-3.gif";
$images_array[]="tora-1.gif";
$images_array[]="tora-2.gif";
$images_array[]="tora-3.gif";
$images_array[]="u-1.gif";
$images_array[]="u-2.gif";
$images_array[]="u-3.gif";
$images_array[]="tatsu-1.gif";
$images_array[]="tatsu-2.gif";
$images_array[]="tatsu-3.gif";
$images_array[]="mi-1.gif";
$images_array[]="mi-2.gif";
$images_array[]="mi-3.gif";
$images_array[]="uma-1.gif";
$images_array[]="uma-2.gif";
$images_array[]="uma-3.gif";
$images_array[]="hitsuji-1.gif";
$images_array[]="hitsuji-2.gif";
$images_array[]="hitsuji-3.gif";
$images_array[]="saru-1.gif";
$images_array[]="saru-2.gif";
$images_array[]="saru-3.gif";
$images_array[]="tori-1.gif";
$images_array[]="tori-2.gif";
$images_array[]="tori-3.gif";
$images_array[]="inu-1.gif";
$images_array[]="inu-2.gif";
$images_array[]="inu-3.gif";
$images_array[]="i-1.gif";
$images_array[]="i-2.gif";
$images_array[]="i-3.gif";

$ct=0;
foreach($images_array AS $each)
{
	$title="";

	switch($ct)
	{
		//子丑寅卯辰巳午未申酉戌亥
		case 0:	$title="子";break;
		case 3:	$title="丑";break;
		case 6:	$title="寅";break;
		case 9:	$title="卯";break;
		case 12:	$title="辰";break;
		case 15:	$title="巳";break;
		case 18:	$title="午";break;
		case 21:	$title="未";break;
		case 24:	$title="申";break;
		case 27:	$title="酉";break;
		case 30:	$title="戌";break;
		case 33:	$title="亥";break;
		default:$title="";break;
	}
	if(strlen($title)>0)
	{
		print("<div style='clear:both;'></div><div class='animal_name'>".htmlspecialchars($title,ENT_QUOTES)."</div>");
	}
	print("<div class='each-image' style='border:1px solid #ddd;'><label><input type='radio' name='each-image' value='".$each."'><img src='/images/".$each."'></label></div>");
	$ct++;
}
print("<div style='clear:both;'></div>");

?>