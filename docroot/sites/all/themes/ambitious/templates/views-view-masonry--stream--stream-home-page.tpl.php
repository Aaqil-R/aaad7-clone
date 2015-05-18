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
	<?php if ($id == 0): ?>
		<div class="feature-row masonry-item<?php if ($classes_array[$id]) print ' ' . $classes_array[$id]; ?> js-stream-intro">
		<?php
			//D7
			$block = module_invoke('block', 'block_view', '46');
			print render($block['content']);
		?>
		</div>
	<?php endif; ?>
  	<div class="<?php if ($id < 3){ print 'feature-row '; } ?>masonry-item<?php if ($classes_array[$id]) print ' ' . $classes_array[$id]; ?>">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
