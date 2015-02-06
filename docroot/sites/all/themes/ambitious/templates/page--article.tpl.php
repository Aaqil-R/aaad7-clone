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

<div id="wrapper">
		<a class="accessibility" href="#main" accesskey="s" title="Skip to Content">Skip to Content</a>
		<!-- top bar of the page -->
  <?php if ($page['header']): ?>
    <section class="top-bar">
      <div class="holder">
        <?php print render($page['header']); ?>
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
			<?php
				//adding the features menu
			    $menu_name = variable_get('menu_main_links_source', 'menu-main-menu-features-item');
                $tree = menu_tree($menu_name);
                print drupal_render($tree); 
			?>
        <nav id="nav">
          <?php
				//adding the menu function
				//print render($page['main_menu']); 
				$menu_name = variable_get('menu_main_links_source', 'main-menu');
				$tree = menu_tree($menu_name);
				print drupal_render($tree); ?>
        </nav>
      </div> 
    </header>
		<!-- top header of the page -->
		<section class="top-header">
		<div class="top-header-inner">
			 <ul class="page-links">
						<li><a href="#" title="Home">Home</a></li>
						<li><a href="#" title="Understanding autism">Understanding autism</a></li>
					</ul>
					</div>
		</section>
		<!-- contain main informative part of the site -->
		<main id="main2" role="main">

		<section class="article">
		 <div class="article-left">
           <section class="article-left-holder">
		   <!-- article -->
             <article>
               <header>
                 <h1>Martyn: My son <br> Percy's story</h1>
                 <h2 class="subheading">Introduction or subheading text goes here, lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
	             <div class="article-info">
				   <cite>
				      <span>By Martyn, <em>Community Champion</em></span>
				      <a href="#" class="first" title="@martyn71">@martyn71</a>
					  <a href="#" title="email the author">email the author</a>
				   </cite>
			       <a href="#" class="btn btn-green btn-right" title="Share"><span>Share <em class="icon-Share"></em></span></a>
                 </div>
               </header>
			   <section class="visual">
			     <div class="img-holder">
			       <img src="images/img25.jpg" alt="image description">
			       <a href="#" class="btn-gray-perv" title="Leftarrow"><span class="icon-Leftarrow"></span></a>
			       <a href="#" class="btn-gray-next" title="Rightarrow"><span class="icon-Rightarrow"></span></a>
			     </div>
			     <div class="holder">
			       <span class="pic-caption">Photo caption goes here lorem ipsum dolor est amet it.</span>
			       <span class="pic-by">&copy; Photo by <a href="#" title="Derek Hall">Derek Hall</a>.</span>
			     </div> 
			  </section>
			   <p>Percy was born in 2004 along with his twin brother Oswald. They both arrived prematurely at 27 weeks and as a consequence Oswald remained in hospital for three months and Percy for six months. When Percy came home he needed oxygen 24 hours a day to help with his breathing and a feeding tube to feed him as he was unable to suck milk or eat puree food. Percy remained on oxygen until after his first birthday and had a feeding tube until he was five years old.</p>
			   <h3>Percy's early years</h3>
			   <p>Percy never reached any of his early milestones but we were constantly reassured that he would catch up with his brother. Many other parents with an autistic child talk about their child developing until the age of two or so and then steadily regressing but this was not the case with Percy. Percy started walking when he was two and half years old. We were delighted and hoped that his speech would start to develop but after a Speech and Language appointment just weeks later we were told he might have a <a href="#" title="Social Communication Disorder.">Social Communication Disorder.</a></p>
			   <p>Neither of us had heard of the condition and we went home and looked it up on the internet. This was our first alert of the possibility of autism and I think we were both very shocked at what we read about the condition. Neither of us really thought that Percy would be diagnosed as having autism but six months later it was confirmed; Percy was diagnosed with having severe autism with severe learning difficulties.</p>
			   <h3>Percy joins TreeHouse School</h3>
			   <p>A work contact recommended that we try Applied Behaviour Analysis (ABA) when Percy was first diagnosed so we started a self-funded home ABA programme when Percy turned three years old. Within a few months we could see the benefits in Percy and therefore we decided to apply to the local authority for funding. We were told that it would be very difficult to get the funding for an ABA home programme as the local authority had never funded an ABA home programme but after submitting concrete evidence on Percy’s progress through using the ABA approach we received funding.</p>
			   <p>As Percy’s skills flourished, we applied for him to attend <a href="#" title="TreeHouse School">TreeHouse School</a> and in September 2009 when Percy was five years old he started at the school. It literally changed our lives over night and we are now confident that Percy will be able to reach his full potential attending a school which can fully meet his special needs.</p>
			   <blockquote>
			     "Early intervention has definitely helped us and Percy to manage his disability and has enabled Percy to make real progress in terms of behaviour management, education and every day skills."
			   </blockquote>
			   <p>Percy is non-verbal and his behaviour is very repetitive but to look at him, he appears like any typical child. He has a number of sensory issues too which makes cutting his nails or hair impossible. Feeding is also a problem. He cannot chew food which means that all his food has to be pureed and he is small for his age. Percy’s behaviour is generally good which we believe is due to obtaining an early diagnosis and the ABA strategies that have been put in place at school and home. Early intervention has definitely helped us and Percy to manage his disability and has enabled Percy to make real progress in terms of behaviour management, education and every day skills.</p>
			   <h3>The future</h3>
			   <p>We worry a lot about Percy’s safety and future as he is extremely vulnerable, especially being non-verbal and having no sense of fear. At present, Percy is seven years old and can remain at Treehouse School until he is nineteen with local authority funding but what happens to young adults with autism?</p>
			   <p>We constantly wonder whether Percy will be able to do a job, live independently or form relationships with others. We particularly worry about what will happen to him when we are gone? I have met so many parents of children who feel the same way. The absolute unknowns, the complete uncertainties of life, they just sit there in your thoughts constantly – you can’t plan for the future, you don’t know what it is. That high level of background stress is probably something that goes with having a disabled child.</p>
			   <p>Being Percy’s dad has definitely given me a new perspective on life. Being a parent changes you, but when you have a disabled child that is entirely dependent upon you it definitely puts constrains on what you can do individually and as a family, however, like all children, Percy loves his weekends and especially his school holidays abroad and to places like Disneyland Paris. He feels totally secure and loves being with his family and he knows that his family love him very much.</p>
			   <p>Percy’s autism might be seen as having a life-limiting impact on us, but his daily progress and achievements at school and home make us all incredibly proud of him. </p>
               <footer>
			     <div class="article-info">
			       <div class="article-updated">
				     <strong>Last updated: <time pubdate="pubdate">22 December 2014</time></strong>
					 <div class="article-tags">
					   <span>Tags: </span>
					   <ul class="tags">
					     <li><a href="#" title="For parents and carers">For parents and carers,</a></li>
						 <li class="tag-last"><a href="#" title="diagnosis">diagnosis </a></li>
					 </div>
				   </div>
                   <a href="#" class="btn btn-green btn-right" title="Share"><span>Share <em class="icon-Share"></em></span></a>
                 </div>
              </footer>
          </article>
	      <!-- comment columns -->
		<section class="comment-block">
		    <h4>Add a new comment</h4>
			<form action="#" class="comments">
					<fieldset>
						<legend class="hidden">Your name:</legend>
						<label for="name">Your name: </label>
						<strong id="name">Sarah</strong>
					</fieldset>
					<fieldset>
						<legend class="hidden">Your comment:</legend>
						<label for="message" class="label-block">Your comment:<span class="required">*</span></label>
						<div class="form-element"><textarea id="message"></textarea></div>
					</fieldset>
					<fieldset class="submit-actions">
						<legend class="hidden">Submit actions</legend>
						<label for="submit" class="hidden">Submit</label>
						<input type="submit" id="submit" class="btn btn-gray btn-left" value="Submit" />
						<label for="preview" class="hidden">Preview</label>
						<input type="submit" id="preview" class="btn btn-gray btn-left bt-left" value="Preview" />
					</fieldset>
				</form>
		</section>
		<section class="comment-list">
		   <h4>3 comments <a href="#" title="Read our guidelines">Read our guidelines</a></h4>
		   <ul class="comment-listing">
		     <li>
			   <div class="comment-left">
			     <div class="comment-img-holder">
				   <img src="images/img22.jpg" alt="Sarah" />
				 </div>
			     <cite>Sarah</cite>
			     <time pubdate="pubdate">Thursday <br>20 Nov 2014 <br>23:54</time>
			     <a href="#" title="permalink">permalink</a>
			   </div>
			   <div style="" class="comment-right">
			     <p>This is an example comment, lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
				  <div class="links">
				    <ul>
					  <li><a href="#" title="Reply">Reply</a></li>
					</ul>
				  </div>
			   </div>
			<ul class="comment-listing children">
		     <li>
			   <div class="comment-left">
			     <div class="comment-img-holder">
				   <img src="images/img23.jpg" alt="Molly" />
				 </div>
			     <cite>Molly</cite>
			     <time pubdate="pubdate">Friday <br>21 Nov 2014 <br>09:24</time>
			     <a href="#" title="permalink">permalink</a>
			   </div>
			   <div style="" class="comment-right">
			     <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
				  <div class="links">
				    <ul>
					  <li><a href="#" title="Reply">Reply</a></li>
					</ul>
				  </div>
			   </div>
			   <ul class="comment-listing children">
		     <li>
			   <div class="comment-left">
			     <div class="comment-img-holder">
				   <img src="images/img24.jpg" alt="Dave" />
				 </div>
			     <cite>Dave</cite>
			     <time pubdate="pubdate">Friday <br>21 Nov 2014 <br>13:07</time>
			     <a href="#" title="permalink">permalink</a>
			   </div>
			   <div style="" class="comment-right">
			     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
				  <div class="links">
				    <ul>
					  <li><a href="#" title="Reply">Reply</a></li>
					</ul>
				  </div>
			   </div>
			 </li>
		   </ul>
			 </li>
		   </ul>
			 </li>
		   </ul>
		</section>
		<!-- action columns -->
		<section class="action-block">
			<div class="holder">
				<!-- action symptoms -->
				<div class="block-symptoms lavender-box">
					<strong class="text">
						<span>Does my child </span><br><span class="add"> have autism?</span>
					</strong>
					<a href="#" class="btn btn-transparent" title="See symptoms">See symptoms <em class="icon-Rightarrow"></em></a>
				</div>
				<!-- action inspire -->
				<div class="block-blog magenta-box">
					<strong class="title">Struggling <br> with<br> bullying?</strong>
					<a href="#" class="btn btn-transparent" title="Read the blog">Read the blog<em class="icon-Rightarrow"></em></a>
				</div>
			</div>
		</section>
		</div>
		<!-- article right column -->
		<div class="article-right">
		<h2>You may also like</h2>
		<div class="posts-columns">
				<!-- post column -->
				<div class="col">
					<!-- post block -->
					<section class="post">
						<div class="img-holder">
							<img src="images/img04.jpg" alt="image description">
						</div>
						<div class="info add">
							<h3><a href="#" title="Nicky: Life with two daughters with autism">Nicky: Life with two daughters with autism</a></h3>
						</div>
					</section>
					<!-- post block -->
					<section class="post">
						<div class="img-holder">
							<img src="images/img05.jpg" alt="image description">
						</div>
						<div class="info add">
							<h3><a href="#" title="Article title here">Article title here</a></h3>
						</div>
					</section>
					<!-- post block -->
					<section class="post">
						<div class="img-holder">
							<img src="images/img07.jpg" alt="image description">
						</div>
						<div class="info add">
							<h3><a href="#" title="everydayautism">#everydayautism</a></h3>
							<span class="cite"><strong>- <a href="#" title="Colin">Colin</a></strong>  (via Twitter)</span>
						</div>
					</section>
				</div>
			</div>
		</div>
		</section>
		</main>
		<!-- footer of the page -->
		<footer id="footer">
			<div class="holder">
				<div class="left-footer">
					<!-- page footer logo -->
					<div class="logo">
						<a href="#" title="Ambitious About Autism"><img src="images/logo-footer.png" alt="Ambitious About Autism"></a>
					</div>
					<div class="social-holder">
						<span class="title">Follow us:</span>
						<!-- social networks -->
						<ul class="social-networks">
							<li><a href="#" title="facebook"><span class="icon-Facebook"></span><em>facebook</em></a></li>
							<li><a href="#" title="twitter"><span class="icon-Twitter"></span><em>twitter</em></a></li>
							<li><a href="#" title="youtube"><span class="icon-YouTube"></span><em>youtube</em></a></li>
						</ul>
					</div>
				</div>
				<div class="right-footer">
					<!-- contact info block -->
					<div class="contact-info">
						<h2>Get in touch</h2>
						<nav class="nav">
							<ul>
								<li><a href="#" title="Contact us">Contact us</a></li>
								<li><a href="#" title="Work with us">Work with us</a></li>
								<li><a href="#" title="For the press">For the press</a></li>
							</ul>
						</nav>
					</div>
					<!-- school info block -->
					<div class="school-info">
						<h2>Schools &amp; College</h2>
						<nav class="nav">
							<ul>
								<li><a href="#" title="TreeHouse School">TreeHouse School</a></li>
								<li><a href="#" title="The Rise School">The Rise School</a></li>
								<li><a href="#" title="Ambitious College">Ambitious College</a></li>
							</ul>
						</nav>
					</div>
					<!-- web info block -->
					<div class="web-info">
						<h2>Website info</h2>
						<nav class="nav">
							<ul>
								<li><a href="#" title="Data protection">Data protection</a></li>
								<li><a href="#" title="Terms conditions">Terms &amp; conditions</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- company info block -->
				<div class="company-info">
					<p>Copyright <a href="#" title="Ambitious about Autism">Ambitious about Autism</a>. All rights reserved.<br>Ambitious about Autism is a registered charity in England and <br>Wales: 1063184 and a registered company: 3375255.</p>
					<span class="design-by">Designed and built by <a href="#" title="Blue State Digital">Blue State Digital</a>.</span>
				</div>
			</div>
		</footer>
