<?php get_header(); ?>

	<!-- header -->
	<div id="header">
		<div id="h_navi" class="cf">
			<h1><a href="/"><img src="/wp-content/themes/chukowp/img/common/logo.jpg" alt="忠孝酒造株式会社" /></a></h1>
			<ul class="cf">
				<li class="h_navi_01"><a href="/chukogura/access">酒蔵見学忠孝蔵への行き方</a></li>
				<li class="h_navi_02"><a href="/contact">お問い合わせ</a></li>
			</ul>
		</div>
		<!-- main -->
		<div id="main">
			<ul class="rslides cf">
				<li><a href="/chukogura"><img src="/wp-content/themes/chukowp/img/top/img_main_01.jpg" alt="泡盛文化の継承・創造" /></a></li>
				<li><a href="/arayaki"><img src="/wp-content/themes/chukowp/img/top/img_main_02.jpg" alt="蔵元が生み出した古酒熟成甕" /></a></li>
				<li><a href="/chukogura"><img src="/wp-content/themes/chukowp/img/top/img_main_03.jpg" alt="首里城に次ぐ二番目の木造建築物" /></a></li>
        <li><a href="http://www.chuko-shop.com/"><img src="/wp-content/themes/chukowp/img/top/img_main_04.jpg" alt="最長20年、古酒預かりサービス" /></a></li>
			</ul>
		</div>
		<!-- / main -->
	</div>
	<!-- / header -->
	
<?php get_template_part('gnav'); ?>
	
	
	<!-- conten -->
	<div id="content" class="cf">
		<div id="bnr_area">
			<ul class="cf">
				<li><a href="/chukogura/fieldtrip"><img src="/wp-content/themes/chukowp/img/top/bnr_01.png" alt="見学ができる泡盛酒蔵" /></a></li>
				<li><a href="http://www.chuko-shop.com/"><img src="/wp-content/themes/chukowp/img/top/bnr_02.png" alt="オンラインショップ" /></a></li>
        <!--<li><a href="http://news.chukogura.com/"><img src="/wp-content/themes/chukowp/img/top/bnr_05.png" alt="夏の贈り物特集2015" /></a></li>-->
				<!--<li><a href="/arayaki/anniversary"><img src="/wp-content/themes/chukowp/img/top/bnr_03.png" alt="忠孝南蛮荒焼を記念品に" /></a></li>-->
        <li><a href="/arayaki/preview"><img src="/wp-content/themes/chukowp/img/top/bnr_06.png" alt="オリジナル記念甕文字彫り込みイメージ確認ガイド" /></a></li>
				<li class="last"><a href="/myblend01"><img src="/wp-content/themes/chukowp/img/top/bnr_04.png" alt="忠孝マイブレンドショップ" /></a></li>
			</ul>
		</div>
		<div id="left_content">
			<div id="tab">
				<ul class="cf">
					<li><h2><img src="/wp-content/themes/chukowp/img/top/ttl_info.jpg" alt="お知らせ" /></h2></li>
					<li><a class="tab01 active" href="#info01">すべてのお知らせ</a></li>
					<li><a class="tab02" href="#info02">お知らせ</a></li>
					<li><a class="tab03" href="#info03">メディア掲載情報</a></li>
					<li><a class="tab04" href="#info04">スタッフブログ</a></li>
				</ul>
			</div>
			<div id="info_area">



				<div id="info01" class="info_style">
					<ul>
<?php query_posts("cat=1,2,3&showposts=7"); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
$cat = get_the_category();
$catslug = $cat[0]->slug;
?>
          	<li class="cat_<?php echo $catslug; ?>"><a href="<?php the_permalink() ?>"><?php the_time('Y年m月j日') ?>　　<?php the_title(); ?></a></li>
<?php endwhile; ?>
           
