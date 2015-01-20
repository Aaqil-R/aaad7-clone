<?php


function multistepform_config($form, &$form_state) {
  $form['#tree'] = TRUE;
  $types = webform_node_types();
  $nodes = db_select('node', 'n')
            ->fields('n', array('nid','title'))
            ->condition('type', $types,'IN')
            ->execute()
            ->fetchAllKeyed();
  $form['step_1'] = array(
    '#type' => 'fieldset',
    '#title' => 'First Step',
  );  
  $form['step_1']['node'] = array(
   '#type' => 'select',
   '#title' => 'Webform on first step',
   '#options' => $nodes,
   '#default_value' => array(),
   '#required' => TRUE,
  );
  $form['step_2'] = array(
    '#type' => 'fieldset',
    '#title' => 'First Step',
  );  
  $form['step_2']['node'] = array(
   '#type' => 'select',
   '#title' => 'Webform on second step',
   '#options' => $nodes,
   '#default_value' => array(),
   '#required' => TRUE,   
  );
  $form['step_3'] = array(
    '#type' => 'fieldset',
    '#title' => 'First Step',
  );  
  $form['step_3']['node'] = array(
   '#type' => 'select',
   '#title' => 'Webform on third step',
   '#options' => $nodes,
   '#default_value' => array(),
   '#required' => TRUE,   
  );
  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => 'Save'
  );
  return $form;
}
function multistepform_config_validate($form, &$form_state) {

}

function multistepform_config_submit($form, &$form_state) {
  $steps = array();
  dpm($form_state['values']);
  foreach($form_state['values'] as $step) {
    if (is_array($step) && isset($step['node'])){
      $steps[] = $step['node'];
    }
  }
  variable_set('multistepform_steps',$steps);
}
