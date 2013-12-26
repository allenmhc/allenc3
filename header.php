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

  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400' rel='stylesheet' type='text/css'>

  <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

  <?php wp_head(); ?>
</head>
<body>

  <header id="site-header" class="row">
    <div class="small-centered column">
      <a id="site-title-link" href="<?php echo get_home_url(); ?>">
        <hgroup id="site-title">
          <h1 class="name">
            <span class="domain">allenc</span><span class="tld">.com</span>
          </h1>
          <h3 class="description"><small><?php bloginfo("description"); ?></small></h3>
        </hgroup>
      </a>
    </div>
  </header>

  <div id="content" class="row">
