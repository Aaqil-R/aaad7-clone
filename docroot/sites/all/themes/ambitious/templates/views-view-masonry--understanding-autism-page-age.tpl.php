<?php
/**
 * @file
 * Default view template to display content in a Masonry layout.
 */

// Variable
$last=count($rows) - 1;

?>

<?php if (!empty($title)): ?>
	<h3><?php print $title; ?></h3>
<?php endif; ?>

<?php foreach ($rows as $id => $row): ?>
	<?php render($row); ?>
	<?php if ($id == 0 && isset($variables['node'])):?>
		<div class="masonry-item views-row views-row-1 views-row-odd views-row-first text-block post masonry-brick ">
			<!-- Teaser View of the topic -->
			<?php if(isset($variables['node']->title)): ?>
        		<h1><?php print $variables['node']->title;?></h1>
      		<?php endif; ?>
			<?php if(isset($variables['node']->body['und'][0]['safe_value'])): ?>
				<?php print $variables['node']->body['und'][0]['safe_value']; ?>
			<?php endif; ?>
		</div>
			<!-- Teaser ends here -->
	<?php endif; ?>

		<div class="masonry-item<?php if ($classes_array[$id]) print ' ' . $classes_array[$id]; ?>">
			<?php print $row; ?>
		</div>

	<?php if($id == $last && $view->query->pager->current_page === 0): ?>
		<div class="masonry-item views-row views-row-even views-row-last post-my-voice-actions post masonry-brick">
			<?php
			//D7
			$block = module_invoke('block', 'block_view', '126');
			print render($block['content']);
			?>
		</div>
	<?php endif; ?>



<?php endforeach; ?>
