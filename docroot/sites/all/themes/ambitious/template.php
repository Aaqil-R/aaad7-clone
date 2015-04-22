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

function ambitious_preprocess_region(&$variables) {
  
  $block = module_invoke('search', 'block_view', 'search');
  $variables['search_block']= render($block);
  
  $currentNode = menu_get_object();
  
  $block = block_load('block',156);
  $block1 = _block_render_blocks(array($block));
  $block2 = _block_get_renderable_array($block1);
  $variables['myblock'] = drupal_render($block2);
  
  $variables['logo'] = theme_get_setting('logo'); 
  $variables['link'] = "/";
  $variables['headerlogo'] = null;
  // TODO: This should become redundant as soon as we move to a different site.
  if ($currentNode) {
    if( $currentNode->nid == 224746 || $currentNode->nid == 74596 || $currentNode->type == "my_voice_blog") { 
      $variables['logo'] = "/sites/all/themes/ambitious/images/my-voice-logo.png"; 
      $variables['link'] = "/my-voice";
      $block = block_load('block',151);
      $block1 = _block_render_blocks(array($block));
      $block2 = _block_get_renderable_array($block1);
      $variables['myblock'] = drupal_render($block2);

      $variables['headerlogo'] = "/sites/all/themes/ambitious/images/logo-no-text.png";
    }
  }

  // Tree School logo
  if ($currentNode) {
    if($currentNode->nid == 74856 ) { 
      $variables['logo'] = "/sites/all/themes/ambitious/images/tree-school-logo.png"; 

    }
  }
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
  
		$output = l($element['#title'].'<span class="icon-Downarrow opener-sub"></span><span class="icon-Uparrow opener-sub"></span>', $element['#href'], $element['#localized_options']);
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
		//checking the node type to render the menu
		$currentNode = menu_get_object();
		$variables['logo'] = theme_get_setting('logo'); 
		if ($currentNode) {
				if($currentNode->nid == 74596 || $currentNode->type == "my_voice_blog") { 
					//return '<li class="menu-list-item btn btn-pink"' . drupal_attributes($element['#attributes']). '>'.$output . $sub_menu . "</li>\n";
          return '<li class="menu-list-item"' . drupal_attributes($element['#attributes']). '><a class="btn btn-pink"'.$output . $sub_menu . "</a></li>\n";
				}
		}
		return '<li class="menu-list-item"' . drupal_attributes($element['#attributes']). '><a class="btn"'.$output . $sub_menu . "</a></li>\n";
	}
		//if($element['#theme'] == 'menu_link__user_menu')
		
		//codes to include school and colleges menu
	if($element['#theme'] == 'menu_link__menu_schools_college') //if its user menu add the arrows to the links
	{
		$element = $variables['element'];		
		$sub_menu = '';
		$element['#attributes']['data-menu-parent'] = $element['#original_link']['menu_name'] . '-' . $element['#original_link']['depth'];
		$element['#localized_options']['attributes']['class'][] = $element['#original_link']['menu_name'] . '-' . $element['#original_link']['depth'];
		$element['#localized_options']['html'] = TRUE;
		if ($element['#below']) {
		$sub_menu = drupal_render($element['#below']);
		}
  
		$output = l($element['#title'].'', $element['#href'], $element['#localized_options']);
		
		return '<li' . drupal_attributes($element['#attributes']). '>'.$output .'<ul class="slide js-slide-hidden">'. $sub_menu ."</ul>"."</li>\n";
	}
		//end of school and colleges menu code		
		
		
		
		
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
			
			if($fid == 0){ 
			  // $title = theme('image', array('path' => variable_get('user_picture_default'), 'width' =>'23px')). $element['#title'];   
        $title =  theme(
                    'image_style'
                    ,array(
                      'style_name' => 'user_picture_thumb'
                      ,'path' => variable_get('user_picture_default')
                    )
                  ) . $element['#title'];
			}
			else {
			  $title = theme(
                    'image_style'
                    ,array(
                      'style_name' => 'user_picture_thumb'
                      ,'path' => $file->uri
                      )
                    ) . $element['#title'];
			} 
			
		}else {
			$title = $element['#title'];
		}

		$output = l($title, $element['#href'], $element['#localized_options']);
		return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
	}
	
  
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
 if($vars['form']['#id'] == 'views-exposed-form-stream-stream-topic-page' || $vars['form']['#id'] == 'views-exposed-form-stream-stream-forum-page' || $vars['form']['#id'] == 'views-exposed-form-stream-events-page'){
   $node = node_load(arg(1)); 
   $vars['node'] = node_load(arg(1)); 
   $links = sharethis_node_view($node, 'full', 'en');
   $vars['share_button'] = '<div class="topic-share">'.$node->content['sharethis']['#value'].'</div>';
 
 }

  if($vars['form']['#id'] == 'views-exposed-form-stream-understanding-autism-page'){
    $node = node_load(arg(1));
    $links = sharethis_node_view($node, 'full', 'en');
    $vars['share_button'] = '<div class="topic-share">'.$node->content['sharethis']['#value'].'</div>';
  }
  
  if($vars['form']['#id'] == 'views-exposed-form-stream-my-voice-blog'){
    $node = node_load(arg(1));
    $links = sharethis_node_view($node, 'full', 'en');
    $vars['share_button'] = '<div class="topic-share">'.$node->content['sharethis']['#value'].'</div>';
  }
  
  
  if($vars['form']['#id'] == 'views-exposed-form-stream-voices-from-the-spectrum-page'){
    $node = node_load(arg(1));
    $links = sharethis_node_view($node, 'full', 'en');
    $vars['share_button'] = '<div class="topic-share">'.$node->content['sharethis']['#value'].'</div>';
  }
  
  
  
 if($vars['form']['#id'] == 'views-exposed-form-stream-understanding-autism-page-age'){
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
  if($vars['view']->current_display == 'my_voice_blog' && $vars['view']->query->pager->current_page === 0){
     $node = node_load(arg(1)); 
     $links = sharethis_node_view($node, 'full', 'en');
     $vars['share_button'] = '<div class="topic-share">'.$node->content['sharethis']['#value'].'</div>';
     $vars['node'] = $node; 
  } 

  if($vars['view']->current_display == 'understanding_autism_page' && $vars['view']->query->pager->current_page === 0){
    $node = node_load(arg(1));
    $links = sharethis_node_view($node, 'full', 'en');
    $vars['share_button'] = '<div class="topic-share">'.$node->content['sharethis']['#value'].'</div>';
    $vars['node'] = $node;
  }

  if($vars['view']->current_display == 'understanding_autism_page_age' && $vars['view']->query->pager->current_page === 0){
    $node = node_load(arg(1));
    $links = sharethis_node_view($node, 'full', 'en');
    $vars['share_button'] = '<div class="topic-share">'.$node->content['sharethis']['#value'].'</div>';
    $vars['node'] = $node;
  }
  
 if($vars['view']->current_display == 'voices_from_the_spectrum_page' && $vars['view']->query->pager->current_page === 0){
   $node = node_load(arg(1));
   $links = sharethis_node_view($node, 'full', 'en');
   $vars['share_button'] = '<div class="topic-share">'.$node->content['sharethis']['#value'].'</div>';
   $vars['node'] = $node;
  }
}