<?php else : ?>
<li>記事が見つかりませんでした</li>
<?php endif; ?>
					</ul>
          <div class="mt20"><a href="/newsall">すべてのお知らせ一覧はこちら&gt;&gt;&gt;</a></div>
				</div>


				<div id="info02" class="info_style">
					<ul>

        <?php query_posts('cat=1&showposts=7&paged='.$paged); ?>
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>        

          	<li class="cat_news"><a href="<?php the_permalink() ?>"><?php the_time('Y年m月j日') ?>　　<?php the_title(); ?></a></li>
		<?php endwhile; ?>
        <?php wp_reset_query(); ?>
                   
        <?php else : ?>
        <li>記事が見つかりませんでした</li>
        <?php endif; ?>
					
                    </ul>
                    <div class="mt20"><a href="/news">お知らせ一覧はこちら&gt;&gt;&gt;</a></div>
				</div>



				<div id="info03" class="info_style">
					<ul>

        <?php query_posts('cat=2&showposts=7&paged='.$paged); ?>
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>        

          	<li class="cat_media"><a href="<?php the_permalink() ?>"><?php the_time('Y年m月j日') ?>　　<?php the_title(); ?></a></li>
		<?php endwhile; ?>
        <?php wp_reset_query(); ?>
                   
        <?php else : ?>
        <li>記事が見つかりませんでした</li>
        <?php endif; ?>

					</ul>
          <div class="mt20"><a href="/media">メディア掲載情報一覧はこちら&gt;&gt;&gt;</a></div>
				</div>



				<div id="info04" class="info_style">
					<ul>

        <?php query_posts('cat=3&showposts=7&paged='.$paged); ?>
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>        

          	<li class="cat_blog"><a href="<?php the_permalink() ?>"><?php the_time('Y年m月j日') ?>　　<?php the_title(); ?></a></li>
		<?php endwhile; ?>
        <?php wp_reset_query(); ?>
                   
        <?php else : ?>
        <li>記事が見つかりませんでした</li>
        <?php endif; ?>

					</ul>
          <div class="mt20"><a href="/blog">スタッフブログ一覧はこちら&gt;&gt;&gt;</a></div>
				</div>



			</div>
			<div class="link_area">
				<ul class="cf">
        	<li class="Arrange2">
						<a href="https://www.facebook.com/chuko.myblend" target="_blank">
							<span class="photo"><img src="/wp-content/themes/chukowp/img/top/img_link_13.jpg" alt="忠孝マイブレンドショップfacebookページ" /></span>
							<span class="ttl"><span>忠孝マイブレンドショップ</span>あなたがつくる世界にひとつの泡盛</span>
							<span class="txt">日本初！自分好みの原酒を組み合わせて世界に一つのマイブレンド泡盛を作ることが出来ます。</span>
						</a>
					</li>
					<li class="Arrange2">
						<a href="/chukogura">
							<span class="photo"><img src="/wp-content/themes/chukowp/img/top/img_link_01.jpg" alt="くぅーすの杜 忠孝蔵" /></span>
							<span class="ttl"><span>くぅーすの杜 忠孝蔵</span>那覇空港から車で約10分の酒蔵見学</span>
							<span class="txt">手造りの泡盛工場や約600本の古酒甕が眠る木造古酒蔵、甕造りを手がける忠孝窯など、見どころがあり泡盛初心者からツウの方まで楽しめる酒蔵見学施設。</span>
						</a>
					</li>
					<li class="last Arrange2">
						<a href="/chukogura/owners">
							<span class="photo"><img src="/wp-content/themes/chukowp/img/top/img_link_02.jpg" alt="THE　OWNERS" /></span>
							<span class="ttl"><span>THE　OWNERS</span>特別な日への想いを熟成の時間とともに寝かせる</span>
							<span class="txt">熟成していくお酒、泡盛。誕生や結婚、還暦や成人など、その人生にあるそれぞれの節目への想いをタイムカプセルのように忠孝蔵の地下貯蔵庫お預けできます。</span>
						</a>
					</li>
					<li class="Arrange2">
						<a href="/chukogura/experience">
							<span class="photo"><img src="/wp-content/themes/chukowp/img/top/img_link_03.jpg" alt="手造り体験泡盛" /></span>
							<span class="ttl"><span>手造り体験泡盛</span>自分で造る泡盛だから、なおさら美味しい</span>
							<span class="txt">沖縄本島で一番小さな工場だからできる手造り泡盛体験。お米を運ぶことから始まる体験は、造る工程もわかり楽しいけど、なかなかの重労働。でもだからこそ、その味わいは格別なもの。</span>
						</a>
					</li>
					<li class="Arrange2">
						<a href="/chukogura/wedding">
							<span class="photo"><img src="/wp-content/themes/chukowp/img/top/img_link_04.jpg" alt="WEDDING手造り体験" /></span>
							<span class="ttl"><span>WEDDING手造り体験</span>二人の想いがつまった、世界に一つだけの引出物
</span>
							<span class="txt">お二人で初めておこなう協同作業。新郎新婦のお二人がお世話になった方のために、そして二人の新しい家庭のために、心を込めて造る世界に一つだけの泡盛の引出物。</span>
						</a>
					</li>
					<li class="last Arrange2">
						<a href="http://www.chuko-awamori.com/yokkakouji/index.html">
							<span class="photo"><img src="/wp-content/themes/chukowp/img/top/img_link_05.jpg" alt="忠孝よっかこうじ" /></span>
							<span class="ttl"><span>忠孝よっかこうじ</span>今までにない手間暇をかけた、常識破り泡盛
