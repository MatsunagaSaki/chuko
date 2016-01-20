<?php get_header(); ?>
<body id="page">

<?php get_template_part('header_main'); ?>
<?php get_template_part('gnav'); ?>
	
	
	<!-- conten -->
	<div id="content" class="cf">
		
		<ul class="breadcrumbs cf">
			<li><a href="/">ホーム</a></li>
			<li>スタッフブログ</li>
		</ul>
		
		<div id="left_content">
			<div class="section mb50">
				<h2><img src="/wp-content/themes/chukowp/img/news/ttl_h2_04.jpg" alt="スタッフブログ" /></h2>
			</div>
      <div class="section">
			<div id="info_area">



				<div id="info01" class="info_style">
					<ul>

<?php query_posts("cat=3&showposts=10&paged=".$paged); ?>
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
				</div>
      </div>

<div class="tablenav">
    <?php global $wp_rewrite;
    $paginate_base = get_pagenum_link(1);
    if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
        $paginate_format = '';
        $paginate_base = add_query_arg('paged','%#%');
    }
    else{
        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
        user_trailingslashit('page/%#%/','paged');;
        $paginate_base .= '%_%';
    }
    echo paginate_links(array(
        'base' => $paginate_base,
        'format' => $paginate_format,
        'total' => $wp_query->max_num_pages,
        'mid_size' => 3,
        'current' => ($paged ? $paged : 1),
        'prev_text' => '«',
        'next_text' => '»',
    )); ?>
</div>


			</div>
     
		</div>
		<div id="right_content" class="productRight">
<?php get_sidebar(); ?>
<?php get_template_part('footer_bn'); ?>
<?php get_footer(); ?>