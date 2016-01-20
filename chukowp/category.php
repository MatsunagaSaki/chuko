<?php
$post = $wp_query->post;
if ( in_category('news') ) {
include(TEMPLATEPATH.'/category-news.php');
} elseif (in_category('media')) {
include(TEMPLATEPATH.'/category-media.php');
} else {
include(TEMPLATEPATH.'/category-voice.php');
}
?>