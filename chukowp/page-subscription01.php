<?php get_header(); ?>
<body id="page">

<?php get_template_part('header_main'); ?>
<?php get_template_part('gnav'); ?>
	
	
	<!-- conten -->
	<div id="content" class="cf">
		
		<ul class="breadcrumbs cf">
			<li><a href="/">ホーム</a></li>
			<li><a href="/chukogura">酒蔵見学 忠孝蔵</a></li>
			<li>酒蔵見学のお申込み（旅行会社様向け）</li>
		</ul>
		
		<h2 class="pageMain"><img src="/wp-content/themes/chukowp/img/factory/08/img_main.jpg" alt="くぅーすの社 忠孝蔵" /></h2>
		
		<div id="left_content">
			<div class="section">
				<h3><img src="/wp-content/themes/chukowp/img/factory/08/ttl_h3_fax01.jpg" alt="酒蔵見学のお申込み（旅行会社様向け）" /></h3>
				<p class="mb30">酒蔵見学お申込み予定の旅行会社様は、以下のボタンから酒蔵見学お申込み用紙（PDF）をダウンロードし、必要事項ご記入の上、お手数ですが、FAXにてお申し込み下さい。</p>
        <div class="kameireImg01 mb30">
        	<a href="/wp-content/themes/chukowp/img/factory/factorytravel.pdf" class="rollOver"><img src="/wp-content/themes/chukowp/img/factory/08/btn_fax01.jpg" alt="旅行会社様専用酒蔵見学お申込み用紙" /></a>
        </div>
				<div class="sectionInner2">
          <div class="mb10 cf">
            <div class="accessTxtLeft">FAX送信先</div><div class="accessTxtRight">098-851-8814</div>
          </div>
          <div class="mb10 cf">
            <div class="accessTxtLeft">TEL</div><div class="accessTxtRight">098-851-8813</div>
          </div>
          <p>ご不明な点は上記までお問い合わせ下さい。</p>
				</div>
			</div>
		</div>
		<div id="right_content">
<?php get_template_part('side_chukogura'); ?>
<?php get_sidebar(); ?>
<?php get_template_part('footer_bn'); ?>
<?php get_footer(); ?>