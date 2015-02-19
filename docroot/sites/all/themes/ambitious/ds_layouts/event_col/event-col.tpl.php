<div class="<?php print $classes;?> clearfix">
  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?> 
  <section class="my-voice-post">
   <div>
   <?php if ($image): ?>
     <?php print $image; ?>
       <?php endif; ?>
     <a href="#" title="Featured" class="feature-holder">
       <span class="icon-Featured"></span>
       <span class="text">Featured</span>
     </a>
   </div> 
    <?php if ($date): ?>
   <?php print $date; ?>
    <?php endif; ?>
   <div class="content"> 
    <?php if ($place): ?>
     <div class="place mobile-view"><?php print $place; ?></div> 
       <?php endif; ?>
      <?php if ($content): ?> <?php print $content; ?><?php endif; ?>
   </div>
   <div class="place desktop-view"><?php if ($place): ?><?php print $place; ?><?php endif; ?></div> 
</section>  
</div>
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>


 
