<?php
$i = 1;
$ourfields = array('title', 'body', 'field_has_video', 'field_featured_image', 'comment_count',);
 dpm($fields);
?>







<section class="post">
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
									<span class="num"><?php print $fields['comment_count']->raw; ?> </span>
									<span class="text">people are talking about this </span>
								</a>
							</div>
						</div>
					</section>
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