function ambitious_links__node__comment($variables) {
   
  if(isset($variables['links']['comment_forbidden']['title'])){
    preg_match_all('/href=[\'"]?([^\s\>\'"]*)[\'"\>]/', $variables['links']['comment_forbidden']['title'], $matches);
    $hrefs = ($matches[1] ? $matches[1] : false);
    $hrefs = urldecode($hrefs[0]); 
    $url = parse_url($hrefs); 
    parse_str($url['query'], $query); 
    $variables['links']['comment_forbidden']['title'] = l(t('Reply'), 'user/login', array('attributes' => array('class' => 'btn btn-right',  'title' => 'Share your thoughts and opinions related to this posting.'), 'query' => array ($query), 'fragment' => $url['fragment'], ));
 }

 if (isset($variables['links']['comment-add']) && isset($variables['links']['comment-add']['title'])) {
  $variables['links']['comment-add']['title'] = 'Reply';
  $variables['links']['comment-add']['attributes']['class'] = array('btn', 'btn-right');
}
$links = $variables['links'];
  $attributes = $variables['attributes'];
  $heading = $variables['heading'];
  global $language_url;
  $output = '';

  if (count($links) > 0) {
    // Treat the heading first if it is present to prepend it to the
    // list of links.
    if (!empty($heading)) {
      if (is_string($heading)) {
        // Prepare the array that will be used when the passed heading
        // is a string.
        $heading = array(
          'text' => $heading,
          
          // Set the default level of the heading.
          'level' => 'h2',
        );
      }
      $output .= '<' . $heading['level'];
      if (!empty($heading['class'])) {
        $output .= drupal_attributes(array('class' => $heading['class']));
      }
      $output .= '>' . check_plain($heading['text']) . '</' . $heading['level'] . '>';
    }

    $output .= '<ul' . drupal_attributes($attributes) . '>';

    $num_links = count($links);
    $i = 1;

    foreach ($links as $key => $link) {
      $class = array($key);

      // Add first, last and active classes to the list of links to help out themers.
      if ($i == 1) {
        $class[] = 'first';
      }
      if ($i == $num_links) {
        $class[] = 'last';
      }
      if (isset($link['href']) && ($link['href'] == $_GET['q'] || ($link['href'] == '<front>' && drupal_is_front_page())) && (empty($link['language']) || $link['language']->language == $language_url->language)) {
        $class[] = 'active';
      }
      $output .= '<li' . drupal_attributes(array('class' => $class)) . '>';

      if (isset($link['href'])) {
        // Pass in $link as $options, they share the same keys.
        $output .= l($link['title'], $link['href'], $link);
      }
      elseif (!empty($link['title'])) {
        // Some links are actually not links, but we wrap these in <span> for adding title and class attributes.
        if (empty($link['html'])) {
          $link['title'] = check_plain($link['title']);
        }
        $span_attributes = '';
        if (isset($link['attributes'])) {
          $span_attributes = drupal_attributes($link['attributes']);
        }
        $output .= '<span' . $span_attributes . '>' . $link['title'] . '</span>';
      }

      $i++;
      $output .= "</li>\n";
    }

    $output .= '</ul>';
  }

  return $output;
}


