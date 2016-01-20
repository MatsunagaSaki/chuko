<?php get_header(); ?>
<body id="page">

<?php get_template_part('header_main'); ?>
<?php get_template_part('gnav'); ?>
	
	
	<!-- conten -->
	<div id="content" class="cf">
		
		<ul class="breadcrumbs cf">
			<li><a href="/">ホーム</a></li>
			<li><a href="/chukogura">酒蔵見学 忠孝蔵</a></li>
			<li>酒蔵見学のお申込み（一般のお客様様向け）</li>
		</ul>
		
		<h2 class="pageMain"><img src="/wp-content/themes/chukowp/img/factory/08/img_main.jpg" alt="くぅーすの社 忠孝蔵" /></h2>
		
		<div id="left_content">
			<div class="section">
				<h3><img src="/wp-content/themes/chukowp/img/factory/08/ttl_h3_fax02.jpg" alt="酒蔵見学のお申込み（一般のお客様向け）" /></h3>
				<p class="mb30">酒蔵見学お申込み予定の一般のお客様様は、以下のボタンから酒蔵見学お申込み用紙（PDF）をダウンロードし、必要事項ご記入の上、お手数ですが、FAXにてお申し込みいただくか、以下のメールフォームより、必要事項ご記入の上、メールにてお申し込み下さい。</p>
        <div class="kameireImg01 mb30">
        	<a href="/wp-content/themes/chukowp/img/factory/factorygeneral.pdf" class="rollOver"><img src="/wp-content/themes/chukowp/img/factory/08/btn_fax02.jpg" alt="一般のお客様専用酒蔵見学お申込み用紙" /></a>
        </div>
				<div class="sectionInner2">
          <div class="mb10 cf">
            <div class="accessTxtLeft">FAX送信先</div><div class="accessTxtRight">098-851-8814</div>
          </div>
          <div class="mb10 cf">
            <div class="accessTxtLeft">TEL</div><div class="accessTxtRight">098-851-8813</div>
          </div>
          <p class="mb15">ご不明な点は上記電話番号までお問い合わせ頂き、ご確認下さいませ。</p>
          <p class="mb15 contactFormTxt">※当日のご予約に関しましては、お電話でお問い合わせ下さい。<br />※見学のご案内は日本語での案内のみです。ご了承下さい。</p>
          <p class="mb15">メールでのお申込みは以下に必要事項ご記入の上、下部のメール送信ボタンをクリックして下さい。</p>
          <p class="mb20">こちらからメールにて返信させて頂きます。<br />尚、こちらからのメールが届かない場合がありますので迷惑メール対策をされている場合、ドメイン指定受信の解除をしていただくか<span class="cautionFormTxt01">「@chuko.org」を受信許可</span>してくださいますようお願い致します。</p>
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
		</div>
		<div id="right_content">
<?php get_template_part('side_chukogura'); ?>
<?php get_sidebar(); ?>
<?php get_template_part('footer_bn'); ?>
<?php get_footer(); ?>