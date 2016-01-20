<?PHP

$images_array=array();
#$images_array[]="5_101.gif";
#$images_array[]="5_102.gif";
#$images_array[]="5_103.gif";
#$images_array[]="5_106.gif";
#$images_array[]="5_107.gif";
#$images_array[]="5_108.gif";
#$images_array[]="5_109.gif";

$images_array[]="ai.gif";
$images_array[]="bingata.gif";
$images_array[]="haibisukasu.gif";
$images_array[]="shi-sa-a.gif";
$images_array[]="shi-sa-b.gif";
$images_array[]="tsurukame.gif";
$images_array[]="beru.gif";



foreach($images_array AS $each)
{
	print("<div class='each-image' style='border:1px solid #ddd;'><label><input type='radio' name='each-image' value='".$each."'><img src='/images/".$each."'></label></div>");
}
print("<div style='clear:both;'></div>");

?>