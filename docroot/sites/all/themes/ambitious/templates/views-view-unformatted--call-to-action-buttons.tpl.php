 <?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */ 
 $myvar = get_defined_vars();  
// dpm($myvar);
 
$btn_color = ' ';

 function pickColor($background_color) {
  
   switch ($background_color) {
          case "#0075C7":
             $btn_color = 'btn_navy_blue';
              break;

          case "#5BC5ED":
             $btn_color = 'btn_light_blue';
              break;

          case "#00A837":
             $btn_color = 'btn-green';
              break;

          case "#FBB900":
             $btn_color = 'btn_yellow';
              break;
              
          default:
            $btn_color = "btn_orange";
      }
  return $btn_color;
 }
?>


<?php foreach ($rows as $id => $row): ?> 
 
    <?php 
      $node_type = $myvar['variables']['view']->result[$id]->node_type;  

    if(isset($myvar['variables']['view']->result[$id]->field_field_button_color[0]))
        $background_color = $myvar['variables']['view']->result[$id]->field_field_button_color[0]['rendered']['#markup'];


      if(isset($myvar['variables']['view']->result[$id]->field_field_button_links[0]))
        $link = $myvar['variables']['view']->result[$id]->field_field_button_links[0]['raw']['url'];


      if(isset($myvar['variables']['view']->result[$id]->field_field_button_links[0]))
        $title = $myvar['variables']['view']->result[$id]->field_field_button_links[0]['raw']['title'];

     ?>

<div class="btn btn_default <?php print pickColor($background_color); ?>"> <a href="<?php print $link ?>"> <?php print $title ?></a></div>
<?php  $background_color = ' '; ?>

<?php endforeach; ?>
 


