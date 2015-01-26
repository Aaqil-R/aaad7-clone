<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  STARTERKIT_preprocess_html($variables, $hook);
  STARTERKIT_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // STARTERKIT_preprocess_node_page() or STARTERKIT_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */


// Adding a Fonts
//=====================================

function ambitious_preprocess_html(&$variables) {
  drupal_add_css('http://fast.fonts.net/cssapi/aa5fc6a4-3498-4f2c-8559-9f785aeeb36b.css', array('type' => 'external'));
}

// Adding a custom breadcrumb code
//=====================================

function ambitious_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  $output = '';

  // Determine if we are to display the breadcrumb.
  $show_breadcrumb = theme_get_setting('zen_breadcrumb');
  if ($show_breadcrumb == 'yes' || $show_breadcrumb == 'admin' && arg(0) == 'admin') {

    // Optionally get rid of the homepage link.
    $show_breadcrumb_home = theme_get_setting('zen_breadcrumb_home');
    if (!$show_breadcrumb_home) {
      array_shift($breadcrumb);
    }

    // Return the breadcrumb with separators.
    if (!empty($breadcrumb)) {
      $breadcrumb_separator = filter_xss_admin(theme_get_setting('zen_breadcrumb_separator'));
      $trailing_separator = $title = '';
      if (theme_get_setting('zen_breadcrumb_title')) {
        $item = menu_get_item();
        if (!empty($item['tab_parent'])) {
          // If we are on a non-default tab, use the tab's title.
          $breadcrumb[] = check_plain($item['title']);
        }
        else {
          $breadcrumb[] = drupal_get_title();
        }
      }
      elseif (theme_get_setting('zen_breadcrumb_trailing')) {
        $trailing_separator = $breadcrumb_separator;
      }

      // Provide a navigational heading to give context for breadcrumb links to
      // screen-reader users.
      if (empty($variables['title'])) {
        $variables['title'] = t('You are here');
      }
      // Unless overridden by a preprocess function, make the heading invisible.
      if (!isset($variables['title_attributes_array']['class'])) {
        $variables['title_attributes_array']['class'][] = 'element-invisible';
      }

      // Build the breadcrumb trail.
      $output = '<nav class="breadcrumb" role="navigation">';
      $output .= '<h2' . drupal_attributes($variables['title_attributes_array']) . '>' . $variables['title'] . '</h2>';
      $output .= '<ul class="page-links"><li>' . implode($breadcrumb_separator . '</li><li>', $breadcrumb) . $trailing_separator . '</li></ul>';
      $output .= '</nav>';
    }
  }

  return $output;
}

// Adding Name in to the User-menu

