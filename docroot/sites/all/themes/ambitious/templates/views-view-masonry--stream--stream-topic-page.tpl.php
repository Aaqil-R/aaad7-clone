<?php
/**
 * @file
 * Default view template to display content in a Masonry layout.
 */  

?> 
<?php foreach ($rows as $id => $row): ?>  
  <?php if ($id == 0 && isset($variables['node'])):?> 
    <div class="masonry-item views-row views-row-1 views-row-odd views-row-first text-block text-block-second post masonry-brick ">
      <!-- Teaser View of the topic --> 
      <?php if(isset($variables['node']->title)): ?>
        <h1><?php print $variables['node']->title;?></h1>
      <?php endif; ?>
      <?php if(isset($variables['node']->body['und'][0]['safe_value'])): ?>
        <?php print $variables['node']->body['und'][0]['safe_value']; ?>
      <?php endif; ?>
      <div class="btn-holder clearfix">
        <a href="#" class="btn btn-gray btn-left" title="Filter by">Filter by</a>
        <?php if(isset($variables['share_button'])): ?>
          <?php print render($variables['share_button']); ?> 
        <?php endif; ?>
      </div>  
      <!-- Teaser ends here -->	
    </div>
  <?php else: ?>
    <div class="<?php if ($id < 4 && isset($variables['node'])) print 'featured-button ';?>masonry-item<?php if ($classes_array[$id]) print ' ' . $classes_array[$id]; ?>">
      <?php print $row; ?>
    </div>
 <?php endif; ?>
<?php endforeach; ?>



