<?php
/**
 * @file
 * share_graphic_block.features.inc
 */

/**
 * Implements hook_node_info().
 */
function share_graphic_block_node_info() {
  $items = array(
    'share_graphic_block' => array(
      'name' => t('Share Graphic Block'),
      'base' => 'node_content',
      'description' => t('Part of a suite of blocks to be available across the site; the purpose of the Share Graphic Block is to be build easy shareable moments into the site itself.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
