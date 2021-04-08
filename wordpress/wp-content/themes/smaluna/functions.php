<?php

//WordPressのバージョン情報
remove_action('wp_head', 'wp_generator');

//アイキャッチを有効
add_theme_support( 'post-thumbnails' );

require_once('library/newicon.php');
require_once('library/pagination.php');
require_once('library/table_content.php');
?>
