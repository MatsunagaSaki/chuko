<?php
/**
 * @auther  Azan inc. aipa
 * @date    2015/03/12
 * @version 0.0.1
 *
 * @document
 * PHPでUAを判断し、PC、またはスマホのHTMLを読み込んで表示する簡易プログラムです。
 * 使い方として、$file_name に、ファイル名をいれてください。
 * また、読み込むHTMLファイルは、それぞれ下記にすること
 *
 * PC -> ファイル名.html
 * SP -> ファイル名_sp.html
 *
 * @annotation
 * 注意点
 * $file_nameは上記で指す「ファイル名」のみ入れてください。※でないとエラーになります。
 * $file_nameのディレクトリはカレントディレクトリ（このPHPファイルと同じディレクトリ）に用意すること。
 *
 */

/**
 * @今後
 *
 * なにかと汎用性は高そうなので、（もしかしたらもうすでにライブラリはあるかもしれませんが）
 * クラス化して、すべてこのPHPファイルだけで完結するようにしたいです。
 *
 */

/**
 * 読み込むHTMLのファイル名
 * 環境に合わせてファイル名を変更する。
 */
$file_name = 'index';

// ユーザーエージェントを取得
$ua = $_SERVER['HTTP_USER_AGENT'];

// スマホのアクセス
if ((strpos($ua, 'Android') !== false) &&
	(strpos($ua, 'Mobile') !== false) ||
	(strpos($ua, 'iPhone') !== false) ||
	(strpos($ua, 'Windows Phone') !== false))
{
	include("./" . $file_name . "_sp.html");
// PC、タブレットへのアクセス
} else {
	include("./" . $file_name . ".html");
}

