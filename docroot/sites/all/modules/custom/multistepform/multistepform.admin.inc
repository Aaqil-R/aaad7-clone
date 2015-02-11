<?php


function multistepform_config($form, &$form_state, $node) {
  $form['#tree'] = TRUE;
  $types = webform_node_types();
  $nodes = db_select('node', 'n')
            ->fields('n', array('nid','title'))
            ->condition('type', $types,'IN')
            ->execute()
            ->fetchAllKeyed();
  $nodes_count = count($nodes);
  $nodes[0] = 'select Webform';
  ksort($nodes);
  if (!isset($form_state['steps'])){
    if (isset($node->multistep_form)){
      $stepcount = count($node->multistep_form);
      $form_state['steps'] = ($stepcount) ? $stepcount : 1;
    }else {
      $form_state['steps'] = 1;
    }
  }
  $steps = $form_state['steps'];
  $form['step'] = array(
      '#type' => 'fieldset',
      '#title' => 'First Step',
      '#prefix' => '<div id="steps-fieldset-wrapper">',
      '#suffix' => '</div>',
  );
  $weight = array(-1 => 'select weight');
  for ($j=0; $j<$steps; $j++){
    $weight[$j] = $j;
  }
  for($i = 1; $i<=$steps; $i++) {
    $form['step'][$i]['node'] = array(
     '#type' => 'select',
     '#title' => 'Choose webform node',
     '#options' => $nodes,
     '#default_value' => array(),     
     '#required' => TRUE,
    );
    if (isset($node->multistep_form[$i-1])) {
     $form['step'][$i]['node']['#default_value'] = array($node->multistep_form[$i-1]->wnid);
    }
    $form['step'][$i]['node-weight'] = array(
     '#type' => 'select',
     '#title' => 'Choose webform node',
     '#options' =>  $weight,
     '#default_value' => array(),
     '#required' => TRUE,
    );
    if (isset($node->multistep_form[$i-1])) {
     $form['step'][$i]['node-weight']['#default_value'] = array($node->multistep_form[$i-1]->weight);
    }        
  }
  $form['multistep_node'] = array('#type' => 'value','#value' => $node);
  if ($nodes_count > $steps) {
  $form['step']['add_more'] = array(
    '#type' => 'submit',
    '#value' => t('Add one more'),
    '#submit' => array('multistepform_config_add_more_submit'),
    '#ajax' => array(
      'callback' => 'multistepform_config_ajax_add_more_submit',
      'wrapper' => 'steps-fieldset-wrapper',
    ),
  );
  }
  if ($steps > 1) {
    $form['step']['remove_last'] = array(
      '#type' => 'submit',
      '#value' => t('Remove Last'),
      '#submit' => array('multistepform_config_remove_last_submit'),
      '#ajax' => array(
        'callback' => 'multistepform_config_ajax_add_more_submit',
        'wrapper' => 'steps-fieldset-wrapper',
      ),
      '#limit_validation_errors' => array(),
    );
  }
  
  $form['settings']=array(
      '#type' => 'fieldset',
      '#title' => 'Multi Step Form Settings',
  );
  $form['settings']['block'] = array(
    '#type' => 'checkbox', 
    '#title' => t('Export as block.'),
    '#default_value' => isset($node->multistep_settings['block']) ? $node->multistep_settings['block'] : 0,
  );
  $form['settings']['confirmation_status'] = array(
    '#type' => 'radios',
    '#title' => t('Response status'),
    '#options' => array(0 => t('Confirmation'), 1 => t('Redirect')),
    '#description' => t('Choose whether confirmation message or page redirection, on response to user form submission.'),
    '#default_value' => isset($node->multistep_settings['confirmation_status']) ? $node->multistep_settings['confirmation_status'] : 0,
  );
  $form['settings']['confirmation'] = array(
    '#type' => 'fieldset',
    '#states' => array(
      'visible' => array(
        ':input[name="settings[confirmation_status]"]' => array('value' => 0),
      ),
    ),    
  );
  $form['settings']['confirmation']['message'] = array(
    '#type' => 'text_format', 
    '#title' => t('Confirmation Message'),
    '#default_value' => isset($node->multistep_settings['confirmation']) ? $node->multistep_settings['confirmation'] : '',
     '#format' => isset($node->multistep_settings['confirmation_format']) ? $node->multistep_settings['confirmation_format'] : null,
  );
  $form['settings']['redirect_url'] = array(
    '#type' => 'textfield', 
    '#title' => t('Redirect URL'),
    '#states' => array(
      'visible' => array(
             ':input[name="settings[confirmation_status]"]' => array('value' => 1),
      ),
    ),
    '#default_value' => isset($node->multistep_settings['redirect_url']) ? $node->multistep_settings['redirect_url'] : '',
  );
  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => 'Save'
  );
  return $form;
}
function multistepform_config_add_more_submit($form, &$form_state) {
  $form_state['rebuild'] = TRUE;
  ++$form_state['steps'];
}
function multistepform_config_remove_last_submit($form, &$form_state) {
  $form_state['rebuild'] = TRUE;
  $form_state['steps'] = $form_state['steps']  - 1;
}
function multistepform_config_ajax_add_more_submit($form, &$form_state) {
  return $form['step'];
}

function multistepform_config_validate($form, &$form_state) {
  $values = $form_state['values'];
  $steps = $values['step'];
  $selectednodes = array();
  foreach($steps as $k => $item) {
    if (isset($item['node-weight']) && $item['node-weight'] == '-1') {
       form_set_error('step]['.$k.'][node-weight', t('Please select weight'));
    }
    if (isset($item['node']) && $item['node'] == '0') {
       form_set_error('step]['.$k.'][node', t('Please select webform'));
    }
    if (isset($item['node']) && in_array($item['node'], $selectednodes)) {
       form_set_error('step]['.$k.'][node', t('Choose different webform, as this was already selected'));
    }
    if (isset($item['node'])) {
      $selectednodes[] = $item['node'];
    }
  }
}

function multistepform_config_submit($form, &$form_state) {
  $steps = array();
  $values = array();
  foreach($form_state['values']['step'] as $step) {
    if(is_array($step) && isset($step['node'])) {
      $values[] = array('nid' => $form_state['values']['multistep_node']->nid, 'wnid' => $step['node'], 'weight' => $step['node-weight']);
    }
  }
  if (count($values)) {
    db_delete('multistepform')
    ->condition('nid', $form_state['values']['multistep_node']->nid)
    ->execute();
    $query = db_insert('multistepform')->fields(array('nid', 'wnid', 'weight'));
    foreach($values as $value) {
    $query->values($value);
    }
    $query->execute();
  }
  $settings = $form_state['values']['settings'];
  db_delete('multistepform_settings')
    ->condition('nid', $form_state['values']['multistep_node']->nid)
    ->execute();
  $nid = db_insert('multistepform_settings')
  ->fields(array(
    'nid' => $form_state['values']['multistep_node']->nid,
    'confirmation' => $settings['confirmation']['message']['value'],
    'confirmation_format' => $settings['confirmation']['message']['format'],
    'redirect_url' => $settings['redirect_url'],
    'block' => $settings['block'],
    'confirmation_status' => $settings['confirmation_status'],
  ))
  ->execute();
}
