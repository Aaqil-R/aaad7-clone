 <?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */ 
 $myvar = get_defined_vars();  
  // dpm($myvar);
?>


<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?> 
<?php foreach ($rows as $id => $row): ?> 
    <?php // print $row; ?> 
    <?php 
      $node_type = $myvar['variables']['view']->result[$id]->node_type;  

      //Issue fix
      if(isset($myvar['variables']['view']->result[$id]->field_field_feature_image[0]))
        $featured_image = $myvar['variables']['view']->result[$id]->field_field_feature_image[0]['raw']['filename'];        
      else
        $featured_image = FALSE;
    
      //Issue fix
      if(isset($myvar['variables']['view']->result[$id]->field_field_feature_image[0]))
        $featured_image_url = file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_feature_image[0]['raw']['filename'])); 
      
      if(isset($myvar['variables']['view']->result[$id]->field_field_feature_colour[0]))
        $background_color = $myvar['variables']['view']->result[$id]->field_field_feature_colour[0]['rendered']['#markup'];
      else 
        $background_color = '';

      if(isset($myvar['variables']['view']->result[$id]->field_field_feature_tout_text_font_col[0]))
        $tout_text_color = $myvar['variables']['view']->result[$id]->field_field_feature_tout_text_font_col[0]['rendered']['#markup'];
      else 
        $tout_text_color = '';
      
      
      // dpm($background_color);
      if(isset($myvar['variables']['view']->result[$id]->field_field_feature_image[0]['raw']['filename']))
      $background = "style='background-image: url(".file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_feature_image[0]['raw']['filename']))."); background-size:cover; background-color:$background_color;'";
      else 
        $background = '';    
      
      //Issue fix
     /* if(isset($myvar['variables']['view']->result[$id]->field_field_feature_call_to_action_tex[0]))
        $action_text = $myvar['variables']['view']->result[$id]->field_field_feature_call_to_action_tex[0]['raw']['safe_value'];*/

      /*if(isset($myvar['variables']['view']->result[$id]->field_field_call_to_action_text_second[0]))
        $action_text_second = $myvar['variables']['view']->result[$id]->field_field_call_to_action_text_second[0]['raw']['safe_value'];

      if(isset($myvar['variables']['view']->result[$id]->field_field_call_to_action_text_third[0]))
        $action_text_third = $myvar['variables']['view']->result[$id]->field_field_call_to_action_text_third[0]['raw']['safe_value'];*/
      
      //Issue fix
      if(isset($myvar['variables']['view']->result[$id]->field_field_type[0]))
        $share_graphic_type = $myvar['variables']['view']->result[$id]->field_field_type[0]['raw']['value'];
      else 
        $share_graphic_type = '';
        
      $node_title = $myvar['variables']['view']->result[$id]->node_title; 
      
      //Issue fix
     /* if(isset($myvar['variables']['view']->result[$id]->field_body[0]))
        $node_body = strip_tags($myvar['variables']['view']->result[$id]->field_body[0]['raw']['safe_value']); */
      
      //Issue fix
     /*if(isset($myvar['variables']['view']->result[$id]->field_field_feature_tout_text[0]))
        $block_tout_text =  $myvar['variables']['view']->result[$id]->field_field_feature_tout_text[0]['raw']['value'];*/

      if(isset($myvar['variables']['view']->result[$id]->field_field_body[0]))
        $body =  $myvar['variables']['view']->result[$id]->field_field_body[0]['raw']['value'];

      //Issue fix
      if(isset($myvar['variables']['view']->result[$id]->field_field_feature_tout_text))
        $tout_text = $myvar['variables']['view']->result[$id]->field_field_feature_tout_text[0]['raw']['value'];
      else 
        $tout_text = '';
      
      //Issue fix
      if(isset($myvar['variables']['view']->result[$id]->field_field_font__size[0]))  
        $font_size = $myvar['variables']['view']->result[$id]->field_field_font__size[0]['raw']['value'];
      
      //Issue fix
      if(isset($myvar['variables']['view']->result[$id]->field_title_second))
        $title_second = $myvar['variables']['view']->result[$id]->field_title_second[0]['raw']['value'];
      
      $nid = $myvar['variables']['view']->result[$id]->nid;
      $nodeid = node_load($myvar['variables']['view']->result[$id]->nid);
      $links = sharethis_node_view($nodeid, 'full', 'en');

      /*if(isset($myvar['variables']['view']->result[$id]->field_field_call_to_action_link_second[0]))
        $action_link_second = $myvar['variables']['view']->result[$id]->field_field_call_to_action_link_second[0]['raw']['display_url'];

      if(isset($myvar['variables']['view']->result[$id]->field_field_call_to_action_link_third[0]))
        $action_link_third = $myvar['variables']['view']->result[$id]->field_field_call_to_action_link_third[0]['raw']['display_url'];*/

      //feature description coloums 
       if(isset($myvar['variables']['view']->result[$id]->field_field_description_cloums))
        $description_cloums = $myvar['variables']['view']->result[$id]->field_field_description_cloums[0]['raw']['value'];
      else 
        $description_cloums = '';

      if(isset($myvar['variables']['view']->result[$id]->field_field_call_to_action__text[0]))
        $action_text = $myvar['variables']['view']->result[$id]->field_field_call_to_action__text[0]['raw']['value'];

      if(isset($myvar['variables']['view']->result[$id]->field_field___feature_link[0]))
        $action_link = $myvar['variables']['view']->result[$id]->field_field___feature_link[0]['raw']['url'];



      if(isset($myvar['variables']['view']->result[$id]->field_field_call_to_action_text_second[0]))
        $action_text_second = $myvar['variables']['view']->result[$id]->field_field_call_to_action_text_second[0]['raw']['value'];


      if(isset($myvar['variables']['view']->result[$id]->field_field_call_to_action_link_second[0]))
        $action_link_second = $myvar['variables']['view']->result[$id]->field_field_call_to_action_link_second[0]['raw']['url'];

      if(isset($myvar['variables']['view']->result[$id]->field_field_call_to_action_text_third[0]))
        $action_text_third = $myvar['variables']['view']->result[$id]->field_field_call_to_action_text_third[0]['raw']['value'];

      if(isset($myvar['variables']['view']->result[$id]->field_field_call_to_action_link_third[0]))
        $action_link_third = $myvar['variables']['view']->result[$id]->field_field_call_to_action_link_third[0]['raw']['url'];


   ?> 

      <div class="block_main_feature" <?=$background?>>
        <div class="block-image promo_block node-<?=$nid?>" >      

         <?php if( $font_size == 'large'): ?>          
          <strong style="color:<?php print $tout_text_color?> ; " class="text text1"> <?=$tout_text?></strong>
        <?php elseif( $font_size == 'small'): ?>  
       <strong style="color:<?php print $tout_text_color?> ; " class="text text2"><span><?=$tout_text?></span></strong>
        <?php endif; ?>

        
        <div class="feature-block-wrapper">
        <?php print $body  ?>

      <?php if(!empty($action_link )) : ?>
         <a href="<?=$action_link?>" class="btn btn-transparent" onmouseover="this.style.background = '<?=$background_color?>'" onmouseout="this.style.background = 'none'" title="<?=$action_text ?>" ><?=$action_text ?><em class="icon-Rightarrow"></em></a>
      <?php endif; ?>

      <?php if(!empty($action_link_second )) : ?> 
         <a href="<?=$action_link_second?>" class="btn btn-transparent" onmouseover="this.style.background = '<?=$background_color?>'" onmouseout="this.style.background = 'none'" title="<?=$action_text_second ?>" ><?=$action_text_second ?><em class="icon-Rightarrow"></em></a>
      <?php endif; ?>

      <?php if(!empty($action_link_third )) : ?>
         <a href="<?=$action_link_third?>" class="btn btn-transparent" onmouseover="this.style.background = '<?=$background_color?>'" onmouseout="this.style.background = 'none'" title="<?=$action_text_third ?>" ><?=$action_text_third ?><em class="icon-Rightarrow"></em></a>
      <?php endif; ?>
    
       </div>

        

       </div>
       </div>



<?php endforeach; ?>
 


