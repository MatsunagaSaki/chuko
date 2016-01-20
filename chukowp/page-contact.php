<?php get_header(); ?>
<body id="page">

<?php get_template_part('header_main'); ?>
<?php get_template_part('gnav'); ?>
	
	
	<!-- conten -->
	<div id="content" class="cf">
		
		<ul class="breadcrumbs cf">
			<li><a href="/">ホーム</a></li>
			<li>お問い合わせ</li>
		</ul>
		
		<div id="left_content">
			<div class="section mb50">
				<h2><img src="/wp-content/themes/chukowp/img/contact/ttl_h2_01.jpg" alt="お問い合わせ" /></h2>
			</div>
      <div class="section">
      	<p class="mb30">
        	忠孝酒造の泡盛やオリジナルの焼き物などの商品に関することや、施設（忠孝蔵）に関すること、その他ご不明な点などございましたら、何なりとお問い合わせ下さい。<br>以下のフォームより必要事項とお問い合わせ内容ご記入の上、下部のメール送信ボタンをクリックして下さい。
        </p>
				<?php 
				if (have_posts()) : // WordPress ループ
					while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							
							
							
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
		</div>
		<div id="right_content" class="productRight">
<?php get_sidebar(); ?>
<?php get_template_part('footer_bn'); ?>
<?php get_footer(); ?>