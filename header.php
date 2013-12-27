<?php
/**
 * Theme header.
 * Displays everything<head> and the header + nav.
 */
?><!DOCTYPE html>

<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/app.css" type="text/css" media="screen" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" />

  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400' rel='stylesheet' type='text/css'>

  <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

  <?php wp_head(); ?>
</head>
<body>

  <header id="site-header">
    <div class="row">
      <div class="small-centered column">
        <a id="site-title-link" href="<?php echo get_home_url(); ?>">
          <h2 id="title-icon" class="left">
            <span class="first dot">&middot;</span>
            <span class="second dot">&middot;</span>
            <span class="third dot">&middot;</span>
          </h2>
          <hgroup id="site-title" class="left">
            <h1 class="name">allenc</h1>
            <h2 class="description"><?php bloginfo("description"); ?></h2>
          </hgroup>
        </a>
      </div>
    </div>
  </header>

  <div id="content" class="row">
