<?php
/*
Template Name: archive
*/
?>
<?php get_header(); ?>
			
			<!-- main -->
			<div id="main_title">
	<div id="under_title">
  	<h1><img src="/kumonwp/wp-content/themes/kumonnaha/images/news/ttl_h1.png" alt="新着情報" /></h1>
    <span>公文式なは市民会館通り教室の新着情報です</span>
  </div>  
</div>
<?php get_template_part('gnav'); ?>
			<!-- /main -->
<div class="container cf">
	
<?php get_sidebar(); ?>

<div class="content">

				<?php the_post() ?>
         <h2 class="newsListH2">公文式なは市民会館通り教室新着情報一覧</h2>
         <div class="entry-content newsListLi">
         <ul>
         <?php wp_get_archives("type=postbypost");?>
	</ul>
			</div>
			<!-- /main -->

<?php get_footer(); ?>