<?php
/**
 * @file
 * aaa_call_to_action_buttons.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function aaa_call_to_action_buttons_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'card_stream';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Cards';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Card stream';
  $handler->display->display_options['css_class'] = 'card-layout';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['row_class'] = 'card card--item';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['content'] = '<div class="card--width"></div><div class="card--gutter"></div>';
  $handler->display->display_options['header']['area']['format'] = 'full_html';
  /* Relationship: Nodequeue: Queue */
  $handler->display->display_options['relationships']['nodequeue_rel']['id'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['nodequeue_rel']['field'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['required'] = TRUE;
  $handler->display->display_options['relationships']['nodequeue_rel']['limit'] = 1;
  $handler->display->display_options['relationships']['nodequeue_rel']['names'] = array(
    'homepage_stream_nq' => 'homepage_stream_nq',
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
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Sort criterion: Nodequeue: Position */
  $handler->display->display_options['sorts']['position']['id'] = 'position';
  $handler->display->display_options['sorts']['position']['table'] = 'nodequeue_nodes';
  $handler->display->display_options['sorts']['position']['field'] = 'position';
  $handler->display->display_options['sorts']['position']['relationship'] = 'nodequeue_rel';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;

  /* Display: Master */
  $handler = $view->new_display('block', 'Master', 'home_page');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '3';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Navigation */
  $handler->display->display_options['fields']['field_link_1']['id'] = 'field_link_1';
  $handler->display->display_options['fields']['field_link_1']['table'] = 'field_data_field_link';
  $handler->display->display_options['fields']['field_link_1']['field'] = 'field_link';
  $handler->display->display_options['fields']['field_link_1']['label'] = '';
  $handler->display->display_options['fields']['field_link_1']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_link_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_link_1']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_link_1']['type'] = 'link_url';
  /* Field: Content: Path */
  $handler->display->display_options['fields']['path']['id'] = 'path';
  $handler->display->display_options['fields']['path']['table'] = 'node';
  $handler->display->display_options['fields']['path']['field'] = 'path';
  $handler->display->display_options['fields']['path']['label'] = '';
  $handler->display->display_options['fields']['path']['exclude'] = TRUE;
  $handler->display->display_options['fields']['path']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['path']['alter']['path'] = '[path]';
  $handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['path']['absolute'] = TRUE;
  /* Field: Content: Navigation */
  $handler->display->display_options['fields']['field_link']['id'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['table'] = 'field_data_field_link';
  $handler->display->display_options['fields']['field_link']['field'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['label'] = '';
  $handler->display->display_options['fields']['field_link']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_link']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['field_link']['alter']['path'] = '[field_link]';
  $handler->display->display_options['fields']['field_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_link']['empty'] = '[path]';
  $handler->display->display_options['fields']['field_link']['click_sort_column'] = 'url';
  /* Field: Content: External link */
  $handler->display->display_options['fields']['field_bsd_tools_integration']['id'] = 'field_bsd_tools_integration';
  $handler->display->display_options['fields']['field_bsd_tools_integration']['table'] = 'field_data_field_bsd_tools_integration';
  $handler->display->display_options['fields']['field_bsd_tools_integration']['field'] = 'field_bsd_tools_integration';
  $handler->display->display_options['fields']['field_bsd_tools_integration']['label'] = '';
  $handler->display->display_options['fields']['field_bsd_tools_integration']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_bsd_tools_integration']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['field_bsd_tools_integration']['alter']['path'] = '[field_bsd_tools_integration]';
  $handler->display->display_options['fields']['field_bsd_tools_integration']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_bsd_tools_integration']['empty'] = '[field_link]';
  /* Field: Content: Featured Image Pic */
  $handler->display->display_options['fields']['field_featured_image']['id'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['table'] = 'field_data_field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['field'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['label'] = '';
  $handler->display->display_options['fields']['field_featured_image']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_featured_image']['alter']['text'] = '[field_featured_image]
<a href="#" class="feature-holder">
 <span class="icon-Featured"></span>
 <span class="text">Featured</span>
</a>';
  $handler->display->display_options['fields']['field_featured_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image']['element_wrapper_type'] = 'div';
  $handler->display->display_options['fields']['field_featured_image']['element_wrapper_class'] = 'img-holder';
  $handler->display->display_options['fields']['field_featured_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_featured_image']['settings'] = array(
    'image_style' => 'understanding-autism_thumb___289_x_213__',
    'image_link' => '',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['path'] = '[field_link_1]';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_type'] = 'h5';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_wrapper_type'] = 'div';
  $handler->display->display_options['fields']['title']['element_wrapper_class'] = '.info';
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: promo description */
  $handler->display->display_options['fields']['field_promo_description']['id'] = 'field_promo_description';
  $handler->display->display_options['fields']['field_promo_description']['table'] = 'field_data_field_promo_description';
  $handler->display->display_options['fields']['field_promo_description']['field'] = 'field_promo_description';
  $handler->display->display_options['fields']['field_promo_description']['label'] = '';
  $handler->display->display_options['fields']['field_promo_description']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_promo_description']['type'] = 'text_plain';
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
  $handler->display->display_options['block_description'] = 'None';

  /* Display: Home */
  $handler = $view->new_display('block', 'Home', 'block_1');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Path */
  $handler->display->display_options['fields']['path']['id'] = 'path';
  $handler->display->display_options['fields']['path']['table'] = 'node';
  $handler->display->display_options['fields']['path']['field'] = 'path';
  $handler->display->display_options['fields']['path']['label'] = '';
  $handler->display->display_options['fields']['path']['exclude'] = TRUE;
  $handler->display->display_options['fields']['path']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['path']['alter']['path'] = '[path]';
  $handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['path']['absolute'] = TRUE;
  /* Field: Content: Navigation */
  $handler->display->display_options['fields']['field_link']['id'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['table'] = 'field_data_field_link';
  $handler->display->display_options['fields']['field_link']['field'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['label'] = '';
  $handler->display->display_options['fields']['field_link']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_link']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['field_link']['alter']['path'] = '[field_link]';
  $handler->display->display_options['fields']['field_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_link']['empty'] = '[path]';
  $handler->display->display_options['fields']['field_link']['click_sort_column'] = 'url';
  /* Field: Content: External link */
  $handler->display->display_options['fields']['field_bsd_tools_integration']['id'] = 'field_bsd_tools_integration';
  $handler->display->display_options['fields']['field_bsd_tools_integration']['table'] = 'field_data_field_bsd_tools_integration';
  $handler->display->display_options['fields']['field_bsd_tools_integration']['field'] = 'field_bsd_tools_integration';
  $handler->display->display_options['fields']['field_bsd_tools_integration']['label'] = '';
  $handler->display->display_options['fields']['field_bsd_tools_integration']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_bsd_tools_integration']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['field_bsd_tools_integration']['alter']['path'] = '[field_bsd_tools_integration]';
  $handler->display->display_options['fields']['field_bsd_tools_integration']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_bsd_tools_integration']['empty'] = '[field_link]';
  /* Field: Content: Featured Image Pic */
  $handler->display->display_options['fields']['field_featured_image']['id'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['table'] = 'field_data_field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['field'] = 'field_featured_image';
  $handler->display->display_options['fields']['field_featured_image']['label'] = '';
  $handler->display->display_options['fields']['field_featured_image']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_featured_image']['alter']['text'] = '[field_featured_image]
<a href="#" class="feature-holder">
 <span class="icon-Featured"></span>
 <span class="text">Featured</span>
</a>';
  $handler->display->display_options['fields']['field_featured_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_featured_image']['element_wrapper_type'] = 'div';
  $handler->display->display_options['fields']['field_featured_image']['element_wrapper_class'] = 'img-holder';
  $handler->display->display_options['fields']['field_featured_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_featured_image']['settings'] = array(
    'image_style' => 'understanding-autism_thumb___289_x_213__',
    'image_link' => '',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['path'] = '[field_bsd_tools_integration]';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_type'] = 'h5';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_wrapper_type'] = 'div';
  $handler->display->display_options['fields']['title']['element_wrapper_class'] = '.info';
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: promo description */
  $handler->display->display_options['fields']['field_promo_description']['id'] = 'field_promo_description';
  $handler->display->display_options['fields']['field_promo_description']['table'] = 'field_data_field_promo_description';
  $handler->display->display_options['fields']['field_promo_description']['field'] = 'field_promo_description';
  $handler->display->display_options['fields']['field_promo_description']['label'] = '';
  $handler->display->display_options['fields']['field_promo_description']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_promo_description']['type'] = 'text_plain';
  $handler->display->display_options['block_description'] = 'None';

  /* Display: call to action buttons */
  $handler = $view->new_display('block', 'call to action buttons', 'call_to_action_buttons');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['css_class'] = FALSE;
  $handler->display->display_options['css_class'] = 'call-action-buttons';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '2';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['header'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Nodequeue: Queue */
  $handler->display->display_options['relationships']['nodequeue_rel']['id'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['nodequeue_rel']['field'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['required'] = TRUE;
  $handler->display->display_options['relationships']['nodequeue_rel']['limit'] = 1;
  $handler->display->display_options['relationships']['nodequeue_rel']['names'] = array(
    'call_to_action_queue' => 'call_to_action_queue',
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
    'homepage_content_botttom_block_s' => 0,
  );
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['path'] = '[field_bsd_tools_integration]';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_type'] = 'h5';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_wrapper_type'] = 'div';
  $handler->display->display_options['fields']['title']['element_wrapper_class'] = '.info';
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: button color */
  $handler->display->display_options['fields']['field_button_color']['id'] = 'field_button_color';
  $handler->display->display_options['fields']['field_button_color']['table'] = 'field_data_field_button_color';
  $handler->display->display_options['fields']['field_button_color']['field'] = 'field_button_color';
  $handler->display->display_options['fields']['field_button_color']['label'] = '';
  $handler->display->display_options['fields']['field_button_color']['element_label_colon'] = FALSE;
  /* Field: Content: button links */
  $handler->display->display_options['fields']['field_button_links']['id'] = 'field_button_links';
  $handler->display->display_options['fields']['field_button_links']['table'] = 'field_data_field_button_links';
  $handler->display->display_options['fields']['field_button_links']['field'] = 'field_button_links';
  $handler->display->display_options['fields']['field_button_links']['label'] = '';
  $handler->display->display_options['fields']['field_button_links']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_button_links']['click_sort_column'] = 'url';
  /* Field: Broken/missing handler */
  $handler->display->display_options['fields']['field_shadow_color']['id'] = 'field_shadow_color';
  $handler->display->display_options['fields']['field_shadow_color']['table'] = 'field_data_field_shadow_color';
  $handler->display->display_options['fields']['field_shadow_color']['field'] = 'field_shadow_color';
  $handler->display->display_options['fields']['field_shadow_color']['label'] = '';
  $handler->display->display_options['fields']['field_shadow_color']['element_label_colon'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  /* Sort criterion: Nodequeue: Position */
  $handler->display->display_options['sorts']['position']['id'] = 'position';
  $handler->display->display_options['sorts']['position']['table'] = 'nodequeue_nodes';
  $handler->display->display_options['sorts']['position']['field'] = 'position';
  $handler->display->display_options['sorts']['position']['relationship'] = 'nodequeue_rel';
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
    'call_to_action_button' => 'call_to_action_button',
  );
  $handler->display->display_options['block_description'] = 'call to action buttons';
  $export['card_stream'] = $view;

  return $export;
}
