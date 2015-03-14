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
    <?php // print $row; ?>   
    
    <?php if($myvar['variables']['view']->result[$id]->node_type == 'promo_block'): ?>
      <div class="block-image" style="background-image: url(<?php print file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_background_image[0]['raw']['filename'])); ?>);background-size:cover;">
				   <?php if ($myvar['variables']['view']->result[$id]->field_field_featured_image[0]['raw']['filename']) :?>
				   <img src="<?php print file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_featured_image[0]['raw']['filename'])); ?>" style="max-width:180px;" />
				   <?php endif; ?>
				    <?php $boxtitlesize = strlen($myvar['variables']['view']->result[$id]->field_field_tout_text[0]['raw']['value']); ?>
                 
				   <?php if( $boxtitlesize > 25): ?>
				   
					<strong class="title" style="font-size: 30px; line-height: normal; max-width: 220px;"> <?php print $myvar['variables']['view']->result[$id]->field_field_tout_text[0]['raw']['value']; ?></strong> <?php else: ?>
					<strong class="title"> <?php print $myvar['variables']['view']->result[$id]->field_field_tout_text[0]['raw']['value']; ?></strong>
					<?php endif; ?>
					<a href="#" class="btn btn-transparent" title="<?php print $myvar['variables']['view']->result[$id]->field_field_call_to_action_text[0]['raw']['safe_value'];?>" ><?php print $myvar['variables']['view']->result[$id]->field_field_call_to_action_text[0]['raw']['safe_value'];?> <em class="icon-Rightarrow"></em></a>
				</div>
    <?php endif; ?>
    
    
    
     <?php if($myvar['variables']['view']->result[$id]->node_type == 'core_action_block'): ?>
      <div class="block-image" style="background-image: url(<?php print file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_background_image[0]['raw']['filename'])); ?>);background-size:cover;">
				   <?php if ($myvar['variables']['view']->result[$id]->field_field_featured_image[0]['raw']['filename']) :?>
				   <img src="<?php print file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_featured_image[0]['raw']['filename'])); ?>" style="max-width:180px;" />
				   <?php endif; ?>
				    <?php $boxtitlesize = strlen($myvar['variables']['view']->result[$id]->field_field_block_tout_text[0]['raw']['safe_value']); ?>
                       
				   <?php if( $boxtitlesize > 25): ?>
				   
					<strong class="title" style="font-size: 30px; line-height: normal; max-width: 220px;"> <?php print $myvar['variables']['view']->result[$id]->field_field_block_tout_text[0]['raw']['safe_value']; ?></strong> <?php else: ?>
					<strong class="title"> <?php print $myvar['variables']['view']->result[$id]->field_field_tout_text[0]['raw']['value']; ?></strong>
					<?php endif; ?>
					<a href="#" class="btn btn-transparent" title="<?php print $myvar['variables']['view']->result[$id]->field_field_call_to_action_text[0]['raw']['safe_value'];?>" ><?php print $myvar['variables']['view']->result[$id]->field_field_call_to_action_text[0]['raw']['safe_value'];?> <em class="icon-Rightarrow"></em></a>
				</div>
    <?php endif; ?>
     
<?php endforeach; ?>




