<?php
function gowilds_render_block($key) {
 $block = \Drupal\block\Entity\Block::load($key);
  if($block){
  $block_content = \Drupal::entityTypeManager()
	 ->getViewBuilder('block')
	 ->view($block);
	 return \Drupal::service('renderer')->render($block_content);
  }  
  return '';
}

function gowilds_makeid($length = 5){
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, strlen($characters) - 1)];
  }
  return $randomString;
}

function gowilds_base_url(){
  global $base_url;
  $theme_path = \Drupal::service('extension.list.theme')->getPath('gowilds');
  return $base_url . '/' . $theme_path . '/';
}

global $gva_node_index;
function gowilds_preprocess_node(&$variables) {
  global $gva_node_index;
  $gva_node_index = $gva_node_index + 1;
  $variables['gva_node_index'] = $gva_node_index;
  
  $date = $variables['node']->getCreatedTime();
  $variables['date'] = t(date( 'F', $date)) . ' ' . t(date( 'j', $date)) . ', ' .t(date( 'Y', $date));
  
  if ($variables['teaser'] || !empty($variables['content']['comments']['comment_form'])) {
	 unset($variables['content']['links']['comment']['#links']['comment-add']);
  }
  if ($variables['node']->getType() == 'article') {
		$node = $variables['node'];
		$post_format = 'standard';
		try{
			$field_post_format = $node->get('field_post_format');
			if(isset($field_post_format->value) && $field_post_format->value){
				$post_format = $field_post_format->value;
			}
		}catch(Exception $e){
			$post_format = 'standard';
		}

		$iframe = '';
		if($post_format == 'video' || $post_format == 'audio'){
			try{
				$field_post_embed = $node->get('field_post_embed');
				if(isset($field_post_embed->value) && $field_post_embed->value){
					$autoembed = new AutoEmbed();
					$iframe = $autoembed->parse($field_post_embed->value);
				}else{
					$iframe = '';
					$post_format = 'standard';
				}
			}
			catch(Exception $e){
				$post_format = 'standard';
			}
		}
		$variables['gva_iframe'] = $iframe;
		$variables['post_format'] = $post_format;
  }
}

function gowilds_preprocess_node__listing(&$variables) {
  $node = $variables['node'];
  $listing_video = '';
  if($node->hasField('field_listing_video')){
	 try{
		$field_listing_video = $node->get('field_listing_video');
		  if(isset($field_listing_video->value) && $field_listing_video->value){
			 $autoembed = new AutoEmbed();
			 $listing_video = $autoembed->parse($field_listing_video->value);
		  }else{
			 $listing_video = '';
		  }
		}
	  catch(Exception $e){
	 }
  }
  $variables['listing_video'] = $listing_video;
  $view_mode = $variables['view_mode']; 
  $allowed_view_modes = ['full']; 
  if(in_array($view_mode, $allowed_view_modes)) {
	 $allowed_regions = ['listing_sidebar'];
	 gowilds_add_regions_to_node($allowed_regions, $variables);
  }
}


function gowilds_preprocess_node__event(&$variables){
  $node = $variables['node'];
  $event_date = array();
  if($node->hasField('field_event_start')){
	 $event_start = $node->field_event_start->value;
	 if($event_start){ 
		$event_date['day'] = \Drupal::service('date.formatter')->format(strtotime($event_start), 'custom', 'd');
		$event_date['month'] = \Drupal::service('date.formatter')->format(strtotime($event_start), 'custom', 'F');
	 }
  }
  $variables['event_date'] = $event_date;
}

function gowilds_preprocess_breadcrumb(&$variables){
  $variables['#cache']['max-age'] = 0;

  $request = \Drupal::request();
  $title = '';
  if ($route = $request->attributes->get(\Drupal\Core\Routing\RouteObjectInterface::ROUTE_OBJECT)) {
	 $title = \Drupal::service('title_resolver')->getTitle($request, $route);
  }

  if($variables['breadcrumb']){
	  foreach ($variables['breadcrumb'] as $key => &$value) {
		if($value['text'] == 'Node'){
		  unset($variables['breadcrumb'][$key]);
		}
	 }
	 if(!empty($title)){
		$variables['breadcrumb'][] = array(
		  'text' => ''
		);
		$variables['breadcrumb'][] = array(
		  'text' => $title
		);
	 }  
  }
}

function gowilds_print_icon($file, $alt){
  $file_content = file_get_contents($file);
  if(substr($file, -4) == '.svg'){
	 echo $file_content;
  }else{
	 echo '<img src="' . ($file) . '" alt="' . ($alt) . '" />';
  }
}


function gowilds_add_regions_to_node($allowed_regions, &$variables) {
  // Retrieve active theme
  $theme = \Drupal::theme()->getActiveTheme()->getName();
 
  // Retrieve theme regions
  $available_regions = system_region_list($theme, 'REGIONS_ALL');
 
  // Validate allowed regions with available regions
  $regions = array_intersect(array_keys($available_regions), $allowed_regions);
 
  // For each region
  foreach ($regions as $key => $region) {
 
	 // Load region blocks
	 $blocks = \Drupal::entityTypeManager()->getStorage('block')->loadByProperties(['theme' => $theme, 'region' => $region]);
 
	 // Sort ‘em
	 uasort($blocks, 'Drupal\block\Entity\Block::sort');
 
	 // Capture viewable blocks and their settings to $build
	 $build = array();
	 foreach ($blocks as $key => $block) {
		if ($block->access('view')) {
		  $builder = \Drupal::entityTypeManager()->getViewBuilder('block'); 
		  $build[$key] = $builder->view($block, 'block');
		}
	 }
 
	 // Add build to region
	 $variables[$region] = $build;
  }
}