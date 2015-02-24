<?php

/**
 * @file
 * Default theme implementation for comments.
 *
 * Available variables:
 * - $author: Comment author. Can be link or plain text.
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $created: Formatted date and time for when the comment was created.
 *   Preprocess functions can reformat it by calling format_date() with the
 *   desired parameters on the $comment->created variable.
 * - $changed: Formatted date and time for when the comment was last changed.
 *   Preprocess functions can reformat it by calling format_date() with the
 *   desired parameters on the $comment->changed variable.
 * - $new: New comment marker.
 * - $permalink: Comment permalink.
 * - $submitted: Submission information created from $author and $created during
 *   template_preprocess_comment().
 * - $picture: Authors picture.
 * - $signature: Authors signature.
 * - $status: Comment status. Possible values are:
 *   comment-unpublished, comment-published or comment-preview.
 * - $title: Linked title.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - comment: The current template type, i.e., "theming hook".
 *   - comment-by-anonymous: Comment by an unregistered user.
 *   - comment-by-node-author: Comment by the author of the parent node.
 *   - comment-preview: When previewing a new or edited comment.
 *   The following applies only to viewers who are registered users:
 *   - comment-unpublished: An unpublished comment visible only to administrators.
 *   - comment-by-viewer: Comment by the user currently viewing the page.
 *   - comment-new: New comment since last the visit.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * These two variables are provided for context:
 * - $comment: Full comment object.
 * - $node: Node object the comments are attached to.
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_comment()
 * @see template_process()
 * @see theme_comment()
 *
 * @ingroup themeable
 */ 
   hide($content['links']);
   hide($content['privatemsg']);
    global $user;
?>
	
<li class="<?php print $classes; ?>">
			   <div class="comment-left">
			     <div class="comment-img-holder">
				   <?php print $picture ?>
				 </div> 
			     <time pubdate="pubdate"><?php print $submitted;?></time> 
			      <?php print $permalink; ?>
			      <?php
				      if ( $user->uid ) { ?>
			        <?php if($content['privatemsg']){
                          print render($content['privatemsg']); 
                        } ?> 
				      <?php } ?> 
			   
			   </div>
			   <div class="comment-right">
			       <?php print render($title_prefix); ?>
			         <h4<?php print $title_attributes; ?>><?php print $title ?></h4>
   			       <?php print render($title_suffix); ?>
			     <?php
					 // We hide the comments and links now so that we can render them later. 
					 print render($content);
				    ?>
				    
				    <?php
				      if ( $user->uid ) { ?>
				       <div class="links">
					    <?php print render($content['links']) ?> 
					     <?php print flag_create_link('bookmarks', $comment->cid); ?>
					  </div>
				      <?php } ?> 			
				      <?php $node = node_load(arg(1));
					    $links = sharethis_node_view($node, 'full', 'en');
					    $share_button = '<div class="topic-share">'.$node->content['sharethis']['#value'].'</div>'; 
					    print $share_button;
					    ?> 
			   </div>  
			 </li> 
