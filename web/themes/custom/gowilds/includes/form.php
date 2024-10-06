<?php
use Drupal\Core\Template\Attribute;
use Drupal\user\UserInterface;
use Drupal\Core\Url;

function gowilds_form_views_exposed_form_alter(array &$form) {
   //You need to verify the id
   global $base_url;
   
   $form['sort_by']['#weight'] = '-3';
   $form['sort_order']['#weight'] = '-2';

   foreach ($form['#info'] as $filter_info) {
      $filter = $filter_info['value'];
      if ($form[$filter]['#type'] == 'select') {
         unset($form['#info']['filter-' . $filter]['label']);
      }
   }
   
   $listing_search_action = 'listings';
   $language =  \Drupal::languageManager()->getCurrentLanguage()->getID();
   $languagesAll =  \Drupal::languageManager()->getLanguages();
   if(count($languagesAll) > 1){
      if(theme_get_setting('listing_search_action' . $language)){
         $listing_search_action = theme_get_setting('listing_search_action' . $language);
      }
   }else{
      if(theme_get_setting('listing_search_action')){
         $listing_search_action = theme_get_setting('listing_search_action');
      }
   }

   switch ($form['#id']) {
      case 'views-exposed-form-listing-content-listing-filter-form':
         $form['#action'] = base_path() . $listing_search_action;
         break;
   }
}
