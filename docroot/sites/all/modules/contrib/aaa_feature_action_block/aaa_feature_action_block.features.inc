<?php
/**
 * @file
 * aaa_feature_action_block.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function aaa_feature_action_block_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
}

/**
 * Implements hook_views_api().
 */
function aaa_feature_action_block_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function aaa_feature_action_block_node_info() {
  $items = array(
    'feature_action_block' => array(
      'name' => t('Feature action block'),
      'base' => 'node_content',
      'description' => t('The text will be displayed on the Home page featured action block sections.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
