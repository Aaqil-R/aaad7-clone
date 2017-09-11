<?php
/**
 * @file
 * Default view template to display content in a Masonry layout.
 */
?>

<?php 
	$node = node_load(arg(1)); 
	if(isset($node->field_related_cards['und'])){
		$count = count($rows) - count($node->field_related_cards['und']);
	}
?>

<!-- Nodes Related articles -->
<?php foreach ($node->field_related_cards['und'] as $id => $row): ?>
	<?php 
		$url = 'node/'.(string)$row['node']->nid; 
		$img_url = file_create_url($row['node']->field_featured_image['und'][0]['uri'])
	?>
	<div class="masonry-item views-row post">
		<div class="views-field views-field-nothing">
			<span class="field-content">
				<div class="img-holder">
					<span class="icon-Playbutton video-icon"></span>
					<a href="#" class="feature-holder">
						<span class="icon-Featured"></span>
						<span class="text">Featured </span>
					</a>
					<a href="<?php print drupal_get_path_alias($url); ?>"><img typeof="foaf:Image" src="<?php print $img_url; ?>" alt=""></a>
				</div>
				<div class="info add">
					<h3>
						<a href="<?php print drupal_get_path_alias($url); ?>"><?php print $row['node']->title  ?></a>
					</h3>
				</div>
			</span>
		</div>
	</div>
<?php endforeach; ?>



<?php for ($i=0; $i < $count ; $i++) : ?>
	<div class="masonry-item<?php if ($classes_array[$i]) print ' ' . $classes_array[$i]; ?>">
		<?php print $rows[$i]; ?>
	</div>
<?php endfor; ?>
