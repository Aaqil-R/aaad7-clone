<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php
  $vars = get_defined_vars(); 
  $sticky = node_load($fields['nid']->raw); 
  $node_comment = ambitious_get_node_comments_count($fields['nid']->raw) ;
  $node_flag_comment = ambitious_get_node_flaged_comments_count($fields['nid']->raw) ;
  
  $real_comment_count = abs($node_flag_comment - $node_comment) ;
  $class = '';  
  $commentcout = ambitious_get_node_comments_count($fields['nid']->raw);
      if($commentcout > 3){
        $class = 'commentcoutmore3';
      }
     
      
      
      if (module_exists('autism_custom')) {
        $hot_comment = getcommentcount_past2week($fields['nid']->raw);
        if ($hot_comment > 5) {
          $class .= ' show_hot';
        }
      }   
       $usid = strip_tags($fields['uid']->raw);
       $userpostcount = ambitious_get_user_post_count($usid); 
      ?>  
      
 <div class="<?php print $class; if($sticky->sticky == 1){ ?> rowlessthen3 <?php } ?>" >
 
 <section style="width:100%;" class="post">  
						<em class="icon-Hottopic forum-icon"></em>
						<em class="icon-Featured forum-icon"></em>
                        <div class="forum-text">						
						  <div class="forum-left"> 
						    <div class="image-holder">	
								<?php print $fields['picture']->content; ?>
						    </div>
                            <cite>by </br><strong><?php print $fields['name']->content; ?></strong></cite>
                            <time pubdate>Joined: <?php print $fields['created_1']->content; ?></time></br>
                             <time pubdate>Posts: <?php print $userpostcount; ?></time></br>
                             <?php $fields['field_location_reference']->content = strip_tags($fields['field_location_reference']->content); ?> 
                             <?php if(!empty($fields['field_location_reference']->content)){ ?>
                            <time>Location:<?php print $fields['field_location_reference']->content; ?></time>
                            <?php } ?>                                            
						  </div>
						  <div class="info add forum-right">
							<h3><?php print $fields['title']->content; ?></h3>
                            <div class="meta">
                                <div class="created">
                                    <?php print format_date($fields['created']->content, 'custom', 'D j M Y');?>
                                </div>
                                <?php if(isset($fields['field_topic'])):?>	
                                <div class="topic_section">
                                    <?php print render($fields['field_topic']->content);?>
                                </div>
                                <?php endif; ?>
                                <div class="clear"></div>
                            </div>
							<?php print $fields['body']->content; ?>  
							<?php if(!empty($fields['field_signature']->content)){ ?>
                            	<div class="user_signature">
                            		<?php print $fields['field_signature']->content; ?>
                            	</div>
                            <?php } ?>  
						  </div>
						</div>
						<div class="footer">
                          <div class="num-holder">
							<a href="<?php print $fields['path']->content; ?>" title="replies" class="open">
							  <span class="num"><?php print $real_comment_count; ?></span>
							  <span class="text" style="display: inherit;">replies</span>
							</a>
						  </div>
						 
						  <div class="times" <?php if($real_comment_count == 0){ ?> style="display:none;" <?php }; ?> >
						    <em class="icon-Time"></em> 
							Last reply by <cite><?php print $fields['last_comment_name']->content; ?> </cite>, <time pubdate="[last_comment_timestamp]"><?php print $fields['last_comment_timestamp']->content; ?></time> 
					     </div>  
						<?php print $fields['comments_link']->content; ?>
					  </div>  
					</section> 
 
  </div> 
