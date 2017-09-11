<?php
$i = 1;
$ourfields = array('title'
	, 'body'
	, 'field_has_video'
	, 'field_featured_image'
	, 'comment_count'
	, 'type'
	, 'field_background_colour'
	, 'field_featured_author'
	, 'field_source'
	, 'nid'
	, 'field_standfirst'
	, 'field_post_type'
	, 'comment');

$ourfieldsourse =  strip_tags($fields['field_source']->content);
?>

<?php if ($fields['type']->raw == 'quote'):?>
<section class="blockquote-block" style="margin:-22px; background:<?php print strip_tags($fields['field_background_colour']->content); ?>" >
						<blockquote >
							<q><?php print strip_tags($fields['body']->content); ?></q>
							<cite><?php print strip_tags($fields['field_featured_author']->content); ?></cite>
						</blockquote>
						<?php if ($ourfieldsourse== 'Community'):?>
						<span class="icon-Speech1"></span>
						<?php endif; ?>
						<?php if ($ourfieldsourse == 'Twitter'):?>
						<span class="icon-Twitter"></span>
						<?php endif; ?>
						
					</section>
<?php elseif ($fields['type']->raw == 'social_mention'):?>
                             <?php if($fields['field_featured_image']->content): ?>
						<div class="img-holder">
							<?php print $fields['field_featured_image']->content; ?>
						</div>
						<?php endif; ?>
						<div class="info">
						     <?php if($fields['title']->content): ?>
							<!-- removing the links from the social titles -->
							<!-- <h2><?php print strip_tags($fields['title']->content, '<a>'); ?></h2> -->
							<h2><?php print $fields['title']->raw; ?></h2>
							<?php endif; ?>
							<?php if($fields['body']->content): ?>
							<p>“<?php print strip_tags($fields['body']->content); ?>”</p> 
							<?php endif; ?>
							<span class="cite"><strong>- <?php print strip_tags($fields['field_featured_author']->content); ?></strong>  (<?php print $ourfieldsourse; ?>)</span>
						</div>
<?php else:?>
<section >  
						<div class="img-holder video-<?php print $fields['field_has_video']->content; ?>"> 
                                   <span class="icon-Playbutton video-icon"></span>
                                    
							<a href="#" title="Featured" class="feature-holder">
								<span class="icon-Featured"></span>
								<span class="text">Featured</span>
							</a>       
							<a href="#" title="Type" class="feature-holder information <?php print strtolower(strip_tags($fields['field_post_type']->content)); ?>">
								<span class="icon-Type"></span>
								<span class="text"><?php print strip_tags($fields['field_post_type']->content); ?>Information</span>
							</a>

              <div class="image-section"><?php print $fields['field_featured_image']->content; if($fields['field_has_video']->content == 1){ print $fields['field_video_author']->content; } ?></div>
              <div class="video-section element-invisible"><?php print $fields['field_video_embed']->content; ?> </div>
						</div>
						<div class="info add">
							<h3><?php print $fields['title']->content; ?></h3>
							<?php print $fields['field_standfirst']->content; ?>
						</div>
						
						<?php if( $fields['comment']->raw != 1 && strip_tags($fields['comment_count']->raw) != 0): ?>
							<div class="footer">
								<div class="num-holder">
									<a href="/node/<?php print $fields['nid']->content; ?>" title="people are talking about this" class="">
										<span class="num"><?php print strip_tags($fields['comment_count']->raw); ?></span>
										<span class="text">people are talking about this </span>
									</a>
								</div>
							</div>
						<?php endif ?>

					</section>
<?php endif; ?>
<?php foreach ($fields as $id => $field): ?>
<?php if (!in_array($id, $ourfields)): ?>
	  <?php if (!empty($field->separator)): ?>
	    <?php print $field->separator; ?>
	  <?php endif; ?>
	  <?php print $field->wrapper_prefix; ?>
	    <?php print $field->label_html; ?>
	    <?php print $field->content; ?>
	    <?php //dpm(strip_tags($fields['field_post_type']->content)); ?>
	  <?php print $field->wrapper_suffix; ?>
  <?php endif;?>
<?php endforeach; ?>
