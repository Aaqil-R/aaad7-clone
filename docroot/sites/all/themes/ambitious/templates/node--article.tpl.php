<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */

/* variables */ 
  
  $node = node_load(arg(1)); 
  $links = sharethis_node_view($node, 'full', 'en');
  $base_path = '/';

  global $user;
  $user_fields = user_load($user->uid);
  $first_name = field_get_items('user', user_load($node->uid), 'field_first_name');
  
?> 
		<!-- contain main informative part of the site -->
		<section class="article node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
			<div class="article-left">
	           <section class="article-left-holder">
			   <!-- article -->
	             <article>
	               <header>
	                	<h1><?php print $title; ?></h1>
							<?php if (!empty($content['field_standfirst'])) : ?> 
	                 			<h2 class="subheading"><?php print $content['field_standfirst']['#items'][0]['value']; ?></h2>
	                		<?php endif; ?> 
	                 	<div class="article-info">
	                 		<?php if (!empty($content['field_featured_author'])): ?>
	                 			<?php print render($content['field_featured_author']); ?>
	                 		<?php endif; ?>	                 		
							<?php print flag_create_link('bookmarks', $node->nid); ?>
				     		<div class="topic-share"><?php print $node->content['sharethis']['#value']; ?></div>
	                 	</div>
	               </header>
	               <?php if (!empty($content['field_featured_image'])): ?>
	                <section class="visual">
				     <div class="img-holder">
				       <?php print render($content['field_featured_image']); ?>
				     </div>
				     <div class="holder">
				     	<?php if (!empty($content['field_image_caption'])): ?>
				       		<span class="pic-caption"><?php print $content['field_image_caption']['#items'][0]['value']; ?></span>
				       <?php endif; ?>
				       <?php if (!empty($content['field_image_credit'])): ?>
				       	<span class="pic-by"><?php print t('&copy; Photo by');?> <?php print $content['field_image_credit']['#items'][0]['value']; ?></span>
				       <?php endif; ?>
				     </div> 
				  </section>
				<?php endif; ?>
				  <?php print render($content['body']); ?>
	               <footer>
				     <div class="article-info">
				     	<div class="topic-share"><?php print $node->content['sharethis']['#value']; ?></div>
				       <div class="article-updated">

					     <strong><?php print t('Last updated:') ?> <time pubdate="pubdate"><?php print date('j F Y', $node->changed);?></time></strong>
					     <div class="article-tags">
						 	<span>Related topics: </span>
							<?php print render($content['field_related_topic']); ?>
						 </div>
					  	 <div class="article-tags">
							   <span>Tags: </span>
								<?php print render($content['field_tags']); ?>
						 </div class="article-tags" >
	                   
	                 </div>
	              </footer>
	              <!-- comment columns -->		
	              <?php  print render($content['comments']); ?>
	          </article>	              
			</section>		      

			</div>
			<div class="article-right">
				<?php print render($region['sidebar_second']); ?>
			</div>
						
		</section>
