<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	<meta name="skype_toolbar" content="skype_toolbar_parser_compatible">

	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/main.css">
</head>
<body <?php body_class(); ?>>
	<header class="o-header">
	  <h1 class="a-logo -secondary">
	    <a href="<?php echo home_url(); ?>">
	      <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.svg" alt="ロゴ">
	    </a>
	    <span class="a-tag">
	      BLOG
	    </span>
	  </h1>
	  <nav class="o-header__item">
	  	<?php get_template_part('/parts/navigation' ); ?>
	  </nav>
	</header>
