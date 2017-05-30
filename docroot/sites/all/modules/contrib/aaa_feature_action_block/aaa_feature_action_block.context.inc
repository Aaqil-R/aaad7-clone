<?php
/**
 * @file
 * aaa_feature_action_block.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function aaa_feature_action_block_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'home_page_stream_block';
  $context->description = '';
  $context->tag = 'AAA_update';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        '<front>' => '<front>',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-card_stream-home_page' => array(
          'module' => 'views',
          'delta' => 'card_stream-home_page',
          'region' => 'content_bottom',
          'weight' => '-10',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('AAA_update');
  $export['home_page_stream_block'] = $context;

  return $export;
}