/**
 * Returns HTML for primary and secondary local tasks.
 *
 * @ingroup themeable
 */
function ambitious_menu_local_tasks(&$variables) {
  $output = '';

  // Add theme hook suggestions for tab type.
  foreach (array('primary', 'secondary') as $type) {
    if (!empty($variables[$type])) {
      foreach (array_keys($variables[$type]) as $key) {
        if (isset($variables[$type][$key]['#theme']) && ($variables[$type][$key]['#theme'] == 'menu_local_task' || is_array($variables[$type][$key]['#theme']) && in_array('menu_local_task', $variables[$type][$key]['#theme']))) {
          $variables[$type][$key]['#theme'] = array('menu_local_task__' . $type, 'menu_local_task');
        }
      }
    }
  }

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    if (arg(0) != 'user') {
    $variables['primary']['#prefix'] .= '<ul class="tabs-primary tabs primary">';
    } else {
    $variables['primary']['#prefix'] .= '<ul class="">';
    }
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs-secondary tabs secondary">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;
}   
function ambitious_qt_quicktabs_tabset($vars) {
$uid=arg(1);
  $variables = array(
    'attributes' => array(
      'class' => 'quicktabs-tabs quicktabs-style-' . $vars['tabset']['#options']['style'].' tabs',
    ),
    'items' => array(),
  ); 
  foreach (element_children($vars['tabset']['tablinks']) as $key) {
  	$val=0;
    $item = array();
     if (is_array($vars['tabset']['tablinks'][$key])) { 
    	 $tab = $vars['tabset']['tablinks'][$key];
    	 if($vars['tabset']['tablinks'][1]['#options']['fragment'] == 'qt-user_profile_page'){    	  
    	   if($tab['#title'] == 'Comments'){
    	     $tab['#title'] = ambitious_get_user_comments_count($uid).'  '.$tab['#title']; 
    	   }
    	   if($tab['#title'] == 'Bookmarks'){
    	     $tab['#title'] = ambitious_get_user_bookmark_count($uid).'  '.$tab['#title'];
    	   }
    	   if($tab['#title'] == 'Messages'){
    	     $tab['#title'] = ambitious_get_user_message_count($uid).'  '.$tab['#title'];
    	   }
    	 }     
      if ($key == $vars['tabset']['#options']['active']) {
        $item['class'] = array('active');
      } 
      $item['data'] = drupal_render($tab);
      $variables['items'][] = $item;
    }
  }
  return theme('item_list', $variables);
}

