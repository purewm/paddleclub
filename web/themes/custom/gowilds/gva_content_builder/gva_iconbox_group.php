<?php 
if(!class_exists('element_gva_iconbox_group')):
   class element_gva_iconbox_group{
      public function render_form(){
         $fields = array(
            'type' => 'gsc_iconbox_group',
            'title' => t('IconBox List'),
            'fields' => array(
               array(
                  'id'        => 'title',
                  'type'      => 'text',
                  'title'     => t('Title For Admin'),
                  'default'   => t('Iconbox List'),
                  'admin'     => true,
                  'class'     => 'display-admin width-1-2'
               ),
               array(
                  'id'        => 'style',
                  'type'      => 'select',
                  'title'     => t('Style'),
                  'options'   => array(
                     'style-1'   => 'Style I',
                     'style-2'   => 'Style II',
                     'style-3'   => 'Style III',
                  ),
                  'class'     => 'width-1-2'
               ),
               array(
                  'id'        => 'animate',
                  'type'      => 'select',
                  'title'     => t('Animation'),
                  'desc'      => t('Entrance animation for element'),
                  'options'   => gavias_content_builder_animate(),
                  'class'     => 'width-1-3'
               ), 
               array(
                  'id'        => 'animate_delay',
                  'type'      => 'select',
                  'title'     => t('Animation Delay'),
                  'options'   => gavias_content_builder_delay_wow(),
                  'desc'      => '0 = default',
                  'class'     => 'width-1-3'
               ), 
               array(
                  'id'        => 'el_class',
                  'type'      => 'text',
                  'title'     => t('Extra class name'),
                  'class'     => 'width-1-3',
                  'desc'      => t('Add custom class for element'),
               ),   
            ),                                     
         );

         
      
         for($i = 1; $i <= 10; $i++){
            $fields['fields'][] = array(
               'id'     => "info_{$i}",
               'type'   => 'info',
               'desc'   => "Information for item {$i}"
            );
            $fields['fields'][] = array(
               'id'        => "title_{$i}",
               'type'      => 'text',
               'title'     => t("Title {$i}"),
               'class'     => 'width-1-2'
            );
            $fields['fields'][] = array(
               'id'           => "icon_{$i}",
               'type'         => 'text',
               'title'        => t("Icon {$i}"),
               'desc'         => t('Use class icon font <a target="_blank" href="http://fontawesome.io/icons/">Icon Awesome</a> or <a target="_blank" href="http://gaviasthemes.com/icons/icons-2/">Custom icon</a>'),
               'class'        => 'width-1-2'
            );
            $fields['fields'][] = array(
               'id'           => "desc_{$i}",
               'type'         => 'text',
               'title'        => t("Description {$i}"),
               'class'        => 'width-1-2'
            );
            $fields['fields'][] = array(
               'id'        => "link_{$i}",
               'type'      => 'text',
               'title'     => t("Link {$i}"),
               'class'     => 'width-1-2'
            );
         }

         
         return $fields;
      }

      public static function render_content( $attr = array(), $content = '' ){
         global $base_url;
         $default = array(
            'title'           => '',
            'style'           => 'style-1',
            'el_class'        => '',
            'animate'         => '',
            'animate_delay'   => '',
            
         );

         for($i=1; $i<=10; $i++){
            $default["title_{$i}"] = '';
            $default["icon_{$i}"] = '';
            $default["desc_{$i}"] = '';
            $default["link_{$i}"] = '';
         }

         extract(gavias_merge_atts($default, $attr));

         $classes = array();
         $classes[] = $el_class;
         $classes[] = $style;
         if($animate){
            $classes[] = 'wow';
            $classes[] = $animate;
         } 
         $class = implode(' ', $classes);

         ob_start();
         ?>
         <div class="gsc-iconbox-group <?php print $class ?>" <?php print gavias_content_builder_print_animate_wow('', $animate_delay) ?>> 
            <div class="iconbox-group-list">
               <?php 
                  for($i=1; $i<=10; $i++){ 
                
                     $title = "title_{$i}";
                     $icon = "icon_{$i}";
                     $desc = "desc_{$i}";
                     $link = "link_{$i}";
                     $$link = gavias_get_uri($$link);
                     

                     if($$title && $style == 'style-1'){
                        print '<div class="iconbox-group-one__single">';
                           
                           print '<div class="iconbox-group-one__wrapper">';
                              print '<div class="iconbox-group-one__icon-inner">';
                                 print '<div class="iconbox-group-one__icon-check"></div>';
                                 if($$icon){ 
                                    print '<div class="iconbox-group-one__icon"><i class="'. $$icon .'"></i></div>';
                                 }
                              print '</div>';    
                              print '<div class="iconbox-group-one__content">';
                                 if($$title){
                                    print '<h3 class="iconbox-group-one__title">' .  $$title . '</h3>';
                                 }       
                                 if($$desc){ 
                                    print '<div class="iconbox-group-one__desc">' . $$desc . '</div>';
                                 }  
                              print '</div>';     
                           print '</div>';
                           if($$link){ 
                                 print '<a class="iconbox-group-one__overlay-link" href="' . $$link . '"></a>'; 
                              }

                        print '</div>';  
                     }

                     if($$title && $style == 'style-2'){
                        print '<div class="iconbox-group-two__single">';
                           print '<div class="iconbox-group-two__wrapper">';
                              print '<div class="iconbox-group-two__icon-inner">';
                                 if($$icon){ 
                                    print '<div class="iconbox-group-two__icon"><i class="'. $$icon .'"></i></div>';
                                 }
                              print '</div>';    
                              print '<div class="iconbox-group-two__content">';
                                 if($$title){
                                    print '<h3 class="iconbox-group-two__title">' .  $$title . '</h3>';
                                 }       
                                 if($$desc){ 
                                    print '<div class="iconbox-group-two__desc">' . $$desc . '</div>';
                                 }  
                              print '</div>';    
                           print '</div>';
                           if($$link){ 
                                 print '<a class="iconbox-group-two__overlay-link" href="' . $$link . '"></a>'; 
                              }
                        print '</div>';  
                     } 

                     if($$title && $style == 'style-3'){
                        print '<div class="item"><div class="iconbox-group-three__single">';
                           print '<div class="iconbox-group-three__wrapper">';
                              print '<div class="iconbox-group-three__icon-inner">';
                                 if($$icon){ 
                                    print '<div class="iconbox-group-three__icon"><i class="'. $$icon .'"></i></div>';
                                 }
                              print '</div>';    
                              print '<div class="iconbox-group-three__content">';
                                 if($$title){
                                    print '<h3 class="iconbox-group-three__title">' .  $$title . '</h3>';
                                 }  
                              print '</div>';    
                           print '</div>';
                           if($$link){ 
                                 print '<a class="iconbox-group-three__overlay-link" href="' . $$link . '"></a>'; 
                              }
                        print '</div></div>';  
                     }
                  } 
               ?>
            </div> 
         </div>   
         <?php return ob_get_clean();
      }
   }
 endif;  



