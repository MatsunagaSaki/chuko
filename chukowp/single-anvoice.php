<?php get_header(); ?>
<body id="page">

<?php get_template_part('header_main'); ?>
<?php get_template_part('gnav'); ?>
	
	
	<!-- conten -->
	<div id="content" class="cf">
		
		<ul class="breadcrumbs cf">
			<li><a href="/">ホーム</a></li>
			<li>記念日シーンで選ぶお客様の声</li>
		</ul>
		
		<div id="left_content">
			<div class="section mb50">
				<h2><img src="/wp-content/themes/chukowp/img/arayaki/ttl_h2_01.jpg" alt="記念日シーンで選ぶお客様の声" /></h2>
			</div>
      <div class="section">

<?php
$imgclass01 = "";
$imgclass02 = "";
$imgfield01 = get_field('img_01');
$imgfield02 = get_field('img_02');
if(!$imgfield01) {
	$imgclass01 = "imgHidden";
}
if(!$imgfield02) {
	$imgclass02 = "imgHidden";
}
?>


				<?php 
				if (have_posts()) : // WordPress ループ
					while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							
							<h3 class="seminarTitle"><?php echo get_the_title(); ?></h3>
							<div class="seminarTxt">

                            <div class="cf mb40">
                            <div class="fl w_50 voiceImg"><img src="<?php the_field('img_01'); ?>" alt="<?php the_title(); ?>" class="<?=$imgclass01?>" /></div>
							<div class="fr w_50 voiceImg"><img src="<?php the_field('img_02'); ?>" alt="<?php the_title(); ?>" class="<?=$imgclass02?>" /></div>
                            </div>


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
<?php get_template_part('side_arayaki'); ?>
<?php get_sidebar(); ?>
<?php get_template_part('footer_bn'); ?>
<?php get_footer(); ?>