function ambitious_field__field_event_date(&$variables){
 $output = '';
 $formatdate = array();
 $dateval = $variables['element']['#items'][0]['value'];

 $dateval2 = $variables['element']['#items'][0]['value2'];
  $dateclass = array('','day','month','year');
  
 if($dateval != $dateval2){
 $formatdate2[1] = format_date($dateval2, 'custom', 'd');
 $formatdate2[2] = format_date($dateval2, 'custom', 'M');
 $formatdate2[3] = format_date($dateval2, 'custom', 'Y');
 
 $output .= '<ul class="date"> <span class="day line">-</span>';
 foreach ($formatdate2 as $key => $value){
   $output .= '<li class="'.$dateclass[$key].'" >'.$value.'</li>';
 }
 $output .= '</ul>';
 }
 
 if(isset($dateval)){
 $formatdate[1] = format_date($dateval, 'custom', 'd');
 $formatdate[2] = format_date($dateval, 'custom', 'M');
 $formatdate[3] = format_date($dateval, 'custom', 'Y'); 

 $output .= '<ul class="date first_date" >';
 foreach ($formatdate as $key => $value){
   $output .= '<li class="'.$dateclass[$key].'">'.$value.'</li>'; 
 }
 $output .= '</ul>';
 } 

 
 return $output;	
}




function ambitious_field__field_closing_date(&$variables){
 $output = '';
 $formatdate = array();
 $dateval = $variables['element']['#items'][0]['value'];

 $dateval2 = $variables['element']['#items'][0]['value2'];
  $dateclass = array('','day','month','year');
  
 if($dateval != $dateval2){
 $formatdate2[1] = format_date($dateval2, 'custom', 'd');
 $formatdate2[2] = format_date($dateval2, 'custom', 'M');
 $formatdate2[3] = format_date($dateval2, 'custom', 'Y');
 
 $output .= '<ul class="date"> <span class="day line">-</span>';
 foreach ($formatdate2 as $key => $value){
   $output .= '<li class="'.$dateclass[$key].'" >'.$value.'</li>';
 }
 $output .= '</ul>';
 }
 
 if(isset($dateval)){
 $formatdate[1] = format_date($dateval, 'custom', 'd');
 $formatdate[2] = format_date($dateval, 'custom', 'M');
 $formatdate[3] = format_date($dateval, 'custom', 'Y'); 

 $output .= '<ul class="date first_date" >';
 foreach ($formatdate as $key => $value){
   $output .= '<li class="'.$dateclass[$key].'">'.$value.'</li>'; 
 }
 $output .= '</ul>';
 } 

 
 return $output;	
}



 
 function ambitious_form_alter(&$form, &$form_state, $form_id)
{

  if($form_id == 'webform_client_form_74601' || $form_id == 'webform_client_form_74621'){
    $form['submitted']['email_address']['#description'] = "<a class='tooltips'><span class='btn-tooltip'>?</span><span class='tooltip-content'>".$form['submitted']['email_address']['#description']."</span></a>";
  } else if ($form_id == 'webform_client_form_74666') {
    $form['submitted']['email']['#description'] = "<a class='tooltips'><span class='btn-tooltip'>?</span><span class='tooltip-content'>".$form['submitted']['email']['#description']."</span></a>";
  }
  if ($form_id == 'user_login') {
   // $form['name']['#attributes']['placeholder'] = t('enter search terms'); 
    $form['name']['#description'] = "<a class='tooltips'><span class='btn-tooltip'>?</span><span class='tooltip-content'>".$form['name']['#description']."</span></a>";
    $form['pass']['#description'] = "<a class='tooltips'><span class='btn-tooltip'>?</span><span class='tooltip-content'>"."Did you have an account on the old Talk about Autism website? Please 'Request new password'."."</span></a>"; 
  } 
   if($form_id == 'user_pass'){
     //$form['name']['#attributes']['placeholder'] = '40'; 
   }
   if ($form_id == 'user_register_form') {  
      $form['account']['name']['#description'] = "<a class='tooltips'><span class='btn-tooltip'>?</span><span class='tooltip-content'>".$form['account']['name']['#description']."</span></a>";
       $form['account']['mail']['#description'] = "<a class='tooltips'><span class='btn-tooltip'>?</span><span class='tooltip-content'>".$form['account']['mail']['#description']."</span></a>";
       $form['account']['pass']['#description'] = "<a class='tooltips'><span class='btn-tooltip'>?</span><span class='tooltip-content'>".$form['account']['pass']['#description']."</span></a>";
  } 
}


