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
  $additional_classes = "js-stream-intronew card-transparent";
  if(isset($variables['node'])):
   $node = $variables['node'];
  endif;
?>

<?php
  $node = node_load(687606);
      $content1 = $node->body['und'][0]['value'];
      //print render($content1);
?>
<?php foreach ($rows as $id => $row): ?>
  <?php //render($row); ?>
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
<?php endif; ?>
    <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
      <?php print $row; ?>
    </div>
  
<?php endforeach; ?>

  <?php if($view->query->pager->current_page == $noofpage): ?>
     <!-- <div class="<?php if ($classes_array[$id]) print ' ' . $classes_array[$id]; ?> navigation-block "> -->
      <?php
      //D7
      //$block = module_invoke('block', 'block_view', '91');
      //print render($block['content']);
      // $node = node_load(687506);
      // $content1 = $node->body['und'][0]['value'];
      // print render($content1);
      ?>
    <!-- </div> -->
  <?php endif; ?>
