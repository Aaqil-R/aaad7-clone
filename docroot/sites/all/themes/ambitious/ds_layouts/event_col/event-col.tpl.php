<div class="<?php print $classes;?> clearfix">
  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?> 
  <section class="my-voice-post">
   <div>
     <?php print $image; ?>
     <a href="#" title="Featured" class="feature-holder">
       <span class="icon-Featured"></span>
       <span class="text">Featured</span>
     </a>
   </div> 
   <?php print $date; ?>
   <div class="content"> 
     <div class="place mobile"><?php print $place; ?></div> 
     <?php print $content; ?>
   </div>
   <div class="place desktop"><?php print $place; ?></div> 
</section>  
</div>
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>


 
