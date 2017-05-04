<?php
/**
 * @file
 * aaa_feature_action_block.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function aaa_feature_action_block_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'block_stream';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Block Stream';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Master';
  $handler->display->display_options['css_class'] = 'ambitious-block-system';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '2';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['row_class'] = 'ambitious-block-element [type]';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Content: Tout text */
  $handler->display->display_options['fields']['field_block_tout_text']['id'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['table'] = 'field_data_field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['field'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['label'] = '';
  $handler->display->display_options['fields']['field_block_tout_text']['element_label_colon'] = FALSE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'node';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  $handler->display->display_options['fields']['type']['label'] = '';
  $handler->display->display_options['fields']['type']['element_label_colon'] = FALSE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['field_type']['id'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['table'] = 'field_data_field_type';
  $handler->display->display_options['fields']['field_type']['field'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['label'] = '';
  $handler->display->display_options['fields']['field_type']['element_label_colon'] = FALSE;
  /* Field: Content: Background colour */
  $handler->display->display_options['fields']['field_background_colour']['id'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['table'] = 'field_data_field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['field'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['label'] = '';
  $handler->display->display_options['fields']['field_background_colour']['element_label_colon'] = FALSE;
  /* Field: Content: Background image */
  $handler->display->display_options['fields']['field_background_image']['id'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['table'] = 'field_data_field_background_image';
  $handler->display->display_options['fields']['field_background_image']['field'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['label'] = '';
  $handler->display->display_options['fields']['field_background_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_background_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_background_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  /* Field: Content: Call to action text */
  $handler->display->display_options['fields']['field_call_to_action_text']['id'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['table'] = 'field_data_field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['field'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_label_colon'] = FALSE;
  /* Field: Content: Featured Image Pic */
  $handler->display->display_options['fields']['field_featured_image']['id'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['table'] = 'field_data_field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['field'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['label'] = '';
  $handler->display->display_options['fields']['field_featured_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_featured_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Featured Image Pic */
  $handler->display->display_options['fields']['field_featured_image_1']['id'] = 'field_featured_image_1';
  $handler->display->display_options['fields']['field_featured_image_1']['table'] = 'field_data_field_featured_image';
  $handler->display->display_options['fields']['field_featured_image_1']['field'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image_1']['label'] = '';
  $handler->display->display_options['fields']['field_featured_image_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image_1']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_featured_image_1']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Font size */
  $handler->display->display_options['fields']['field_font_size']['id'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['table'] = 'field_data_field_font_size';
  $handler->display->display_options['fields']['field_font_size']['field'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['label'] = '';
  $handler->display->display_options['fields']['field_font_size']['element_label_colon'] = FALSE;
  /* Field: Content: Navigation */
  $handler->display->display_options['fields']['field_link']['id'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['table'] = 'field_data_field_link';
  $handler->display->display_options['fields']['field_link']['field'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['label'] = '';
  $handler->display->display_options['fields']['field_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_link']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_link']['type'] = 'link_absolute';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title_1']['id'] = 'title_1';
  $handler->display->display_options['fields']['title_1']['table'] = 'node';
  $handler->display->display_options['fields']['title_1']['field'] = 'title';
  $handler->display->display_options['fields']['title_1']['label'] = '';
  $handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'core_action_block' => 'core_action_block',
    'promo_block' => 'promo_block',
    'schools_blocks' => 'schools_blocks',
    'share_graphic_block' => 'share_graphic_block',
  );

  /* Display: Master */
  $handler = $view->new_display('block', 'Master', 'block');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'node';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  $handler->display->display_options['fields']['type']['label'] = '';
  $handler->display->display_options['fields']['type']['exclude'] = TRUE;
  $handler->display->display_options['fields']['type']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['type']['machine_name'] = TRUE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Featured Image Pic */
  $handler->display->display_options['fields']['field_featured_image']['id'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['table'] = 'field_data_field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['field'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['label'] = '';
  $handler->display->display_options['fields']['field_featured_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['field_featured_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_featured_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Call to action text */
  $handler->display->display_options['fields']['field_call_to_action_text']['id'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['table'] = 'field_data_field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['field'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_text']['alter']['text'] = '<a class="btn btn-transparent">[field_call_to_action_text]</a>';
  $handler->display->display_options['fields']['field_call_to_action_text']['alter']['path'] = '/';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_call_to_action_text']['element_wrapper_type'] = 'div';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_wrapper_class'] = 'btn btn-transparent';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_default_classes'] = FALSE;
  /* Field: Content: Background colour */
  $handler->display->display_options['fields']['field_background_colour']['id'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['table'] = 'field_data_field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['field'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['label'] = '';
  $handler->display->display_options['fields']['field_background_colour']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_colour']['element_label_colon'] = FALSE;
  /* Field: Content: Background image */
  $handler->display->display_options['fields']['field_background_image']['id'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['table'] = 'field_data_field_background_image';
  $handler->display->display_options['fields']['field_background_image']['field'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['label'] = '';
  $handler->display->display_options['fields']['field_background_image']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_background_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_background_image']['type'] = 'image_url';
  $handler->display->display_options['fields']['field_background_image']['settings'] = array(
    'url_type' => '2',
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Tout text */
  $handler->display->display_options['fields']['field_block_tout_text']['id'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['table'] = 'field_data_field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['field'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['label'] = '';
  $handler->display->display_options['fields']['field_block_tout_text']['element_label_colon'] = FALSE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['field_type']['id'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['table'] = 'field_data_field_type';
  $handler->display->display_options['fields']['field_type']['field'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['label'] = '';
  $handler->display->display_options['fields']['field_type']['element_label_colon'] = FALSE;

  /* Display: Homepage: Block System */
  $handler = $view->new_display('block', 'Homepage: Block System', 'block_stream_homepage');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '2';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Nodequeue: Queue */
  $handler->display->display_options['relationships']['nodequeue_rel']['id'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['nodequeue_rel']['field'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['label'] = 'Homepage (Block System) NQ';
  $handler->display->display_options['relationships']['nodequeue_rel']['required'] = TRUE;
  $handler->display->display_options['relationships']['nodequeue_rel']['limit'] = 1;
  $handler->display->display_options['relationships']['nodequeue_rel']['names'] = array(
    'homepage_block_system_nq' => 'homepage_block_system_nq',
    'homepage_stream_nq' => 0,
    'forumpage_stream_nq' => 0,
    'topicpage_stream_nq' => 0,
    'understanding_autism_block_syste' => 0,
    'article_block_system_nq' => 0,
    'forum_block_system_nq' => 0,
    'topic_block_system_nq' => 0,
    'myvoice_block_system_nq' => 0,
    'understanding_autism_age_block_s' => 0,
  );
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Tout text */
  $handler->display->display_options['fields']['field_block_tout_text']['id'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['table'] = 'field_data_field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['field'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['label'] = '';
  $handler->display->display_options['fields']['field_block_tout_text']['element_type'] = 'h2';
  $handler->display->display_options['fields']['field_block_tout_text']['element_class'] = 'tout-text';
  $handler->display->display_options['fields']['field_block_tout_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_block_tout_text']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_block_tout_text']['hide_empty'] = TRUE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'node';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  $handler->display->display_options['fields']['type']['label'] = '';
  $handler->display->display_options['fields']['type']['exclude'] = TRUE;
  $handler->display->display_options['fields']['type']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['type']['machine_name'] = TRUE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Featured Image Pic */
  $handler->display->display_options['fields']['field_featured_image']['id'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['table'] = 'field_data_field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['field'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['label'] = '';
  $handler->display->display_options['fields']['field_featured_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['field_featured_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_featured_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Call to action text */
  $handler->display->display_options['fields']['field_call_to_action_text']['id'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['table'] = 'field_data_field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['field'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_text']['alter']['text'] = '<a class="btn btn-transparent">[field_call_to_action_text]</a>';
  $handler->display->display_options['fields']['field_call_to_action_text']['alter']['path'] = '/';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_call_to_action_text']['element_wrapper_type'] = 'div';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_wrapper_class'] = 'btn btn-transparent';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_default_classes'] = FALSE;
  /* Field: Content: Background colour */
  $handler->display->display_options['fields']['field_background_colour']['id'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['table'] = 'field_data_field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['field'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['label'] = '';
  $handler->display->display_options['fields']['field_background_colour']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_colour']['element_label_colon'] = FALSE;
  /* Field: Content: Background image */
  $handler->display->display_options['fields']['field_background_image']['id'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['table'] = 'field_data_field_background_image';
  $handler->display->display_options['fields']['field_background_image']['field'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['label'] = '';
  $handler->display->display_options['fields']['field_background_image']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_background_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_background_image']['type'] = 'image_url';
  $handler->display->display_options['fields']['field_background_image']['settings'] = array(
    'url_type' => '2',
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Type */
  $handler->display->display_options['fields']['field_type']['id'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['table'] = 'field_data_field_type';
  $handler->display->display_options['fields']['field_type']['field'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['label'] = '';
  $handler->display->display_options['fields']['field_type']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_type']['type'] = 'list_key';
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  /* Field: Content: Font size */
  $handler->display->display_options['fields']['field_font_size']['id'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['table'] = 'field_data_field_font_size';
  $handler->display->display_options['fields']['field_font_size']['field'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['label'] = '';
  $handler->display->display_options['fields']['field_font_size']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_font_size']['type'] = 'list_key';
  /* Field: Content: Navigation */
  $handler->display->display_options['fields']['field_link']['id'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['table'] = 'field_data_field_link';
  $handler->display->display_options['fields']['field_link']['field'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['label'] = '';
  $handler->display->display_options['fields']['field_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_link']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_link']['type'] = 'link_absolute';
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Nodequeue: Position */
  $handler->display->display_options['sorts']['position']['id'] = 'position';
  $handler->display->display_options['sorts']['position']['table'] = 'nodequeue_nodes';
  $handler->display->display_options['sorts']['position']['field'] = 'position';
  $handler->display->display_options['sorts']['position']['relationship'] = 'nodequeue_rel';
  $handler->display->display_options['sorts']['position']['order'] = 'DESC';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';

  /* Display: Understanding Autism: Block System */
  $handler = $view->new_display('block', 'Understanding Autism: Block System', 'block_stream_understandingautism');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Nodequeue: Queue */
  $handler->display->display_options['relationships']['nodequeue_rel']['id'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['nodequeue_rel']['field'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['label'] = 'Understanding Autism (Block System) NQ';
  $handler->display->display_options['relationships']['nodequeue_rel']['required'] = TRUE;
  $handler->display->display_options['relationships']['nodequeue_rel']['limit'] = 1;
  $handler->display->display_options['relationships']['nodequeue_rel']['names'] = array(
    'understanding_autism_block_syste' => 'understanding_autism_block_syste',
    'homepage_stream_nq' => 0,
    'forumpage_stream_nq' => 0,
    'topicpage_stream_nq' => 0,
    'homepage_block_system_nq' => 0,
    'article_block_system_nq' => 0,
    'forum_block_system_nq' => 0,
    'topic_block_system_nq' => 0,
    'myvoice_block_system_nq' => 0,
    'understanding_autism_age_block_s' => 0,
  );
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Content: Tout text */
  $handler->display->display_options['fields']['field_block_tout_text']['id'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['table'] = 'field_data_field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['field'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['label'] = '';
  $handler->display->display_options['fields']['field_block_tout_text']['element_label_colon'] = FALSE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'node';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  $handler->display->display_options['fields']['type']['label'] = '';
  $handler->display->display_options['fields']['type']['element_label_colon'] = FALSE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['field_type']['id'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['table'] = 'field_data_field_type';
  $handler->display->display_options['fields']['field_type']['field'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['label'] = '';
  $handler->display->display_options['fields']['field_type']['element_label_colon'] = FALSE;
  /* Field: Content: Background colour */
  $handler->display->display_options['fields']['field_background_colour']['id'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['table'] = 'field_data_field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['field'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['label'] = '';
  $handler->display->display_options['fields']['field_background_colour']['element_label_colon'] = FALSE;
  /* Field: Content: Background image */
  $handler->display->display_options['fields']['field_background_image']['id'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['table'] = 'field_data_field_background_image';
  $handler->display->display_options['fields']['field_background_image']['field'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['label'] = '';
  $handler->display->display_options['fields']['field_background_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_background_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_background_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  /* Field: Content: Call to action text */
  $handler->display->display_options['fields']['field_call_to_action_text']['id'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['table'] = 'field_data_field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['field'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_label_colon'] = FALSE;
  /* Field: Content: Featured Image Pic */
  $handler->display->display_options['fields']['field_featured_image']['id'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['table'] = 'field_data_field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['field'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['label'] = '';
  $handler->display->display_options['fields']['field_featured_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_featured_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Featured Image Pic */
  $handler->display->display_options['fields']['field_featured_image_1']['id'] = 'field_featured_image_1';
  $handler->display->display_options['fields']['field_featured_image_1']['table'] = 'field_data_field_featured_image';
  $handler->display->display_options['fields']['field_featured_image_1']['field'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image_1']['label'] = '';
  $handler->display->display_options['fields']['field_featured_image_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image_1']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_featured_image_1']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Font size */
  $handler->display->display_options['fields']['field_font_size']['id'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['table'] = 'field_data_field_font_size';
  $handler->display->display_options['fields']['field_font_size']['field'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['label'] = '';
  $handler->display->display_options['fields']['field_font_size']['element_label_colon'] = FALSE;
  /* Field: Content: Navigation */
  $handler->display->display_options['fields']['field_link']['id'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['table'] = 'field_data_field_link';
  $handler->display->display_options['fields']['field_link']['field'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['label'] = '';
  $handler->display->display_options['fields']['field_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_link']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_link']['type'] = 'link_absolute';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title_1']['id'] = 'title_1';
  $handler->display->display_options['fields']['title_1']['table'] = 'node';
  $handler->display->display_options['fields']['title_1']['field'] = 'title';
  $handler->display->display_options['fields']['title_1']['label'] = '';
  $handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
  /* Field: Content: Tout text */
  $handler->display->display_options['fields']['field_block_tout_text_1']['id'] = 'field_block_tout_text_1';
  $handler->display->display_options['fields']['field_block_tout_text_1']['table'] = 'field_data_field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text_1']['field'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text_1']['label'] = '';
  $handler->display->display_options['fields']['field_block_tout_text_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Nodequeue: Position */
  $handler->display->display_options['sorts']['position']['id'] = 'position';
  $handler->display->display_options['sorts']['position']['table'] = 'nodequeue_nodes';
  $handler->display->display_options['sorts']['position']['field'] = 'position';
  $handler->display->display_options['sorts']['position']['relationship'] = 'nodequeue_rel';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';

  /* Display: Article: Block System */
  $handler = $view->new_display('block', 'Article: Block System', 'block_stream_article');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Nodequeue: Queue */
  $handler->display->display_options['relationships']['nodequeue_rel']['id'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['nodequeue_rel']['field'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['label'] = 'Article (Block System) NQ';
  $handler->display->display_options['relationships']['nodequeue_rel']['required'] = TRUE;
  $handler->display->display_options['relationships']['nodequeue_rel']['limit'] = 1;
  $handler->display->display_options['relationships']['nodequeue_rel']['names'] = array(
    'article_block_system_nq' => 'article_block_system_nq',
    'homepage_stream_nq' => 0,
    'forumpage_stream_nq' => 0,
    'topicpage_stream_nq' => 0,
    'homepage_block_system_nq' => 0,
    'understanding_autism_block_syste' => 0,
    'forum_block_system_nq' => 0,
    'topic_block_system_nq' => 0,
    'myvoice_block_system_nq' => 0,
    'understanding_autism_age_block_s' => 0,
  );
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'node';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  $handler->display->display_options['fields']['type']['label'] = '';
  $handler->display->display_options['fields']['type']['exclude'] = TRUE;
  $handler->display->display_options['fields']['type']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['type']['machine_name'] = TRUE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Featured Image Pic */
  $handler->display->display_options['fields']['field_featured_image']['id'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['table'] = 'field_data_field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['field'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['label'] = '';
  $handler->display->display_options['fields']['field_featured_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['field_featured_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_featured_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Call to action text */
  $handler->display->display_options['fields']['field_call_to_action_text']['id'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['table'] = 'field_data_field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['field'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_text']['alter']['text'] = '<a class="btn btn-transparent">[field_call_to_action_text]</a>';
  $handler->display->display_options['fields']['field_call_to_action_text']['alter']['path'] = '/';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_call_to_action_text']['element_wrapper_type'] = 'div';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_wrapper_class'] = 'btn btn-transparent';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_default_classes'] = FALSE;
  /* Field: Content: Background colour */
  $handler->display->display_options['fields']['field_background_colour']['id'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['table'] = 'field_data_field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['field'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['label'] = '';
  $handler->display->display_options['fields']['field_background_colour']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_colour']['element_label_colon'] = FALSE;
  /* Field: Content: Background image */
  $handler->display->display_options['fields']['field_background_image']['id'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['table'] = 'field_data_field_background_image';
  $handler->display->display_options['fields']['field_background_image']['field'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['label'] = '';
  $handler->display->display_options['fields']['field_background_image']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_background_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_background_image']['type'] = 'image_url';
  $handler->display->display_options['fields']['field_background_image']['settings'] = array(
    'url_type' => '2',
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['field_type']['id'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['table'] = 'field_data_field_type';
  $handler->display->display_options['fields']['field_type']['field'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['label'] = '';
  $handler->display->display_options['fields']['field_type']['element_label_colon'] = FALSE;
  /* Field: Content: Font size */
  $handler->display->display_options['fields']['field_font_size']['id'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['table'] = 'field_data_field_font_size';
  $handler->display->display_options['fields']['field_font_size']['field'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['label'] = '';
  $handler->display->display_options['fields']['field_font_size']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_font_size']['type'] = 'list_key';
  /* Field: Content: Navigation */
  $handler->display->display_options['fields']['field_link']['id'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['table'] = 'field_data_field_link';
  $handler->display->display_options['fields']['field_link']['field'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['label'] = '';
  $handler->display->display_options['fields']['field_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_link']['click_sort_column'] = 'url';
  /* Field: Content: Tout text */
  $handler->display->display_options['fields']['field_block_tout_text']['id'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['table'] = 'field_data_field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['field'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['label'] = '';
  $handler->display->display_options['fields']['field_block_tout_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Nodequeue: Position */
  $handler->display->display_options['sorts']['position']['id'] = 'position';
  $handler->display->display_options['sorts']['position']['table'] = 'nodequeue_nodes';
  $handler->display->display_options['sorts']['position']['field'] = 'position';
  $handler->display->display_options['sorts']['position']['relationship'] = 'nodequeue_rel';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';

  /* Display: Forum: Block System */
  $handler = $view->new_display('block', 'Forum: Block System', 'block_stream_forum');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Nodequeue: Queue */
  $handler->display->display_options['relationships']['nodequeue_rel']['id'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['nodequeue_rel']['field'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['label'] = 'Forum (Block System) NQ';
  $handler->display->display_options['relationships']['nodequeue_rel']['required'] = TRUE;
  $handler->display->display_options['relationships']['nodequeue_rel']['limit'] = 1;
  $handler->display->display_options['relationships']['nodequeue_rel']['names'] = array(
    'forum_block_system_nq' => 'forum_block_system_nq',
    'homepage_stream_nq' => 0,
    'forumpage_stream_nq' => 0,
    'topicpage_stream_nq' => 0,
    'homepage_block_system_nq' => 0,
    'understanding_autism_block_syste' => 0,
    'article_block_system_nq' => 0,
    'topic_block_system_nq' => 0,
    'myvoice_block_system_nq' => 0,
    'understanding_autism_age_block_s' => 0,
  );
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'node';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  $handler->display->display_options['fields']['type']['label'] = '';
  $handler->display->display_options['fields']['type']['exclude'] = TRUE;
  $handler->display->display_options['fields']['type']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['type']['machine_name'] = TRUE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Featured Image Pic */
  $handler->display->display_options['fields']['field_featured_image']['id'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['table'] = 'field_data_field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['field'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['label'] = '';
  $handler->display->display_options['fields']['field_featured_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['field_featured_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_featured_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Call to action text */
  $handler->display->display_options['fields']['field_call_to_action_text']['id'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['table'] = 'field_data_field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['field'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_text']['alter']['text'] = '<a class="btn btn-transparent">[field_call_to_action_text]</a>';
  $handler->display->display_options['fields']['field_call_to_action_text']['alter']['path'] = '/';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_call_to_action_text']['element_wrapper_type'] = 'div';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_wrapper_class'] = 'btn btn-transparent';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_default_classes'] = FALSE;
  /* Field: Content: Background colour */
  $handler->display->display_options['fields']['field_background_colour']['id'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['table'] = 'field_data_field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['field'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['label'] = '';
  $handler->display->display_options['fields']['field_background_colour']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_colour']['element_label_colon'] = FALSE;
  /* Field: Content: Background image */
  $handler->display->display_options['fields']['field_background_image']['id'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['table'] = 'field_data_field_background_image';
  $handler->display->display_options['fields']['field_background_image']['field'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['label'] = '';
  $handler->display->display_options['fields']['field_background_image']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_background_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_background_image']['type'] = 'image_url';
  $handler->display->display_options['fields']['field_background_image']['settings'] = array(
    'url_type' => '2',
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['field_type']['id'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['table'] = 'field_data_field_type';
  $handler->display->display_options['fields']['field_type']['field'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['label'] = '';
  $handler->display->display_options['fields']['field_type']['element_label_colon'] = FALSE;
  /* Field: Content: Font size */
  $handler->display->display_options['fields']['field_font_size']['id'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['table'] = 'field_data_field_font_size';
  $handler->display->display_options['fields']['field_font_size']['field'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['label'] = '';
  $handler->display->display_options['fields']['field_font_size']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_font_size']['type'] = 'list_key';
  /* Field: Content: Font size */
  $handler->display->display_options['fields']['field_font_size_1']['id'] = 'field_font_size_1';
  $handler->display->display_options['fields']['field_font_size_1']['table'] = 'field_data_field_font_size';
  $handler->display->display_options['fields']['field_font_size_1']['field'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size_1']['label'] = '';
  $handler->display->display_options['fields']['field_font_size_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_font_size_1']['type'] = 'list_key';
  /* Field: Content: Navigation */
  $handler->display->display_options['fields']['field_link']['id'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['table'] = 'field_data_field_link';
  $handler->display->display_options['fields']['field_link']['field'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['label'] = '';
  $handler->display->display_options['fields']['field_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_link']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_link']['type'] = 'link_absolute';
  /* Field: Content: Tout text */
  $handler->display->display_options['fields']['field_block_tout_text']['id'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['table'] = 'field_data_field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['field'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['label'] = '';
  $handler->display->display_options['fields']['field_block_tout_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Nodequeue: Position */
  $handler->display->display_options['sorts']['position']['id'] = 'position';
  $handler->display->display_options['sorts']['position']['table'] = 'nodequeue_nodes';
  $handler->display->display_options['sorts']['position']['field'] = 'position';
  $handler->display->display_options['sorts']['position']['relationship'] = 'nodequeue_rel';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';

  /* Display: Topic: Block System */
  $handler = $view->new_display('block', 'Topic: Block System', 'block_stream_topic');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Nodequeue: Queue */
  $handler->display->display_options['relationships']['nodequeue_rel']['id'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['nodequeue_rel']['field'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['label'] = 'Topic (Block System) NQ';
  $handler->display->display_options['relationships']['nodequeue_rel']['required'] = TRUE;
  $handler->display->display_options['relationships']['nodequeue_rel']['limit'] = 1;
  $handler->display->display_options['relationships']['nodequeue_rel']['names'] = array(
    'topic_block_system_nq' => 'topic_block_system_nq',
    'homepage_stream_nq' => 0,
    'forumpage_stream_nq' => 0,
    'topicpage_stream_nq' => 0,
    'homepage_block_system_nq' => 0,
    'understanding_autism_block_syste' => 0,
    'article_block_system_nq' => 0,
    'forum_block_system_nq' => 0,
    'myvoice_block_system_nq' => 0,
    'understanding_autism_age_block_s' => 0,
  );
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'node';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  $handler->display->display_options['fields']['type']['label'] = '';
  $handler->display->display_options['fields']['type']['exclude'] = TRUE;
  $handler->display->display_options['fields']['type']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['type']['machine_name'] = TRUE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Featured Image Pic */
  $handler->display->display_options['fields']['field_featured_image']['id'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['table'] = 'field_data_field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['field'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['label'] = '';
  $handler->display->display_options['fields']['field_featured_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['field_featured_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_featured_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Broken/missing handler */
  $handler->display->display_options['fields']['field_tout_text']['id'] = 'field_tout_text';
  $handler->display->display_options['fields']['field_tout_text']['table'] = 'field_data_field_tout_text';
  $handler->display->display_options['fields']['field_tout_text']['field'] = 'field_tout_text';
  $handler->display->display_options['fields']['field_tout_text']['label'] = '';
  $handler->display->display_options['fields']['field_tout_text']['element_type'] = 'h2';
  $handler->display->display_options['fields']['field_tout_text']['element_class'] = 'tout-text';
  $handler->display->display_options['fields']['field_tout_text']['element_label_colon'] = FALSE;
  /* Field: Content: Call to action text */
  $handler->display->display_options['fields']['field_call_to_action_text']['id'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['table'] = 'field_data_field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['field'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_text']['alter']['text'] = '<a class="btn btn-transparent">[field_call_to_action_text]</a>';
  $handler->display->display_options['fields']['field_call_to_action_text']['alter']['path'] = '/';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_call_to_action_text']['element_wrapper_type'] = 'div';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_wrapper_class'] = 'btn btn-transparent';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_default_classes'] = FALSE;
  /* Field: Content: Background colour */
  $handler->display->display_options['fields']['field_background_colour']['id'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['table'] = 'field_data_field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['field'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['label'] = '';
  $handler->display->display_options['fields']['field_background_colour']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_colour']['element_label_colon'] = FALSE;
  /* Field: Content: Background image */
  $handler->display->display_options['fields']['field_background_image']['id'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['table'] = 'field_data_field_background_image';
  $handler->display->display_options['fields']['field_background_image']['field'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['label'] = '';
  $handler->display->display_options['fields']['field_background_image']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_background_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_background_image']['type'] = 'image_url';
  $handler->display->display_options['fields']['field_background_image']['settings'] = array(
    'url_type' => '2',
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Broken/missing handler */
  $handler->display->display_options['fields']['field_background_style']['id'] = 'field_background_style';
  $handler->display->display_options['fields']['field_background_style']['table'] = 'field_data_field_background_style';
  $handler->display->display_options['fields']['field_background_style']['field'] = 'field_background_style';
  $handler->display->display_options['fields']['field_background_style']['label'] = '';
  $handler->display->display_options['fields']['field_background_style']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_style']['element_label_colon'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['field_type']['id'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['table'] = 'field_data_field_type';
  $handler->display->display_options['fields']['field_type']['field'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['label'] = '';
  $handler->display->display_options['fields']['field_type']['element_label_colon'] = FALSE;
  /* Field: Content: Font size */
  $handler->display->display_options['fields']['field_font_size']['id'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['table'] = 'field_data_field_font_size';
  $handler->display->display_options['fields']['field_font_size']['field'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['label'] = '';
  $handler->display->display_options['fields']['field_font_size']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_font_size']['type'] = 'list_key';
  /* Field: Content: Navigation */
  $handler->display->display_options['fields']['field_link']['id'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['table'] = 'field_data_field_link';
  $handler->display->display_options['fields']['field_link']['field'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['label'] = '';
  $handler->display->display_options['fields']['field_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_link']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_link']['type'] = 'link_absolute';
  /* Field: Content: Tout text */
  $handler->display->display_options['fields']['field_block_tout_text']['id'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['table'] = 'field_data_field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['field'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['label'] = '';
  $handler->display->display_options['fields']['field_block_tout_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Nodequeue: Position */
  $handler->display->display_options['sorts']['position']['id'] = 'position';
  $handler->display->display_options['sorts']['position']['table'] = 'nodequeue_nodes';
  $handler->display->display_options['sorts']['position']['field'] = 'position';
  $handler->display->display_options['sorts']['position']['relationship'] = 'nodequeue_rel';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';

  /* Display: My Voice: Block system */
  $handler = $view->new_display('block', 'My Voice: Block system', 'block_stream_myvoice');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Nodequeue: Queue */
  $handler->display->display_options['relationships']['nodequeue_rel']['id'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['nodequeue_rel']['field'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['label'] = 'MyVoice (Block System) NQ';
  $handler->display->display_options['relationships']['nodequeue_rel']['required'] = TRUE;
  $handler->display->display_options['relationships']['nodequeue_rel']['limit'] = 1;
  $handler->display->display_options['relationships']['nodequeue_rel']['names'] = array(
    'myvoice_block_system_nq' => 'myvoice_block_system_nq',
    'homepage_stream_nq' => 0,
    'forumpage_stream_nq' => 0,
    'topicpage_stream_nq' => 0,
    'homepage_block_system_nq' => 0,
    'understanding_autism_block_syste' => 0,
    'article_block_system_nq' => 0,
    'forum_block_system_nq' => 0,
    'topic_block_system_nq' => 0,
    'understanding_autism_age_block_s' => 0,
  );
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'node';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  $handler->display->display_options['fields']['type']['label'] = '';
  $handler->display->display_options['fields']['type']['exclude'] = TRUE;
  $handler->display->display_options['fields']['type']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['type']['machine_name'] = TRUE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Featured Image Pic */
  $handler->display->display_options['fields']['field_featured_image']['id'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['table'] = 'field_data_field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['field'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['label'] = '';
  $handler->display->display_options['fields']['field_featured_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['field_featured_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_featured_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Call to action text */
  $handler->display->display_options['fields']['field_call_to_action_text']['id'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['table'] = 'field_data_field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['field'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_text']['alter']['text'] = '<a class="btn btn-transparent">[field_call_to_action_text]</a>';
  $handler->display->display_options['fields']['field_call_to_action_text']['alter']['path'] = '/';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_call_to_action_text']['element_wrapper_type'] = 'div';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_wrapper_class'] = 'btn btn-transparent';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_default_classes'] = FALSE;
  /* Field: Content: Background colour */
  $handler->display->display_options['fields']['field_background_colour']['id'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['table'] = 'field_data_field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['field'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['label'] = '';
  $handler->display->display_options['fields']['field_background_colour']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_colour']['element_label_colon'] = FALSE;
  /* Field: Content: Background image */
  $handler->display->display_options['fields']['field_background_image']['id'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['table'] = 'field_data_field_background_image';
  $handler->display->display_options['fields']['field_background_image']['field'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['label'] = '';
  $handler->display->display_options['fields']['field_background_image']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_background_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_background_image']['type'] = 'image_url';
  $handler->display->display_options['fields']['field_background_image']['settings'] = array(
    'url_type' => '2',
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Type */
  $handler->display->display_options['fields']['field_type']['id'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['table'] = 'field_data_field_type';
  $handler->display->display_options['fields']['field_type']['field'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['label'] = '';
  $handler->display->display_options['fields']['field_type']['element_label_colon'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  /* Field: Content: Font size */
  $handler->display->display_options['fields']['field_font_size']['id'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['table'] = 'field_data_field_font_size';
  $handler->display->display_options['fields']['field_font_size']['field'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['label'] = '';
  $handler->display->display_options['fields']['field_font_size']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_font_size']['type'] = 'list_key';
  /* Field: Content: Font size */
  $handler->display->display_options['fields']['field_font_size_1']['id'] = 'field_font_size_1';
  $handler->display->display_options['fields']['field_font_size_1']['table'] = 'field_data_field_font_size';
  $handler->display->display_options['fields']['field_font_size_1']['field'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size_1']['label'] = '';
  $handler->display->display_options['fields']['field_font_size_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_font_size_1']['type'] = 'list_key';
  /* Field: Content: Navigation */
  $handler->display->display_options['fields']['field_link']['id'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['table'] = 'field_data_field_link';
  $handler->display->display_options['fields']['field_link']['field'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['label'] = '';
  $handler->display->display_options['fields']['field_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_link']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_link']['type'] = 'link_absolute';
  /* Field: Content: Tout text */
  $handler->display->display_options['fields']['field_block_tout_text']['id'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['table'] = 'field_data_field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['field'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['label'] = '';
  $handler->display->display_options['fields']['field_block_tout_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Nodequeue: Position */
  $handler->display->display_options['sorts']['position']['id'] = 'position';
  $handler->display->display_options['sorts']['position']['table'] = 'nodequeue_nodes';
  $handler->display->display_options['sorts']['position']['field'] = 'position';
  $handler->display->display_options['sorts']['position']['relationship'] = 'nodequeue_rel';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';

  /* Display: Understanding Autism Age: Block System */
  $handler = $view->new_display('block', 'Understanding Autism Age: Block System', 'block_stream_understangingautismage');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Nodequeue: Queue */
  $handler->display->display_options['relationships']['nodequeue_rel']['id'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['nodequeue_rel']['field'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['label'] = 'Understanding Autism Age (Block System) NQ';
  $handler->display->display_options['relationships']['nodequeue_rel']['required'] = TRUE;
  $handler->display->display_options['relationships']['nodequeue_rel']['limit'] = 1;
  $handler->display->display_options['relationships']['nodequeue_rel']['names'] = array(
    'understanding_autism_age_block_s' => 'understanding_autism_age_block_s',
    'homepage_stream_nq' => 0,
    'forumpage_stream_nq' => 0,
    'topicpage_stream_nq' => 0,
    'homepage_block_system_nq' => 0,
    'understanding_autism_block_syste' => 0,
    'article_block_system_nq' => 0,
    'forum_block_system_nq' => 0,
    'topic_block_system_nq' => 0,
    'myvoice_block_system_nq' => 0,
  );
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'node';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  $handler->display->display_options['fields']['type']['label'] = '';
  $handler->display->display_options['fields']['type']['exclude'] = TRUE;
  $handler->display->display_options['fields']['type']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['type']['machine_name'] = TRUE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Featured Image Pic */
  $handler->display->display_options['fields']['field_featured_image']['id'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['table'] = 'field_data_field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['field'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['label'] = '';
  $handler->display->display_options['fields']['field_featured_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['field_featured_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_featured_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Call to action text */
  $handler->display->display_options['fields']['field_call_to_action_text']['id'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['table'] = 'field_data_field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['field'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_text']['alter']['text'] = '<a class="btn btn-transparent">[field_call_to_action_text]</a>';
  $handler->display->display_options['fields']['field_call_to_action_text']['alter']['path'] = '/';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_call_to_action_text']['element_wrapper_type'] = 'div';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_wrapper_class'] = 'btn btn-transparent';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_default_classes'] = FALSE;
  /* Field: Content: Background colour */
  $handler->display->display_options['fields']['field_background_colour']['id'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['table'] = 'field_data_field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['field'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['label'] = '';
  $handler->display->display_options['fields']['field_background_colour']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_colour']['element_label_colon'] = FALSE;
  /* Field: Content: Background image */
  $handler->display->display_options['fields']['field_background_image']['id'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['table'] = 'field_data_field_background_image';
  $handler->display->display_options['fields']['field_background_image']['field'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['label'] = '';
  $handler->display->display_options['fields']['field_background_image']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_background_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_background_image']['type'] = 'image_url';
  $handler->display->display_options['fields']['field_background_image']['settings'] = array(
    'url_type' => '2',
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Font size */
  $handler->display->display_options['fields']['field_font_size']['id'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['table'] = 'field_data_field_font_size';
  $handler->display->display_options['fields']['field_font_size']['field'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['label'] = '';
  $handler->display->display_options['fields']['field_font_size']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_font_size']['type'] = 'list_key';
  /* Field: Content: Type */
  $handler->display->display_options['fields']['field_type']['id'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['table'] = 'field_data_field_type';
  $handler->display->display_options['fields']['field_type']['field'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['label'] = '';
  $handler->display->display_options['fields']['field_type']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_type']['type'] = 'list_key';
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  /* Field: Content: Font size */
  $handler->display->display_options['fields']['field_font_size_1']['id'] = 'field_font_size_1';
  $handler->display->display_options['fields']['field_font_size_1']['table'] = 'field_data_field_font_size';
  $handler->display->display_options['fields']['field_font_size_1']['field'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size_1']['label'] = '';
  $handler->display->display_options['fields']['field_font_size_1']['element_label_colon'] = FALSE;
  /* Field: Content: Navigation */
  $handler->display->display_options['fields']['field_link']['id'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['table'] = 'field_data_field_link';
  $handler->display->display_options['fields']['field_link']['field'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['label'] = '';
  $handler->display->display_options['fields']['field_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_link']['click_sort_column'] = 'url';
  /* Field: Content: Tout text */
  $handler->display->display_options['fields']['field_block_tout_text']['id'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['table'] = 'field_data_field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['field'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['label'] = '';
  $handler->display->display_options['fields']['field_block_tout_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Nodequeue: Position */
  $handler->display->display_options['sorts']['position']['id'] = 'position';
  $handler->display->display_options['sorts']['position']['table'] = 'nodequeue_nodes';
  $handler->display->display_options['sorts']['position']['field'] = 'position';
  $handler->display->display_options['sorts']['position']['relationship'] = 'nodequeue_rel';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';

  /* Display: Homepage: Feature Action Block  */
  $handler = $view->new_display('block', 'Homepage: Feature Action Block ', 'homepage_feature_block_stream');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['css_class'] = FALSE;
  $handler->display->display_options['css_class'] = 'feature-action-block';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '1';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['row_class'] = 'ambitious-block-element [type]';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Nodequeue: Queue */
  $handler->display->display_options['relationships']['nodequeue_rel']['id'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['nodequeue_rel']['field'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['required'] = TRUE;
  $handler->display->display_options['relationships']['nodequeue_rel']['limit'] = 1;
  $handler->display->display_options['relationships']['nodequeue_rel']['names'] = array(
    'homepage_feature_action_block' => 'homepage_feature_action_block',
    'homepage_stream_nq' => 0,
    'forumpage_stream_nq' => 0,
    'topicpage_stream_nq' => 0,
    'homepage_block_system_nq' => 0,
    'understanding_autism_block_syste' => 0,
    'article_block_system_nq' => 0,
    'forum_block_system_nq' => 0,
    'topic_block_system_nq' => 0,
    'myvoice_block_system_nq' => 0,
    'understanding_autism_age_block_s' => 0,
    'understanding_autism_stream_nq' => 0,
    'understanding_autism_age_stream_' => 0,
    'take_action' => 0,
    'who_we_are' => 0,
    'campaigns_promo_cards_' => 0,
    'our_people' => 0,
    'fund_raise_for_us_promo_card_nq' => 0,
    'homepage' => 0,
    'homepage_core_services_promo_car' => 0,
    'new_campaigns_promo_cards_' => 0,
    'our_work' => 0,
    'news_card_stream_' => 0,
    'about_us_card_stream_' => 0,
    'get_involved' => 0,
    'age_16_25_new_page_stream' => 0,
    'youth_patrent' => 0,
    'meet_the_youth_patrent' => 0,
    'myvoice' => 0,
    'courses' => 0,
    'executive_leadership' => 0,
    'trustees' => 0,
    'finished_at_school' => 0,
    'share_your_story_promo_cards_nq' => 0,
    'christmas_nodequeue' => 0,
    'employ_autism_' => 0,
    'events_' => 0,
    'organise_your_own_events' => 0,
    'success_stories' => 0,
    'waam_2016' => 0,
    'ambitious_college_appeal' => 0,
    'policy_and_campaigns' => 0,
    'campaign_with_us' => 0,
    'test_campaign' => 0,
    'policy_eq' => 0,
    'your_stories_employ_autism' => 0,
    'college_inclusion_charter' => 0,
    'projects' => 0,
    'finished_at_school_2' => 0,
    'school_survey' => 0,
    'giving' => 0,
    'when_will_we_learn_' => 0,
    'advent_calendar_2016' => 0,
    'alert_home_page' => 0,
    'work_for_us_' => 0,
    'homepage_feature_action_top_bloc' => 0,
  );
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: Feature tout text */
  $handler->display->display_options['fields']['field_feature_tout_text']['id'] = 'field_feature_tout_text';
  $handler->display->display_options['fields']['field_feature_tout_text']['table'] = 'field_data_field_feature_tout_text';
  $handler->display->display_options['fields']['field_feature_tout_text']['field'] = 'field_feature_tout_text';
  $handler->display->display_options['fields']['field_feature_tout_text']['label'] = '';
  $handler->display->display_options['fields']['field_feature_tout_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_feature_tout_text']['type'] = 'text_plain';
  /* Field: Content: Feature tout text font color */
  $handler->display->display_options['fields']['field_feature_tout_text_font_col']['id'] = 'field_feature_tout_text_font_col';
  $handler->display->display_options['fields']['field_feature_tout_text_font_col']['table'] = 'field_data_field_feature_tout_text_font_col';
  $handler->display->display_options['fields']['field_feature_tout_text_font_col']['field'] = 'field_feature_tout_text_font_col';
  $handler->display->display_options['fields']['field_feature_tout_text_font_col']['label'] = '';
  $handler->display->display_options['fields']['field_feature_tout_text_font_col']['element_label_colon'] = FALSE;
  /* Field: Content: Feature background image */
  $handler->display->display_options['fields']['field_feature_image']['id'] = 'field_feature_image';
  $handler->display->display_options['fields']['field_feature_image']['table'] = 'field_data_field_feature_image';
  $handler->display->display_options['fields']['field_feature_image']['field'] = 'field_feature_image';
  $handler->display->display_options['fields']['field_feature_image']['label'] = '';
  $handler->display->display_options['fields']['field_feature_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_feature_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_feature_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Feature background colour */
  $handler->display->display_options['fields']['field_feature_colour']['id'] = 'field_feature_colour';
  $handler->display->display_options['fields']['field_feature_colour']['table'] = 'field_data_field_feature_colour';
  $handler->display->display_options['fields']['field_feature_colour']['field'] = 'field_feature_colour';
  $handler->display->display_options['fields']['field_feature_colour']['label'] = '';
  $handler->display->display_options['fields']['field_feature_colour']['element_label_colon'] = FALSE;
  /* Field: Content: body */
  $handler->display->display_options['fields']['field_body']['id'] = 'field_body';
  $handler->display->display_options['fields']['field_body']['table'] = 'field_data_field_body';
  $handler->display->display_options['fields']['field_body']['field'] = 'field_body';
  $handler->display->display_options['fields']['field_body']['label'] = '';
  $handler->display->display_options['fields']['field_body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_body']['type'] = 'text_plain';
  /* Field: Content: call to action text */
  $handler->display->display_options['fields']['field_call_to_action__text']['id'] = 'field_call_to_action__text';
  $handler->display->display_options['fields']['field_call_to_action__text']['table'] = 'field_data_field_call_to_action__text';
  $handler->display->display_options['fields']['field_call_to_action__text']['field'] = 'field_call_to_action__text';
  $handler->display->display_options['fields']['field_call_to_action__text']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action__text']['element_label_colon'] = FALSE;
  /* Field: Content: Feature call to action link */
  $handler->display->display_options['fields']['field___feature_link']['id'] = 'field___feature_link';
  $handler->display->display_options['fields']['field___feature_link']['table'] = 'field_data_field___feature_link';
  $handler->display->display_options['fields']['field___feature_link']['field'] = 'field___feature_link';
  $handler->display->display_options['fields']['field___feature_link']['label'] = '';
  $handler->display->display_options['fields']['field___feature_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field___feature_link']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field___feature_link']['type'] = 'link_separate';
  /* Field: Content: call to action text second */
  $handler->display->display_options['fields']['field_call_to_action_text_second']['id'] = 'field_call_to_action_text_second';
  $handler->display->display_options['fields']['field_call_to_action_text_second']['table'] = 'field_data_field_call_to_action_text_second';
  $handler->display->display_options['fields']['field_call_to_action_text_second']['field'] = 'field_call_to_action_text_second';
  $handler->display->display_options['fields']['field_call_to_action_text_second']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_text_second']['element_label_colon'] = FALSE;
  /* Field: Content: call to action link second */
  $handler->display->display_options['fields']['field_call_to_action_link_second']['id'] = 'field_call_to_action_link_second';
  $handler->display->display_options['fields']['field_call_to_action_link_second']['table'] = 'field_data_field_call_to_action_link_second';
  $handler->display->display_options['fields']['field_call_to_action_link_second']['field'] = 'field_call_to_action_link_second';
  $handler->display->display_options['fields']['field_call_to_action_link_second']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_link_second']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_call_to_action_link_second']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_call_to_action_link_second']['type'] = 'link_separate';
  /* Field: Content: call to action text third */
  $handler->display->display_options['fields']['field_call_to_action_text_third']['id'] = 'field_call_to_action_text_third';
  $handler->display->display_options['fields']['field_call_to_action_text_third']['table'] = 'field_data_field_call_to_action_text_third';
  $handler->display->display_options['fields']['field_call_to_action_text_third']['field'] = 'field_call_to_action_text_third';
  $handler->display->display_options['fields']['field_call_to_action_text_third']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_text_third']['element_label_colon'] = FALSE;
  /* Field: Content: call to action link third */
  $handler->display->display_options['fields']['field_call_to_action_link_third']['id'] = 'field_call_to_action_link_third';
  $handler->display->display_options['fields']['field_call_to_action_link_third']['table'] = 'field_data_field_call_to_action_link_third';
  $handler->display->display_options['fields']['field_call_to_action_link_third']['field'] = 'field_call_to_action_link_third';
  $handler->display->display_options['fields']['field_call_to_action_link_third']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_link_third']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_call_to_action_link_third']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_call_to_action_link_third']['type'] = 'link_separate';
  /* Field: Content: Font size */
  $handler->display->display_options['fields']['field_font__size']['id'] = 'field_font__size';
  $handler->display->display_options['fields']['field_font__size']['table'] = 'field_data_field_font__size';
  $handler->display->display_options['fields']['field_font__size']['field'] = 'field_font__size';
  $handler->display->display_options['fields']['field_font__size']['label'] = '';
  $handler->display->display_options['fields']['field_font__size']['element_label_colon'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Sort criterion: Nodequeue: Position */
  $handler->display->display_options['sorts']['position']['id'] = 'position';
  $handler->display->display_options['sorts']['position']['table'] = 'nodequeue_nodes';
  $handler->display->display_options['sorts']['position']['field'] = 'position';
  $handler->display->display_options['sorts']['position']['relationship'] = 'nodequeue_rel';
  $handler->display->display_options['sorts']['position']['order'] = 'DESC';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'feature_action_block' => 'feature_action_block',
  );

  /* Display: Homepage: Feature Action Top Block  */
  $handler = $view->new_display('block', 'Homepage: Feature Action Top Block ', 'homepage_feature_block_stream_top');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['css_class'] = FALSE;
  $handler->display->display_options['css_class'] = 'feature-action-block';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '1';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['row_class'] = 'ambitious-block-element [type]';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Nodequeue: Queue */
  $handler->display->display_options['relationships']['nodequeue_rel']['id'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['nodequeue_rel']['field'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['required'] = TRUE;
  $handler->display->display_options['relationships']['nodequeue_rel']['limit'] = 1;
  $handler->display->display_options['relationships']['nodequeue_rel']['names'] = array(
    'homepage_feature_action_top_bloc' => 'homepage_feature_action_top_bloc',
    'homepage_stream_nq' => 0,
    'forumpage_stream_nq' => 0,
    'topicpage_stream_nq' => 0,
    'homepage_block_system_nq' => 0,
    'understanding_autism_block_syste' => 0,
    'article_block_system_nq' => 0,
    'forum_block_system_nq' => 0,
    'topic_block_system_nq' => 0,
    'myvoice_block_system_nq' => 0,
    'understanding_autism_age_block_s' => 0,
    'understanding_autism_stream_nq' => 0,
    'understanding_autism_age_stream_' => 0,
    'take_action' => 0,
    'who_we_are' => 0,
    'campaigns_promo_cards_' => 0,
    'our_people' => 0,
    'fund_raise_for_us_promo_card_nq' => 0,
    'homepage' => 0,
    'homepage_core_services_promo_car' => 0,
    'new_campaigns_promo_cards_' => 0,
    'our_work' => 0,
    'news_card_stream_' => 0,
    'about_us_card_stream_' => 0,
    'get_involved' => 0,
    'age_16_25_new_page_stream' => 0,
    'youth_patrent' => 0,
    'meet_the_youth_patrent' => 0,
    'myvoice' => 0,
    'courses' => 0,
    'executive_leadership' => 0,
    'trustees' => 0,
    'finished_at_school' => 0,
    'share_your_story_promo_cards_nq' => 0,
    'christmas_nodequeue' => 0,
    'employ_autism_' => 0,
    'events_' => 0,
    'organise_your_own_events' => 0,
    'success_stories' => 0,
    'waam_2016' => 0,
    'ambitious_college_appeal' => 0,
    'policy_and_campaigns' => 0,
    'campaign_with_us' => 0,
    'test_campaign' => 0,
    'policy_eq' => 0,
    'your_stories_employ_autism' => 0,
    'college_inclusion_charter' => 0,
    'projects' => 0,
    'finished_at_school_2' => 0,
    'school_survey' => 0,
    'giving' => 0,
    'when_will_we_learn_' => 0,
    'advent_calendar_2016' => 0,
    'alert_home_page' => 0,
    'work_for_us_' => 0,
    'homepage_feature_action_block' => 0,
  );
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: Feature tout text */
  $handler->display->display_options['fields']['field_feature_tout_text']['id'] = 'field_feature_tout_text';
  $handler->display->display_options['fields']['field_feature_tout_text']['table'] = 'field_data_field_feature_tout_text';
  $handler->display->display_options['fields']['field_feature_tout_text']['field'] = 'field_feature_tout_text';
  $handler->display->display_options['fields']['field_feature_tout_text']['label'] = '';
  $handler->display->display_options['fields']['field_feature_tout_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_feature_tout_text']['type'] = 'text_plain';
  /* Field: Content: Feature tout text font color */
  $handler->display->display_options['fields']['field_feature_tout_text_font_col']['id'] = 'field_feature_tout_text_font_col';
  $handler->display->display_options['fields']['field_feature_tout_text_font_col']['table'] = 'field_data_field_feature_tout_text_font_col';
  $handler->display->display_options['fields']['field_feature_tout_text_font_col']['field'] = 'field_feature_tout_text_font_col';
  $handler->display->display_options['fields']['field_feature_tout_text_font_col']['label'] = '';
  $handler->display->display_options['fields']['field_feature_tout_text_font_col']['element_label_colon'] = FALSE;
  /* Field: Content: Feature background image */
  $handler->display->display_options['fields']['field_feature_image']['id'] = 'field_feature_image';
  $handler->display->display_options['fields']['field_feature_image']['table'] = 'field_data_field_feature_image';
  $handler->display->display_options['fields']['field_feature_image']['field'] = 'field_feature_image';
  $handler->display->display_options['fields']['field_feature_image']['label'] = '';
  $handler->display->display_options['fields']['field_feature_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_feature_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_feature_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Feature background colour */
  $handler->display->display_options['fields']['field_feature_colour']['id'] = 'field_feature_colour';
  $handler->display->display_options['fields']['field_feature_colour']['table'] = 'field_data_field_feature_colour';
  $handler->display->display_options['fields']['field_feature_colour']['field'] = 'field_feature_colour';
  $handler->display->display_options['fields']['field_feature_colour']['label'] = '';
  $handler->display->display_options['fields']['field_feature_colour']['element_label_colon'] = FALSE;
  /* Field: Content: body */
  $handler->display->display_options['fields']['field_body']['id'] = 'field_body';
  $handler->display->display_options['fields']['field_body']['table'] = 'field_data_field_body';
  $handler->display->display_options['fields']['field_body']['field'] = 'field_body';
  $handler->display->display_options['fields']['field_body']['label'] = '';
  $handler->display->display_options['fields']['field_body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_body']['type'] = 'text_plain';
  /* Field: Content: call to action text */
  $handler->display->display_options['fields']['field_call_to_action__text']['id'] = 'field_call_to_action__text';
  $handler->display->display_options['fields']['field_call_to_action__text']['table'] = 'field_data_field_call_to_action__text';
  $handler->display->display_options['fields']['field_call_to_action__text']['field'] = 'field_call_to_action__text';
  $handler->display->display_options['fields']['field_call_to_action__text']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action__text']['element_label_colon'] = FALSE;
  /* Field: Content: Feature call to action link */
  $handler->display->display_options['fields']['field___feature_link']['id'] = 'field___feature_link';
  $handler->display->display_options['fields']['field___feature_link']['table'] = 'field_data_field___feature_link';
  $handler->display->display_options['fields']['field___feature_link']['field'] = 'field___feature_link';
  $handler->display->display_options['fields']['field___feature_link']['label'] = '';
  $handler->display->display_options['fields']['field___feature_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field___feature_link']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field___feature_link']['type'] = 'link_separate';
  /* Field: Content: call to action text second */
  $handler->display->display_options['fields']['field_call_to_action_text_second']['id'] = 'field_call_to_action_text_second';
  $handler->display->display_options['fields']['field_call_to_action_text_second']['table'] = 'field_data_field_call_to_action_text_second';
  $handler->display->display_options['fields']['field_call_to_action_text_second']['field'] = 'field_call_to_action_text_second';
  $handler->display->display_options['fields']['field_call_to_action_text_second']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_text_second']['element_label_colon'] = FALSE;
  /* Field: Content: call to action link second */
  $handler->display->display_options['fields']['field_call_to_action_link_second']['id'] = 'field_call_to_action_link_second';
  $handler->display->display_options['fields']['field_call_to_action_link_second']['table'] = 'field_data_field_call_to_action_link_second';
  $handler->display->display_options['fields']['field_call_to_action_link_second']['field'] = 'field_call_to_action_link_second';
  $handler->display->display_options['fields']['field_call_to_action_link_second']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_link_second']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_call_to_action_link_second']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_call_to_action_link_second']['type'] = 'link_separate';
  /* Field: Content: call to action text third */
  $handler->display->display_options['fields']['field_call_to_action_text_third']['id'] = 'field_call_to_action_text_third';
  $handler->display->display_options['fields']['field_call_to_action_text_third']['table'] = 'field_data_field_call_to_action_text_third';
  $handler->display->display_options['fields']['field_call_to_action_text_third']['field'] = 'field_call_to_action_text_third';
  $handler->display->display_options['fields']['field_call_to_action_text_third']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_text_third']['element_label_colon'] = FALSE;
  /* Field: Content: call to action link third */
  $handler->display->display_options['fields']['field_call_to_action_link_third']['id'] = 'field_call_to_action_link_third';
  $handler->display->display_options['fields']['field_call_to_action_link_third']['table'] = 'field_data_field_call_to_action_link_third';
  $handler->display->display_options['fields']['field_call_to_action_link_third']['field'] = 'field_call_to_action_link_third';
  $handler->display->display_options['fields']['field_call_to_action_link_third']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_link_third']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_call_to_action_link_third']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_call_to_action_link_third']['type'] = 'link_separate';
  /* Field: Content: Font size */
  $handler->display->display_options['fields']['field_font__size']['id'] = 'field_font__size';
  $handler->display->display_options['fields']['field_font__size']['table'] = 'field_data_field_font__size';
  $handler->display->display_options['fields']['field_font__size']['field'] = 'field_font__size';
  $handler->display->display_options['fields']['field_font__size']['label'] = '';
  $handler->display->display_options['fields']['field_font__size']['element_label_colon'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Sort criterion: Nodequeue: Position */
  $handler->display->display_options['sorts']['position']['id'] = 'position';
  $handler->display->display_options['sorts']['position']['table'] = 'nodequeue_nodes';
  $handler->display->display_options['sorts']['position']['field'] = 'position';
  $handler->display->display_options['sorts']['position']['relationship'] = 'nodequeue_rel';
  $handler->display->display_options['sorts']['position']['order'] = 'DESC';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'feature_action_block' => 'feature_action_block',
  );

  /* Display: Homepage: Block System content bottom */
  $handler = $view->new_display('block', 'Homepage: Block System content bottom', 'block_stream_homepage_bottom');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['css_class'] = FALSE;
  $handler->display->display_options['css_class'] = 'ambitious-block-system';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '2';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['row_class'] = 'ambitious-block-element [type]';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['header'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Nodequeue: Queue */
  $handler->display->display_options['relationships']['nodequeue_rel']['id'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['nodequeue_rel']['field'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['label'] = 'Homepage (Block System) NQ';
  $handler->display->display_options['relationships']['nodequeue_rel']['required'] = TRUE;
  $handler->display->display_options['relationships']['nodequeue_rel']['limit'] = 1;
  $handler->display->display_options['relationships']['nodequeue_rel']['names'] = array(
    'homepage_content_botttom_block_s' => 'homepage_content_botttom_block_s',
    'homepage_stream_nq' => 0,
    'forumpage_stream_nq' => 0,
    'topicpage_stream_nq' => 0,
    'homepage_block_system_nq' => 0,
    'understanding_autism_block_syste' => 0,
    'article_block_system_nq' => 0,
    'forum_block_system_nq' => 0,
    'topic_block_system_nq' => 0,
    'myvoice_block_system_nq' => 0,
    'understanding_autism_age_block_s' => 0,
    'understanding_autism_stream_nq' => 0,
    'understanding_autism_age_stream_' => 0,
    'take_action' => 0,
    'who_we_are' => 0,
    'campaigns_promo_cards_' => 0,
    'our_people' => 0,
    'fund_raise_for_us_promo_card_nq' => 0,
    'homepage' => 0,
    'homepage_core_services_promo_car' => 0,
    'new_campaigns_promo_cards_' => 0,
    'our_work' => 0,
    'news_card_stream_' => 0,
    'about_us_card_stream_' => 0,
    'get_involved' => 0,
    'age_16_25_new_page_stream' => 0,
    'youth_patrent' => 0,
    'meet_the_youth_patrent' => 0,
    'myvoice' => 0,
    'courses' => 0,
    'executive_leadership' => 0,
    'trustees' => 0,
    'finished_at_school' => 0,
    'share_your_story_promo_cards_nq' => 0,
    'christmas_nodequeue' => 0,
    'employ_autism_' => 0,
    'events_' => 0,
    'organise_your_own_events' => 0,
    'success_stories' => 0,
    'waam_2016' => 0,
    'ambitious_college_appeal' => 0,
    'policy_and_campaigns' => 0,
    'campaign_with_us' => 0,
    'test_campaign' => 0,
    'policy_eq' => 0,
    'your_stories_employ_autism' => 0,
    'college_inclusion_charter' => 0,
    'projects' => 0,
    'finished_at_school_2' => 0,
    'school_survey' => 0,
    'giving' => 0,
    'when_will_we_learn_' => 0,
    'advent_calendar_2016' => 0,
    'alert_home_page' => 0,
    'work_for_us_' => 0,
    'homepage_feature_action_block' => 0,
    'homepage_feature_action_top_bloc' => 0,
  );
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Tout text */
  $handler->display->display_options['fields']['field_block_tout_text']['id'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['table'] = 'field_data_field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['field'] = 'field_block_tout_text';
  $handler->display->display_options['fields']['field_block_tout_text']['label'] = '';
  $handler->display->display_options['fields']['field_block_tout_text']['element_type'] = 'h2';
  $handler->display->display_options['fields']['field_block_tout_text']['element_class'] = 'tout-text';
  $handler->display->display_options['fields']['field_block_tout_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_block_tout_text']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_block_tout_text']['hide_empty'] = TRUE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'node';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  $handler->display->display_options['fields']['type']['label'] = '';
  $handler->display->display_options['fields']['type']['exclude'] = TRUE;
  $handler->display->display_options['fields']['type']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['type']['machine_name'] = TRUE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Featured Image Pic */
  $handler->display->display_options['fields']['field_featured_image']['id'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['table'] = 'field_data_field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['field'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['label'] = '';
  $handler->display->display_options['fields']['field_featured_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['field_featured_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_featured_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Call to action text */
  $handler->display->display_options['fields']['field_call_to_action_text']['id'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['table'] = 'field_data_field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['field'] = 'field_call_to_action_text';
  $handler->display->display_options['fields']['field_call_to_action_text']['label'] = '';
  $handler->display->display_options['fields']['field_call_to_action_text']['alter']['text'] = '<a class="btn btn-transparent">[field_call_to_action_text]</a>';
  $handler->display->display_options['fields']['field_call_to_action_text']['alter']['path'] = '/';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_call_to_action_text']['element_wrapper_type'] = 'div';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_wrapper_class'] = 'btn btn-transparent';
  $handler->display->display_options['fields']['field_call_to_action_text']['element_default_classes'] = FALSE;
  /* Field: Content: Background colour */
  $handler->display->display_options['fields']['field_background_colour']['id'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['table'] = 'field_data_field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['field'] = 'field_background_colour';
  $handler->display->display_options['fields']['field_background_colour']['label'] = '';
  $handler->display->display_options['fields']['field_background_colour']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_colour']['element_label_colon'] = FALSE;
  /* Field: Content: Background image */
  $handler->display->display_options['fields']['field_background_image']['id'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['table'] = 'field_data_field_background_image';
  $handler->display->display_options['fields']['field_background_image']['field'] = 'field_background_image';
  $handler->display->display_options['fields']['field_background_image']['label'] = '';
  $handler->display->display_options['fields']['field_background_image']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_background_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_background_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_background_image']['type'] = 'image_url';
  $handler->display->display_options['fields']['field_background_image']['settings'] = array(
    'url_type' => '2',
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Type */
  $handler->display->display_options['fields']['field_type']['id'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['table'] = 'field_data_field_type';
  $handler->display->display_options['fields']['field_type']['field'] = 'field_type';
  $handler->display->display_options['fields']['field_type']['label'] = '';
  $handler->display->display_options['fields']['field_type']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_type']['type'] = 'list_key';
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  /* Field: Content: Font size */
  $handler->display->display_options['fields']['field_font_size']['id'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['table'] = 'field_data_field_font_size';
  $handler->display->display_options['fields']['field_font_size']['field'] = 'field_font_size';
  $handler->display->display_options['fields']['field_font_size']['label'] = '';
  $handler->display->display_options['fields']['field_font_size']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_font_size']['type'] = 'list_key';
  /* Field: Content: Navigation */
  $handler->display->display_options['fields']['field_link']['id'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['table'] = 'field_data_field_link';
  $handler->display->display_options['fields']['field_link']['field'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['label'] = '';
  $handler->display->display_options['fields']['field_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_link']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_link']['type'] = 'link_absolute';
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Nodequeue: Position */
  $handler->display->display_options['sorts']['position']['id'] = 'position';
  $handler->display->display_options['sorts']['position']['table'] = 'nodequeue_nodes';
  $handler->display->display_options['sorts']['position']['field'] = 'position';
  $handler->display->display_options['sorts']['position']['relationship'] = 'nodequeue_rel';
  $handler->display->display_options['sorts']['position']['order'] = 'DESC';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  $handler->display->display_options['block_description'] = 'Homepage: Block System content bottom';
  $export['block_stream'] = $view;

  return $export;
}
