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
drupal_add_library('waypoints', 'waypoints');
hide($content['comments']['comments']);
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
                            <cite>by <strong title="<?php print $name; ?>"> <?php print truncate_utf8($name,12,TRUE,4);?></strong></cite>
                            <time pubdate="pubdate"><?php print $date; ?></time>   
						  </div>
						  <div class="info add forum-right">
						     <?php if(isset($title)): ?>
						    <h3><?php print $title; ?></h3>
						     <?php else :?>
							<h3>Discussion</h3>
							<?php endif;?>
							<div style="margin-bottom: 20px;">
							  <?php print flag_create_link('bookmarks', $node->nid); ?>
							</div>
							<?php print render($content['body']);?>		 
						  </div>
						</div>
						<div class="footer">
                          <div class="num-holder">
							<a href="<?php print $node_url ?>#comments" title="replies" class="open">
							  <span class="num"><?php print render($comment_count); ?></span>
							  <span class="text">replies</span>
							</a>
						  </div>
						  <div class="times">
						    <em class="icon-Time"></em> 
							Last reply by <cite><?php print user_load($variables['last_comment_uid'])->name;  ?></cite>, <time pubdate="pubdate"> <?php print format_date($variables['last_comment_timestamp'], 'mdy'); ?></time> 
					     </div> 
						 <div class="forum_replay"><a href="<?php print $node_url ?>#comments" class="btn btn-right" title="Reply">Reply</a> </div>
					  </div>  
					</section>   
		<section class="comment-block">			
 <?php print render($content['comments']['comment_form']);   ?>
</section>   
 <h4 style="font-size:16px; margin-bottom:30px;"><?php print $node->comment_count; ?> 
    <?php if($node->comment_count > 1){
      print t('Comments');
      }else{
        print t('Comment');
      }
    ?>
     <a href="#" title="Read our guidelines">Read our guidelines</a></h4>
  
  
 </div>
  </div>
 