// Naming convention for .tpl.php
function ambitious_preprocess_page(&$vars) {

  if (isset($vars['node']->type)) { // We don't want to apply this on taxonomy or view pages
    // Splice (2) is based on existing default suggestions. Change it if you need to.

    //new code written today
    //$nodetype = $variables['node']->type;
    //$variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
              //$vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
    //end of the new code

    array_splice($vars['theme_hook_suggestions'], -1, 0, 'page__'.$vars['node']->type);

    // Get the url_alias and make each item part of an array
    $url_alias = drupal_get_path_alias($_GET['q']);
    $split_url = explode('/', $url_alias);

    // Add the full path template pages
    // Insert 2nd to last to allow page--node--[nid] to be last
    $cumulative_path = '';

    foreach ($split_url as $path) {
      $cumulative_path .= '__' . $path;
      $path_name = 'page' . $cumulative_path;
      array_splice($vars['theme_hook_suggestions'], -1, 0, str_replace('-','_',$path_name));
    }

    // This does just the page name on its own & is considered more specific than the longest path
    // (because sometimes those get too long)
    
    // Also we don't want to do this if there were no paths on the URL
    // Again, add 2nd to last to preserve page--node--[nid] if we do add it in
    if (count($split_url) > 1) {
      $page_name = end($split_url);
      array_splice($vars['theme_hook_suggestions'], -1, 0, 'page__'.str_replace('-','_',$page_name));
    }
  }

  //amalan new codes
  $currentNode = menu_get_object();
  
  if($currentNode->type == "page")
  {
    //getting Hero Image
    $node=node_load($currentNode->nid);

    $getitemsimage = field_get_items('node', $node ,'field_hero_images');

    //randomly taking a number from array and displaying the image accordingly
    $random= rand(0,count($getitemsimage)-1);

    $viewitemsimage = field_view_value(
                        'node'
                        ,$node 
                        ,'field_hero_images'
                        ,$getitemsimage[$random]
                        ,array('settings' => 
                          array('image_style' => 
                            'basic_page_desktop')
                          )
                        );

    $vars['image'] = $viewitemsimage;
    
    //getting Caption 1

    $getitemscaption1 = field_get_items('node', $node ,'field_caption_line_1');
    $viewitemscaption1 = field_view_value('node', $node ,'field_caption_line_1',$getitemscaption1[0]);
    $vars['captionone'] = $viewitemscaption1;
    
    //getting caption 2

    $getitemscaption2 = field_get_items('node', $node ,'field_caption_line_2');
    $viewitemscaption2 = field_view_value('node', $node ,'field_caption_line_2',$getitemscaption2[0]);
    $vars['captiontwo'] = $viewitemscaption2;
    
    //getting photo credit

    $getitemscredit = field_get_items('node', $node ,'field_photo_credit');
    $viewitemscredit = field_view_value('node', $node ,'field_photo_credit',$getitemscredit[0]);
    $vars['credit'] = $viewitemscredit;
  }

  //end of the new codes added


  // render image, captions and photo credits for "basic_page_with_hero"
  if($currentNode->type == "basic_page_with_hero")
  {
    // get array of hero images
    $node = node_load($currentNode->nid);
    $getitemsimage = field_get_items('node', $node ,'field_hero_images');
      
    // create a random number based on the array size
    $random= rand(0, count($getitemsimage) - 1);
    
    // get an random image from the array
    $viewitemsimage = field_view_value('node', $node ,'field_hero_images'
      , $getitemsimage[$random]
      , array('settings' => array('image_style' => 'basic_page_desktop')));
    $vars['image'] = $viewitemsimage;

    // get the corresponding photo credit, the images and credits should have been
    // entered in the same oder so that we can use the same random number
    $getitemscredit = field_get_items('node', $node ,'field_photo_credit');
    $viewitemscredit = field_view_value('node', $node ,'field_photo_credit'
      , $getitemscredit[0]);
    $vars['credit'] = $viewitemscredit;
    
    // get caption 1
    $getitemscaption1 = field_get_items('node', $node ,'field_caption_line_1');
    $viewitemscaption1 = field_view_value('node', $node ,'field_caption_line_1'
      , $getitemscaption1[0]);
    $vars['captionone'] = $viewitemscaption1;
    
    // get caption 2
    $getitemscaption2 = field_get_items('node', $node ,'field_caption_line_2');
    $viewitemscaption2 = field_view_value('node', $node ,'field_caption_line_2'
      , $getitemscaption2[0]);
    $vars['captiontwo'] = $viewitemscaption2;    
  }

  //variables assigned for the basic page with hero large content type
  if($currentNode->type == "basic_page_with_hero_large")
  {
    // get array of hero images
    $node = node_load($currentNode->nid);
    $getitemsimage = field_get_items('node', $node ,'field_large_hero_images');
      
    // create a random number based on the array size
    $random= rand(0, count($getitemsimage) - 1);
    
    // get an random image from the array
    $viewitemsimage = field_view_value('node', $node ,'field_large_hero_images'
      , $getitemsimage[$random]
      , array('settings' => array('image_style' => 'basic_page_desktop_large__1440x770_')));
    $vars['image'] = $viewitemsimage;

    // get the corresponding photo credit, the images and credits should have been
    // entered in the same oder so that we can use the same random number
    $getitemscredit = field_get_items('node', $node ,'field_large_photo_credit');
    $viewitemscredit = field_view_value('node', $node ,'field_large_photo_credit'
      , $getitemscredit[0]);
    $vars['credit'] = $viewitemscredit;
    
    // get caption 1
    $getitemscaption1 = field_get_items('node', $node ,'field_large_caption_line_1');
    $viewitemscaption1 = field_view_value('node', $node ,'field_large_caption_line_1'
      , $getitemscaption1[0]);
    $vars['captionone'] = $viewitemscaption1;
    
    // get caption 2
    $getitemscaption2 = field_get_items('node', $node ,'field_large_caption_line_2');
    $viewitemscaption2 = field_view_value('node', $node ,'field_large_caption_line_2'
      , $getitemscaption2[0]);
    $vars['captiontwo'] = $viewitemscaption2;    
  }

  if($currentNode->type == "basic_page_with_hero_form")
  {
    // get array of hero images
    $node = node_load($currentNode->nid);
    $getitemsimage = field_get_items('node', $node ,'field_hero_images_form');
      
    // create a random number based on the array size
    $random= rand(0, count($getitemsimage) - 1);
    
    // get an random image from the array
    $viewitemsimage = field_view_value('node', $node ,'field_hero_images_form'
      , $getitemsimage[$random]
      , array('settings' => array('image_style' => 'basic_page_desktop_form')));
    $vars['image'] = $viewitemsimage;

    // get the corresponding photo credit, the images and credits should have been
    // entered in the same oder so that we can use the same random number
    $getitemscredit = field_get_items('node', $node ,'field_photo_credit');
    $viewitemscredit = field_view_value('node', $node ,'field_photo_credit'
      , $getitemscredit[0]);
    $vars['credit'] = $viewitemscredit;
    
    // get caption 1
    $getitemscaption1 = field_get_items('node', $node ,'field_caption_line_1');
    $viewitemscaption1 = field_view_value('node', $node ,'field_caption_line_1'
      , $getitemscaption1[0]);
    $vars['captionone'] = $viewitemscaption1;
    
    // get caption 2
    $getitemscaption2 = field_get_items('node', $node ,'field_caption_line_2');
    $viewitemscaption2 = field_view_value('node', $node ,'field_caption_line_2'
      , $getitemscaption2[0]);
    $vars['captiontwo'] = $viewitemscaption2;    
  }


  if (arg(0) == 'header') { 
    $vars['theme_hook_suggestions'][] = 'page__bsd_header';
  } 
  if (arg(0) == 'footer') { 
    $vars['theme_hook_suggestions'][] = 'page__bsd_footer';
  }

}

