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
    <?php
      $node_type = $myvar['variables']['view']->result[$id]->node_type;
      $background = "style='background-image: url(".file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_background_image[0]['raw']['filename']))."); background-size:cover;'";
      $featured_image = $myvar['variables']['view']->result[$id]->field_field_featured_image[0]['raw']['filename'];
      $featured_image_url = file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_featured_image[0]['raw']['filename'])); 
      $action_text = $myvar['variables']['view']->result[$id]->field_field_call_to_action_text[0]['raw']['safe_value'];
      $share_graphic_type = $myvar['variables']['view']->result[$id]->field_field_type[0]['raw']['value'];
      $node_title = $myvar['variables']['view']->result[$id]->node_title; 
      $node_body = strip_tags($myvar['variables']['view']->result[$id]->field_body[0]['raw']['safe_value']); 
      ?> 
   <?php // Promo Block ?>
   <?php if($node_type == 'promo_block'): ?>
      <div class="block-image" <?=$background?>>
        <?php if ($featured_image) :?>
          <img src="<?= $featured_image_url?>" style="max-width:180px;" />
        <?php endif; ?>
        <?php $tout_text = $myvar['variables']['view']->result[$id]->field_field_tout_text[0]['raw']['value'];
              $boxtitlesize = strlen($tout_text); ?>
        <?php if( $boxtitlesize > 30): ?>				   
          <strong class="title" style="font-size: 30px; min-height:139px; line-height: normal; max-width: 241px;"> <?= $tout_text; ?></strong> <?php else: ?>
	     <strong class="title"> <?=$tout_text ?></strong>
        <?php endif; ?>
         <a href="#" class="btn btn-transparent" title="<?=$action_text ?>" ><?=$action_text ?><em class="icon-Rightarrow"></em></a>
       </div>
    <?php endif; ?> 
    <?php // Core Action Block ?>
     <?php if($node_type == 'core_action_block'): ?>
      <div class="block-symptoms" <?=$background?>>
        <?php if ($featured_image) :?>
          <img src="<?= $featured_image_url?>" style="max-width:180px;" />
        <?php endif; ?>
        <?php $tout_text = $myvar['variables']['view']->result[$id]->field_field_tout_text[0]['raw']['value'];
              $boxtitlesize = strlen($tout_text); ?>
        <?php if( $boxtitlesize > 22): ?>				   
          <strong class="text" style="font-size: 38px; max-width: 299px; line-height: normal; color: #fff;"> <?=$tout_text?></strong>
        <?php else: ?>
	     <strong class="text" style="margin-left:50px; min-height:201px;"><span><?=$tout_text?></span></strong>
        <?php endif; ?>
        <a href="#" class="btn btn-transparent" title="<?=$action_text ?>" ><?=$action_text ?><em class="icon-Rightarrow"></em></a>
      </div>
    <?php endif;?>
    <?php if($node_type == 'share_graphic_block'): ?>   
    <?php if($share_graphic_type == 'statement'):?> 
     <div class="block-vacancies" <?=$background?>>
       <?php if ($featured_image) :?>
         <img src="<?= $featured_image_url?>" style="max-width:180px;" />
       <?php endif; ?>
	  <strong class="title" style="font-size: 24px; line-height: normal;"><?=$node_body ?></strong>
	  <a href="#" class="btn btn-transparent" title="<?=$action_text ?>" ><?=$action_text ?><em class="icon-Rightarrow"></em></a>
     </div> 
    <?php elseif($share_graphic_type == 'quote'):?>
    <div class="block-vacancies" <?=$background?>>
       <?php if ($featured_image) :?>
         <img src="<?= $featured_image_url?>" style="margin-top: -20px; max-width:230px; margin-bottom: -40px; margin-right: -10px;" />
       <?php endif; ?>
       <strong class="title" style="min-height: 120px;">"<?=$node_title?>"</strong>
       <span style="display: block; min-height: 60px;"><?=$node_body ?></span>
       <a href="#" class="btn btn-transparent" title="<?=$action_text ?>" ><?=$action_text ?><em class="icon-Rightarrow"></em></a>
     </div>	 
     <?php else:?>
     <div class="block-share" <?=$background?>>
       <?php if ($featured_image) :?>
         <img src="<?= $featured_image_url?>" style="max-width:180px;" />
       <?php endif; ?>
       <a href="#" class="btn btn-transparent" title="<?=$action_text ?>" ><?=$action_text ?><em class="icon-Rightarrow"></em></a>
     </div> 	
    <?php endif; ?> 
    <?php endif; ?> 
<?php endforeach; ?>






