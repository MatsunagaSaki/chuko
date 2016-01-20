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
			<div class="section mb50">
				<h3><img src="/wp-content/themes/chukowp/img/arayaki/01/ttl_h3_01.jpg" alt="記念日シーンで選ぶ" /></h3>
			</div><a id="ani01" name="ani01"></a>
      <div class="section">
				<h3><img src="/wp-content/themes/chukowp/img/arayaki/01/ttl_h3_02.jpg" alt="誕生記念" /></h3>
				<div class="mb35">
        	<img src="/wp-content/themes/chukowp/img/arayaki/01/img_photo01.jpg" alt="誕生記念" />
        </div>
        <p class="kinenbiTxt01">豊見城市在住の石川さん。初孫誕生のお祝いご購入♪<br />初むーちーでにっこり。元気に大きく育ってね&#9825;</p>
        <div class="cf mb50">
        	<div class="fl"><a href="/contact" class="rollOver"><img src="/wp-content/themes/chukowp/img/factory/03/btn_link01.jpg" alt="お問い合わせはこちら" /></a></div>
          <div class="fr"><a href="/arayaki/preview" class="rollOver"><img src="/wp-content/themes/chukowp/img/arayaki/01/btn_link01.jpg" alt="文字掘り込み申込みガイド" /></a></div>
        </div>
			</div><a id="ani02" name="ani02"></a>
			<div class="section">
				<h3><img src="/wp-content/themes/chukowp/img/arayaki/01/ttl_h3_03.jpg" alt="結婚記念" /></h3>
				<div class="mb35">
        	<img src="/wp-content/themes/chukowp/img/arayaki/01/img_photo02.jpg" alt="結婚記念" />
        </div>
        <p class="kinenbiTxt01">東京在住の清水さんご夫婦。結婚式に甕入れの儀を行いました。<br />二つの家族が一つの甕を通してひとつに&#9825;幸せあるれる瞬間です！</p>
        <div class="cf mb50">
        	<div class="fl"><a href="/contact" class="rollOver"><img src="/wp-content/themes/chukowp/img/factory/03/btn_link01.jpg" alt="お問い合わせはこちら" /></a></div>
          <div class="fr"><a href="/arayaki/preview" class="rollOver"><img src="/wp-content/themes/chukowp/img/arayaki/01/btn_link01.jpg" alt="文字掘り込み申込みガイド" /></a></div>
        </div>
			</div><a id="ani03" name="ani03"></a>
      <!--<div class="section">
				<h3><img src="/wp-content/themes/chukowp/img/arayaki/01/ttl_h3_04.jpg" alt="退職記念・生年祝" /></h3>
				<div class="mb35">
        	<img src="/wp-content/themes/chukowp/img/arayaki/01/img_photo03.jpg" alt="退職記念・生年祝" />
        </div>
        <p class="kinenbiTxt01">豊見城市在住の石川さん。初孫誕生のお祝いご購入♪
初むーちーでにっこり。元気に大きく育ってね&#9825;</p>
				<div class="cf mb50">
        	<div class="fl"><a href="/contact" class="rollOver"><img src="/wp-content/themes/chukowp/img/factory/03/btn_link01.jpg" alt="お問い合わせはこちら" /></a></div>
          <div class="fr"><a href="/arayaki/preview" class="rollOver"><img src="/wp-content/themes/chukowp/img/arayaki/01/btn_link01.jpg" alt="文字掘り込み申込みガイド" /></a></div>
        </div>
			</div><a id="ani04" name="ani04"></a>
      <div class="section">
				<h3><img src="/wp-content/themes/chukowp/img/arayaki/01/ttl_h3_05.jpg" alt="新築記念・創立記念" /></h3>
				<div class="mb35">
        	<img src="/wp-content/themes/chukowp/img/arayaki/01/img_photo04.jpg" alt="新築記念・創立記念" />
        </div>
        <p class="kinenbiTxt01">豊見城市在住の石川さん。初孫誕生のお祝いご購入♪
初むーちーでにっこり。元気に大きく育ってね&#9825;</p>
				<div class="cf mb50">
        	<div class="fl"><a href="/contact" class="rollOver"><img src="/wp-content/themes/chukowp/img/factory/03/btn_link01.jpg" alt="お問い合わせはこちら" /></a></div>
          <div class="fr"><a href="/arayaki/preview" class="rollOver"><img src="/wp-content/themes/chukowp/img/arayaki/01/btn_link01.jpg" alt="文字掘り込み申込みガイド" /></a></div>
        </div>
			</div>-->

      <div class="content02">
				<h3 class="mb30"><img src="/wp-content/themes/chukowp/img/arayaki/ttl_content03.jpg" alt="実際にオリジナルの甕をご注文されたお客様の声" /></h3>
				<div class="arayakiVoiceBody cf">
                
            
        <?php query_posts('post_type=anvoice&showposts=4&paged='.$paged); ?>
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
      <!-- /.arayakiVoiceBox fl cf -->
      
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      
      <?php else : ?>
      
      <div class="arayakiVoiceBox fl cf">該当の記事は見つかりませんでした。</div>
      
      <?php endif; ?>

            
        </div>
			</div>


		</div>
		<div id="right_content">
<?php get_template_part('side_arayaki'); ?>
<?php get_sidebar(); ?>
<?php get_template_part('footer_bn'); ?>
<?php get_footer(); ?>