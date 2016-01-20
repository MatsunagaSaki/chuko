<?php get_header(); ?>
<body id="page">

<?php get_template_part('header_main'); ?>
<?php get_template_part('gnav'); ?>
	
	
	<!-- conten -->
	<div id="content" class="cf">
		
		<ul class="breadcrumbs cf">
			<li><a href="/">ホーム</a></li>
			<li>メディア掲載情報</li>
		</ul>
		
		<div id="left_content">
			<div class="section mb50">
				<h2><img src="/wp-content/themes/chukowp/img/news/ttl_h2_03.jpg" alt="メディア掲載情報" /></h2>
			</div>
      <div class="section">
				<?php 
				if (have_posts()) : // WordPress ループ
					while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							
							<h3 class="seminarTitle"><?php echo get_the_title(); ?></h3>
							<div class="seminarTxt">
							<?php the_content(); ?>
							</div>

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