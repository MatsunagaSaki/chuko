<?php 
/*Template Name:preview_f*/

get_header(); ?>
<body id="page">

	<link rel="stylesheet" href="/wp-content/themes/chukowp/css/kame.css" />
	<link rel="stylesheet" href="/wp-content/themes/chukowp/css/002.css" />
	<script src="/wp-content/themes/chukowp/js/kame.js"></script>
	
	<?php get_template_part('header_main'); ?>
	<?php get_template_part('gnav'); ?>
	
	
		<!-- conten -->
	<div id="content" class="cf">
		
		<ul class="breadcrumbs cf">
			<li><a href="/">ホーム</a></li>
			<li><a href="/arayaki">忠孝南蛮荒焼</a></li>
			<li>プレビューシステム</li>
		</ul>
		
		<h2 class="pageMain">
			<img src="/wp-content/themes/chukowp/img/arayaki/02/img_main.jpg" alt="忠孝南蛮荒焼" />
		</h2>
		<div id="left_content">
			<div class="section mb50">
				<h3>
					<img src="/wp-content/themes/chukowp/img/arayaki/06/ttl_h3_01.jpg" alt="プレビューシステム（文字掘り込み申込ガイド）" />
				</h3>
			</div>
			<div class="section">
			
			
			<!-- main -->
			<div id="main">
				<?php 
				if (have_posts()) : // WordPress ループ
					while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							
							<h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
							
							<?php the_content(); ?>
							
							<?php 
							$args = array(
								'before' => '<div class="page-link">',
								'after' => '</div>',
								'link_before' => '<span>',
								'link_after' => '</span>',
							);
							wp_link_pages($args); ?>
							
						</div>
					<?php 
					endwhile; // 繰り返し処理終了		
				else : // ここから記事が見つからなかった場合の処理 ?>
						<div class="post">
							<h2>記事はありません</h2>
							<p>お探しの記事は見つかりませんでした。</p>
						</div>
				<?php
				endif;
				?>
			</div>
			<!-- /main -->
			
			
			</div>
		</div>
		<div id="right_content">
<?php get_template_part('side_arayaki'); ?>
<?php get_sidebar(); ?>
<?php get_template_part('footer_bn'); ?>
<?php get_footer(); ?>