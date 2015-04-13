<?php
	/**
	 * @file
	 * Returns the HTML for a node.
	 *
	 * Complete documentation for this file is available online.
	 * @see https://drupal.org/node/1728164
	 */

	/* variables */ 
	$themeurl =  base_path().drupal_get_path('theme', 'ambitious');
	$name = strip_tags($name); 
	$not_flag_comment = ambitious_get_node_comments_count($node->nid);
	drupal_add_library('waypoints', 'waypoints');
	hide($content['comments']['comments']);
	$weeks = variable_get('autism_custom_past_week', 0);
	$comment = ambitious_get_node_comments_count($node->nid);
	$flaged_comments_count = ambitious_get_node_flaged_comments_count($node->nid);
	$comment_count =  abs($comment - $flaged_comments_count);
	$uid = $node->uid;
	$userinfo = user_load($uid);

	// author signature to be added to the discussion threads
	$user_signature = $userinfo->field_signature;

	$location = $userinfo->field_location_reference['und']['0']['tid'];
	$user_date = format_date($userinfo->created, 'custom', t('d F Y', array(), array('context' => 'php date format')));
	$user_count = ambitious_get_user_post_count($uid);

	$location = taxonomy_term_load($location);
	$location = $location->name;
?>   
<div class="posts-columns columns-full">
<div class="row">
<section style="width:100%;" class="post">
  
   <?php if( $pastcomments > 5): ?>
    <em class="icon-Hottopic forum-icon"></em>	
   <?php endif; ?>
  
                        <div class="forum-text">						
						  <div class="forum-left"> 
						    <div class="image-holder">
						      <?php if(!empty($user_picture)):?>
  						        <?php print render($user_picture); ?>
						      <?php else: ?>
						      <img src="<?php print $themeurl;?>/images/profile-picture-1.jpg" alt="image description" />
						      <?php endif; ?>						      
						    </div>
                            <cite>by </br><strong title="<?php print $name; ?>"> <?php if($logged_in):?><a href="<?php print url('user/'.$uid); ?>"><?php print truncate_utf8($name,12,TRUE,4);?></a><?php else:?><?php print truncate_utf8($name,12,TRUE,4);?><?php endif; ?></strong></cite>                <time pubdate>Joined: <?php print $user_date; ?></time></br>
                             <time pubdate>Posts: <?php print $user_count; ?></time></br> 
                             <?php if(!empty($location)){ ?>
                            <time>Location: <?php print $location; ?></time>
                            <?php } ?>                                             
						  </div>
						  <div class="info add forum-right">
						    <?php if(isset($title)): ?>						     
						    	<h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
						    <?php else :?>						    
								<h3>Discussion</h3>
							<?php endif;?> 
							
							<?php print render($content['body']);?>		
							
							<?php if(isset($user_signature)): ?>
								<div class="user_signature">	
									<?php print $user_signature; ?>
								</div>
							<?php endif;?>
						  </div>
						  <?php if(isset($content['field_topic'])):?>	
						  <div class="topic_section">
								<?php print render($content['field_topic']);?>
								</div>
							<?php endif; ?>
						</div> 
						<div class="footer">
						<div class="flag_node">
							  <?php print flag_create_link('flags', $node->nid); ?>
							  </br>
							  <?php print flag_create_link('bookmarks', $node->nid); ?>
							</div>
                          <div class="num-holder">
							<a href="<?php print $node_url ?>#comments" title="replies" class="open">
							  <span class="num"><?php print $comment_count; ?></span>
							  <span class="text" style="display:inherit;">replies</span>
							</a>
						  </div> 
						  <div class="times" <?php if($comment_count == 0){ ?> style="display:none;" <?php }; ?>>
						    <em class="icon-Time"></em> 
							Last reply by <cite><?php if($logged_in):?><a href="<?php print url('user/'.$variables['last_comment_uid']); ?>"><?php print user_load($variables['last_comment_uid'])->name;  ?></a><?php else: ?><?php print user_load($variables['last_comment_uid'])->name;  ?><?php endif; ?></cite>, <time pubdate="pubdate"> <?php print format_date($variables['last_comment_timestamp'], 'mdy'); ?></time> 
					     </div>  
						 <div class="forum_replay">
						  <?php if($user->uid):?>
						   <a href="<?php print $node_url ?>#comment-form" class="btn btn-right" title="Reply">Reply</a>
						   <?php else:?>
						   <a href="/user/login?destination=node/<?php print $node->nid ; ?>#comment-form" class="btn btn-right" title="Reply">Reply</a>
						   <?php endif; ?>
						 </div>
					  </div>  
					</section>
		
<h4 class="forumpage_title">
     <a href="#" title="Read our guidelines">Read our guidelines</a></br><?php print $comment_count; ?>
    <?php if($comment_count > 1){
      print t('Comments');
      }else{
        print t('Comment');
      }
    ?></h4>
  
  
 </div>
  </div>
  
  <?php
  $block = module_invoke('views', 'block_view', 'comments-comments');
		print render($block['content']);
   ?>
 			<?php if($content['comments']['comment_form']):?>   
		<section class="comment-block">			
 <?php print render($content['comments']['comment_form']);   ?>
</section>   
<?php endif; ?>
