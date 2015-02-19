<section class="my-voice-post">
			<div> <?php print render($content['field_featured_image']); ?> 
                         <a href="#" title="Featured" class="feature-holder">
								<span class="icon-Featured"></span>
								<span class="text">Featured</span>
							</a></div> 
			<div class="content">
				<h3><?php print $title; ?></h3>
 <div class="place mobile"><?php print render($content['field_place']); ?></div> 
				<?php print render($content['body']); ?></div>
                        <div class="place desktop"><?php print render($content['field_place']); ?></div> 
		</section> 
