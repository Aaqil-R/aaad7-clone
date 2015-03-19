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
      $block_tout_text =  $myvar['variables']['view']->result[$id]->field_field_block_tout_text[0]['raw']['value'];
      $tout_text = $myvar['variables']['view']->result[$id]->field_field_tout_text[0]['raw']['value'];
      $font_size = $myvar['variables']['view']->result[$id]->field_field_font_size[0]['raw']['value'];
      $title_second = $myvar['variables']['view']->result[$id]->field_title_second[0]['raw']['value'];
      
     
        $nodeid = node_load($myvar['variables']['view']->result[$id]->nid);
        $links = sharethis_node_view($nodeid, 'full', 'en');
         
       
      ?> 
   <?php // Promo Block ?>
   <?php if($node_type == 'promo_block'): ?>
      <div class="block-image" <?=$background?>>
        <?php if ($featured_image) :?>
          <img src="<?= $featured_image_url?>" style="max-width:180px;" />
        <?php endif; ?>
        <?php $boxtitlesize = strlen($tout_text); ?>
        <?php if( $boxtitlesize > 30): ?>				   
          <strong class="title" style="font-size: 30px; min-height:181px; line-height: normal; max-width: 241px;"> <?= $tout_text; ?></strong> <?php else: ?>
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
        <?php if( $font_size == 'small'): ?>				   
          <strong class="text" style="font-size: 40px; max-width: 259px; min-height:200px; line-height: normal; color: #fff;"> <?=$block_tout_text?></strong>
        <?php elseif( $font_size == 'large'): ?>	
	     <strong class="text" style="margin-left:50px; min-height:201px;"><span><?=$block_tout_text?></span><span><?=$title_second ?></span></strong>
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
	  <strong class="title" style="font-size: 24px; min-height:181px; line-height: normal;"><?=$node_body ?></strong>
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
       <div style="min-height:350px;">
       <?php if ($featured_image) :?>
         <img src="<?= $featured_image_url?>" style="max-width:250px;" />
       <?php endif; ?>       
       <?php print $nodeid->content['sharethis']['#value']; ?>
       </div>
       
     </div> 	
    <?php endif; ?> 
    <?php endif; ?> 
<?php endforeach; ?>

<style>
.st_sharethis_button .stButton{
  background: none;
-webkit-box-shadow: none;
box-shadow: none;
border: 3px solid #ffffff;
padding:10px 73px 10px 25px;
}
.st_sharethis_button .stButton:before{
  content: "\e60b";
  margin-right: -49px;
}
.st_sharethis_button .stButton:hover:before{
  margin:0 3px;
  margin-right: -49px;
}
</style>




