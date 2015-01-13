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

<div id="wrapper" class="page">
  <a class="accessibility" href="#main" accesskey="s">Skip to Content</a>
  
  <?php if ($page['header']): ?>
    <section class="top-bar">
      <div class="holder">
        <?php print render($page['header']); ?>
          <div class="login-info">
          <a href="#" class="name">
            <img src="sites/all/themes/ambitious/images/img.jpg" alt="image description" width="27" height="27">
            <span>Hello Sarah</span>
          </a>
          <a href="user/logout" class="logout">Logout</a>
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
          
          <?php if ($logo): ?>
            <div class="logo">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Ambitious About Autism'); ?>"></a>
            </div><!-- /logo -->
          <?php endif; ?>
          
          <ul class="right-info">
            <li><a href="#" class="school-opener"><span class="icon-Close"></span> <span class="menu-text">Schools &amp; College</span><span class="close">Close</span></a></li>
            <li><a href="#" class="search-opener"><span class="icon-search"></span><em>search</em></a></li>
            <li class="menu"><a href="#" class="menu-opener"><span class="icon-Close"></span> <span class="menu-text">Menu</span><span class="close">Close</span></a></li>
          </ul>
        </div>
        <!-- search form -->
        <div class="search-slide">
          <form action="#" class="search-form">
            <fieldset>
              <legend class="hidden">search</legend>
              <label for="search">search</label>
              <input type="search" placeholder="Start typing to search the site" id="search">
              <input type="submit" value="search">
            </fieldset>
          </form>
        </div>
      </div>
      <!-- nav of the page -->
      <div class="nav-holder">
        <a href="#" class="btn"><span>Is my child on the spectrum?<em class="icon-Rightarrow"></em></span></a>
        <nav id="nav">
          <ul>
            <li class="has-drop"><a href="post-view.html" class="opener-sub">Understanding autism<span class="icon-Downarrow"></span><span class="icon-Uparrow"></span></a>
              <ul class="slide">
                <li><a href="article.html">Talk to others</a></li>
                <li><a href="#">Our blog</a></li>
                <li><a href="#">MyVoice blog</a></li>
              </ul>
            </li>
            <li><a href="#">Courses</a></li>
            <li class="has-drop"><a href="#" class="opener-sub">Take Action<span class="icon-Downarrow"></span><span class="icon-Uparrow"></span></a>
              <ul class="slide">
                <li><a href="#">Talk to others</a></li>
                <li><a href="#">Our blog</a></li>
                <li><a href="#">MyVoice blog</a></li>
              </ul>
            </li>
            <li class="has-drop"><a href="#" class="opener-sub">Who We Are<span class="icon-Downarrow"></span><span class="icon-Uparrow"></span></a>
              <ul class="slide">
                <li><a href="#">Talk to others</a></li>
                <li><a href="#">Our blog</a></li>
                <li><a href="#">MyVoice blog</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      <!-- school nav of the page -->
      <div class="school-slide">
        <strong class="title">Schools &amp; College</strong>
        <ul class="nav">
          <li>
            <a href="#">TreeHouse School</a>
          </li>
          <li>
            <a href="#">The Rise School</a>
          </li>
          <li>
            <a href="#">Ambitious College</a>
          </li>
        </ul>
      </div>
    </header>
<!-- ########### / header -->

<section class="visual">
      <div class="img-holder">
        <div class="caption-frame">

          <div class="caption">
            <h1 class="title"><span>Are you ambitious</span>
            <span class="title-third">about autism.</span></h1><h1>
          </h1></div>
          
          
        </div>
        
          
        
        <img alt="image description" src="sites/all/themes/ambitious/images/indexvisual.jpg">
      </div>
      <div class="holder">
        <span class="pic-by">&copy; Photo by <a href="#">Derek Hall</a>.</span>
      </div>
      
</section> <!-- /visual -->

  <?php if ($page['navigation']): ?>
    <section id="navigation">
      <?php print render($page['navigation']); ?>
    </section> <!-- /navigation -->
  <?php endif; ?>

  <?php if ($page['highlighted']): ?>
    <section id="highlighted">
      <?php print render($page['highlighted']); ?>

      <?php if ($breadcrumb): ?>
        <h1 class="breadcrumb"><?php print $breadcrumb; ?></h1>
      <?php endif; ?>

    </section> <!-- /highlighted -->
  <?php endif; ?>

  <main id="main">

  <?php if ($page['content_top']): ?>
    <section id="content_top">
      <?php print render($page['content_top']); ?>
    </section> <!-- /content-top -->
  <?php endif; ?>

    <?php if ($title|| $messages || $tabs || $action_links): ?>
    <div id="content-header">

      <?php if ($title): ?>
        <h1 class="title"><?php print $title; ?></h1>
      <?php endif; ?>


      <?php print $messages; ?>
      <?php print render($page['help']); ?>


      <?php if ($tabs): ?>
        <div class="tabs"><?php print render($tabs); ?></div>
      <?php endif; ?>


      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      
    </div> <!-- /content-header -->
    <?php endif; ?>


    <section id="content-area">
      <?php print render($page['content']) ?>
    </section> <!-- /content -->

  <?php if ($page['content_bottom']): ?>
    <section id="content_bottom">
      <?php print render($page['content_bottom']); ?>
    </section> <!-- /content-bottom -->
  <?php endif; ?>

  </main> <!-- /main -->

  <?php if ($page['social']): ?>
    <section id="social" class="visual">
      <?php print render($page['social']); ?>
    </section> <!-- /social -->
  <?php endif; ?>

  <footer id="footer">
      <div class="holder">
        <div class="company-info">
          <div class="logo">
            <a href="<?php print $front_page; ?>"><img alt="Ambitious About Autism" src="sites/all/themes/ambitious/images/logo-footer.png"></a>
          </div>
          <?php print render($page['footer_copyright']); ?>
          <span class="design-by">Designed and built by <a href="#">Blue State Digital</a>.</span>
        </div><!-- /footer copyright -->
        <div class="right-footer">
          <?php print render($page['footer_right']); ?>
        </div><!-- /footer Right -->       
      </div>      
    </footer> <!-- /footer -->
    <a accesskey="t" href="#wrapper" class="accessibility">Back to top</a>  
</div>
<?php print render($user_picture); ?>
<?php print render($page['bottom']); ?>