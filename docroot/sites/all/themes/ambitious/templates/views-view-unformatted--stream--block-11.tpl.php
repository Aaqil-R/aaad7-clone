<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<?php
  $additional_classes = "js-stream-intronew card-transparent";
  
  if ($parent_node = menu_get_object()) :
    $nid = $parent_node->nid;
    $node = node_load($nid);
  endif;
?>

<?php foreach ($rows as $id => $row): ?>
  <?php if ($id == 0 && $view->query->pager->current_page == 0): ?> 
    <div <?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .' '. $additional_classes .'"';  } ?> >
      <?php if(isset($node->title)): ?>
        <h4><?php print $node->title;?></h4>
      <?php endif; ?>
      <?php if(isset($node->body['und'][0]['safe_value'])): ?>
        <?php print $node->body['und'][0]['safe_value']; ?>
      <?php endif; ?>         
    </div>
  <?php //else: ?>
  <?php endif; ?>
  <?php  
    $feature_indicator = "";
    if ($id < 4 && isset($node) ) {
      $feature_indicator = "feature-row";
    } 
  ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] . " " . $feature_indicator .'"';  } ?>>
    <?php print $row; ?>
  </div>
  <?php //endif; ?>  
<?php endforeach; ?>