<?php

/**
 * @file
 * template.php
 */


/**
 * Implements template_process_node ().
 */
 function oulib_admin_intranet_theme() {

  return array(
    'units_node_form' => array(
	  'arguments' => array('form' => NULL),
	  'template' => 'templates\units-node-form',
      'render element' => 'form',
      
      ),
	  
  );
}