<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?><!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->

  <head>
    <?php print $head; ?>

    <title><?php print $head_title; ?></title>

    <?php if ($default_mobile_metatags): ?>
      <meta name="MobileOptimized" content="width">
      <meta name="HandheldFriendly" content="true">
      <meta name="viewport" content="width=device-width">
    <?php endif; ?>
    
    <meta http-equiv="cleartype" content="on">

    <?php print $styles; ?>
    <?php print $scripts; ?>

    <?php if ($add_html5_shim and !$add_respond_js): ?>
      <!--[if lt IE 9]>
      <script src="<?php print $base_path . $path_to_zen; ?>/js/html5.js"></script>
      <![endif]-->
    <?php elseif ($add_html5_shim and $add_respond_js): ?>
      <!--[if lt IE 9]>
      <script src="<?php print $base_path . $path_to_zen; ?>/js/html5-respond.js"></script>
      <![endif]-->
    <?php elseif ($add_respond_js): ?>
      <!--[if lt IE 9]>
      <script src="<?php print $base_path . $path_to_zen; ?>/js/respond.js"></script>
      <![endif]-->
    <?php endif; ?>
  </head>

  <body class="<?php print $classes; ?>" <?php print $attributes;?>>

    <?php if ($skip_link_text && $skip_link_anchor): ?>
      <p id="skip-link">
        <a href="#<?php print $skip_link_anchor; ?>" class="element-invisible element-focusable"><?php print $skip_link_text; ?></a>
      </p>
    <?php endif; ?>

  <div id="wrapper" class="page maintenance-page">
  <a class="accessibility" href="#main" accesskey="s">Skip to Content</a>

  <section class="top-bar">
    <div class="holder">
      
      <div class="<?php print $classes; ?>">
        <div class= "logo">
        <a href="/" title="<?php print t('Home'); ?>" rel="home">
          <img src="<?php print $headerlogo; ?>">
        </a>
      </div>
      </div>          
    </div>
  </section> <!-- /header -->


  <!-- header of the page -->
  <header id="header">
    <!-- top header of the page -->
    <div class="header-top">
      <div class="holder">

          <div class="logo">
              <a href="/" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="sites/all/themes/ambitious/logo.png" alt="<?php print t('Ambitious About Autism'); ?>"></a>
          </div> <!-- /logo -->
      </div>
    </div> 
  </header>

  <main id="main">

    <section id="content-area">
      <?php if ($title): ?>
        <h1 class="title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print $content; ?>

  </main> <!-- /main -->

</div>
  </body>
</html>