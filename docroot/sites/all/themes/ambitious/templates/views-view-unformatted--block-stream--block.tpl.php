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
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
    <?php print $myvar['variables']['view']->result[$id]->field_field_background_image[0]['raw']['uri'];?> 
   
  </div>
<?php endforeach; ?>
