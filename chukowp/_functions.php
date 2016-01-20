<?php
// メインコンテンツの幅を指定
if ( ! isset( $content_width ) ) $content_width = 600;

// RSS2 の feed リンクを出力
add_theme_support( 'automatic-feed-links' );

// カスタムメニューを有効化
add_theme_support( 'menus' );

// カスタムメニューの「場所」を設定
register_nav_menu( 'header-navi', 'ヘッダーのナビゲーション' );

// サイドバーウィジットを有効化
register_sidebar( array(
	'name' => 'サイドバーウィジット-1',
	'id' => 'sidebar-1',
	'description' => 'サイドバーのウィジットエリアです。',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
) );
// カスタム投稿タイプの追加
/*手造り泡盛体験お客様の声 投稿タイプ生成*/
add_action('init', 'register_cpt_exvoice');
function register_cpt_exvoice()
{
  $labels = array(
    'name' => _x('手造り泡盛体験お客様の声', 'post type general name'),
    'singular_name' => _x('手造り泡盛体験お客様の声', 'post type singular name'),
    'add_new' => _x('新規追加', 'exvoice'),
    'add_new_item' => __('手造り泡盛体験お客様の声の記事を書く'),
    'edit_item' => __('手造り泡盛体験お客様の声の記事を編集'),
    'new_item' => __('新しい記事'),
    'view_item' => __('記事を見てみる'),
    'search_items' => __('記事を探す'),
    'not_found' =>  __('記事はありません'),
    'not_found_in_trash' => __('ゴミ箱に記事はありません'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail','custom-fields','excerpt','revisions','page-attributes','comments'),
    'has_archive' => true
  );
  register_post_type('exvoice',$args);
	// カスタムタクソノミーを作成
 
	//カテゴリータイプ
	$args = array(
	'label' => 'カテゴリー',
	'public' => true,
	'show_ui' => true,
	'hierarchical' => true
	);
	register_taxonomy('exvoice_category','exvoice',$args);
}
/*ザ・オーナーズお客様の声 投稿タイプ生成*/
add_action('init', 'register_cpt_owvoice');
function register_cpt_owvoice()
{
  $labels = array(
    'name' => _x('ザ・オーナーズお客様の声', 'post type general name'),
    'singular_name' => _x('ザ・オーナーズお客様の声', 'post type singular name'),
    'add_new' => _x('新規追加', 'owvoice'),
    'add_new_item' => __('ザ・オーナーズお客様の声の記事を書く'),
    'edit_item' => __('ザ・オーナーズお客様の声の記事を編集'),
    'new_item' => __('新しい記事'),
    'view_item' => __('記事を見てみる'),
    'search_items' => __('記事を探す'),
    'not_found' =>  __('記事はありません'),
    'not_found_in_trash' => __('ゴミ箱に記事はありません'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 6,
    'supports' => array('title','editor','thumbnail','custom-fields','excerpt','revisions','page-attributes','comments'),
    'has_archive' => true
  );
  register_post_type('owvoice',$args);
	// カスタムタクソノミーを作成
 
	//カテゴリータイプ
	$args = array(
	'label' => 'カテゴリー',
	'public' => true,
	'show_ui' => true,
	'hierarchical' => true
	);
	register_taxonomy('owvoice_category','owvoice',$args);
}
/*記念日シーンで選ぶお客様の声 投稿タイプ生成*/
add_action('init', 'register_cpt_anvoice');
function register_cpt_anvoice()
{
  $labels = array(
    'name' => _x('記念日シーンで選ぶお客様の声', 'post type general name'),
    'singular_name' => _x('記念日シーンで選ぶお客様の声', 'post type singular name'),
    'add_new' => _x('新規追加', 'anvoice'),
    'add_new_item' => __('記念日シーンで選ぶお客様の声の記事を書く'),
    'edit_item' => __('記念日シーンで選ぶお客様の声の記事を編集'),
    'new_item' => __('新しい記事'),
    'view_item' => __('記事を見てみる'),
    'search_items' => __('記事を探す'),
    'not_found' =>  __('記事はありません'),
    'not_found_in_trash' => __('ゴミ箱に記事はありません'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 7,
    'supports' => array('title','editor','thumbnail','custom-fields','excerpt','revisions','page-attributes','comments'),
    'has_archive' => true
  );
  register_post_type('anvoice',$args);
	// カスタムタクソノミーを作成
 
	//カテゴリータイプ
	$args = array(
	'label' => 'カテゴリー',
	'public' => true,
	'show_ui' => true,
	'hierarchical' => true
	);
	register_taxonomy('anvoice_category','anvoice',$args);
}

/*	管理画面のカスタマイズ
/*---------------------------------------------------------*/
// 管理バーの項目を非表示
function remove_admin_bar_menu( $wp_admin_bar ) {
 $wp_admin_bar->remove_menu( 'wp-logo' ); // WordPressシンボルマーク
 }
add_action( 'admin_bar_menu', 'remove_admin_bar_menu', 70 );

// フッターWordPressリンクを非表示に
function custom_admin_footer() {
 echo '';
 }
add_filter('admin_footer_text', 'custom_admin_footer');

// メニューを非表示にする

function remove_menus () {
    if (!current_user_can('level_10')) { //level10以下のユーザーの場合メニューをunsetする
 remove_menu_page('trust-form-edit'); //Trust Form
 remove_menu_page('category-order'); //Category Order
 global $menu;
 unset($menu[2]); // ダッシュボード
// unset($menu[4]); // メニューの線1
// unset($menu[5]); // 投稿
 unset($menu[10]); // メディア
 unset($menu[15]); // リンク
 unset($menu[20]); // ページ
 unset($menu[25]); // コメント
// unset($menu[59]); // メニューの線2
 unset($menu[60]); // テーマ
 unset($menu[65]); // プラグイン
 unset($menu[70]); // プロフィール
 unset($menu[75]); // ツール
 unset($menu[80]); // 設定
// unset($menu[90]); // メニューの線3
	remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=category' ); // 投稿の「カテゴリ」を非表示
	remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag'); // 投稿の「タグ」を非表示
//ヴァージョンアップ非表示
add_filter( 'pre_site_transient_update_core', '__return_zero' );
remove_action( 'wp_version_check', 'wp_version_check' );
remove_action( 'admin_init', '_maybe_update_core' );

//管理画面上部　新規　非表示
add_action( 'wp_before_admin_bar_render', 'my_wp_before_admin_bar_render' );
function my_wp_before_admin_bar_render() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu( 'new-content' );
	$wp_admin_bar->remove_node('wp-logo');
	$wp_admin_bar->remove_node('comments');
	$wp_admin_bar->remove_node('edit-profile');
	$wp_admin_bar->remove_node('user-info');
}

 }
}add_action('admin_menu', 'remove_menus');

// 表示オプションを非表示にする
function my_admin_head(){
	if (!current_user_can('level_10')) { //level10以下のユーザーの場合メニューをunsetする
echo '<style type="text/css">#screen-options-link-wrap{display:none;}</style>';
echo '<style type="text/css">#contextual-help-link-wrap{display:none;}</style>';
}
}add_action('admin_head', 'my_admin_head');



?>