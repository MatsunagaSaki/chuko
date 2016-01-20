<?PHP

$images_array=array();
$images_array[]="kansya.gif";
$images_array[]="kotobuki.gif";


foreach($images_array AS $each)
{
	print("<div class='each-image' style='border:1px solid #ddd;'><label><input type='radio' name='each-image' value='".$each."'><img src='/images/".$each."'></label></div>");
}
print("<div style='clear:both;'></div>");

?>