<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php 

$values = explode('^.^', $output); 
// dpm($values);

  $title = $values[3];
  $image = $values[0];
  $font_color = $values[1];
  $description = $values[2];
  $link = $values[4];
?>

<?php 
print "<section class='article'>";
print "<div class='img-holder'>$image";
print "</div>";
print "<h4><a style='color:$font_color !important;' href='$link'>$title</a></h4>";
print "<p>$description</p>";
print "</section>";
?>