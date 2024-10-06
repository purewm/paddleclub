<?php 
if(!class_exists('element_gva_feature_block')):
   class element_gva_feature_block{
      public function render_form(){
         $fields = array(
            'type' => 'element_gva_feature_block',
            'title' => t('Features Block'),
            'fields' => array(
               array(
                  'id'        => 'sub_title',
                  'type'      => 'text',
                  'title'     => t('Sub Title'),
                  'default'   => 'IT services',
                  'class'     => 'width-1-2'
               ),
               array(
                  'id'        => 'title',
                  'type'      => 'text',
                  'title'     => t('Title'),
                  'admin'     => true,
                  'default'   => 'Manage IT services',
                  'class'     => 'width-1-2'
               ),
               array(
                  'id'        => "image",
                  'type'      => 'upload',
                  'title'     => t("Image"),
                  'default'   => '/sites/default/files/gbb-uploads/image-1.jpg',
                  'class'     => 'width-1-2'
               ),
               array(
                  'id'        => 'icon',
                  'type'      => 'text',
                  'title'     => t('Icon class'),
                  'class'     => 'width-1-2'
               ),
               array(
                  'id'           => "content",
                  'type'         => 'text',
                  'title'        => t("Content"),
               ),
               array(
                  'id'        => "link",
                  'type'      => 'text',
                  'title'     => t("Link"),
                  'class'     => 'width-1-3'
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
                     'style-7'   => 'Style 07',
                     'style-8'   => 'Style 08',
                     'style-9'   => 'Style 09'
                  ),
                  'class'     => 'width-1-3'
               ),
               array(
                  'id'        => 'min_height',
                  'type'      => 'number',
                  'title'     => t('Min Height'),
                  'class'     => 'width-1-3'
               ),
               array(
                  'id'        => 'el_class',
                  'type'      => 'text',
                  'title'     => t('Extra Class Name'),
                  'class'     => 'width-1-3'
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
            ),                                     
         );
         return $fields;
      }

      public static function render_content( $attr = array(), $content = '' ){
         global $base_url;
         $default = array(
            'sub_title'       => '',
            'title'           => '',
            'style'           => 'style-1',
            'min_height'      => '',
            'icon'            => '',
            'image'           => '',
            'content'         => '',
            'link'            => '',
            'el_class'        => '',
            'animate'         => '',
            'animate_delay'   => '',
            
         );

         extract(gavias_merge_atts($default, $attr));

         $box_style = '';
         if( $min_height ){
            $box_style = 'style="min-height:'. intval( $min_height ) .'px"';
         } 

         $classes = array();
         $classes[] = $el_class;
         $classes[] = $style;
         if($animate){
            $classes[] = 'wow'; 
            $classes[] = $animate; 
         }  
         $link = gavias_get_uri($link);
         ob_start();
      ?>
         
      <div class="el-feature-block <?php echo implode(' ', $classes) ?>"> 
         <?php if($title && $style == 'style-1'){ ?>
            <div class="feature-block-one__single">
               <div class="feature-block-one__content" <?php print $box_style ?>>
                  <?php if($image){?>
                    <div class="feature-block-one__image"><img src="<?php print ($base_url . $image) ?>" alt="<?php print $title ?>"/></div>
                  <?php } ?>
               
                  <div class="feature-block-one__content-inner">
                     <?php
                        if($sub_title){
                           print '<div class="feature-block-one__sub-title">' .  $sub_title . '</div>';
                        }
                        if($title){
                           print '<h3 class="feature-block-one__title">' .  $title . '</h3>';
                        }
                        if($content){ 
                           print '<div class="feature-block-one__desc">' . $content . '</div>'; 
                        }  
                     ?>
                  </div>
               </div>
               <?php
                  if($link){ 
                     print '<a class="feature-block-one__overlay-link" href="' . $link . '"></a>';
                  } 
               ?>
            </div>
         <?php } ?>   

         <?php if($style == 'style-2'){ ?>
            <div class="feature-block-two__single">
               <div class="feature-block-two__content">
                  <?php if($image){?>
                    <div class="feature-block-two__image"><img src="<?php print ($base_url . $image) ?>" alt="<?php print $title ?>"/></div>
                  <?php } ?>
               
                  <div class="feature-block-two__content-inner">
                     <?php 
                        if($sub_title){
                           print '<div class="feature-block-two__sub-title">' .  $sub_title . '</div>';
                        }
                        if($title){
                           print '<h3 class="feature-block-two__title">' .  $title . '</h3>';
                        } 
                        if($link){ 
                           print '<div class="feature-block-two__action"><a class="btn-white" href="' . $link . '"><span>' . t('View Deals') . '</span></a></div>';
                        } 
                     ?>
                  </div>
               </div>
               <?php
                  if($link){ 
                     print '<a class="feature-block-two__overlay-link" href="' . $link . '"></a>';
                  } 
               ?>
            </div>
         <?php } ?> 

         <?php if($style == 'style-3'){ ?>
            <div class="feature-block-three__single">
               <div class="feature-block-three__content">
                  <?php if($image){?>
                    <div class="feature-block-three__img"><img src="<?php print ($base_url . $image) ?>" alt="<?php print $title ?>"/></div>
                  <?php } ?>
                  
                  <div class="feature-block-three__content-inner">
                     <div class="feature-block-three__content-top">
                     <?php 
                        if($title){
                           print '<h3 class="feature-block-three__title">' .  $title . '</h3>';
                        }
                        if($link||$icon){ 
                           print '<a class="feature-block-three__icon" href="' . $link . '"><i class="' . $icon . '"></i></a>';
                        }
                     ?>
                     </div>
                     <?php
                        if($content){ print '<div class="feature-block-three__desc">' . $content . '</div>'; } 
                     ?>
                  </div>
                  <?php
                     if($link){
                        print '<a class="feature-block-three__overlay-link" href="' . $link . '"></a>';
                     } 
                  ?>
               </div>
            </div>
         <?php } ?>

         <?php if($style == 'style-4'){ ?>
            <div class="feature-block-four__single">
               <div class="feature-block-four__content">
                  <?php if($image){?>
                    <div class="feature-block-four__image"><img src="<?php print ($base_url . $image) ?>" alt="<?php print $title ?>"/></div>
                  <?php } ?>
                  <div class="feature-block-four__box-content">
                     <div class="feature-block-four__content-inner">
                        <?php
                           if($sub_title){
                              print '<div class="feature-block-four__sub-title">' .  $sub_title . '</div>';
                           }
                           if($title){
                              print '<h3 class="feature-block-four__title">' .  $title . '</h3>';
                           }
                           if($content){ 
                              print '<div class="feature-block-four__desc">' . $content . '</div>'; 
                           }  
                        ?>
                     </div>
                     <?php if($link){ ?>
                        <a class="feature-block-four__arrow" href="<?php print $link ?>"><i class="fa-solid fa-arrow-right"></i></a>
                     <?php } ?> 
                  </div>
               </div>
               <?php
                  if($link){ 
                     print '<a class="feature-block-four__overlay-link" href="' . $link . '"></a>';
                  }  
               ?>
            </div>
         <?php } ?> 

         <?php if($style == 'style-5'){ ?>
            <div class="feature-block-five__single">
               <div class="feature-block-five__content">
                  <div class="feature-block-five__content-inner">
                     <?php
                        if($icon){
                           print '<span class="feature-block-five__icon"><i class="' . $icon . '"></i></span>';
                        }
                        if($title){
                           print '<h3 class="feature-block-five__title">' .  $title . '</h3>';
                        }
                        if($content){ 
                           print '<div class="feature-block-five__desc">' . $content . '</div>'; 
                        }  
                     ?>
                  </div>
                  <?php if($image){?>
                    <div class="feature-block-five__image"><img src="<?php print ($base_url . $image) ?>" alt="<?php print $title ?>"/></div>
                  <?php } ?>
                  <?php if($link){ ?>
                     <a class="feature-block-five__arrow" href="<?php print $link ?>"><i class="fa-solid fa-arrow-right"></i></a>
                  <?php } ?> 
               </div>
               <?php
                  if($link){ 
                     print '<a class="feature-block-five__overlay-link" href="' . $link . '"></a>';
                  }  
               ?>
            </div>
         <?php } ?> 
         <?php if($style == 'style-6'){ ?>
            <div class="feature-block-six__single">
               <div class="feature-block-six__content">
                  <?php if($image){?>
                    <div class="feature-block-six__image">
                     <a href="<?php print $link ?>"><img src="<?php print ($base_url . $image) ?>" alt="<?php print $title ?>"/></a></div>
                  <?php } ?>
                  <div class="feature-block-six__box-content">
                     <div class="feature-block-six__content-inner">
                        <?php
                           if($sub_title){
                              print '<div class="feature-block-six__sub-title">' .  $sub_title . '</div>';
                           }
                           if($title){
                              print '<h3 class="feature-block-six__title">' .  $title . '</h3>';
                           }
                           if($content){ 
                              print '<div class="feature-block-six__desc">' . $content . '</div>'; 
                           }  
                        ?>
                     </div>
                     <?php if($link){ ?>
                        <a class="feature-block-six__arrow" href="<?php print $link ?>"><i class="fa-solid fa-arrow-right"></i></a>
                     <?php } ?> 
                  </div>
               </div>
               <?php
                  if($link){ 
                     print '<a class="feature-block-six__overlay-link" href="' . $link . '"></a>';
                  }  
               ?>
            </div>
         <?php } ?>   
         <?php if($style == 'style-7'){ ?>
            <div class="feature-block-seventh__single">
               <?php if($image){?>
                 <div class="feature-block-seventh__image">
                  <a href="<?php print $link ?>"><img src="<?php print ($base_url . $image) ?>" alt="<?php print $title ?>"/></a>
                  <?php 
                     if($icon){
                        print '<span class="feature-block-seventh__icon"><i class="' . $icon . '"></i></span>';
                     }
                  ?>
                  </div>
               <?php } ?>
               <div class="feature-block-seventh__content">
                  <div class="feature-block-seventh__content-inner">
                     <?php
                        if($title){
                           print '<h3 class="feature-block-seventh__title">' .  $title . '</h3>';
                        }
                        if($content){ 
                           print '<div class="feature-block-seventh__desc">' . $content . '</div>'; 
                        }  
                     ?>
                  </div>
               </div>
            <?php
               if($link){ 
                  print '<a class="feature-block-seventh__overlay-link" href="' . $link . '"></a>';
               }  
            ?>
         </div>
         <?php } ?> 
         <?php if($style == 'style-8'){ ?>
            <div class="feature-block-eight__single">
               <?php if($image){?>
                 <div class="feature-block-eight__image">
                  <a href="<?php print $link ?>"><img src="<?php print ($base_url . $image) ?>" alt="<?php print $title ?>"/></a>
                  </div>
               <?php } ?>

               <div class="feature-block-eight__content">
                  <div class="feature-block-eight__content-inner">
                     <?php 
                        if($icon){
                           print '<span class="feature-block-eight__icon"><i class="' . $icon . '"></i></span>';
                        }
                        if($title){
                           print '<h3 class="feature-block-eight__title">' .  $title . '</h3>';
                        }
                        if($content){ 
                           print '<div class="feature-block-eight__desc">' . $content . '</div>'; 
                        }  
                     ?>
                  </div>
               </div>
            <?php
               if($link){ 
                  print '<a class="feature-block-eight__overlay-link" href="' . $link . '"></a>';
               }  
            ?>
            </div>
         <?php } ?> 
         <?php if($style == 'style-9'){ ?>
            <div class="feature-block-nine__single">
               <div class="feature-block-nine__content">
                  <?php if($image){?>
                    <div class="feature-block-nine__image">
                     <a href="<?php print $link ?>"><img src="<?php print ($base_url . $image) ?>" alt="<?php print $title ?>"/></a></div>
                  <?php } ?>
                  <div class="feature-block-nine__box-content">
                     <div class="feature-block-nine__content-inner">
                        <?php
                           if($sub_title){
                              print '<div class="feature-block-nine__sub-title">' .  $sub_title . '</div>';
                           }
                           if($title){
                              print '<h3 class="feature-block-nine__title">' .  $title . '</h3>';
                           }
                           if($content){ 
                              print '<div class="feature-block-nine__desc">' . $content . '</div>'; 
                           }  
                        ?>
                     </div>
                     <?php if($link){ ?>
                        <a class="feature-block-nine__arrow" href="<?php print $link ?>"><i class="<?php print $icon ?>"></i></a>
                     <?php } ?> 
                  </div>
               </div>
               <?php
                  if($link){ 
                     print '<a class="feature-block-nine__overlay-link" href="' . $link . '"></a>';
                  }  
               ?>
            </div>
         <?php } ?>   
      </div> 

      <?php return ob_get_clean();
      }
   }
endif;

