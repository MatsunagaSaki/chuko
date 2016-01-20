<?php get_header(); ?>
<body id="page">

<?php get_template_part('header_main'); ?>
<?php get_template_part('gnav'); ?>
	
	
	<!-- conten -->
	<div id="content" class="cf">
		
		<ul class="breadcrumbs cf">
			<li><a href="/">ホーム</a></li>
			<li><a href="/arayaki">忠孝南蛮荒焼</a></li>
			<li>記念日シーンで選ぶ</li>
		</ul>
		
		<h2 class="pageMain"><img src="/wp-content/themes/chukowp/img/arayaki/02/img_main.jpg" alt="忠孝南蛮荒焼" /></h2>
		
		<div id="left_content">

      <div class="content02">
				<h3 class="mb30"><img src="/wp-content/themes/chukowp/img/arayaki/ttl_content03.jpg" alt="実際にオリジナルの甕をご注文されたお客様の声" /></h3>
				<div class="arayakiVoiceBody cf">
                
        <?php /* ?>    
        <?php query_posts('post_type=exvoice&showposts=100&paged='.$paged); ?>
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="arayakiVoiceBox fl cf">
      	<a href="<?php the_permalink(); ?>"><span class="fl voicesamb_img">
            <?php
			if(get_field('img_01')):?>
            <img src="<?php the_field('img_01'); ?>" alt="<?php the_title(); ?>">
			<?php else : ?> 
            
			<img src="<?php bloginfo("stylesheet_directory"); ?>/img/common/no-img.jpg" alt="<?php the_title(); ?>">
			<?php endif; ?>
            <?php the_title(); ?>
            </span>
            <span class="fr"><?php echo mb_substr(get_the_excerpt(), 0, 100); ?><img  src="/wp-content/themes/chukowp/img/arayaki/btn_continu.jpg" alt="続きはこちら" /></span></a>        </a>
      </div>
      
      
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      
      <?php else : ?>
      
      <div class="arayakiVoiceBox fl cf">該当の記事は見つかりませんでした。</div>
      
      <?php endif; ?>
      <?php */ ?>
            
        </div>
			</div>


		</div>
		<div id="right_content">
<?php get_template_part('side_arayaki'); ?>
<?php get_sidebar(); ?>
<?php get_template_part('footer_bn'); ?>
<?php get_footer(); ?>