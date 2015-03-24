<?php
/**
 * @file
 * promo_block.features.inc
 */

/**
 * Implements hook_node_info().
 */
function promo_block_node_info() {
  $items = array(
    'promo_block' => array(
      'name' => t('Promo Block'),
      'base' => 'node_content',
      'description' => t('Part of a suite of blocks to be available across the site; the purpose of the Core Action Block is cross-promoting content around the sites.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
