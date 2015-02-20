<?php
/**
 * @file
 * Default view template to display content in a Masonry layout.
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?> 
  	<div class="<?php if ($id < 3){ print 'feature-row '; } ?>masonry-item<?php if ($classes_array[$id]) print ' ' . $classes_array[$id]; ?>">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
