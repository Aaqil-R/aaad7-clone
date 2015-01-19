<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */

/* variables */ 
$themeurl =  base_path().drupal_get_path('theme', 'ambitious')
?>
 

<section style="width:100%;" class="post">
					    <em class="icon-Featured forum-icon"></em>	
                        <div class="forum-text">						
						  <div class="forum-left"> 
						    <div class="image-holder">
						      <img src="<?php print $themeurl;?>/images/profile-picture-1.jpg" alt="image description" />
						    </div>
                            <cite>by <strong><?php print $name; ?></strong></cite>
                            <time pubdate="pubdate"><?php print $date; ?></time>  
						  </div>
						  <div class="info add forum-right">
						     <?php if(isset($title)): ?>
						     <h3><a href="<?php print $node_url; ?>" title="Discussion">Discussion</a></h3>
						     <?php else :?>
							<h3><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h3>
							<?php endif;?>
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
							Last reply by <cite>titch</cite>, <time pubdate="pubdate"> <?php print $date; ?></time> 
					     </div> 
						  <a href="<?php print $node_url ?>#comments" class="btn btn-right" title="Reply">Reply</a> 
					  </div>  
					</section>   
 
 
  <?php print render($content['comments']); ?>

 

 

 
 
 
 
 
 
 
 
 
 
 
 