function ambitious_form_element($variables) {
  
  
 
  $element = &$variables['element'];

  // This function is invoked as theme wrapper, but the rendered form element
  // may not necessarily have been processed by form_builder().
  $element += array(
    '#title_display' => 'before',
  );

  // Add element #id for #type 'item'. 
  if (isset($element['#markup']) && !empty($element['#id'])) {
    $attributes['id'] = $element['#id'];
  }
  // Add element's #type and #name as class to aid with JS/CSS selectors.
  $attributes['class'] = array('form-item');
  if (!empty($element['#type'])) {
    $attributes['class'][] = 'form-type-' . strtr($element['#type'], '_', '-');
  }
  if (!empty($element['#name'])) {
    $attributes['class'][] = 'form-item-' . strtr($element['#name'], array(' ' => '-', '_' => '-', '[' => '-', ']' => ''));
  }
  // Add a class for disabled elements to facilitate cross-browser styling.
  if (!empty($element['#attributes']['disabled'])) {
    $attributes['class'][] = 'form-disabled';
  }
  $output = '<fieldset' . drupal_attributes($attributes) . '>' . "\n";

  // If #title is not set, we don't display any label or required marker.
  if (!isset($element['#title'])) {
    $element['#title_display'] = 'none';
  }
  $prefix = isset($element['#field_prefix']) ? '<span class="field-prefix">' . $element['#field_prefix'] . '</span> ' : '';
  $suffix = isset($element['#field_suffix']) ? '<span class="field-suffix">' . $element['#field_suffix'] . '</span>' : '';

  switch ($element['#title_display']) {
    case 'before':
    case 'invisible':
      $output .= ' ' . theme('form_element_label', $variables);
      $output .= '<div class="form-element">';
      $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
      $output .= '</div> ';
      break;
	
    case 'after':
      $output .= ' ' . $prefix . $element['#children'] . $suffix;
      $output .= ' ' . theme('form_element_label', $variables) . "\n";
      break;

    case 'none':
    case 'attribute':
      // Output no label and no required marker, only the children.
      $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
      break;
  }

  if (!empty($element['#description'])) {
    //$output .= '<a class="tooltips"><span class="btn-tooltip">?</span><span class="tooltip-content">' . $element['#description']. "</span></a>\n";
    $output .= '<div class="description">' . $element ['#description'] . "</div>\n";
  }

  $output .= "</fieldset>\n";

  return $output;
  
} 
  

