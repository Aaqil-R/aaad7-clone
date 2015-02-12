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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1513349745593631&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- /facebook -->

<div id="wrapper" class="page">
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
      $block = module_invoke('block', 'block_view', '146');
      print render($block['content']);
      ?>        
</section> <!-- /visual -->

    <!-- slider block -->
    <section class=" slider-block">
      <div class="holder">
        <div class="block-close"><a href="#"><span class="icon-Close"></span></a></div>
        <div class="block">
          <div class="slider-container">
            <div class="l-s-arrow">
            <a href="#"><span class="icon-Leftarrow"></span></a>
            </div>
          <!-- signup columns -->
          <div class="signup-columns">
            <div class="2-col col">
              <p class="larger">We’re working to make the ordinary possible for children and young people with                    autism.
              </p>
              <p>We began as parents who decided to start a school and campaign for change because
                we never wanted our children’s potential to be compromised.
              </p>
            </div>
            <div class="2-col col">
              <h2>Are you with us?<a class="tooltips mobile"><!-- <span class="btn-tooltip">?</span> --><span class="tooltip-content"><h3>tooltip content</h3>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. dolor sit amet, consectetur adipiscing elit, sed do</span></a></h2>
              <form class="signup-form">
                <input type="text" name="fname" placeholder="First name">
                <input type="email" required name="email" placeholder="Email address"> <a class="tooltips"><span class="btn-tooltip">?</span><span class="tooltip-content"><h3>tooltip content</h3>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. dolor sit amet, consectetur adipiscing elit, sed do</span></a>
                <a href="#"class="btn btn-left">Yes I am <span class="icon-Rightarrow"></span></a>
                <a href="#" class="btn btn-right">Not right now
                  <span class="icon-Rightarrow"></span>
                </a>
              </form>
            </div>
          </div>
          <!--end signup columns -->
          <!-- share columns
          <div class="share-columns">
            <div class="col-left col">
              <h3> Share your ambition</h3>
            <p>Glad to have you with us Sarah, now you can take the next step in being
            ambitious about autism - Share with your friends and family </p>
          </div>
            <div class="col-mid col">
              <img src="images/filler1.png">
              <a href="#" class="btn btn-facebook">Share on Facebook</a>
            </div>
            <div class="col-right col">
              <img src="images/filler2.png">
              <a href="#" class="btn btn-twitter">Share on Twitter</a>
            </div>
          </div>
           end share columns-->
            <!-- community columns
            <div class="community-columns">
            <div class="col">
              <h3>Stay Ambitious</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore </p>
          </div>
          <div class="col">

              <img src="images/filler3.png">

          </div>  -->
            

            <!-- support columns
            <div class="support-columns">
            <div class="col-3 col">
              <h3> Lend your support</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore </p>
            <a href="#">Ask  me in a week.</a>
          </div>
            <div class="col-3 col">
              <h3>Give what you can</h3>
              <a href="#" class="btn btn-orange">5</a>
              <a href="#" class="btn btn-orange">10</a>
              <a href="#" class="btn btn-orange">50</a>
              <a href="#" class="btn btn-orange">Other</a>
            </div>
            <div class="col-3 col">
              <h3> Other ways to help</h3>
              <a href="#" class="btn btn-orange">Volunteer <span class="icon-Rightarrow"></span></a>
              <a href="#" class="btn btn-orange">Share your story
                <span class="icon-Rightarrow"></span>
              </a>
            </div>
          </div>
           end support columns -->
            <div class="r-s-arrow">
            <a href="#"><span class="icon-Rightarrow"></span></a>
            <p class="skip"><a href="#">skip</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

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


    <!-- action columns -->
    <section class="action-block">
      <div class="holder">
        <!-- action symptoms -->
        <div class="block-share">
          <strong class="text">
            
          </strong>
          <a href="#" class="btn btn-transparent shadow-btn">Share this <em class="icon-Rightarrow"></em></a>
        </div>
        <!-- action inspire -->
        <div class="block-spectrum">
          <strong class="title">Aged 16-25<br>and on the<br>spectrum?</strong>
          <a href="#" class="btn btn-transparent shadow-btn">Connect with others<em class="icon-Rightarrow"></em></a>
        </div>
      </div>
    </section>
    
    <section class="articles-block" >
      <div class="holder">
        <h2>What We Do</h2>
        <div class="articles-columns" >
          <?php print render($page['services']); ?>
          <!--column one -->
        </div>
      </div>      
  </section><!-- /services -->


  <section class="social-block">
    <div class="holder">
      <h1>Stay ambitious</h1>
      <div class="block">
        <div class="social-columns" >
          <?php print render($page['social']); ?>
           
              <?php
              //Watch us youtube block
              $block = module_invoke('block', 'block_view', '61');
              print render($block['content']);
              ?>

          <!-- social column mid -->
          <div class="col block-twitter">
            <h3>Latest from Twitter</h3>
            <div class="twitter">
              <a class="twitter-timeline" href="https://twitter.com/AmbitiousAutism" data-widget-id="557083103072489472" width="300" height="500">Tweets by @AmbitiousAutism</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
          </div>
          <!-- social column right -->
          <div class="col block-facebook">
            <h3>Find us on Facebook</h3>  
<div class="fb-like-box" data-href="https://www.facebook.com/ambitiousaboutautism" data-width="300" data-height="500" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="true"></div>
 
          </div>
        </div>
      </div>
    </div>
      <div class="bg-stretch home-bg-stretch">
      </div>
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
