<?php
/**
 * @file
 * aaa_call_to_action_buttons.features.inc
 */

/**
 * Implements hook_views_api().
 */
function aaa_call_to_action_buttons_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function aaa_call_to_action_buttons_node_info() {
  $items = array(
    'call_to_action_button' => array(
      'name' => t('call to action button'),
      'base' => 'node_content',
      'description' => t('This buttons will be displayed on the home page call to action button section.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
