<?php	
/**
 * @file
 * Default view template to display content in a Masonry layout.
 */  

?> 

<?php
  $additional_classes = "";
  $node = $variables['node'];
?>

<?php foreach ($rows as $id => $row): ?>  
  <?php if ($id == 0 && isset($node)):?> 
     <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] . $additional_classes .'"';  } ?>>
      <!-- Teaser View of the topic --> 
      <?php if(isset($node->title)): ?>
        <h4><?php print $node->title;?></h4>
      <?php endif; ?>
       <p>
      <?php $node1 = node_load(arg(1));
         print flag_create_link('bookmarks', $node1->nid);
       ?> 
      </p>
      <?php if(isset($node->body['und'][0]['safe_value'])): ?>
        <?php print $node->body['und'][0]['safe_value']; ?>
      <?php endif; ?> 
      <!-- Teaser ends here -->	
    </div>
    <div class="masonry-item<?php if ($classes_array[$id]) print ' ' . $classes_array[$id]; ?>">
      <?php print $row; ?>
    </div>
  <?php else: ?>
    <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
      <?php print $row; ?>
    </div>
  <?php endif; ?>
<?php endforeach; ?>
