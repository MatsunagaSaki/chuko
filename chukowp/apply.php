<?PHP

if(!is_numeric($_GET["type"]))
{
	exit("ERROR");
}

$url="/arayaki/preview/preview_form".urlencode($_GET["type"]);

$param=array();
switch($_GET["type"])
{
  case 1: $param[]="type=".urlencode("(A) 忠孝南蛮荒焼一升甕"); break;
  case 2: $param[]="type=".urlencode("(B) 忠孝南蛮荒焼三升甕"); break;
  case 3: $param[]="type=".urlencode("(C) 忠孝南蛮荒焼五升甕"); break;
  case 4: $param[]="type=".urlencode("(D) 忠孝南蛮瓶一升"); break;
  case 5: $param[]="type=".urlencode("(E) 忠孝南蛮瓶赤紐3.2L"); break;
}

switch($_GET["layout"])
{
  case 1: $param[]="layout=".urlencode("(1) 横書き文字のみ"); break;
  case 2: $param[]="layout=".urlencode("(2) 横書き　文字・イラスト１点（上）"); break;
  case 3: $param[]="layout=".urlencode("(3) 横書き　文字・イラスト１点（下）"); break;
  case 4: $param[]="layout=".urlencode("(4) 横書き　文字・イラスト（ななめ）"); break;
  case 5: $param[]="layout=".urlencode("(5) 縦書き　文字のみ"); break;
  case 6: $param[]="layout=".urlencode("(6) 縦書き　文字・イラスト１点（上）"); break;
  case 7: $param[]="layout=".urlencode("(7) 縦書き　文字・イラスト１点（下）"); break;
  case 8: $param[]="layout=".urlencode("(8) 縦書き　イラスト（ななめ）"); break;
}

switch($_GET["font1"])
{
  case 1: $param[]="font1=".urlencode("(1) 楷書体"); break;
  case 2: $param[]="font1=".urlencode("(2) 般若"); break;
  case 3: $param[]="font1=".urlencode("(3) クラフト墨"); break;
  //case 4: $param[]="font1=".urlencode("(4) まるもじRDW7"); break;
  case 4: $param[]="font1=".urlencode("(5) 京円"); break;
}

switch($_GET["font2"])
{
  case 1: $param[]="font2=".urlencode("(A) 楷書体"); break;
  case 2: $param[]="font2=".urlencode("(B) 丸ゴシック	"); break;
  case 3: $param[]="font2=".urlencode("(C) 角ゴシック"); break;
}


$param[]="str1=".urlencode($_GET["str1"]);
$param[]="str2=".urlencode($_GET["str2"]);
$param[]="str3=".urlencode($_GET["str3"]);
$param[]="str4=".urlencode($_GET["str4"]);
$param[]="str5=".urlencode($_GET["str5"]);
$param[]="str10=".urlencode($_GET["str10"]);
$param[]="str11=".urlencode($_GET["str11"]);
$param[]="image=".urlencode($_GET["each-image"]);
$param[]="orient=".urlencode($_GET["orient"]);

$url=$url."?".implode("&",$param);
header("Location: ".$url);
exit();

?>