function ambitious_preprocess_node(&$variables){

  // Get a list of all the regions for this theme
  foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {
    // Get the content for each region and add it to the $region variable
    if ($blocks = block_get_blocks_by_region($region_key)) {
      $variables['region'][$region_key] = $blocks;
    }
    else {
      $variables['region'][$region_key] = array();
    }
  }
  if ($variables['node']->type == 'forum_discussion') {
    if (module_exists('autism_custom')) {
       $variables['pastcomments'] = getcommentcount_past2week($variables['node']->nid);
    }
  }

  if($variables['node']->type == 'topic')
  {
    $node = node_load($variables['node']->nid);
    $getitemsimage = field_get_items('node', $node ,'field_featured_image');
    $viewitemsimage = field_view_value('node', $node ,'field_featured_image'
      , $getitemsimage[0]
      , array('settings' => array('image_style' => 'basic_page_mobile')));
    $variables['mobileimage'] = $viewitemsimage;
  }
}

function ambitious_preprocess_comment_wrapper(&$vars){

  //kpr($vars);
  $vars['content']['comment_form']['#attributes']['class'][] = 'comments'; // Add class for form
  
}

function ambitious_preprocess_comment(&$vars){
    $vars['content']['links']['comment']['#links']['comment-reply'] = ''; 
  if(isset($vars['content']['links']['privatemsg'])){ 
     $vars['content']['links']['comment']['#links']['comment-reply'] = ''; 
     $vars['content']['links']['privatemsg']['#links']['privatemsg_link']['title'] = 'Contact Author';
     $vars['content']['privatemsg'] = $vars['content']['links'];
     $vars['content']['links']['privatemsg']['#links']['privatemsg_link'] = '';
     $vars['content']['links']['privatemsg']['comment']['#links']['comment-reply'] = '';
     $vars['content']['privatemsg']['comment']= '';          
  }
}
/**
 * Prepare for theming of the webform submission confirmation.
 */
function ambitious_preprocess_webform_confirmation(&$vars) {
  if ($vars['node']->nid == 74666) {
    $submission = webform_get_submission($vars['node']->nid, $vars['sid']);
    if ($submission->data[5][0] == 'Yes I am') {
      if (module_exists('header_form')){
       $vars['confirmation_message'] = get_header_form(1);
      }
    } else if ($submission->data[5][0] == 'Not Right Now') {
          if (module_exists('header_form')){
       $vars['confirmation_message'] = get_header_form(4);
       }
    }
  }
}
function ambitious_get_user_comments_count($uid) {
  $query = db_select('comment', 'c');
  $query->condition('uid', $uid, '=');
  $query->condition('status', '1', '=');
  $query->addExpression('COUNT(1)', 'count');
  $result = $query->execute();
 
  if ($record = $result->fetchAssoc())
    return $record['count'];
   
  return 0;
}
function ambitious_get_node_comments_count($nid) { 
  $query = db_select('comment', 'c'); 
  $query->condition('nid', $nid, '=');
  $query->condition('status', '1', '=');
  $query->condition('pid', '0', '=');
  $query->addExpression('COUNT(1)', 'count'); 
  $result = $query->execute();  
  if ($record = $result->fetchAssoc())
    return $record['count']; 
  return 0;
}

