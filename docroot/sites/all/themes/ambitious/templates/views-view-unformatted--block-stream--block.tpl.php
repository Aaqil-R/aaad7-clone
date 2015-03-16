<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */ 
 $myvar = get_defined_vars();  
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
                 
				   <?php if( $boxtitlesize > 30): ?>
				   
					<strong class="title" style="font-size: 30px; min-height:139px; line-height: normal; max-width: 241px;"> <?php print $myvar['variables']['view']->result[$id]->field_field_tout_text[0]['raw']['value']; ?></strong> <?php else: ?>
					<strong class="title"> <?php print $myvar['variables']['view']->result[$id]->field_field_tout_text[0]['raw']['value']; ?></strong>
					<?php endif; ?>
					<a href="#" class="btn btn-transparent" title="<?php print $myvar['variables']['view']->result[$id]->field_field_call_to_action_text[0]['raw']['safe_value'];?>" ><?php print $myvar['variables']['view']->result[$id]->field_field_call_to_action_text[0]['raw']['safe_value'];?> <em class="icon-Rightarrow"></em></a>
				</div>
    <?php endif; ?>
    
    
    
     <?php if($myvar['variables']['view']->result[$id]->node_type == 'core_action_block'): ?>
      <div class="block-symptoms" style="background-image: url(<?php print file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_background_image[0]['raw']['filename'])); ?>);background-size:cover;">
				   <?php if ($myvar['variables']['view']->result[$id]->field_field_featured_image[0]['raw']['filename']) :?>
				   <img src="<?php print file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_featured_image[0]['raw']['filename'])); ?>" style="max-width:180px;" />
				   <?php endif; ?>
				    <?php $boxtitlesize = strlen($myvar['variables']['view']->result[$id]->field_field_block_tout_text[0]['raw']['safe_value']); ?> 
				   <?php if( $boxtitlesize > 22): ?>				   
					<strong class="text" style="font-size: 38px; max-width: 299px; line-height: normal; color: #fff;"> <?php print $myvar['variables']['view']->result[$id]->field_field_block_tout_text[0]['raw']['safe_value']; ?></strong> <?php else: ?>
					<strong class="text" style="margin-left:50px;"><span> <?php print $myvar['variables']['view']->result[$id]->field_field_block_tout_text[0]['raw']['value']; ?></span></strong>
					<?php endif; ?>
					<a href="#" class="btn btn-transparent" title="<?php print $myvar['variables']['view']->result[$id]->field_field_call_to_action_text[0]['raw']['safe_value'];?>" ><?php print $myvar['variables']['view']->result[$id]->field_field_call_to_action_text[0]['raw']['safe_value'];?> <em class="icon-Rightarrow"></em></a>
				</div>
    <?php endif; ?>
    <?php if($myvar['variables']['view']->result[$id]->node_type == 'share_graphic_block'): ?>
    <?php if($myvar['variables']['view']->result[$id]->field_field_share_grapic[0]['raw']['value'] == 'image'):?>
    <div class="block-share" style="background-image: url(<?php print file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_background_image[0]['raw']['filename'])); ?>);background-size:cover;">
                    <img src="<?php print file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_featured_image[0]['raw']['filename'])); ?>" alt="image text">
					<a href="#" title="<?php print $myvar['variables']['view']->result[$id]->field_field_call_to_action_text[0]['raw']['safe_value']?>" class="btn btn-transparent"><?php print $myvar['variables']['view']->result[$id]->field_field_call_to_action_text[0]['raw']['safe_value']?><em class="icon-Rightarrow"></em></a>
				</div>
				
				
    <?php endif; ?> 
    <?php if($myvar['variables']['view']->result[$id]->field_field_share_grapic[0]['raw']['value'] == 'righttext'):?>
    <div class="block-vacancies" style="background-image: url(<?php print file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_background_image[0]['raw']['filename'])); ?>);background-size:cover;">
				    <img src="<?php print file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_featured_image[0]['raw']['filename'])); ?>" alt="image text">
					<strong class="title">Can you help <br>make the <br>ordinary <br> possible?</strong>
					<a href="#" title="See current vacancies" class="btn btn-transparent">See current vacancies<em class="icon-Rightarrow"></em></a>
				</div>
    <?php endif; ?>
    <?php if($myvar['variables']['view']->result[$id]->field_field_share_grapic[0]['raw']['value'] == 'lefttext'):?>
    <div class="block-vacancies" style="background-image: url(<?php print file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_background_image[0]['raw']['filename'])); ?>);background-size:cover;">
				    <img src="<?php print file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_featured_image[0]['raw']['filename'])); ?>" alt="image text">
					<strong class="title">Can you help <br>make the <br>ordinary <br> possible?</strong>
					<a href="#" title="See current vacancies" class="btn btn-transparent">See current vacancies<em class="icon-Rightarrow"></em></a>
				</div>	
    <?php endif; ?>
    <?php endif; ?> 
<?php endforeach; ?>






