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
	<?php if ($id == 0 && isset($variables['node'])):?>
		<div class="masonry-item views-row views-row-1 views-row-odd views-row-first text-block post masonry-brick ">
			<!-- Teaser View of the topic -->
			<?php if(isset($variables['node']->body['und'][0]['safe_value'])): ?>
				<?php print $variables['node']->body['und'][0]['safe_value']; ?>
			<?php endif; ?>
		</div>
			<!-- Teaser ends here -->
	<?php elseif($id == 7): ?>
		<div class="masonry-item views-row views-row-8 views-row-even views-row-last post-actions post masonry-brick">
			<?php
			//D7
			$block = module_invoke('block', 'block_view', '91');
			print render($block['content']);
			?>
		</div>
	<?php else: ?>
		<div class="masonry-item<?php if ($classes_array[$id]) print ' ' . $classes_array[$id]; ?>">
			<?php print $row; ?>
		</div>
	<?php endif; ?>
<?php endforeach; ?>