</span>
							<span class="txt">先人の技術と新たな技術の融合と麹造りに今までにない手間暇をかけたプレミアムで常識破りな泡盛。洋梨のようなやわらかな甘い香りを造りだす秘密とは…</span>
						</a>
					</li>
					<li class="Arrange2">
						<a href="/shijiru">
							<span class="photo"><img src="/wp-content/themes/chukowp/img/top/img_link_06.jpg" alt="昔醸翠古(むかしづくり　すいこ)" /></span>
							<span class="ttl"><span>昔醸翠古(むかしづくり　すいこ)</span>古式泡盛製法の復活により生まれた泡盛
</span>
							<span class="txt">昭和30年代後半から姿を消した泡盛の製造工程を現代に復活。先人の知恵の探求と発見。忠孝酒造の理念である『泡盛文化の継承と創造』を具現化した泡盛。</span>
						</a>
					</li>
					<li class="Arrange2">
						<a href="/mango">
							<span class="photo"><img src="/wp-content/themes/chukowp/img/top/img_link_07.jpg" alt="沖縄県産マンゴー果実酵母" /></span>
							<span class="ttl"><span>沖縄県産マンゴー果実酵母</span>新酵母「マンゴー果実酵母」を用いた業界初の泡盛(
</span>
							<span class="txt">時をかけた熟成により生まれる、古酒の甘い香り成分「バニリン(バニラの香り)」。新酵母「マンゴー果実酵母」が新しい泡盛の可能性への楽しみを導く。</span>
						</a>
					</li>
					<li class="last Arrange2">
						<a href="http://www.chuko-shop.com/?pid=73034556">
							<span class="photo"><img src="/wp-content/themes/chukowp/img/top/img_link_08.jpg" alt="黒あまざけ" /></span>
							<span class="ttl"><span>黒あまざけ</span>沖縄初！泡盛蔵元がつくった「黒あまざけ」
</span>
							<span class="txt">泡盛の原料である「黒麹菌」を使用。黒麹菌が造りだす「クエン酸」のほのかな酸味とお米のやさしい甘さのバランスは、今までにない美味しさ。</span>
						</a>
					</li>
					<li class="Arrange2">
						<a href="/arayaki/shitsugi">
							<span class="photo"><img src="/wp-content/themes/chukowp/img/top/img_link_09.jpg" alt="仕次ぎ(伝統的な古酒造り)" /></span>
							<span class="ttl"><span>仕次ぎ(伝統的な古酒造り)</span>沖縄の伝統、良い古酒を創る為の仕次ぎ
</span>
							<span class="txt">琉球王朝最後の国王の子、尚順が伝えた古酒造りの手法「仕次ぎ」。お家の泡盛を家酒家宝（家の酒、家の宝）となるような古酒造りを楽しんでみませんか？</span>
						</a>
					</li>
					<li class="Arrange2">
						<a href="/chukogura/ceremony">
							<span class="photo"><img src="/wp-content/themes/chukowp/img/top/img_link_10.jpg" alt="甕入れの儀(かめいれのぎ)" /></span>
							<span class="ttl"><span>甕入れの儀(かめいれのぎ)</span>家族の思い出を作り、受け継いでいく泡盛
</span>
							<span class="txt">時の経過とともに熟成していく泡盛。その泡盛の古酒のように、おふたりの間柄も末永く発展し、記念日にはご家族やご友人とその古酒を飲み交わしてもらいたい。</span>
						</a>
					</li>
					<li class="last Arrange2">
						<a href="http://www.nomikata.net/">
							<span class="photo"><img src="/wp-content/themes/chukowp/img/top/img_link_11.jpg" alt="泡盛の飲み方" /></span>
							<span class="ttl"><span>泡盛の飲み方</span>泡盛の美味しさを知っていただきたい
</span>
							<span class="txt">知ってますか？沖縄では8~9割の人が泡盛を水割りで飲んでいることを！？泡盛をはじめて飲まれる方にオススメする泡盛の飲み方。</span>
						</a>
					</li>
					<li class="Arrange2">
						<a href="https://www.facebook.com/chukogura">
							<span class="photo"><img src="/wp-content/themes/chukowp/img/top/img_link_12.jpg" alt="Facebook" /></span>
							<span class="ttl"><span>Facebook</span>くぅーすの杜　忠孝蔵へ行ってみよう</span>
							<span class="txt">くぅーすの杜　忠孝蔵のイベント情報や出来事、そして泡盛のことを忠孝メンバーでアップしています！忠孝蔵に行く前にお気軽にのぞいてみてください</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="right_content">
<?php get_sidebar(); ?>
<?php get_footer(); ?>