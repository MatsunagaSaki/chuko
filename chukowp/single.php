<?php
$post = $wp_query->post;
if ( in_category('news') ) {
include(TEMPLATEPATH.'/single-news.php');
} elseif (in_category('media')) {
include(TEMPLATEPATH.'/single-media.php');
} elseif (in_category('blog')) {
include(TEMPLATEPATH.'/single-blog.php');
} elseif (in_category('exvoice')) {
include(TEMPLATEPATH.'/single-exvoice.php');
} elseif (in_category('owvoice')) {
include(TEMPLATEPATH.'/single-owvoice.php');
} else {
include(TEMPLATEPATH.'/single-anvoice.php');
}
?>