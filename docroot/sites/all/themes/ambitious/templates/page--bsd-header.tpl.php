<?php
  /**
  * @file
  * Bartik's theme implementation to display a single Drupal page.
  *
  * The doctype, html, head and body tags are not in this template. Instead they
  * can be found in the html.tpl.php template normally located in the
  * modules/system directory.
  *
  * Available variables:
  *
  * General utility variables:
  * - $base_path: The base URL path of the Drupal installation. At the very
  *   least, this will always default to /.
  * - $directory: The directory the template is located in, e.g. modules/system
  *   or themes/bartik.
  * - $is_front: TRUE if the current page is the front page.
  * - $logged_in: TRUE if the user is registered and signed in.
  * - $is_admin: TRUE if the user has permission to access administration pages.
  *
  * Site identity:
  * - $front_page: The URL of the front page. Use this instead of $base_path,
  *   when linking to the front page. This includes the language domain or
  *   prefix.
  * - $logo: The path to the logo image, as defined in theme configuration.
  * - $site_name: The name of the site, empty when display has been disabled
  *   in theme settings.
  * - $site_slogan: The slogan of the site, empty when display has been disabled
  *   in theme settings.
  * - $hide_site_name: TRUE if the site name has been toggled off on the theme
  *   settings page. If hidden, the "element-invisible" class is added to make
  *   the site name visually hidden, but still accessible.
  * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
  *   theme settings page. If hidden, the "element-invisible" class is added to
  *   make the site slogan visually hidden, but still accessible.
  *
  * Navigation:
  * - $main_menu (array): An array containing the Main menu links for the
  *   site, if they have been configured.
  * - $secondary_menu (array): An array containing the Secondary menu links for
  *   the site, if they have been configured.
  * - $breadcrumb: The breadcrumb trail for the current page.
  *
  * Page content (in order of occurrence in the default page.tpl.php):
  * - $title_prefix (array): An array containing additional output populated by
  *   modules, intended to be displayed in front of the main title tag that
  *   appears in the template.
  * - $title: The page title, for use in the actual HTML content.
  * - $title_suffix (array): An array containing additional output populated by
  *   modules, intended to be displayed after the main title tag that appears in
  *   the template.
  * - $messages: HTML for status and error messages. Should be displayed
  *   prominently.
  * - $tabs (array): Tabs linking to any sub-pages beneath the current page
  *   (e.g., the view and edit tabs when displaying a node).
  * - $action_links (array): Actions local to the page, such as 'Add menu' on the
  *   menu administration interface.
  * - $feed_icons: A string of all feed icons for the current page.
  * - $node: The node object, if there is an automatically-loaded node
  *   associated with the page, and the node ID is the second argument
  *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
  *   comment/reply/12345).
  *
  * Regions:
  * - regions[header] = Header
  * - regions[highlighted] = Highlighted
  * - regions[content] = Content
  * - regions[content_bottom] = Content bottom
  * - regions[footer] = Footer
  *
  * @see template_preprocess()
  * @see template_preprocess_page()
  * @see template_process()
  * @see bartik_process_page()
  * @see html.tpl.php
  */
  //echo $stand_first;
  //hide($page['content']['field_stand_first']);

  /**
  * @file
  * Returns the HTML for a single Drupal page.
  *
  * Complete documentation for this file is available online.
  * @see https://drupal.org/node/1728148
  */
  ?>
  <body class="bsd-tools">
    <div id="wrapper" class="page">
      <a class="accessibility" href="#main" accesskey="s">Skip to Content</a
      <!-- including header region into the template -->
      <?php if ($content): ?>
        <section class="top-bar">
          <div class="holder">
            
            <div class="<?php print $classes; ?>">
              <div class= "logo">
              <a href="/" title="<?php print t('Home'); ?>" rel="home">
                <img src="<?php print $headerlogo; ?>">
              </a>
            </div>
              <?php print $content; ?>
            </div>          
          </div>
        </section> <!-- /header -->
      <?php endif; ?>

<!-- ########### header -->

<!-- header of the page -->
<header id="header">
  <!-- top header of the page -->
  <div class="header-top">
    <div class="holder">

        <div class="logo">
            <a href="<?php print $link; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Ambitious About Autism'); ?>"></a>
        </div> <!-- /logo -->
      <ul class="right-info">
        <li><a href="#" class="school-opener"><span class="icon-Close"></span> <span class="menu-text">Schools &amp; College</span><span class="close">Close</span></a></li>
        <?php if(arg(0) != 'header'):?><li><a href="#" class="search-opener"><span class="icon-search"></span><em>search</em></a></li><?php endif; ?>
        <li class="menu"><a href="#" class="menu-opener"><span class="icon-Close"></span> <span class="menu-text">Menu</span><span class="close">Close</span></a></li>
      </ul>
    </div>
  </div>
  <!-- nav of the page -->
  <div class="nav-holder">
    <!--<a href="#" class="btn"><span>Is my child on the spectrum?<em class="icon-Rightarrow"></em></span></a>-->
    <div>
    <?php
      //adding the features menu
      //$menu_name = variable_get('menu_main_links_source', 'menu-main-menu-features-item');

      //$block =block_load('block',151);
      //$output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
      //print $output;
      
      //print render_block_content('block', 151);
      //print render_my_block_content('block', 151);
      print $myblock;

      //$tree = menu_tree($menu_name);
      //print drupal_render($tree); 
    ?>
    <div>
    <nav id="nav-main" role="navigation">
      <?php
        //adding the menu function
        //print render($page['main_menu']); 
        $menu_name = variable_get('menu_main_links_source', 'main-menu');
        $tree = menu_tree($menu_name);
        print drupal_render($tree); 
      ?>
    </nav>
  </div>

  <!-- school nav of the page -->
  <div class="school-slide" >
    <h4 class="title"> Schools & College
    <?php
    //adding the features menu
    //$menu_name = variable_get('menu_main_links_source', 'menu-schools-featured-menu');
    //$tree = menu_tree($menu_name);
    //print drupal_render($tree); 
    ?>
    </h4>
     <nav id="nav-schools" role="navigation"> 
      <?php
      $menu_name = variable_get('menu_main_links_source', 'menu-schools-college');
      $tree = menu_tree($menu_name);
      print drupal_render($tree); 
      ?>
     </nav> 
  </div>
</header>
    <div class="article-wrapper"> 
      <div class="article"> 
</body>