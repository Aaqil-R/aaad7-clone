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

<div id="wrapper" class="page tree-house-school">
  <a class="accessibility" href="#main" accesskey="s">Skip to Content</a>
  <!-- including header region into the template -->
  <?php
    print render($page['header']); 
  ?>
<!-- / header -->
<?php print $messages; ?>      
<section class="visual">
      <div class="img-holder">
        
          <?php if ($page['caption_holder']): ?>
            <div class="caption-frame">
              <?php print render($page['caption_holder']); ?>
            </div> <!-- /caption -->
          <?php endif; ?>

          <?php if ($page['image_holder']): ?>
            <?php print render($page['image_holder']); ?>
            <!-- /image holder -->
          <?php endif; ?>
      </div>
      <?php
      // Photo credit block
      $block = module_invoke('block', 'block_view', '171');
      print render($block['content']);
      ?>
      <div class="slider-main">
                <div class="slider-box">
            <div class="slider-action">
              <a href="#" title="Prev Slide"><i class="icon-Leftarrow"></i></a>
            <a href="#" title="Next Slide" class="right-arrow"><i class="icon-Rightarrow"></i></a>
            </div>
            <div class="slider-box-text">
              <img src="sites/all/themes/ambitious/images/img37.jpg" alt="Making the">
              <h4>Enabling children with autism to learn, thrive and achieve.</h4>
              <p>We have over 85 pupils on roll with our youngest pupils being 4 and our oldest being 19 years old.</p>
              <a href="#" title="Read about the school" class="read-more-link">Read about the school</a>
            </div>
            <div class="slider-box-pager">
               <ul class="slider-pager">
               <li class="active">1</li>
               <li>2</li>
               <li>3</li>
               <li>4</li>
             </ul>
            </div>
          </div>
                 </div>        
</section> <!-- /visual -->
<section class="page-main" id="main2">
    <div class="about-us">
          <div class="find-us">
          <h4>Find us</h4>
        <div class="content">
          <img src="sites/all/themes/ambitious/images/img27.jpg" alt="img decription">
            <address>The Pears National Centre for Autism Education, Woodside Avenue, London, N10 3JA</address>
                  <p>Tel:  020 8815 5424</p>
                  <a href="#" title="Email for general enquiries">Email for general enquiries</a><br>
                  <a href="#" title="Email Admissions">Email Admissions</a><br>
                  <a href="#" title="Attend an open afternoon">Attend an open afternoon</a>
        </div>
          <a href="#" class="btn btn-green" title="Visit the School">Visit the School <em class="icon-Rightarrow"></em></a>
        </div>
        <div class="coming-up">
          <h4>Coming up</h4>
        <ul>
          <li>
             <time datetime="2013-03-10T22:06:17"><span class="date">19 </span><span class="month">Dec </span>2014</time>
           <h6>School ends</h6>
           <div class="coming-up-col"><span class="icon-Calendar"></span></div>
          </li>
           <li>
             <time datetime="2013-03-10T22:06:17"><span class="date">19 </span><span class="month">Dec </span>2014</time>
           <h6>Start of Christmas holiday</h6>
           <div class="coming-up-col"><span class="icon-Calendar"></span></div>
          </li>
           <li>
             <time datetime="2013-03-10T22:06:17"><span class="date">19 </span><span class="month">Dec </span>2014</time>
           <h6>End of Christmas holiday</h6>
           <div class="coming-up-col"><span class="icon-Calendar"></span></div>
          </li>
        </ul>
        <a href="#" class="btn btn-green" title="Calendar &amp; term dates">Calendar &amp; term dates  <em class="icon-Rightarrow"></em></a>
        </div>
    </div>
    <div class="approach-main">
      <h2 class="title">Our approach and outcomes</h2>
      <div class="posts-columns">
        <!-- post column -->
        <div class="col approach-section">
        <img src="sites/all/themes/ambitious/images/img28.jpg" alt="image description">
        <h5>Our people</h5>
        <p>The school has 140 members of staff including qualified teachers, behaviour professionals, speech and language therapists and occupational therapists.</p>
        <a href="#" class="more-bt" title="Meet the people behind TreeHouse">Meet the people behind TreeHouse</a>
        </div>
      <!-- post column -->
       <div class="col approach-section">
        <img src="sites/all/themes/ambitious/images/img29.jpg" alt="image description">
        <h5>Ofsted outstanding rated</h5>
        <p>Ofsted inspected TreeHouse School on 24 and 25 October 2012 and found it to be ‘outstanding’ in all key areas of the inspection framework.</p>
        <a href="#" class="more-bt" title="Read the Ofsted report">Read the Ofsted report</a>
        <span class="formate">(PDF 138KB)</span>
        </div>
      <!-- post column -->
       <div class="col approach-section">
        <img src="sites/all/themes/ambitious/images/img30.jpg" alt="image description">
        <h5>Title goes here</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec justo neque, consequat consectetur nisi in, tristique aliquet ante lorem ipsum dolor est.</p>
        <a href="#" class="more-bt" title="Optional link goes here">Optional link goes here</a>
        </div>
       </div>
     <span class="see-btn">
         <a href="#" class="btn btn-green" title="Learn more about us"><span>Learn more about us<i class="icon-Rightarrow"></i></span></a>
      </span>
    </div>
    </section>
  <?php if ($page['header_form']): ?>    <!-- slider block -->
    <section class=" slider-block">
      <div class="holder">
      <div class="block-close"><a href="#"><span class="icon-Close"></span></a></div>      
      <?php print render($page['header_form']); ?>       
      </div>
    </section>
  <?php endif; ?>
  <?php if ($page['navigation']): ?>
    <section id="navigation">
      <?php print render($page['navigation']); ?>
    </section> <!-- /navigation -->
  <?php endif; ?>

