<?php get_header(); ?>
<body id="page">

<?php get_template_part('header_main'); ?>
<?php get_template_part('gnav'); ?>
	
	
	<!-- conten -->
	<div id="content" class="cf">
		
		<ul class="breadcrumbs cf">
			<li><a href="/">ホーム</a></li>
			<li>マイブレンド体験お申込み</li>
		</ul>
		
		<div id="left_content">
			<div class="section mb50">
				<h2><img src="/wp-content/themes/chukowp/img/myblend/ttl_h2_01.jpg" alt="マイブレンド体験お申込み" /></h2>
			</div>
      <div class="section">
      	<p class="mb20">
        	忠孝マイブレンドショップでのマイブレンド体験ご希望の方は以下のフォームよりご予約下さい。
        </p>
        <p class="mb30">
        	また以下のチラシをプリントアウトしてご持参頂きますと、マイブレンド体験料金が1,000円引きになります。是非ご持参下さい。
        </p>
        <div class="kameireImg01 mb30">
        	<a href="/wp-content/themes/chukowp/img/myblend/myblend_coupon.pdf" class="rollOver" target="_blank"><img src="/wp-content/themes/chukowp/img/myblend/btn_link01.jpg" alt="マイブレンド体験料1,000円引きクーポン" /></a>
        </div>
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