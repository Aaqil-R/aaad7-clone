<?php
/**
 * @file
 * core_action_block.features.inc
 */

/**
 * Implements hook_node_info().
 */
function core_action_block_node_info() {
  $items = array(
    'core_action_block' => array(
      'name' => t('Core Action Block'),
      'base' => 'node_content',
      'description' => t('Part of a suite of blocks to be available across the site; the purpose of the Core Action Block is to be to always be driving towards actions.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