<?php if ($page['highlighted']): ?>
  <section class="page-main" id="main2">
      <div class="about-us">
        <?php print render($page['highlighted']); ?>
      </div>
  </section><!-- /highlighted -->
<?php endif; ?>

  <main id="main">

  <?php if ($title|| $messages || $tabs || $action_links): ?>
    <div id="content-header">

      <?php if ($title): ?>
        <h1 class="title"><?php print $title; ?></h1>
      <?php endif; ?>


      <?php if ($tabs): ?>
        <div class="tabs"><?php print render($tabs); ?></div>
      <?php endif; ?>


      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      
    </div> <!-- /content-header -->
  <?php endif; ?>

  <?php if ($page['content_top']): ?>
    <section id="content_top">
      <?php print render($page['content_top']); ?>
    </section> <!-- /content-top -->
  <?php endif; ?>   


  <?php if ($page['content_bottom']): ?>
    <section id="content_bottom">
      <?php print render($page['content_bottom']); ?>
    </section> <!-- /content-bottom -->
  <?php endif; ?>

  </main> <!-- /main -->

  <section class="articles-block" >
           <?php print render($page['services']); ?>
  </section><!-- /services -->

    <!-- action columns -->
    <section class="action-block">
      <!-- Render the action block region. -->
      <?php print render($page['action']); ?>

   </section>
    


  <footer id="footer">
      <div class="holder">
		<div class="logo">
            <a href="<?php print $front_page; ?>"><img alt="Ambitious About Autism" src="sites/all/themes/ambitious/images/logo-footer.png"></a>
        </div>
		<div class="right-footer">
          <?php print render($page['footer_right']); ?>
        </div><!-- /footer Right --> 
        <div class="company-info">          
          <?php print render($page['footer_copyright']); ?>
          <span class="design-by">Designed and built by <a href="#">Blue State Digital</a>.</span>
        </div><!-- /footer copyright -->              
      </div>      
    </footer> <!-- /footer -->
    <a accesskey="t" href="#wrapper" class="accessibility">Back to top</a>  
</div>
<?php print render($user_picture); ?>
<?php print render($page['bottom']); ?>
