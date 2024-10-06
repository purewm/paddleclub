<?php 
if(!class_exists('element_gva_carousel_features')):
   class element_gva_carousel_features{
      public function render_form(){
         $fields = array(
            'type' => 'element_gva_carousel_features',
            'title' => t('Carousel - Features'),
            'fields' => array(
               array(
                  'id'        => 'title',
                  'type'      => 'text',
                  'title'     => t('Title For Admin'),
                  'admin'     => true,
                  'default'   => 'Carousel - Features'
               ),
               array(
                  'id'        => 'style',
                  'type'      => 'select',
                  'title'     => t('Style'),
                  'options'   => array(
                     'style-1'   => 'Style 01',
                     'style-2'   => 'Style 02',
                     'style-3'   => 'Style 03',
                     'style-4'   => 'Style 04',
                     'style-5'   => 'Style 05',
                     'style-6'   => 'Style 06',
                     'style-7'   => 'Style 07'
                  ),
                  'class'     => 'width-1-2'
               ),
               array(
                  'id'        => 'el_class',
                  'type'      => 'text',
                  'title'     => t('Extra Class Name'),
                  'class'     => 'width-1-2'
               ),
               array(
                  'id'        => 'animate',
                  'type'      => 'select',
                  'title'     => t('Animation'),
                  'desc'      => t('Entrance animation for element'),
                  'options'   => gavias_content_builder_animate(),
                  'class'     => 'width-1-2'
               ), 
               array(
                  'id'        => 'animate_delay',
                  'type'      => 'select',
                  'title'     => t('Animation Delay'),
                  'options'   => gavias_content_builder_delay_wow(),
                  'desc'      => '0 = default',
                  'class'     => 'width-1-2'
               ),  
            ),                                     
         );

         gavias_carousel_fields_settings($fields);

         for($i=1; $i<=10; $i++){
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
               'id'        => "sub_title_{$i}",
               'type'      => 'text',
               'title'     => t("Sub Title {$i}"),
               'class'     => 'width-1-2'
            );
            $fields['fields'][] = array(
               'id'        => "image_{$i}",
               'type'      => 'upload',
               'title'     => t("Image {$i}")
            );
            $fields['fields'][] = array(
               'id'        => "icon_{$i}",
               'type'      => 'text',
               'title'     => t("Icon {$i}"),
               'class'     => 'width-1-2'
            );
            $fields['fields'][] = array(
               'id'        => "link_{$i}",
               'type'      => 'text',
               'title'     => t("Link {$i}"),
               'class'     => 'width-1-2'
            );
            $fields['fields'][] = array(
               'id'           => "content_{$i}",
               'type'         => 'text',
               'title'        => t("Content {$i}"),
            );
         }
         return $fields;
      }

      public static function render_content( $attr = array(), $content = '' ){
         global $base_url;
         $default = array(
            'title'           => '',
            'style'           => 'style-1',
            'bg_color'        => '',
            'el_class'        => '',
            'animate'         => '',
            'animate_delay'   => '',
            'col_lg'          => '4',
            'col_md'          => '3',
            'col_sm'          => '2',
            'col_xs'          => '1',
            'auto_play'       => '0',
            'pagination'      => '0',
            'navigation'      => '0'
         );

         for($i=1; $i<=10; $i++){
            $default["icon_{$i}"]      = '';
            $default["image_{$i}"]     = '';
            $default["title_{$i}"]     = '';
            $default["sub_title_{$i}"]     = '';
            $default["content_{$i}"]   = '';
            $default["link_{$i}"]      = '';
         }

         extract(gavias_merge_atts($default, $attr));

        
         $classes = array();
         $classes[] = $el_class;
         $classes[] = $style;
         if($animate){
            $classes[] = 'wow'; 
            $classes[] = $animate; 
         }  
         ob_start();
      ?>
         
      <div class="el-carousel-feature <?php echo implode(' ', $classes) ?>"> 
         <div class="owl-carousel init-carousel-owl owl-loaded owl-drag" data-items="<?php print $col_lg ?>" data-items_lg="<?php print $col_lg ?>" data-items_md="<?php print $col_md ?>" data-items_sm="<?php print $col_sm ?>" data-items_xs="<?php print $col_xs ?>" data-loop="1" data-speed="500" data-auto_play="<?php print $auto_play ?>" data-auto_play_speed="2000" data-auto_play_timeout="5000" data-auto_play_hover="1" data-navigation="<?php print $navigation ?>" data-rewind_nav="0" data-pagination="<?php print $pagination ?>" data-mouse_drag="1" data-touch_drag="1">
            <?php for($i=1; $i<=10; $i++){ ?>
               <?php 
                  $title       = "title_{$i}";
                  $sub_title   = "sub_title_{$i}";
                  $content = "content_{$i}";
                  $link    = "link_{$i}";
                  $image   = "image_{$i}";
                  $icon    = "icon_{$i}";

                  $$link = gavias_get_uri($$link);
               ?>


               <?php if($$title && $style == 'style-1'){ ?>
                  <div class="item">
                     <div class="feature-block-one__single">
                        <div class="feature-block-one__content">
                           <?php if($$image){?>
                             <div class="feature-block-one__image"><img src="<?php print ($base_url . $$image) ?>" alt="<?php print $$title ?>"/></div>
                           <?php } ?>
                        
                           <div class="feature-block-one__content-inner">
                              <?php
                                 if($$sub_title){
                                    print '<div class="feature-block-one__sub-title">' .  $$sub_title . '</div>';
                                 }
                                 if($$title){
                                    print '<h3 class="feature-block-one__title">' .  $$title . '</h3>';
                                 }
                                 if($$content){ 
                                    print '<div class="feature-block-one__desc">' . $$content . '</div>'; 
                                 }  
                              ?>
                           </div>
                        </div>
                        <?php
                           if($$link){ 
                              print '<a class="feature-block-one__overlay-link" href="' . $$link . '"></a>';
                           } 
                        ?>
                     </div>
                  </div>
               <?php } ?>   

               <?php if($$title && $style == 'style-2'){ ?>
                  <div class="item">
                     <div class="feature-block-two__single">
                        <div class="feature-block-two__content">
                           <?php if($$image){?>
                             <div class="feature-block-two__image"><img src="<?php print ($base_url . $$image) ?>" alt="<?php print $$title ?>"/></div>
                           <?php } ?>
                        
                           <div class="feature-block-two__content-inner">
                              <?php 
                                 if($$sub_title){
                                    print '<div class="feature-block-two__sub-title">' .  $$sub_title . '</div>';
                                 }
                                 if($$title){
                                    print '<h3 class="feature-block-two__title">' .  $$title . '</h3>';
                                 } 
                                 if($$link){ 
                                    print '<div class="feature-block-two__action"><a class="btn-white" href="' . $$link . '"><span>' . t('View Deals') . '</span></a></div>';
                                 } 
                              ?>
                           </div>
                        </div>
                        <?php
                           if($$link){ 
                              print '<a class="feature-block-two__overlay-link" href="' . $$link . '"></a>';
                           } 
                        ?>
                     </div>
                  </div>
               <?php } ?> 

               <?php if($$title && $style == 'style-3'){ ?>
                  <div class="item">
                     <div class="feature-block-three__single">
                        <div class="feature-block-three__content">
                           <?php if($$image){?>
                             <div class="feature-block-three__img"><img src="<?php print ($base_url . $$image) ?>" alt="<?php print $$title ?>"/></div>
                           <?php } ?>
                           
                           <div class="feature-block-three__content-inner">
                              <div class="feature-block-three__content-top">
                              <?php 
                                 if($$title){
                                    print '<h3 class="feature-block-three__title">' .  $$title . '</h3>';
                                 }
                                 if($$link||$$icon){ 
                                    print '<a class="feature-block-three__icon" href="' . $$link . '"><i class="' . $$icon . '"></i></a>';
                                 }
                              ?>
                              </div>
                              <?php
                                 if($$content){ print '<div class="feature-block-three__desc">' . $$content . '</div>'; } 
                              ?>
                           </div>
                           <?php
                              if($$link){
                                 print '<a class="feature-block-three__overlay-link" href="' . $$link . '"></a>';
                              } 
                           ?>
                        </div>
                     </div>
                  </div>
               <?php } ?> 
               <?php if($$title && $style == 'style-4'){ ?>
                  <div class="item">
                     <div class="feature-block-four__single">
                        <div class="feature-block-four__content">
                           <?php if($$image){?>
                             <div class="feature-block-four__image"><img src="<?php print ($base_url . $$image) ?>" alt="<?php print $$title ?>"/></div>
                           <?php } ?>
                           <div class="feature-block-four__box-content">
                              <div class="feature-block-four__content-inner">
                                 <?php
                                    if($$sub_title){
                                       print '<div class="feature-block-four__sub-title">' .  $$sub_title . '</div>';
                                    }
                                    if($$title){
                                       print '<h3 class="feature-block-four__title">' .  $$title . '</h3>';
                                    }
                                    if($$content){ 
                                       print '<div class="feature-block-four__desc">' . $$content . '</div>'; 
                                    }  
                                 ?>
                              </div>
                              <?php if($$link){ ?>
                                 <a class="feature-block-four__arrow" href="<?php print $$link ?>"><i class="fa-solid fa-arrow-right"></i></a>
                              <?php } ?> 
                           </div>
                        </div>
                        <?php
                           if($$link){ 
                              print '<a class="feature-block-four__overlay-link" href="' . $$link . '"></a>';
                           }  
                        ?>
                     </div>
                  </div>
               <?php } ?>  
               <?php if($$title && $style == 'style-5'){ ?>
                  <div class="item">
                     <div class="feature-block-five__single">
                        <div class="feature-block-five__content">
                           <div class="feature-block-five__content-inner">
                              <?php
                                 if($$icon){
                                    print '<span class="feature-block-five__icon"><i class="' . $$icon . '"></i></span>';
                                 }
                                 if($$title){
                                    print '<h3 class="feature-block-five__title">' .  $$title . '</h3>';
                                 }
                                 if($$content){ 
                                    print '<div class="feature-block-five__desc">' . $$content . '</div>'; 
                                 }  
                              ?>
                           </div>
                           <?php if($$image){?>
                             <div class="feature-block-five__image"><img src="<?php print ($base_url . $$image) ?>" alt="<?php print $$title ?>"/></div>
                           <?php } ?>
                           <?php if($$link){ ?>
                              <a class="feature-block-five__arrow" href="<?php print $$link ?>"><i class="fa-solid fa-arrow-right"></i></a>
                           <?php } ?> 
                        </div>
                        <?php
                           if($$link){ 
                              print '<a class="feature-block-five__overlay-link" href="' . $$link . '"></a>';
                           }  
                        ?>
                     </div>
                  </div>
               <?php } ?> 
               <?php if($$title && $style == 'style-6'){ ?>
                  <div class="item">
                     <div class="feature-block-six__single">
                        <div class="feature-block-six__content">
                           <?php if($$image){?>
                             <div class="feature-block-six__image">
                              <a href="<?php print $$link ?>"><img src="<?php print ($base_url . $$image) ?>" alt="<?php print $$title ?>"/></a></div>
                           <?php } ?>
                           <div class="feature-block-six__box-content">
                              <div class="feature-block-six__content-inner">
                                 <?php
                                    if($$sub_title){
                                       print '<div class="feature-block-six__sub-title">' .  $$sub_title . '</div>';
                                    }
                                    if($$title){
                                       print '<h3 class="feature-block-six__title">' .  $$title . '</h3>';
                                    }
                                    if($$content){ 
                                       print '<div class="feature-block-six__desc">' . $$content . '</div>'; 
                                    }  
                                 ?>
                              </div>
                              <?php if($$link){ ?>
                                 <a class="feature-block-six__arrow" href="<?php print $$link ?>"><i class="fa-solid fa-arrow-right"></i></a>
                              <?php } ?> 
                           </div>
                        </div>
                        <?php
                           if($$link){ 
                              print '<a class="feature-block-six__overlay-link" href="' . $$link . '"></a>';
                           }  
                        ?>
                     </div>
                  </div>
               <?php } ?>
               <?php if($$title && $style == 'style-7'){ ?>
                  <div class="item">
                     <div class="feature-block-seventh__single">
                           <?php if($$image){?>
                             <div class="feature-block-seventh__image">
                              <a href="<?php print $$link ?>"><img src="<?php print ($base_url . $$image) ?>" alt="<?php print $$title ?>"/></a>
                              <?php 
                                 if($$icon){
                                    print '<span class="feature-block-seventh__icon"><i class="' . $$icon . '"></i></span>';
                                 }
                              ?>
                              </div>
                           <?php } ?>
                           <div class="feature-block-seventh__content">
                              <div class="feature-block-seventh__content-inner">
                                 <?php
                                    if($$title){
                                       print '<h3 class="feature-block-seventh__title">' .  $$title . '</h3>';
                                    }
                                    if($$content){ 
                                       print '<div class="feature-block-seventh__desc">' . $$content . '</div>'; 
                                    }  
                                 ?>
                              </div>
                           </div>
                        <?php
                           if($$link){ 
                              print '<a class="feature-block-seventh__overlay-link" href="' . $$link . '"></a>';
                           }  
                        ?>
                     </div>
                  </div>
               <?php } ?>   

            <?php } ?>
         </div>   
      </div> 

         <?php return ob_get_clean();
      }

   }
 endif;  



