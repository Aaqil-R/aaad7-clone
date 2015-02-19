<div class="<?php print $classes;?> clearfix">
  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  
  <?php if ($left): ?>
    <div class="ds-left<?php print $left_classes; ?>">
      <?php print $left; ?>
    </div>
  <?php endif; ?>


  <?php if ($right): ?>
    <div class="ds-right<?php print $right_classes; ?>">
     
    </div>
  <?php endif; ?>
  
</div>


<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
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
     <h3><?php print $title; ?></h3>
     <div class="place mobile"><?php print $place; ?></div> 
     <?php print $content; ?>
   </div>
   <div class="place desktop"><?php print $place; ?>></div> 
</section> 

 
