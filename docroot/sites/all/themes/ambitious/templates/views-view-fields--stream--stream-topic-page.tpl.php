<?php
$i = 1;
$ourfields = array('title', 'body', 'field_has_video', 'field_featured_image', 'comment_count', 'type', 'field_background_colour', 'field_featured_author', 'field_source', 'nid');

$ourfieldsourse =  strip_tags($fields['field_source']->content);
?>
 

<?php if ($fields['type']->raw == 'quote'):?>
<section class="blockquote-block" style="margin:-22px; background:<?php print strip_tags($fields['field_background_colour']->content); ?>" >
						<blockquote >
							<q><?php print $fields['body']->content; ?></q>
							<cite><?php print$fields['field_featured_author']->content; ?></cite>
						</blockquote>
						<?php if ($ourfieldsourse== 'Community'):?>
						<span class="icon-Speech1"></span>
						<?php endif; ?>
						<?php if ($ourfieldsourse == 'Twitter'):?>
						<span class="icon-Twitter"></span>
						<?php endif; ?>
						
					</section>
<?php elseif ($fields['type']->raw == 'social_mention'):?>

						<div class="img-holder">
							<?php print $fields['field_featured_image']->content; ?>
						</div>
						<div class="info">
							<h2><?php print $fields['title']->content; ?></h2>
							<p>“<?php print strip_tags($fields['body']->content); ?>”</p> 
							<span class="cite"><strong>- <?php print strip_tags($fields['field_featured_author']->content); ?></strong>  (via the <?php print $ourfieldsourse; ?>)</span>
						</div>
<?php else:?>
<section > 
						<div class="img-holder video-<?php print $fields['field_has_video']->content; ?>">
                                   <span class="icon-Playbutton video-icon"></span>
							<a href="#" title="Featured" class="feature-holder">
								<span class="icon-Featured"></span>
								<span class="text">Featured</span>
							</a>
                                  <?php print $fields['field_featured_image']->content; ?>
						</div>
						<div class="info add">
							<h3><?php print $fields['title']->content; ?></h3>
							<?php print $fields['body']->content; ?>
						</div>
						<div class="footer">
							<div class="num-holder">
								<a href="node/nid" title="people are talking about this" class="">
									<span class="num"><?php print strip_tags($fields['comment_count']->raw); ?></span>
									<span class="text">people are talking about this </span>
								</a>
							</div>
						</div>
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
	  <?php print $field->wrapper_suffix; ?>
  <?php endif;?>
<?php endforeach; ?>
