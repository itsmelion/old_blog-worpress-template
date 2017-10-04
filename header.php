<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>
  <link href="//www.google-analytics.com" rel="dns-prefetch">
  <link href="//www.fonts.googleapis.com" rel="dns-prefetch">
  
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
	<meta name="theme-color" content="#516377" />
	<meta name="msapplication-TileColor" content="#516377" />
  <meta name="keywords" content="Alia web, alia, alia mobile, mobile apps, apps, belo horizonte,
brazil, brasil, empresa, software" />

  <meta property="og:type" content="website" />
  <meta property="og:locale" content="<?php language_attributes(); ?>">
  <meta property="og:locale:alternate" content="<?php language_attributes(); ?>" />
  <meta property="fb:app_id" content="{{facebookAppId}}">
  <meta property="og:site_name" content="Planet Expat" />
  <meta property="og:title" content="Planet Expat - Work Abroad" />
  <meta property="og:description" content="Work abroad" />
  <meta property="og:url" content="//planetexpat.org" />

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

  <meta property="twitter:title" content="Planet Expat" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,300i,700" rel="stylesheet"> 
  <?php wp_head(); ?>

</head>
<body <?php body_class('layout-column-fill-stretch-forcenowrap'); ?> >

<nav class="layout-row-forcenowrap-between-center main-menu" id="nav" role="navigation">

  <li class="flex-initial-noshrink layout-row-between-forcenowrap menu-logo">
    <a title="<?php bloginfo( 'description' ); ?>" href="<?php echo home_url();?>">
      <img src="<?php echo get_bloginfo('template_url') ?>/build/images/logo.png" alt="<?php bloginfo( 'name' ); ?>"/>
    </a>
  </li>
  
  <?php
    $args = array(
      'menu'            => '',
      'container'       => false,
      'container_id'    => '',
      'menu_class'      => 'menu hide-sm show-lg flex',
      'menu_id'         => '',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'depth'           => 2,
      'walker'          => ''
      );
    wp_nav_menu( $args );
  ?>
  <li class="flex-end hide-lg show-sm"><a  href="#bottom-sheet">
  <img src="<?php echo get_bloginfo('template_url') ?>/build/images/hamburguer.svg" alt="<?php bloginfo( 'name' ); ?>"/>
  </a></li>
</nav>


<div id="bottom-sheet" class="overlay">
  <aside class="gaveta" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
    <?php
      $args = array(
        'menu'            => '',
        'container'       => false,
        'container_id'    => '',
        'menu_class'      => 'menu flex',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 2,
        'walker'          => ''
        );
      wp_nav_menu( $args );
    ?>
    <a href="#close" class="btn-close" aria-hidden="true"><span class="mdi mdi-close">close</span></a>
  </aside>
</div>

<span class="ghost-nav"></span>