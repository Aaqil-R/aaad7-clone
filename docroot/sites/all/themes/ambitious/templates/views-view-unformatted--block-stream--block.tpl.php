<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
 dpm(get_defined_vars());
 $myvar = get_defined_vars();
 
?>

<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
 
<section class="action-block ">
<div class="holder">
<div class="region">
<div class="block-main">
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?> style="background-image: url(<?php print file_create_url(file_build_uri($myvar['variables']['view']->result[$id]->field_field_background_image[0]['raw']['filename'])); ?>)">
    <?php print $row; ?>   
  </div>
 
<?php endforeach; ?>
 </div>
   </div>
</section> 