function ambitious_menu_link(&$variables) {
	
	$element = $variables['element'];	
	if($element['#theme'] == 'menu_link__main_menu') //if its user menu add the arrows to the links
	{
		$element = $variables['element'];		
		$sub_menu = '';
		$element['#attributes']['data-menu-parent'] = $element['#original_link']['menu_name'] . '-' . $element['#original_link']['depth'];
		$element['#localized_options']['attributes']['class'][] = $element['#original_link']['menu_name'] . '-' . $element['#original_link']['depth'];
		$element['#localized_options']['html'] = TRUE;
		if ($element['#below']) {
		$sub_menu = drupal_render($element['#below']);
		}
  
		$output = l($element['#title'].'</span><span class="icon-Downarrow"></span><span class="icon-Uparrow"></span>', $element['#href'], $element['#localized_options']);
		//return '<li' . drupal_attributes($element['#attributes']) . '>' . '<div id="menu-'.str_replace(' ','-',strtolower($element['#title'])).'" class="menu-item '.$element['#original_link']['menu_name'] . '-' . $element['#original_link']['depth'].'">'.$output.'</div>'.$sub_menu . "</li>\n";
		//return '<li' . drupal_attributes($element['#attributes']). '>'.$output .'<ul class="slide js-slide-hidden">'. $sub_menu ."</ul>"."</li>\n";
		return '<li' . drupal_attributes($element['#attributes']). '>'.$output .'<ul class="slide js-slide-hidden">'. $sub_menu ."</ul>"."</li>\n";
	}
	
	if($element['#theme'] == 'menu_link__menu_main_menu_features_item') //if its features menu add the arrows to the links
	{
		$element = $variables['element'];		
		$sub_menu = '';
		$element['#attributes']['data-menu-parent'] = $element['#original_link']['menu_name'] . '-' . $element['#original_link']['depth'];
		$element['#localized_options']['attributes']['class'][] = $element['#original_link']['menu_name'] . '-' . $element['#original_link']['depth'];
		$element['#localized_options']['html'] = TRUE;
		if ($element['#below']) {
			$sub_menu = drupal_render($element['#below']);
		}
  
		$output = l($element['#title'].'<em class="icon-Rightarrow"></em>', $element['#href'], $element['#localized_options']);
		return '<li' . drupal_attributes($element['#attributes']). '>'.$output . $sub_menu . "</li>\n";
	}
		//if($element['#theme'] == 'menu_link__user_menu')
	else
	{
			global $user;
			$element = $variables['element'];		
			$sub_menu = '';
			if ($element['#below']) {
			$sub_menu = drupal_render($element['#below']);
			}
			$title = '';
		// Check if the user is logged in, that you are in the correct menu,
		// and that you have the right menu item
		if ($user->uid != 0 && $element['#theme'] == 'menu_link__user_menu' && $element['#title'] == t('My account')) {
			$element['#title'] = 'Hello ';
			$element['#title'] .= $user->name;
			// Add 'html' = TRUE to the link options
			$element['#localized_options']['html'] = TRUE;
			// Load the user picture file information; Unnecessary if you use theme_user_picture()
			$fid = $user->picture;
			$file = file_load($fid);
			// I found it necessary to use theme_image_style() instead of theme_user_picture()
			// because I didn't want any extra html, just the image.
			$title = theme('image_style', array('style_name' => 'user_menu_thumb', 'path' => $file->uri, 'alt' => $element['#title'], 'title' => $element['#title'])) . $element['#title'];
		}else {
			$title = $element['#title'];
		}
		$output = l($title, $element['#href'], $element['#localized_options']);
		return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
	}
	
  
}

  function ambitious_preprocess_page(&$variables)
{
	$variables['foo'] = "Good2";
}
/*
function ambitious_menu_tree__main_menu_primary(&$variables) 
{	
	//$variables['tree'] = str_replace('</a>','<span class="icon-Downarrow"></span><span class="icon-Uparrow"></span></a>',$variables['tree']); 	
	//commented bacause of error "Code to include the image"	
	//return '<ul>' .  $variables['tree'] .'</ul>';
	//return $variables['tree'] ;
	
	//$variables['foo'] = $variables['foo'] . "s" . $variables['tree'];
	
	return '<ul>' .  $variables['tree'] . '</ul>';
}

function ambitious_menu_tree__main_menu(&$variables) 
{
	return  '<ul class="slide js-slide-hidden">' . $variables['tree'] . '</ul>';
} */
/* 
function ambitious_menu_link(&$variables) {
  $element = $variables['element'];
  $sub_menu = '';
  
  $element['#attributes']['data-menu-parent'] = $element['#original_link']['menu_name'] . '-' . $element['#original_link']['depth'];
  $element['#localized_options']['attributes']['class'][] = $element['#original_link']['menu_name'] . '-' . $element['#original_link']['depth'];
  $element['#localized_options']['html'] = TRUE;
  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  
  $output = l($element['#title'].'</span><span class="icon-Downarrow"></span>', $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . '<div id="menu-'.str_replace(' ','-',strtolower($element['#title'])).'" class="menu-item '.$element['#original_link']['menu_name'] . '-' . $element['#original_link']['depth'].'">'.$output.'</div>'.$sub_menu . "</li>\n";
}  */

function ambitious_preprocess_menu_tree(&$variables) {
  $tree = new DOMDocument();
  @$tree->loadHTML($variables['tree']);
  $links = $tree->getElementsByTagname('li');
  $parent = '';
  foreach ($links as $link) {
    $parent = $link->getAttribute('data-menu-parent');
    break;
  }
  	
  $variables['menu_parent'] = $parent;
}

function ambitious_menu_tree(&$variables) {
  return '<ul class="menu ' . $variables['menu_parent'] . '">' . $variables['tree'] . '</ul>';
}


/* SHARE BUTTON CUSTOM */
function ambitious_preprocess_views_exposed_form(&$vars) {
 
 if($vars['form']['#id'] == 'views-exposed-form-stream-stream-topic-page' || $vars['form']['#id'] == 'views-exposed-form-stream-stream-forum-page'){
   $node = node_load(arg(1)); 
   $links = sharethis_node_view($node, 'full', 'en');
   $vars['share_button'] = '<div class="topic-share">'.$node->content['sharethis']['#value'].'</div>';
 } 
}
function ambitious_preprocess_views_view_masonry(&$vars) {  
  if($vars['view']->current_display == 'stream_topic_page' && $vars['view']->query->pager->current_page === 0){
     $node = node_load(arg(1)); 
     $links = sharethis_node_view($node, 'full', 'en');
     $vars['share_button'] = '<div class="topic-share">'.$node->content['sharethis']['#value'].'</div>';
     $vars['node'] = $node;
  } 
   
}


 
