<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width" />
	<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link  href="/wp-content/themes/chukowp/css/jquery.remodal.css" rel="stylesheet" type="text/css" />
  <link  href="/wp-content/themes/chukowp/css/sp/common.css" rel="stylesheet" type="text/css" />
  <link  href="/wp-content/themes/chukowp/css/sp/contents.css" rel="stylesheet" type="text/css" />
	<script src="/wp-content/themes/chukowp/js/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="/wp-content/themes/chukowp/js/responsiveslides.min.js" type="text/javascript"></script>
	<script src="/wp-content/themes/chukowp/js/jquery.remodal.js" type="text/javascript"></script>
	<script src="/wp-content/themes/chukowp/js/sp/common.js" type="text/javascript"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-6281946-7', 'auto');
  ga('send', 'pageview');

	</script>
	<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" );
	wp_head(); ?>
</head>
<body <?php body_class(); ?>>