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
		<!-- search form -->
		<div class="search-slide">
				<?php print $search_block; ?>
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
<!-- / header -->
