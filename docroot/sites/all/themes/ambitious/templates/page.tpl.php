	<div id="wrapper">
		<a class="accessibility" href="#main" accesskey="s">Skip to Content</a>
		<!-- Top-Bar // Header Top -->
		<div class="top-bar">
			<div class="holder">
				<?php print render($page['header_top']); ?>
			</div>
		</div>
		<!-- header of the page -->
		<header id="header">
			<!-- top header of the page -->
			<div class="header-top">
				<div class="holder">
					<!-- page logo -->
					<div class="logo">
					    <?php if ($logo): ?>
      						<a href="<?php print $front_page; ?>" title="<?php print t('Ambitious About Autism'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Ambitious About Autism'); ?>" class="header__logo-image" /></a>
					    <?php endif; ?>
					</div>
					<?php print render($page['header']); ?>
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
				<a href="#" class="btn"><span>Is my child on the spectrum?<span class="icon-Rightarrow"></span></span></a>
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
		<!-- visual of the page -->
		<section class="visual">
			
			<div class="img-holder">
				<div class="caption-frame">
					<?php print $breadcrumb; ?>
					<div class="caption">
						<span class="title">Sleeping.</span><br>
						<span class="text">Make it through the night.</span>
					</div>
				</div>
				<img src="/sites/all/themes/ambitious/images/img01.jpg" alt="image description">
			</div>
			<div class="holder">
				<span class="pic-by">&copy; Photo by <a href="#">Derek Hall</a>.</span>
			</div>
			<a href="#" class="btn-perv">
				<span class="icon-Leftarrow"></span>
				<div class="text-area">
					<span class="title">Previous topic</span>
					<span class="topic">Eating</span>
				</div>
			</a>
			<a href="#" class="btn-next">
				<div class="text-area">
					<span class="title">Next topic:</span>
					<span class="topic">Eating</span>
				</div>
				<span class="icon-Rightarrow"></span>
			</a>
			<?php print render($page['highlighted']); ?>	
		</section>
		<!-- contain main informative part of the site -->
		<main id="main" role="main">
			<div id="content" class="column" role="main">		      	      
		      <a id="main-content"></a>
		      <?php print render($title_prefix); ?>
		      <?php if ($title): ?>
		        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
		      <?php endif; ?>
		      <?php print render($title_suffix); ?>
		      <?php print $messages; ?>
		      <?php print render($tabs); ?>
		      <?php print render($page['help']); ?>
		      <?php if ($action_links): ?>
		        <ul class="action-links"><?php print render($action_links); ?></ul>
		      <?php endif; ?>
		      <?php print render($page['content']); ?>
		      <?php print $feed_icons; ?>
		    </div>
		</main>
		<!-- Content bottom -->
		<section class="action-block">
			<?php print render($page['content_bottom']); ?>
		</section>
		<!-- fourm block -->
		<section class="forum-block">
		</section>
		<!-- footer Top of the page -->
		<section>
			<?php print render($page['footer_top']); ?>
		</section>
		<!-- footer of the page -->
		<footer id="footer">
			<div class="holder">
				<!-- company info block -->
				<div class="company-info">
					<!-- page footer logo -->
					<div class="logo">
						<a href="#"><img src="/sites/all/themes/ambitious/images/logo-footer.png" alt="Ambitious About Autism"></a>
					</div>
					<div class="social-holder">
						<span class="title">Follow us:</span>
						<!-- social networks --> 
						<ul class="social-networks">
							<li><a href="#"><span class="icon-Facebook"></span><em>facebook</em></a></li>
							<li><a href="#"><span class="icon-Twitter"></span><em>twitter</em></a></li>
							<li><a href="#"><span class="icon-YouTube"></span><em>youtube</em></a></li>
						</ul>
					</div>
					<p>Copyright <a href="#">Ambitious about Autism</a>. All rights reserved.<br>Ambitious about Autism is a registered charity in England and Wales: 1063184 and a registered company: 3375255.</p>
					<span class="design-by">Designed and built by <a href="#">Blue State Digital</a>.</span>
				</div>
				<div class="right-footer">
					<!-- contact info block -->
					<div class="contact-info">
						<h2>Get in touch</h2>
						<nav class="nav">
							<ul>
								<li><a href="#">Contact us</a></li>
								<li><a href="#">Work with us</a></li>
								<li><a href="#">For the press</a></li>
							</ul>
						</nav>
					</div>
					<!-- school info block -->
					<div class="school-info">
						<h2>Schools &amp; College</h2>
						<nav class="nav">
							<ul>
								<li><a href="#">TreeHouse School</a></li>
								<li><a href="#">The Rise School</a></li>
								<li><a href="#">Ambitious College</a></li>
							</ul>
						</nav>
					</div>
					<!-- web info block -->
					<div class="web-info">
						<h2>Website info</h2>
						<nav class="nav">
							<ul>
								<li><a href="#">Data protection</a></li>
								<li><a href="#">Terms &amp; conditions</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<?php print render($page['footer']); ?>
		</footer>
		<a class="accessibility" href="#wrapper" accesskey="t">Back to top</a>
	</div>