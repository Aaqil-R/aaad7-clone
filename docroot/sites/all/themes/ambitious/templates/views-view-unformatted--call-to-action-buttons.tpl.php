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


<?php foreach ($rows as $id => $row): ?> 
 
    <?php 
      $node_type = $myvar['variables']['view']->result[$id]->node_type;  


      if(isset($myvar['variables']['view']->result[$id]->field_field_button_color[0]))
        $background_color = $myvar['variables']['view']->result[$id]->field_field_button_color[0]['rendered']['#markup'];
      else 
        $background_color = '';

    	if(isset($myvar['variables']['view']->result[$id]->field_field_button_links[0]))
        $link = $myvar['variables']['view']->result[$id]->field_field_button_links[0]['raw']['url'];

    if(isset($myvar['variables']['view']->result[$id]->field_field_button_links[0]))
        $title = $myvar['variables']['view']->result[$id]->field_field_button_links[0]['raw']['title'];
     ?>

<div style="background:<?php print $background_color?>; box-shadow:0px 5px rgba(0, 0, 0, 0.8) !important;" class="btn cta-button"> <a href="<?php print $link ?>"> <?php print $title ?></a></div>

<?php endforeach; ?>
 


