<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */

/* variables */ 
  
?>
<?php if($view_mode == 'posts_columns'): ?>
<!-- Teaser View of the topic -->
  <section class="text-block">
    <h1><?php print $title; ?></h1>
    <?php print render($content['body']); ?>
    <div class="btn-holder clearfix">
      <a href="#" class="btn btn-gray btn-left" title="Filter by">Filter by</a>
      <a href="#" class="btn btn-green btn-left bt-left" title="Share"><span>Share <em class="icon-Share"></em></span></a>
    </div>
  </section>	
    <!-- Teaser ends here -->				
<?php else: ?> 
<!-- FULL View of the topic -->
  <section class="visual">
    <div class="img-holder">
      <div class="caption-frame caption-frame-arrows"> 
        <div class="caption">
          <?php if(isset($content['field_main_caption'])):?>
            <h1 class="title"><span><?php print render($content['field_main_caption']['#items'][0]['value']); ?></span></h1>
          <?php endif; ?>
          <?php if(isset($content['field_sub_caption'])):?>
            <span class="text"><?php print render($content['field_sub_caption']['#items'][0]['value']); ?></span>
          <?php endif; ?>
        </div>
      </div>
      <?php if(isset($content['field_featured_image'])):?>
	    <img src="<?php print file_create_url($content['field_featured_image']['#items'][0]['uri']); ?>" alt="<?php print $title; ?>">
	  <?php endif; ?>
    </div>	 
    <?php if(isset($content['field_featured_image_by'])):?>
    <div class="holder">
      <span class="pic-by">© Photo by <a href="#" title="<?php print render($content['field_featured_image_by']['#items'][0]['value']); ?>"><?php print render($content['field_featured_image_by']['#items'][0]['value']); ?></a>.</span>
    </div>
     <?php endif; ?> 
    <a href="#" title="Previous topic" class="btn-perv">
      <span class="icon-Leftarrow"></span>
      <div class="text-area">
        <span class="title">Previous topic</span>
        <span class="topic">Eating</span>
      </div>
    </a>
    <a href="#" title="Next topic" class="btn-next">
      <div class="text-area">
        <span class="title">Next topic:</span>
        <span class="topic">Eating</span>
      </div>
      <span class="icon-Rightarrow"></span>
    </a>
  </section> 
  <!-- Full view ends here -->
<?php endif; ?> 
 
 
 
 
 
 
 
 
 
 
 

 

 
 
 
 
 
 
 
 
 
 
 
 
