<?php
function ds_event_col() {
  return array(
    'label' => t('Events list Column'),
    'regions' => array(
      'image' => t('Image'),
      'text' => t('Text'),
      'place' => t('Place'),
      'date' => t('Date'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}
