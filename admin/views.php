<?php

if (!defined('ABSPATH'))
    exit;

// Register Shortcode
function iheb_oxi_effects_shortcode($atts) {
    extract(shortcode_atts(array(
        'id' => '',
                    ), $atts));


    $q = new WP_Query(
            array('posts_per_page' => -1, 'post_type' => 'iheb-oxi-hov', 'p' => $id)
    );

    while ($q->have_posts()) : $q->the_post();
        $id = get_the_ID();
        $iheb_oxi_meta = vp_metabox('iheb_oxi_meta.style', false);
        $style = vp_metabox('iheb_oxi_meta.effectscustom.0.style', false);
        $style_effect = vp_metabox('iheb_oxi_meta.effectscustom.0.style_effect', false);
        $row_table = vp_metabox('iheb_oxi_meta.effectscustom.0.row_table', false);
        $animation = vp_metabox('iheb_oxi_meta.effectscustom.0.animation', false);
        $imagesize = vp_metabox('iheb_oxi_meta.effectscustom.0.imagesize', false);
        $imageheightsize = vp_metabox('iheb_oxi_meta.effectscustom.0.imageheightsize', false);
        $imagesizeheight = vp_metabox('iheb_oxi_meta.effectscustom.0.imagesizeheight', false);
        $iheb_bottom = vp_metabox('iheb_oxi_meta.effectscustom.0.iheb_bottom', false);
        $imageshadow = vp_metabox('iheb_oxi_meta.effectscustom.0.image_shadow', false);
        $image_custom_css = vp_metabox('iheb_oxi_meta.effectscustom.0.image_custom_css', false);
        $imageborder = vp_metabox('iheb_oxi_meta.customization.0.imageborder', false);
        $newtab = vp_metabox('iheb_oxi_meta.customization.0.newtab', false);
        $headingfontsize = vp_metabox('iheb_oxi_meta.customization.0.headingfontsize', false);
        $headingunderline = vp_metabox('iheb_oxi_meta.customization.0.headingunderline', false);
        $headingfontcolor = vp_metabox('iheb_oxi_meta.customization.0.headingfontcolor', false);
        $descriptionfontsize = vp_metabox('iheb_oxi_meta.customization.0.descriptionfontsize', false);
        $descriptionfontcolor = vp_metabox('iheb_oxi_meta.customization.0.descriptionfontcolor', false);
        $bordershadow = vp_metabox('iheb_oxi_meta.customization.0.bordershadow', false);
        $border_shadow_color = vp_metabox('iheb_oxi_meta.customization.0.border_shadow_color', false);
        $border_color = vp_metabox('iheb_oxi_meta.customization.0.border_color', false);
        $Customdescriptionfont = vp_metabox('iheb_oxi_meta.customization.0.Customdescriptionfont', false);
        $Customheadingfont = vp_metabox('iheb_oxi_meta.customization.0.Customheadingfont', false);
        $headingfont = vp_metabox('iheb_oxi_meta.customization.0.headingfont', false);
        $headingstyle = vp_metabox('iheb_oxi_meta.customization.0.headingstyle', false);
        $bottomtextalain = vp_metabox('iheb_oxi_meta.customization.0.bottomtextalain', false);
        $imagedescfontstyle = vp_metabox('iheb_oxi_meta.customization.0.imagedescfontstyle', false);
        $backgroundcolor = vp_metabox('iheb_oxi_meta.customization.0.backgroundcolor', false);
        if ($imageheightsize != '') {
            $imageheight = $imageheightsize * 100 / $imagesize;
            $imageheight = (int) $imageheight;
        } elseif ($imageheightsize == '') {
            $imageheight = $imagesizeheight;
        }

        $i = 0;
        $output = '<div class="image-ultimate-container">   <div class="image-ultimate-row"> ';


        if ($imageshadow == 'yes') {
            $image_shadow = '.image-ultimate-hover{
                                -webkit-box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
                                -moz-box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
                                box-shadow: 1px 1px 2px rgba(0,0,0,0.2);;}';
        } elseif ($imageshadow == 'no') {
            $image_shadow = '';
        } elseif ($imageshadow == '') {
            $image_shadow = '.image-ultimate-hover{
                 -webkit-box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
                                -moz-box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
                                box-shadow: 1px 1px 2px rgba(0,0,0,0.2);;}';
        }
        if ($border_shadow_color == '') {
            $border_shadow_color_filter = 'rgba(255,255,255,0.6)';
        } else {
            $border_shadow_color_filter = $border_shadow_color;
        }
        $output .= ' 
             <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=' . $Customheadingfont . '">
             <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=' . $Customdescriptionfont . '">
             <style>
             .image-ultimate-map-' . $id . ' .image-ultimate-info-circle, .image-ultimate-map-' . $id . ' .image-ultimate-info-circle-2, .image-ultimate-map-' . $id . ' .image-ultimate-info-circle-back, .image-ultimate-map-' . $id . ' .image-ultimate-info-square-25, .image-ultimate-map-' . $id . ' .image-ultimate-main-sqr-4, .image-ultimate-map-' . $id . ' .image-ultimate-main-sqr-2, .image-ultimate-map-' . $id . ' .image-ultimate-info-square { background: ' . $backgroundcolor . ' !important; }
            .image-ultimate-map-' . $id . ' .hover-img-shadow:before, .image-ultimate-map-' . $id . ' .hover-img-shadow-squre:before{ box-shadow: inset 0 0 0 ' . $bordershadow . 'px ' . $border_shadow_color_filter . ', 0 1px 2px rgba(0,0,0,0.3);}
            .image-ultimate-map-' . $id . ' .image-ultimate-hover { border:  ' . $imageborder . 'px solid ' . $border_color . '}  
            .image-ultimate-map-' . $id . ' .image-ultimate-info-circle h3, .image-ultimate-map-' . $id . ' .image-ultimate-info-circle-2 h3, .image-ultimate-map-' . $id . ' .image-ultimate-info-square h3, .image-ultimate-map-' . $id . ' .image-ultimate-main-sqr-2 h3, .image-ultimate-map-' . $id . ' .image-ultimate-main-sqr-4 h3, .image-ultimate-map-' . $id . ' .image-ultimate-info-square h3{ color:' . $headingfontcolor . ' ;font-size:' . $headingfontsize . 'px !important; padding:30% 0 5% 0; text-transform: ' . $headingfont . '; ';

        if ($headingstyle == blod) {
            $output .= 'font-weight: bold;';
        }
        if ($headingstyle == bloditalic) {
            $output .= 'font-weight: bold; font-style: italic;';
        }
        if ($headingstyle == italic) {
            $output .= ' font-style: italic;';
        }
        if ($headingstyle == normal) {
            $output .= 'font-style: normal;';
        }


        if ($headingunderline == yes) {
            $output .= ' border-bottom: 1px solid #FFF; ';
        } $output .= '   font-family: ' . $Customheadingfont . '; }
            .image-ultimate-map-' . $id . ' .image-ultimate-info-circle p , .image-ultimate-map-' . $id . ' .image-ultimate-info-circle-2 p, .image-ultimate-map-' . $id . ' .image-ultimate-info-square p, .image-ultimate-map-' . $id . ' .image-ultimate-main-sqr-2 p, 
           .image-ultimate-map-' . $id . ' .image-ultimate-main-sqr-4 p, 
           .image-ultimate-map-' . $id . ' .image-ultimate-info-square p{ color:' . $descriptionfontcolor . ';font-size:' . $descriptionfontsize . 'px !important;  font-family: ' . $Customdescriptionfont . ';
         ';

        if ($imagedescfontstyle == blod) {
            $output .= 'font-weight: bold;';
        }
        if ($imagedescfontstyle == bloditalic) {
            $output .= 'font-weight: bold; font-style: italic;';
        }
        if ($imagedescfontstyle == italic) {
            $output .= ' font-style: italic;';
        }
        if ($imagedescfontstyle == normal) {
            $output .= 'font-style: normal;';
        }
        $output .= ' }' . $image_custom_css . ' .image-ultimate-map-' . $id . ' { max-width: ' . $imagesize . 'px}.image-ultimate-map-' . $id . ':after{padding-bottom: ' . $imageheight . '% !important;} ' . $image_shadow . ' </style> ';

        if ($newtab == '_blank') {
            $target_blank = 'target="_blank"';
        }




        foreach ($iheb_oxi_meta as $info) {
            wp_enqueue_style('iheb_oxi_style', plugins_url('/style.css', __FILE__));
            if ($info[iheb_url] != '') {
                if ($iheb_bottom == '') {
                    $bottomtext = '';
                    $herf1st = '<a ' . $target_blank . ' href="' . $info[iheb_url] . '" > ';
                    $herflast = '</a>';
                } else {
                    $bottomtext = '<div class="image-ultimate-button-div" style="text-align: ' . $bottomtextalain . ';"><a ' . $target_blank . ' href="' . $info[iheb_url] . '" class="image-ultimate-button">' . $iheb_bottom . '</a></div>';
                    $herf1st = '';
                    $herflast = '';
                }
            } else {
                $bottomtext = '';
                $herf1st = '<span style="cursor: pointer;">';
                $herflast = '</span>';
            }

            if ($style == circle and $style_effect == effect1) {
                $output .= '  
                    <div class="' . $row_table . '">
                      <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                      
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-1 ' . $animation . '" >
                            ' . $herf1st . '
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3 >' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                   
                                </div>
                               ' . $herflast . '
                    </div>    </div>
                    </div>              </div>    
                               ';
            }
            if ($style == circle and $style_effect == effect2) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-border-image-ultimate image-ultimate-circle image-ultimate-circle-effect-2 ' . $animation . '" >
                                ' . $herf1st . '
                                    <div class="hover-img hover-img-shadow">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-circle"  >
                                        <h3 >' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                    </div>        </div>
                        </div>
                    </div>                  
                               ';
            }
            if ($style == circle and $style_effect == effect3) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-3" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3 >' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                   </div>     </div>
                    </div>   </div>
                               ';
            }
            if ($style == circle and $style_effect == effect4) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-4 ' . $animation . '">
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div></div>
                  </div>  </div>                                
                     ';
            }
            if ($style == circle and $style_effect == effect5) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-5" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div></div>
                  </div>  </div>                    
                               ';
            }
            if ($style == circle and $style_effect == effect6) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-6" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div></div>
                  </div>  </div>                     
                               ';
            }
            if ($style == circle and $style_effect == effect7) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-7" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                   </div> </div>  </div>                 
                   
                               ';
            }
            if ($style == circle and $style_effect == effect8) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-8" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                  </div>  </div> </div>              
                               ';
            }
            if ($style == circle and $style_effect == effect9) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-9 ' . $animation . '">
                                ' . $herf1st . '
                                    <div class="hover-img hover-img-shadow">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-circle">
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                        </div>
                    </div>       </div>                
                               ';
            }
            if ($style == circle and $style_effect == effect10) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-10" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                  </div>  </div>   </div>                    
                     
                               ';
            }
            if ($style == circle and $style_effect == effect11) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-11 ' . $animation . '" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                   </div> </div></div>
                  
                               ';
            }
            if ($style == circle and $style_effect == effect12) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-12" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                 </div>   </div></div>
                 
                               ';
            }
            if ($style == circle and $style_effect == effect13) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-13 ' . $animation . '" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                 </div>   </div></div>
                               ';
            }
            if ($style == circle and $style_effect == effect14) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-14 ' . $animation . '" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                 </div>   </div>  </div>         
                     ';
            }
            if ($style == circle and $style_effect == effect15) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-15" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                 </div>       </div>
                    </div></div>
                               ';
            }
            if ($style == circle and $style_effect == effect16) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-16" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                 </div>       </div>
                    </div></div>
                               ';
            }
            if ($style == circle and $style_effect == effect17) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-17 ' . $animation . '" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                </div>    </div>    </div>               
                               ';
            }
            if ($style == circle and $style_effect == effect18) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-18"  >
                                ' . $herf1st . '
                                    <div class="hover-img hover-img-shadow">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-circle">
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                        </div></div>
                    </div> 
                               ';
            }
            if ($style == circle and $style_effect == effect19) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-19 ' . $animation . '" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                   </div>     </div>
                    </div></div>
                               ';
            }
            if ($style == circle and $style_effect == effect20) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-20" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                   </div>     </div></div>
                    </div>     
                     
                               ';
            }
            if ($style == circle and $style_effect == effect21) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-21" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                  </div>      </div>
                    </div></div>
                  
                               ';
            }
            if ($style == circle and $style_effect == effect22) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-22 ' . $animation . '"  >
                                ' . $herf1st . '
                                    <div class="hover-img hover-img-shadow">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-circle">
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                        </div></div>
                    </div>                  
                               ';
            }
            if ($style == circle and $style_effect == effect23) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-23" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                 </div>       </div>
                    </div></div>
                               ';
            }
            if ($style == circle and $style_effect == effect24) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-24 ' . $animation . '" >
                            ' . $herf1st . ' 
                                <div class="hover-img-2 hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle-2">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                  </div>  </div></div>
                     ';
            }
            if ($style == circle and $style_effect == effect25) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-25" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                  </div>  </div></div>
                               ';
            }
            if ($style == circle and $style_effect == effect26) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-26 ' . $animation . '" >
                            ' . $herf1st . ' 
                                <div class="hover-img-2 hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <div class="image-ultimate-info-circle-back">
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                </div>
                            ' . $herflast . '
                        </div>
                   </div> </div></div>
                               ';
            }
            if ($style == circle and $style_effect == effect27) {
                $output .= '  
                   ` <div class="' . $row_table . '">
                     <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-27" >
                                <a target="_blank"  href="' . $info[iheb_url] . '">
                                    <div class="hover-img hover-img-shadow">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-circle"  >
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                    </div>    </div>
                    </div>

                               ';
            }
            if ($style == circle and $style_effect == effect28) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-28" >
                                ' . $herf1st . '
                                    <div class="hover-img hover-img-shadow">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-circle"  >
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                    </div>         
                        </div>
                    </div> </div>
                               ';
            }
            if ($style == circle and $style_effect == effect29) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-29 ' . $animation . '"  >
                            ' . $herf1st . '
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                    </div>    </div>
                    </div></div>
                               ';
            }
            if ($style == circle and $style_effect == effect30) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-30" >
                                ' . $herf1st . '
                                    <div class="hover-img hover-img-shadow">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-circle"  >
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                     </div>   
                    </div></div>
                     
                               ';
            }if ($style == circle and $style_effect == effect31) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-31" >
                                ' . $herf1st . '
                                    <div class="hover-img hover-img-shadow">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-circle" >
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                     </div>       </div>
                        </div></div>
                    
                  
                               ';
            }
            if ($style == circle and $style_effect == effect32) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-32 ' . $animation . '" >
                            ' . $herf1st . ' 
                                <div class="hover-img hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                     </div>   </div>
                    </div></div>
                 
                               ';
            }
            if ($style == circle and $style_effect == effect33) {
                $output .= '  
                    <div class="' . $row_table . '">
                      <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-33" >
                                ' . $herf1st . '
                                    <div class="hover-img hover-img-shadow">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-circle" >
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                     </div>    
                    </div> </div>
                               ';
            }
            if ($style == circle and $style_effect == effect34) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-34" >
                                ' . $herf1st . '
                                    <div class="hover-img hover-img-shadow">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-circle" >
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                     </div>       </div>
                        </div></div>
                           
                     ';
            }
            if ($style == circle and $style_effect == effect35) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-circle image-ultimate-circle-effect-35 ' . $animation . '" >
                            ' . $herf1st . ' 
                                <div class="hover-img-2 hover-img-shadow">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle-2">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                    </div>    </div>
                    </div> </div>
                               ';
            }
            if ($style == square and $style_effect == effect1) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-1" >
                                ' . $herf1st . '
                                    <div class="hover-img hover-img-shadow-squre">
                                        <img  src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-square">
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                        </div>
                  </div></div>
                   
                               ';
            }
            if ($style == square and $style_effect == effect2) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                           <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-2"  >
                                ' . $herf1st . '
                                    <div class="hover-img hover-img-shadow-squre">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-square">
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . ' 
                                    </div>
                    </div></div> </div>

                              ';
            }
            if ($style == square and $style_effect == effect3) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-3" >
                                <a target="_blank" href="' . $info[iheb_url] . '" >
                                    <div class="hover-img hover-img-shadow-squre">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-square">
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                        </div>
                     </div></div>
                              ';
            }
            if ($style == square and $style_effect == effect4) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-4" >
                                <a target="_blank" href="' . $info[iheb_url] . '" >
                                    <div class="hover-img hover-img-shadow-squre">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-square">
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                       </div> </div></div>
                     
                              ';
            }
            if ($style == square and $style_effect == effect5) {
                $output .= '  
                    <div class="' . $row_table . '">
                        <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-5" >
                             <a target="_blank" href="' . $info[iheb_url] . '" >
                                    <div class="hover-img hover-img-shadow-squre">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-square">
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                        </div>
                     </div></div>

                              ';
            }
            if ($style == square and $style_effect == effect6) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-6 ' . $animation . '" >
                                <a target="_blank" href="' . $info[iheb_url] . '" >
                                    <div class="hover-img hover-img-shadow-squre">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-square">
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                        </div></div>
                    </div>

                              ';
            }
            if ($style == square and $style_effect == effect7) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-7" >
                                ' . $herf1st . '
                                    <div class="hover-img hover-img-shadow-squre">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-square">
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div></div>
                        </div></div>
                    
                               ';
            }
            if ($style == square and $style_effect == effect8) {
                $output .= '  
                    <div class="' . $row_table . '">
                      <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-8" >
                                <a target="_blank" href="#" >
                                    <div class="hover-img hover-img-shadow-squre">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-square">
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                        </div></div></div>
                     
                               ';
            }
            if ($style == square and $style_effect == effect9) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-9" >
                                ' . $herf1st . '
                                    <div class="hover-img hover-img-shadow-squre">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-square">
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                        </div></div>
                     </div>
                               ';
            }
            if ($style == square and $style_effect == effect10) {
                $output .= '  
                    <div class="' . $row_table . '">
                    <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-10" >
                             <a target="_blank" href="' . $info[iheb_url] . '" >
                                    <div class="hover-img hover-img-shadow-squre">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-main-sqr-2">
                                        <h3>' . $info[iheb_title] . ' Here</h3>
                                        <p> ' . $info[iheb_descr] . '</p> 
                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                       </div></div>
                    </div>       
                     
                               ';
            }
            if ($style == square and $style_effect == effect11) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-11" >
                             <a target="_blank" href="' . $info[iheb_url] . '" >
                                    <div class="hover-img hover-img-shadow-squre">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-main-sqr-2">
                                        <h3>' . $info[iheb_title] . ' Here</h3>
                                        <p> ' . $info[iheb_descr] . '</p>
                                            ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                             
                        </div>
                    </div></div></div>
                  
                               ';
            }
            if ($style == square and $style_effect == effect12) {
                $output .= '  
                  <div class="' . $row_table . '">
                 <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-sqr-hover image-ultimate-square image-ultimate-square-effect-12 ' . $animation . '" >
                             <a target="_blank" href="' . $info[iheb_url] . '" >
                                    <div class="hover-img-1 hover-img-shadow-squre">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-main-sqr-4">
                                        <div class="image-ultimate-part-sqr-4" >
                                            <h3>' . $info[iheb_title] . '</h3>
                                         <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                        </div>
                                    </div>
                                ' . $herflast . '
                            </div>
                        </div></div></div>
                     
                 
                               ';
            }
            if ($style == square and $style_effect == effect13) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-13 ' . $animation . '" >
                         <a target="_blank" href="' . $info[iheb_url] . '" > 
                                 <div class="hover-img hover-img-shadow-squre">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-square">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                    </div></div></div>
                               ';
            }
            if ($style == square and $style_effect == effect14) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-14" >
                         <a target="_blank" href="' . $info[iheb_url] . '" > 
                                 <div class="hover-img hover-img-shadow-squre">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-square">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                    </div> </div>  </div>          
                     ';
            }
            if ($style == square and $style_effect == effect15) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-15" >
                             <a target="_blank" href="' . $info[iheb_url] . '" >
                                     <div class="hover-img hover-img-shadow-squre">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-square">
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                           
                        </div>
                    </div></div></div>
                               ';
            }
            if ($style == square and $style_effect == effect16) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-16" >
                         <a target="_blank" href="' . $info[iheb_url] . '" > 
                                 <div class="hover-img hover-img-shadow-squre">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-square">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                    </div>  </div></div>
                               ';
            }
            if ($style == square and $style_effect == effect17) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-17" >
                         <a target="_blank" href="' . $info[iheb_url] . '" > 
                                 <div class="hover-img hover-img-shadow-squre">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-square">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                    </div></div></div>
                   
                               ';
            }
            if ($style == square and $style_effect == effect18) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-18" >
                         <a target="_blank" href="' . $info[iheb_url] . '" > 
                                 <div class="hover-img hover-img-shadow-squre">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-square">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                    </div></div></div>
                               ';
            }
            if ($style == square and $style_effect == effect19) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-19 ' . $animation . '" >
                         <a target="_blank" href="' . $info[iheb_url] . '" > 
                                 <div class="hover-img hover-img-shadow-squre">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                    </div>  </div></div>
                               ';
            }
            if ($style == square and $style_effect == effect20) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-square image-ultimate-border-image-ultimate-5 image-ultimate-square-effect-20 ' . $animation . '" >
                         <a target="_blank" href="' . $info[iheb_url] . '" > 
                                 <div class="hover-img hover-img-shadow-squre">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-circle">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                    </div>  </div>   </div>
                     
                               ';
            }
            if ($style == square and $style_effect == effect21) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                        <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-21" >
                         <a target="_blank" href="' . $info[iheb_url] . '" > 
                                 <div class="hover-img hover-img-shadow-squre">
                                    <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                </div>
                                <div class="image-ultimate-info-square">
                                    <h3>' . $info[iheb_title] . '</h3>
                                 <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                </div>
                            ' . $herflast . '
                        </div>
                    </div></div></div>
                  
                               ';
            }
            if ($style == square and $style_effect == effect22) {
                $output .= '  
                    <div class="' . $row_table . '">
                     <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-22 ' . $animation . '" >
                                <a target="_blank" href="' . $info[iheb_url] . '" >
                                    <div class="hover-img hover-img-shadow-squre">
                                       <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                   <div class="image-ultimate-info-square">
                                       <h3>' . $info[iheb_title] . '</h3>
                                    <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                   </div>
                               ' . $herflast . '
                            </div>   
                        </div></div></div>
                   
                               ';
            }
            if ($style == square and $style_effect == effect23) {
                $output .= '  
                    <div class="' . $row_table . '">
                      <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-23" >
                             <a target="_blank" href="' . $info[iheb_url] . '" >
                                     <div class="hover-img hover-img-shadow-squre">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-square">
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                        </div></div></div>
                   
                               ';
            }
            if ($style == square and $style_effect == effect24) {
                $output .= '  
                    <div class="' . $row_table . '">
                       <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class="image-ultimate-hover image-ultimate-square image-ultimate-square-effect-24" >
                             <a target="_blank" href="' . $info[iheb_url] . '" >
                                     <div class="hover-img hover-img-shadow-squre">
                                        <img src="' . $info[iheb_upload] . '" alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-square" >
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                        </div></div></div>
                              
                     ';
            }
            if ($style == square and $style_effect == effect25) {
                $output .= '  
                    <div class="' . $row_table . '">
                 <div class="image-ultimate-map image-ultimate-map-' . $id . '"><div class="image-ultimate-map-absulate">
                            <div class=" image-ultimate-hover image-ultimate-sqr-hover image-ultimate-square image-ultimate-square-effect-25 ' . $animation . '" >
                             <a target="_blank" href="' . $info[iheb_url] . '" >
                                    <div class="hover-img-3  hover-img-shadow-squre">
                                        <img src="' . $info[iheb_upload] . '"  alt="' . $info[iheb_title] . '">
                                    </div>
                                    <div class="image-ultimate-info-square-25 ">
                                        <h3>' . $info[iheb_title] . '</h3>
                                     <p>' . $info[iheb_descr] . '</p>                                        ' . $bottomtext . ' 
                                    </div>
                                ' . $herflast . '
                            </div>
                        </div></div></div>
                  
                               ';
            }



            $i++;
        }
        $output .= '</div></div>';

    endwhile;
    wp_reset_query();
    return $output;
}

add_shortcode('iheb_oxi_hover', 'iheb_oxi_effects_shortcode');
