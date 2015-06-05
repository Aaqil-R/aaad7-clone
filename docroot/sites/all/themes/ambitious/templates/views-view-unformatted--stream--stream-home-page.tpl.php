<?php
/**
 * @file
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
	$additional_classes = "js-stream-intronew transparent-card";
	$node = $variables['node'];
?>

<?php foreach ($rows as $id => $row): ?>
  <?php if ($id == 0):// && isset($node)):?> 
    <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] . ' ' . $additional_classes .'"';  } ?>>
      <!-- Teaser View of the topic --> 
      <?php //if(isset($node->title)): 
      	$block = module_invoke('block', 'block_view', '46');
		    print render($block['content']);
      ?>
      <?php //endif; ?>
      <?php if(isset($node->body['und'][0]['safe_value'])): ?>
        <?php print $node->body['und'][0]['safe_value']; ?>
      <?php endif; ?>         
      <!-- Teaser ends here -->	
    </div>
<?php endif; ?>
    <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
      <?php print $row; ?>
    </div>
  
<?php endforeach; ?>

