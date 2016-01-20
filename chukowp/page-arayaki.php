<?php get_header(); ?>
<body id="page">

<?php get_template_part('header_main'); ?>
<?php get_template_part('gnav'); ?>
	
	
	<!-- conten -->
	<div id="content" class="cf">
		
		<ul class="breadcrumbs cf">
			<li><a href="/">ホーム</a></li>
			<li>忠孝南蛮荒焼</li>
		</ul>
		
		<h2 class="pageMain"><img src="/wp-content/themes/chukowp/img/arayaki/img_main.jpg" alt="酒造家が生み出した古酒熟成甕 忠孝南蛮荒焼甕" /></h2>
		
		<div id="left_content">
			
			<div class="content01">
				<h3><img src="/wp-content/themes/chukowp/img/arayaki/ttl_content01.jpg" alt="世界に一つだけ「家族の記憶を刻む古酒甕」" /></h3>
				<p>沖縄では、子供の誕生祝いの記念酒として泡盛を甕に寝かせる習慣があります。<br />
毎年、誕生日に甕を開け、我が子の成長を祝いながら語らう。そして、子供が成人を迎えたら親子でお酒を酌み交わし語らう。そうして、泡盛は人生（家族）の物語を記憶し育んでいきます。家の酒、家の宝として世代を超えて受け継いでいく泡盛。<br />
これこそが泡盛文化だと私達は考えます。</p>
			</div>
			
			<div class="content02">
				<h3 class="mb30"><img src="/wp-content/themes/chukowp/img/arayaki/ttl_content02.jpg" alt="忠孝南蛮荒焼きを記念品に あなただけのオリジナルの甕を" /></h3>
				<p class="mb25">人生の節目に、想い出や記念に、オリジナルラベルやサンドブラスト加工で、記念品づくりをお手伝いしております。</p>
        <div class="mb10 cf">
        	<div class="fl"><a href="/arayaki/anniversary/#ani01"><img src="/wp-content/themes/chukowp/img/arayaki/btn_link01.jpg" alt="誕生記念" /></a></div>
          <div class="fr"><a href="/arayaki/anniversary/#ani02"><img src="/wp-content/themes/chukowp/img/arayaki/btn_link02.jpg" alt="結婚記念" /></a></div>
        </div>
        <div class="mb10 cf">
        	<div class="fl"><a href="/arayaki/anniversary/#ani03"><img src="/wp-content/themes/chukowp/img/arayaki/btn_link03.jpg" alt="退職記念・生年祝" /></a></div>
          <div class="fr"><a href="/arayaki/anniversary/#ani04"><img src="/wp-content/themes/chukowp/img/arayaki/btn_link04.jpg" alt="新築記念・創立記念" /></a></div>
        </div>
			</div>
      
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
			
			<div class="link_area">
      	<h3 class="mb30"><img src="/wp-content/themes/chukowp/img/arayaki/ttl_content04.jpg" alt="忠孝南蛮荒焼きのこだわり" /></h3>
				<ul class="cf">
					<li class="Arrange2">
						<a href="/arayaki/story">
							<span class="photo"><img src="/wp-content/themes/chukowp/img/arayaki/img_photo01.jpg" alt="開発ストーリー" /></span>
							<span class="ttl">開発ストーリー</span>
							<span class="txt">甕造りへの挑戦はさまざまな試行錯誤の結果、県内泡盛メーカーとしては初めて泡盛熟成容器の開発に成功しました。</span>
							<span class="btn"><img src="/wp-content/themes/chukowp/img/factory/btn_details.jpg" alt="詳細はこちら" /></span>
						</a>
					</li>
					<li class="Arrange2">
						<a href="/arayaki/soil">
							<span class="photo"><img src="/wp-content/themes/chukowp/img/arayaki/img_photo02.jpg" alt="土へのこだわり" /></span>
							<span class="ttl">土へのこだわり</span>
							<span class="txt">忠孝南蛮荒焼は、釉薬などを使用しない荒焼きの甕です。<br />そのため、お酒を入れる甕により適したものになるよう、原料となる土から厳選しブレンド、土造りまで全てを自社で行っています。</span>
							<span class="btn"><img src="/wp-content/themes/chukowp/img/factory/btn_details.jpg" alt="詳細はこちら" /></span>
						</a>
					</li>
					<li class="last Arrange2">
						<a href="/arayaki/handmade">
							<span class="photo"><img src="/wp-content/themes/chukowp/img/arayaki/img_photo03.jpg" alt="手造りへのこだわり" /></span>
							<span class="ttl">手造りへのこだわり</span>
							<span class="txt">忠孝南蛮荒焼は、機械による大量生産ではありません。<br />忠孝窯の職人たちの手により、一つ一つ丹念に造られております。</span>
							<span class="btn"><img src="/wp-content/themes/chukowp/img/factory/btn_details.jpg" alt="詳細はこちら" /></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="right_content">
<?php get_template_part('side_arayaki'); ?>
<?php get_sidebar(); ?>
<?php get_template_part('footer_bn'); ?>
<?php get_footer(); ?>