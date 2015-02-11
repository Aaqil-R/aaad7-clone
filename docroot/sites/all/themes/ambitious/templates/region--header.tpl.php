<?php
/**
 * @file
 * Returns HTML for a region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728112
 */
?>

<?php if ($content): ?>
	<section class="top-bar">
		<div class="holder">
			<div class="<?php print $classes; ?>">
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
						<a href="/" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Ambitious About Autism'); ?>"></a>
				</div> <!-- /logo -->
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
		<!--<a href="#" class="btn"><span>Is my child on the spectrum?<em class="icon-Rightarrow"></em></span></a>-->
		<?php
			//adding the features menu
			$menu_name = variable_get('menu_main_links_source', 'menu-main-menu-features-item');
			$tree = menu_tree($menu_name);
			print drupal_render($tree); 
		?>
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
<!-- / header -->