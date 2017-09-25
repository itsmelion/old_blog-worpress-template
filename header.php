<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>
	<link href="//www.google-analytics.com" rel="dns-prefetch">
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta http-equiv="content-language" content="<?php language_attributes(); ?>">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8">
  <meta name="msapplication-TileImage" content="<?php echo get_bloginfo('template_url') ?>/build/images/favicons/ms-tile.png" />
  <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/build/images/favicons/speeddial-160px.png" />
  <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"><![endif]-->
  <link rel="icon" type="image/x-icon" href="<?php echo get_bloginfo('template_url') ?>/build/images/favicons/favicon.ico" />
  <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/build/images/favicons/favicon-16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/build/images/favicons/favicon-32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/build/images/favicons/favicon-48.png" sizes="48x48">
  <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/build/images/favicons/favicon-64.png" sizes="64x64">
  <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/build/images/favicons/favicon-128.png" sizes="128x128">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_bloginfo('template_url') ?>/build/images/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_bloginfo('template_url') ?>/build/images/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_bloginfo('template_url') ?>/build/images/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_bloginfo('template_url') ?>/build/images/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_bloginfo('template_url') ?>/build/images/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_bloginfo('template_url') ?>/build/images/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" href="<?php echo get_bloginfo('template_url') ?>/build/images/favicons/apple-touch-icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="reply-to" content="christhopherleao@icloud.com">
  <meta name="author" content="Christhopher Lion">
  <meta name="fragment" content="!">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-status-bar-style" content="black-translucent">
	<meta name="theme-color" content="#4f2f21" />
	<meta name="msapplication-TileColor" content="#4f2f21" />
  <meta name="keywords" content="Alia web, alia, alia mobile, mobile apps, apps, belo horizonte,
brazil, brasil, empresa, software" />

  <meta property="og:type" content="website" />
  <meta property="og:locale" content="<?php language_attributes(); ?>">
  <meta property="og:locale:alternate" content="<?php language_attributes(); ?>" />
  <meta property="fb:app_id" content="{{facebookAppId}}">
  <meta property="og:site_name" content="Alia" />
  <meta property="og:title" content="Alia overview" />
  <meta property="og:description" content="Alia software company" />
  <meta property="og:url" content="lion.alia.tk" />

  <meta property="og:image" content="<?php echo get_bloginfo('template_url') ?>/build/images/brand/logo-800x600.png" />
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="800">
  <meta property="og:image:height" content="600">

  <meta property="og:video" content="<?php echo get_bloginfo('template_url') ?>/build/images/brand/intro.mp4" />
  <meta property="og:video:type" content="video/mp4" />
  <meta property="og:video:width" content="400" />
  <meta property="og:video:height" content="300" />

  <meta property="og:audio" content="<?php echo get_bloginfo('template_url') ?>/build/images/brand/audio.mp3" />
  <meta property="og:audio:type" content="audio/mpeg" />

  <meta property="twitter:title" content="Alia Multimedia" />
  <?php wp_head(); ?>
  
<style>
  a, h1{
  color: <?php the_field('main-color', 'option'); ?>;
}
a:hover{
    color: <?php the_field('main-color-dark', 'option'); ?>;
}

::selection {
	background: <?php the_field('main-color', 'option'); ?>;
}

::-moz-selection {
	background: <?php the_field('main-color', 'option'); ?>;
}

#nav{
  background-color: <?php the_field('main-color-dark', 'option'); ?>;
  background-color: rgba(<?php the_field('main-color-dark', 'option'); ?>, .9);
}
.menu-item-has-children::after{
  background: url('<?php echo get_bloginfo('template_url') ?>/build/images/arrow.svg');
}
</style>
</head>
<body <?php body_class('layout-column-fill-stretch'); ?> >

<nav class="layout-row-forcenowrap-between main-menu flex" id="nav">

  <li class="flex menu-logo">
    <a title="<?php bloginfo( 'description' ); ?>" href="<?php echo home_url();?>" class="hide-sm show-lg">
    <img src="<?php echo get_bloginfo('template_url') ?>/build/images/logotipo.svg" alt="<?php bloginfo( 'name' ); ?>"/>
    </a>
    <a title="<?php bloginfo( 'description' ); ?>" href="<?php echo home_url();?>" class="hide-lg show-sm">
    <img src="<?php echo get_bloginfo('template_url') ?>/build/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>"/>
    </a>
  </li>
  
  <nav class="nav" role="navigation">
    <?php html5blank_nav(); ?>
  </nav>
</nav>