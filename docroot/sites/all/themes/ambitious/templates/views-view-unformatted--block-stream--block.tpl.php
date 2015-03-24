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
      $featured_image = $myvar['variables']['view']->result[$id]->field_field_featured_image[0]['raw']['filename'];
      $featured_image_url = file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_featured_image[0]['raw']['filename'])); 
      $background_color = $myvar['variables']['view']->result[$id]->field_field_background_colour[0]['rendered']['#markup'];
      $background = "style='background-image: url(".file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_background_image[0]['raw']['filename']))."); background-size:cover; background-color:$background_color;'";    
      $action_text = $myvar['variables']['view']->result[$id]->field_field_call_to_action_text[0]['raw']['safe_value'];
      $share_graphic_type = $myvar['variables']['view']->result[$id]->field_field_type[0]['raw']['value'];
      $node_title = $myvar['variables']['view']->result[$id]->node_title; 
      $node_body = strip_tags($myvar['variables']['view']->result[$id]->field_body[0]['raw']['safe_value']); 
      $block_tout_text =  $myvar['variables']['view']->result[$id]->field_field_block_tout_text[0]['raw']['value'];
      $tout_text = $myvar['variables']['view']->result[$id]->field_field_tout_text[0]['raw']['value'];
      $font_size = $myvar['variables']['view']->result[$id]->field_field_font_size[0]['raw']['value'];
      $title_second = $myvar['variables']['view']->result[$id]->field_title_second[0]['raw']['value'];
      $nid = $myvar['variables']['view']->result[$id]->nid;
      $nodeid = node_load($myvar['variables']['view']->result[$id]->nid);
      $links = sharethis_node_view($nodeid, 'full', 'en');  
      $action_link = $myvar['variables']['view']->result[$id]->field_field_link[0]['raw']['display_url'];
   ?> 
   <?php // Promo Block ?>
   <?php if($node_type == 'promo_block'): ?>
      <div class="block_main" <?=$background?>>
        <div class="block-image promo_block node-<?=$nid?>" >
        <?php $boxtitlesize = strlen($tout_text); ?>
        <?php if( $font_size == 'large'): ?>				  
         <?php if ($featured_image) :?>
          <img src="<?= $featured_image_url?>" class="action_image"/>
        <?php endif; ?> 
          <strong class="title text1"> <?=$block_tout_text?></strong> <?php elseif( $font_size == 'small'): ?>	
           <?php if ($featured_image) :?>
          <img src="<?= $featured_image_url?>" class="action_image2"/>
        <?php endif; ?>
	     <strong class="title text2"> <?=$block_tout_text?></strong>
        <?php endif; ?>
         <a href="<?=$action_link?>" class="btn btn-transparent" onmouseover="this.style.background = '<?=$background_color?>'" onmouseout="this.style.background = 'none'" title="<?=$action_text ?>" ><?=$action_text ?><em class="icon-Rightarrow"></em></a>
       </div>
       </div>
    <?php endif; ?> 
    <?php // Core Action Block ?> 
     <?php if($node_type == 'core_action_block'): ?>
      <div class="block_main" <?=$background?>>
        <div class="block-symptoms core_action_block node-<?=$nid?>" >
        <?php if ($featured_image) :?>
          <img src="<?= $featured_image_url?>" class="action_image" />
        <?php endif; ?>
        <?php if( $font_size == 'large'): ?>				   
          <strong class="text text1"> <?=$block_tout_text?></strong>
        <?php elseif( $font_size == 'small'): ?>	
	     <strong class="text text2"><span><?=$block_tout_text?></span></strong>
        <?php endif; ?>
        <a href="<?=$action_link?>" onmouseover="this.style.background = '<?=$background_color?>'" onmouseout="this.style.background = 'none'" class="btn btn-transparent" title="<?=$action_text ?>" ><?=$action_text ?>
           <?php if ($nid==74756):?>
           <em class="icon-Twitter"></em>
           <?php elseif($nid==74751):?>
           <em class="icon-Facebook"></em>
           <?php else:?>
           <em class="icon-Rightarrow"></em>
           <?php endif; ?>
        </a>
        </div>
      </div>
    <?php endif;?>
    <?php if($node_type == 'share_graphic_block'): ?>   
    <?php if($share_graphic_type == 'statement'):?> 
     <div class="block_main" <?=$background?>>
       <div class="block-vacancies share_graphic_block statement node-<?=$nid?>" >
       <?php if ($featured_image) :?>
         <img src="<?= $featured_image_url?>" class="share_image" />
       <?php endif; ?>
	  <strong class="title text1"><?=$block_tout_text?></strong>
	  <div class="share1"><?php print $nodeid->content['sharethis']['#value']; ?></div>
     </div> 
     </div> 
    <?php elseif($share_graphic_type == 'quote'):?>
    <div class="block_main" <?=$background?>>
       <div  class="block-vacancies share_graphic_block quotes node-<?=$nid?>" > 
       <?php if ($featured_image) :?>
         <img src="<?= $featured_image_url?>" class="quote_image" />
       <?php endif; ?>
       <strong class="title text2" >"<?=$block_tout_text?>"</strong>
       <span class="text3"><?=$node_body ?></span>
        <div class="share2"><?php print $nodeid->content['sharethis']['#value']; ?></div>
       </div>
     </div>	 
     <?php else:?>
     <div class="block_main" <?=$background?>>
     <div class="block-share share_graphic_block image node-<?=$nid?>" >
       <div class="text1">
       <?php if ($featured_image) :?>
         <img src="<?= $featured_image_url?>" />
       <?php endif; ?>       
       <?php print $nodeid->content['sharethis']['#value']; ?>
       </div> 
     </div> 
     </div> 	
    <?php endif; ?>  
    <?php endif; ?> 
<?php endforeach; ?>
 


