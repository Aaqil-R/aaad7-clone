<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */ 
 $myvar = get_defined_vars(); 
 dpm($myvar);
 
?>

<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?> 
<?php foreach ($rows as $id => $row): ?> 
    <?php print $row; ?>   
    
    <?php if($myvar['variables']['view']->result[$id]->node_type == 'promo_block'): ?>
      <div class="block-image" style="background-image: url(<?php print file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_background_image[0]['raw']['filename'])); ?>);background-size:cover;">
				   <img src="<?php print file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_featured_image[0]['raw']['filename'])); ?>" />
					<strong class="title">We’re <br> making an<br> impact.</strong>
					<a href="#" class="btn btn-transparent" title="See 2013/14 Impact Report">See 2013/14 Impact Report<em class="icon-Rightarrow"></em></a>
				</div>
    <?php endif; ?>
    
  </div> 
<?php endforeach; ?>




