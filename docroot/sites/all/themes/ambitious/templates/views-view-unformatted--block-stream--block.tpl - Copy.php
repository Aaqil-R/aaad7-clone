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
      
      //Issue fix
      if(isset($myvar['variables']['view']->result[$id]->field_field_featured_image[0]))
        $featured_image = $myvar['variables']['view']->result[$id]->field_field_featured_image[0]['raw']['filename'];
      else
        $featured_image = FALSE;
      
      //Issue fix
      if(isset($myvar['variables']['view']->result[$id]->field_field_featured_image[0]))
        $featured_image_url = file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_featured_image[0]['raw']['filename'])); 
      
      if(isset($myvar['variables']['view']->result[$id]->field_field_background_colour[0]))
        $background_color = $myvar['variables']['view']->result[$id]->field_field_background_colour[0]['rendered']['#markup'];
      else 
        $background_color = '';
      
      $background = "style='background-image: url(".file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_background_image[0]['raw']['filename']))."); background-size:cover; background-color:$background_color;'";    
      
      //Issue fix
      if(isset($myvar['variables']['view']->result[$id]->field_field_call_to_action_text[0]))
        $action_text = $myvar['variables']['view']->result[$id]->field_field_call_to_action_text[0]['raw']['safe_value'];
      
      //Issue fix
      if(isset($myvar['variables']['view']->result[$id]->field_field_type[0]))
        $share_graphic_type = $myvar['variables']['view']->result[$id]->field_field_type[0]['raw']['value'];
      else 
        $share_graphic_type = '';
        
      $node_title = $myvar['variables']['view']->result[$id]->node_title; 
      
      //Issue fix
      if(isset($myvar['variables']['view']->result[$id]->field_body[0]))
        $node_body = strip_tags($myvar['variables']['view']->result[$id]->field_body[0]['raw']['safe_value']); 
      
      //Issue fix
      if(isset($myvar['variables']['view']->result[$id]->field_field_block_tout_text[0]))
        $block_tout_text =  $myvar['variables']['view']->result[$id]->field_field_block_tout_text[0]['raw']['value'];
      
      //Issue fix
      if(isset($myvar['variables']['view']->result[$id]->field_field_tout_text))
        $tout_text = $myvar['variables']['view']->result[$id]->field_field_tout_text[0]['raw']['value'];
      else 
        $tout_text = '';
      
      //Issue fix
      if(isset($myvar['variables']['view']->result[$id]->field_field_font_size[0]))  
        $font_size = $myvar['variables']['view']->result[$id]->field_field_font_size[0]['raw']['value'];
      
      //Issue fix
      if(isset($myvar['variables']['view']->result[$id]->field_title_second))
        $title_second = $myvar['variables']['view']->result[$id]->field_title_second[0]['raw']['value'];
      
      $nid = $myvar['variables']['view']->result[$id]->nid;
      $nodeid = node_load($myvar['variables']['view']->result[$id]->nid);
      $links = sharethis_node_view($nodeid, 'full', 'en');  
      
      if(isset($myvar['variables']['view']->result[$id]->field_field_link[0]))
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

     <?php if($node_type == 'schools_blocks'): ?>
      <div class="block_main" <?=$background?>>
        <div class="block-image promo_block node-<?=$nid?>" >
        <?php $boxtitlesize = strlen($tout_text); ?>  
           <?php if ($featured_image) :?>
          <img src="<?= $featured_image_url?>" class="action_image2"/>
        <?php endif; ?>
	     <strong class="title text2"> <?=$block_tout_text?></strong> 
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
	  <div class="share1"><div class="btn btn-transparent my_share" style="padding:0;" onmouseover="this.style.background = '<?=$background_color?>'" onmouseout="this.style.background = 'none'"><?php print $nodeid->content['sharethis']['#value']; ?></div></div>
     </div> 
     </div> 
    <?php elseif($share_graphic_type == 'quote'):?>
    <div class="block_main" <?=$background?>>
       <div  class="block-vacancies share_graphic_block quotes node-<?=$nid?>" > 
       <?php if ($featured_image) :?>
         <img src="<?= $featured_image_url?>" class="quote_image" />
       <?php endif; ?>
       <strong class="title text2" ><span>"</span><?=$block_tout_text?><span>"</span></strong>
       <span class="text3"><?=$node_body ?></span>
        <div class="share2"><div class="btn btn-transparent my_share" style="padding:0;" onmouseover="this.style.background = '<?=$background_color?>'" onmouseout="this.style.background = 'none'"><?php print $nodeid->content['sharethis']['#value']; ?></div></div>
       </div>
     </div>	 
     <?php else:?>
     <div class="block_main" <?=$background?>>
     <div class="block-share share_graphic_block image node-<?=$nid?>" >
       <div class="text1">
       <?php if ($featured_image) :?>
         <img src="<?= $featured_image_url?>" />
       <?php endif; ?> 
       <div class="btn btn-transparent my_share" style="padding:0;" onmouseover="this.style.background = '<?=$background_color?>'" onmouseout="this.style.background = 'none'">      
       <?php print $nodeid->content['sharethis']['#value']; ?>
       </div>
       </div> 
     </div> 
     </div> 	
    <?php endif; ?>  
    <?php endif; ?> 
<?php endforeach; ?>
 


