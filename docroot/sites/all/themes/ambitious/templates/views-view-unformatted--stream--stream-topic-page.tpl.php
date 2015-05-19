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
	$additional_classes = "";
	$node = $variables['node'];
?>

<?php foreach ($rows as $id => $row): ?>
  <?php if ($id == 0 && isset($node)):?> 
    <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] . $additional_classes .'"';  } ?>>
      <!-- Teaser View of the topic --> 
      <?php if(isset($node->title)): ?>
        <h1><?php print $node->title;?></h1>
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
<?php endforeach; ?>
