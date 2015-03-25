<?php
/**
 * @file
 * take_action.features.inc
 */

/**
 * Implements hook_node_info().
 */
function take_action_node_info() {
  $items = array(
    'take_action' => array(
      'name' => t('Take Action'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
