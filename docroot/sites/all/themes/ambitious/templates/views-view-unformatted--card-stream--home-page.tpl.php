<?php
/**
 * @  file
 * Default view template to display content in a Masonry layout.
 */

// Variable
if ($view->query->pager->total_items > $view->query->pager->options['items_per_page']){
  $no=(int) ($view->query->pager->total_items/$view->query->pager->options['items_per_page']);
  $noofpage = round($no,0, PHP_ROUND_HALF_DOWN);
} else {
 $noofpage = 0;
}


?>

<?php
	$additional_classes = "js-stream-intronew card-transparent";
  if(isset($variables['node'])):
	 $node = $variables['node'];
  endif;
?>

<?php foreach ($rows as $id => $row): ?>
  <!-- Setup the intro section at the 0th index. --> 
  <?php// if ($id == 0):// && isset($node)):?> 
    <!-- <div<?php //if ($classes_array[$id]) { print ' class="' . $classes_array[$id] . ' ' . $additional_classes .'"';  } ?>> -->
      <!-- Teaser View of the topic --> 
      <?php //if(isset($node->title)): 
      	// $block = module_invoke('block', 'block_view', '46');
		    // print render($block['content']);
      ?>
      <?php //endif; ?>
      <?php //if(isset($node->body['und'][0]['safe_value'])): ?>
        <?php //print $node->body['und'][0]['safe_value']; ?>
      <?php //endif; ?>         
      <!-- Teaser ends here -->	
    <!-- </div> -->
  <?php //endif; ?>

  <?php  
    
    // Indicates a featured image.
    $feature_indicator = "";

    // Set the first three items as featured items.
    if ($id < 3) {
      $feature_indicator = "feature-row";
    } 
  ?>
  
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] . " " . $feature_indicator .'"';  } ?>>
    <?php print $row; ?>
  </div>  
<?php endforeach; ?>