function ambitious_get_node_flaged_comments_count($nid) {  
  $query = db_select('comment', 'c');
  $query->join('flag_counts','flg','flg.entity_id=c.cid');
  $query->condition('nid', $nid, '=');
  $query->condition('status', '1', '=');
  $query->condition('pid', '0', '=');
  $query->addExpression('COUNT(1)', 'count'); 
  $result = $query->execute();  
  if ($record = $result->fetchAssoc())
    return $record['count']; 
  return 0;
}

function ambitious_get_user_message_count($uid) {
 $query=db_query("SELECT count(*) as messageCount FROM `pm_index` m Where recipient='$uid' and m.mid=m.thread_id and m.deleted = 0")->fetchField();
 return $query['messageCount'];
}

function ambitious_get_user_bookmark_count($uid) {
  $query = db_select('flagging', 'f');
  $query->join('flag','flg','flg.fid=f.fid');
  $query->condition('f.uid', $uid, '=');
  $query->condition('flg.name','bookmarks','=');
  $query->addExpression('COUNT(1)', 'count');
  $result = $query->execute();
 
  if ($record = $result->fetchAssoc())
    return $record['count'];
  
  return 0;
}


function ambitious_get_user_post_count($uid) {
  $a=0;
  $query = db_select('comment', 'c');
  $query->condition('uid', $uid, '=');
  $query->condition('status', '1', '=');
  $query->addExpression('COUNT(1)', 'count');
  $result = $query->execute();
 
  if ($record = $result->fetchAssoc()){
     $a=$record['count'];
  }
   $query = db_select('node', 'n');
   $query->condition('uid', $uid, '=');
   $query->condition('status', '1', '=');
   $query->addExpression('COUNT(1)', 'count');
   $result = $query->execute();
 
   if ($record = $result->fetchAssoc()){
      $a+=$record['count'];
   }
   return $a;
}

function ambitious_preprocess_user_profile(&$variables){
global $user;
if($user->uid == arg(1)){
     $variables['current_user'] = '';
  } 
  
  if (arg(0) == 'user' && $user->uid == arg(1)) {
    $providers = hybridauth_get_enabled_providers();
    $output = '';
    foreach($providers as $provider_id => $provider_name){
       $output[$provider_id]= l("<span>".$provider_id."<em class='icon-".$provider_id."'></em></span>", "/hybridauth/window/".$provider_id."?destination=user/".$user->uid."&destination_error=user/".$user->uid, array( 'attributes' => (array('class' => array('btn btn-' . strtolower($provider_id)))),'html' => TRUE,'external' => TRUE) );
    }
    $variables['hybridauth_user'] = $output;
		$variables['edit_url'] = l('<span>Edit your profile <em class="icon-Rightarrow"></em></span>','user/' . $user->uid.'/edit',array('attributes' => array('class' => array('btn','btn-red')), 'html' => TRUE));
  }
  
}
 

/*
 * altered comment form to show only filtered html as defualt and 
 * only forum_discussion will have wysiwyg
 */
function ambitious_form_comment_form_alter(&$form, &$form_state) {
  if ($form['#node']->type != 'forum_discussion'){
    $form['comment_body']['und'][0]['#wysiwyg'] = FALSE;
  }
   if (empty($form['comment_body']['und'][0]['#format'])){
      $form['comment_body']['und'][0]['#format'] = 'filtered';
   }
} 

function ago($timestamp) {
   $difference = time() - $timestamp;
   $periods = array("second", "minute", "hour", "day", "week", "month", "years", "decade");
   $lengths = array("60","60","24","7","4.35","12","10");
   for($j = 0; $difference >= $lengths[$j]; $j++)
   $difference /= $lengths[$j];
   $difference = round($difference);
   if($difference != 1) $periods[$j].= "s";
   $text = "$difference $periods[$j] ago";
   return $text;
}
  
// Remove Height and Width Inline Styles from Drupal Images
function ambitious_preprocess_image(&$variables) {
  foreach (array('width', 'height') as $key) {
    unset($variables[$key]);
  }
}






