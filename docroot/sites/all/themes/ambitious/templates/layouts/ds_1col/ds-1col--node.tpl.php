<?php

/**
 * @file
 * Display Suite 1 column template.
 */
?>
<<?php print $ds_content_wrapper; print $layout_attributes; ?> class="ds-1col <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php print $ds_content; ?>
</<?php print $ds_content_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>

  <?php dpm($ds_content); ?>

<section class="my-voice-post">
			<div>  
                         <a href="#" title="Featured" class="feature-holder">
								<span class="icon-Featured"></span>
								<span class="text">Featured</span>
							</a></div> 
			<div class="content">
				<h3></h3>
 <div class="place mobile"></div> 
				</div>
                        <div class="place desktop"></div> 
		</section> 
