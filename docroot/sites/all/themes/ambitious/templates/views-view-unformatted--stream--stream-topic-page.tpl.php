<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<!--<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>-->

<?php
	$additional_classes = "js-stream-intronew card-transparent";
	$node = $variables['node'];
?>

<?php foreach ($rows as $id => $row): ?>
  <?php if ($id == 0 && isset($node)):?> 
    <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .' '. $additional_classes .'"';  } ?>>
      <!-- Teaser View of the topic --> 
      <?php if(isset($node->title)): ?>
        <h4><?php print $node->title;?></h4>
      <?php endif; ?>
      <?php if(isset($node->body['und'][0]['safe_value'])): ?>
        <?php print $node->body['und'][0]['safe_value']; ?>
      <?php endif; ?>         
      <!-- Teaser ends here -->	
    </div>
  <?php else: ?>
    <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
      <?php print $row; ?>
    </div>
  <?php endif; ?>
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
