<html>
<head>
<title>PHP TEST</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<?php

$link = mysql_connect('mysql5f02.in.shared-server.net:24318', 'gnFp255', 'swr7ZFm8');
if(!$link) die('接続失敗です。'.mysql_error());

$db_selected = mysql_select_db('gnFp255', $link);
if(!$db_selected) die('データベース選択失敗です。'.mysql_error());

$sql  = "SELECT ID,post_content from wp_posts ";
$result = mysql_query($sql);

while ($row = mysql_fetch_assoc($result)) {
    print($row['ID'].",");
    print($row['post_content'].",");
 		print "<br>";
}

$close_flag = mysql_close($link);

?>
</body>
</html>