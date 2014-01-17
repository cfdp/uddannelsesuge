<?php
// Added to make multiple youtube video embedding possible.
drupal_add_http_header('X-XSS-Protection', '0');

/*
* Preprocess function to allow the rendering of regions in node templates
*//*
function uddannelsesuge_preprocess_node(&$variables) {
	// Get a list of all the regions for this theme
	foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {

		// Get the content for each region and add it to the $region variable
		if ($blocks = block_get_blocks_by_region($region_key)) {
			$variables['region'][$region_key] = $blocks;
		}
		else {
			$variables['region'][$region_key] = array();
		}
	}
}*/

// Customize submit button on registration-form
function uddannelsesuge_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'registration_form') {
    $form['actions']['submit']['#value'] = t('Send tilmelding');
    
    // Mark registration email field as required
    $form['anon_mail']['#required'] = 1 ;
  }
}