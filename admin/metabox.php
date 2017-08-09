<?php

if (!defined('ABSPATH'))
    exit;
return array(
    array(
        'type' => 'group',
        'repeating' => true,
        'sortable' => true,
        'name' => 'style',
        'priority' => 'high',
        'title' => __('Image Hover Item', 'vp_textdomain'),
        'fields' => array(
            array(
                'type' => 'upload',
                'name' => 'iheb_upload',
                'label' => __('Hover Image', 'vp_textdomain'),
            ),
            array(
                'type' => 'textbox',
                'name' => 'iheb_title',
                'label' => __('Title', 'vp_textdomain'),
                'default' => 'Heading Here',
            ),
            array(
                'type' => 'textbox',
                'name' => 'iheb_descr',
                'label' => __('Description', 'vp_textdomain'),
                'default' => 'Description goes here',
            ),
            array(
                'type' => 'textbox',
                'name' => 'iheb_url',
                'label' => __('Image Link', 'vp_textdomain'),
                'default' => '#',
            ),
        ),
    ),
    array(
        'type' => 'group',
        'repeating' => false,
        'sortable' => true,
        'name' => 'effectscustom',
        'priority' => 'high',
        'title' => __('Effects Settings', 'vp_textdomain'),
        'fields' => array(
            array(
                'type' => 'notebox',
                'name' => 'notebox',
                'label' => __('Author Comment', 'vp_textdomain'),
                'description' => __('To see all styles and effects use the <a target="_blank" href="https://www.oxilab.org/demo/image-hover-ultimate/">demo site</a>', 'vp_textdomain'),
                'status' => 'normal',
            ),
            array(
                'type' => 'radiobutton',
                'name' => 'style',
                'label' => __('Select Hover Type', 'vp_textdomain'),
                'default' => array(
                    '{{first}}',
                ),
                'items' => array(
                    array(
                        'value' => 'circle',
                        'label' => 'Circle',
                    ),
                    array(
                        'value' => 'square',
                        'label' => 'Square',
                    ),
                ),
            ),
            array(
                'type' => 'select',
                'name' => 'style_effect',
                'label' => __('Hover Animation', 'vp_textdomain'),
                'default' => array(
                    '{{first}}',
                ),
                'items' => array(
                    array(
                        'value' => 'effect1',
                        'label' => 'Effect 1',
                    ),
                    array(
                        'value' => 'effect2',
                        'label' => 'Effect 2',
                    ),
                    array(
                        'value' => 'effect3',
                        'label' => 'Effect 3',
                    ),
                    array(
                        'value' => 'effect4',
                        'label' => 'Effect 4',
                    ),
                    array(
                        'value' => 'effect5',
                        'label' => 'Effect 5',
                    ),
                    array(
                        'value' => 'effect6',
                        'label' => 'Effect 6',
                    ),
                    array(
                        'value' => 'effect7',
                        'label' => 'Effect 7',
                    ),
                    array(
                        'value' => 'effect8',
                        'label' => 'Effect 8',
                    ),
                    array(
                        'value' => 'effect9',
                        'label' => 'Effect 9',
                    ),
                    array(
                        'value' => 'effect10',
                        'label' => 'Effect 10',
                    ),
                    array(
                        'value' => 'effect11',
                        'label' => 'Effect 11',
                    ),
                    array(
                        'value' => 'effect12',
                        'label' => 'Effect 12',
                    ),
                    array(
                        'value' => 'effect13',
                        'label' => 'Effect 13',
                    ),
                    array(
                        'value' => 'effect14',
                        'label' => 'Effect 14',
                    ),
                    array(
                        'value' => 'effect15',
                        'label' => 'Effect 15',
                    ),
                    array(
                        'value' => 'effect16',
                        'label' => 'Effect 16',
                    ),
                    array(
                        'value' => 'effect17',
                        'label' => 'Effect 17',
                    ),
                    array(
                        'value' => 'effect18',
                        'label' => 'Effect 18',
                    ),
                    array(
                        'value' => 'effect19',
                        'label' => 'Effect 19',
                    ),
                    array(
                        'value' => 'effect20',
                        'label' => 'Effect 20',
                    ),
                    array(
                        'value' => 'effect21',
                        'label' => 'Effect 21',
                    ),
                    array(
                        'value' => 'effect22',
                        'label' => 'Effect 22',
                    ),
                    array(
                        'value' => 'effect23',
                        'label' => 'Effect 23',
                    ),
                    array(
                        'value' => 'effect24',
                        'label' => 'Effect 24',
                    ),
                    array(
                        'value' => 'effect25',
                        'label' => 'Effect 25',
                    ),
                    array(
                        'value' => 'effect26',
                        'label' => 'Effect 26',
                    ),
                    array(
                        'value' => 'effect27',
                        'label' => 'Effect 27',
                    ),
                    array(
                        'value' => 'effect28',
                        'label' => 'Effect 28',
                    ),
                    array(
                        'value' => 'effect29',
                        'label' => 'Effect 29',
                    ),
                    array(
                        'value' => 'effect30',
                        'label' => 'Effect 30',
                    ),
                    array(
                        'value' => 'effect31',
                        'label' => 'Effect 31',
                    ),
                    array(
                        'value' => 'effect32',
                        'label' => 'Effect 32',
                    ),
                    array(
                        'value' => 'effect33',
                        'label' => 'Effect 33',
                    ),
                    array(
                        'value' => 'effect34',
                        'label' => 'Effect 34',
                    ),
                    array(
                        'value' => 'effect35',
                        'label' => 'Effect 35',
                    ),
                ),
            ),
            array(
                'type' => 'radiobutton',
                'name' => 'animation',
                'label' => __('Animation Direction', 'vp_textdomain'),
                'default' => array(
                    '{{first}}',
                ),
                'items' => array(
                    array(
                        'value' => 'image-ultimate-left-to-right',
                        'label' => 'Left to Right',
                    ),
                    array(
                        'value' => 'image-ultimate-right-to-left',
                        'label' => 'Right to Left',
                    ),
                    array(
                        'value' => 'image-ultimate-top-to-bottom',
                        'label' => 'Top to Bottom',
                    ),
                    array(
                        'value' => 'image-ultimate-bottom-to-top',
                        'label' => 'Bottom to Top',
                    ),
                ),
            ),
             array(
                'type' => 'select',
                'name' => 'row_table',
                'label' => __('How many item\'s show in Display?', 'vp_textdomain'),
                'default' => 'image-ultimate-responsive-3',
                'items' => array(
                    array(
                        'value' => 'image-ultimate-responsive-1',
                        'label' => '1',
                    ),
                    array(
                        'value' => 'image-ultimate-responsive-2',
                        'label' => '2',
                    ),
                    array(
                        'value' => 'image-ultimate-responsive-3',
                        'label' => '3',
                    ),
                    array(
                        'value' => 'image-ultimate-responsive-4',
                        'label' => '4',
                    ),
                    array(
                        'value' => 'image-ultimate-responsive-5',
                        'label' => '5',
                    ),
                    array(
                        'value' => 'image-ultimate-responsive-6',
                        'label' => '6',
                    ),
                ),
            ),
            array(
                'type' => 'slider',
                'name' => 'imagesize',
                'label' => __('Image Size', 'vp_textdomain'),
                'description' => __('Default value is 230px', 'vp_textdomain'),
                'min' => '100',
                'max' => '500',
                'step' => '5',
                'default' => '230',
            ),
            array(
                'type' => 'slider',
                'name' => 'imageheightsize',
                'label' => __('Image Height', 'vp_textdomain'),
                'description' => __('Default value is 230px', 'vp_textdomain'),
                'min' => '100',
                'max' => '500',
                'step' => '5',
                'default' => '230',
            ),
            array(
                'type' => 'textbox',
                'name' => 'iheb_bottom',
                'label' => __('Bottom text', 'vp_textdomain'),
                'description' => __('Defult value is Blank & don\'t want please make if blank', 'vp_textdomain'),
                'default' => '',
            ),
            array(
                'type' => 'radiobutton',
                'name' => 'image_shadow',
                'label' => __('Image Shadow', 'vp_textdomain'),
                'description' => __('Shown at Outside of Image', 'vp_textdomain'),
                'default' => 'yes',
                'items' => array(
                   array(
                        'value' => 'yes',
                        'label' => 'Yes',
                    ),
                    array(
                        'value' => 'no',
                        'label' => 'No',
                    ),
                ),
            ),
            array(
                'type' => 'codeeditor',
                'name' => 'image_custom_css',
                'label' => __('Custom CSS', 'vp_textdomain'),
                'description' => __('Write your custom css here.', 'vp_textdomain'),
                'mode' => 'css',
            ),
        ),
    ),
    array(
        'type' => 'group',
        'repeating' => false,
        'sortable' => true,
        'name' => 'customization',
        'priority' => 'high',
        'title' => __('Custom Settings', 'vp_textdomain'),
        'fields' => array(
            array(
                'type' => 'color',
                'name' => 'backgroundcolor',
                'format' => 'rgba',
                'label' => __('Background Color', 'vp_textdomain'),
                'description' => __('Default Value is depend with effects', 'vp_textdomain'),
                'default' => 'rgba(41, 131, 133, 0.3)',
            ),
            array(
                'type' => 'slider',
                'name' => 'imageborder',
                'label' => __('Image Border', 'vp_textdomain'),
                'description' => __('Default, No border Value is 0', 'vp_textdomain'),
                'min' => '0',
                'max' => '30',
                'step' => '1',
                'default' => '0',
            ),
            array(
                'type' => 'color',
                'name' => 'border_color',
                'label' => __('Image Border Color', 'vp_textdomain'),
                'description' => __('Default are your Hover Color', 'vp_textdomain'),
                'default' => '#FFF',
            ),
            array(
                'type' => 'slider',
                'name' => 'bordershadow',
                'label' => __('Border Shadow', 'vp_textdomain'),
                'description' => __('Default is 15px & Don\'t want Value is 0', 'vp_textdomain'),
                'min' => '0',
                'max' => '30',
                'step' => '1',
                'default' => '15',
            ),
            array(
                'type' => 'color',
                'name' => 'border_shadow_color',
                'format' => 'rgba',
                'label' => __('Border Shadow Color', 'vp_textdomain'),
                'description' => __('Default are given on Textbox', 'vp_textdomain'),
                 'default' => 'rgba(41, 131, 133, 0.3)',
            ),
            array(
                'type' => 'radiobutton',
                'name' => 'newtab',
                'label' => __('Open In New Tab?', 'vp_textdomain'),
                'description' => __('Check This Box if you want to open link in new TAB', 'vp_textdomain'),
                'default' => '',
                'items' => array(
                   array(
                        'value' => '_blank',
                        'label' => 'Yes',
                    ),
                    array(
                        'value' => '',
                        'label' => 'No',
                    ),
                ),
            ),
            array(
                'type' => 'radiobutton',
                'name' => 'bottomtextalain',
                'label' => __('Bottom text Align', 'vp_textdomain'),
                'description' => __('Default is Right', 'vp_textdomain'),
                'default' => 'right',
                'items' => array(
                    array(
                        'value' => 'left',
                        'label' => 'Left',
                    ),
                    array(
                        'value' => 'center',
                        'label' => 'Center',
                    ),
                    array(
                        'value' => 'right',
                        'label' => 'Right',
                    ),
                ),
            ),
            array(
                'type' => 'slider',
                'name' => 'headingfontsize',
                'label' => __('Heading Font Size', 'vp_textdomain'),
                'description' => __('Default value is 18px', 'vp_textdomain'),
                'min' => '12',
                'max' => '30',
                'step' => '1',
                'default' => '18',
            ),
            array(
                'type' => 'radiobutton',
                'name' => 'headingfont',
                'label' => __('Heading Font Style', 'vp_textdomain'),
                'default' => array(
                    '{{first}}',
                ),
                'items' => array(
                    array(
                        'value' => 'none',
                        'label' => 'Normal',
                    ),
                    array(
                        'value' => 'uppercase',
                        'label' => 'Uppercase',
                    ),
                    array(
                        'value' => 'Lowercase',
                        'label' => 'lowercase',
                    ),
                    array(
                        'value' => 'capitalize',
                        'label' => 'Capitalize',
                    ),
                ),
            ),
            array(
                'type' => 'radiobutton',
                'name' => 'headingstyle',
                'label' => __('Heading Font Style', 'vp_textdomain'),
                'default' => array(
                    '{{first}}',
                ),
                'items' => array(
                    array(
                        'value' => 'normal',
                        'label' => 'Normal',
                    ),
                    array(
                        'value' => 'blod',
                        'label' => 'Bold',
                    ),
                    array(
                        'value' => 'italic',
                        'label' => 'Italic',
                    ),
                    array(
                        'value' => 'bloditalic',
                        'label' => 'Bold + Italic',
                    ),
                ),
            ),
            array(
                'type' => 'radiobutton',
                'name' => 'headingunderline',
                'label' => __('Want to Add Heading Underline', 'vp_textdomain'),
                'description' => __('Check This Box if you want Underline', 'vp_textdomain'),
                'items' => array(
                    array(
                        'value' => 'yes',
                        'label' => __('Yes', 'vp_textdomain'),
                    ),
                    array(
                        'value' => 'no',
                        'label' => __('No', 'vp_textdomain'),
                    ),
                ),
                'default' => array(
                    'yes',
                ),
            ),
            array(
                'type' => 'color',
                'name' => 'headingfontcolor',
                'label' => __('Heading Font Color', 'vp_textdomain'),
                'description' => __('Default Value is depend with effects', 'vp_textdomain'),
                'default' => '#FFF',
            ),
            array(
                'type' => 'select',
                'name' => 'Customheadingfont',
                'label' => __('Custom Heading Font', 'vp_textdomain'),
                'description' => __('This font will shown at Heading', 'vp_textdomain'),
                'default' => 'Roboto',
                'items' => array(
                    'data' => array(
                        array(
                            'source' => 'function',
                            'value' => 'vp_get_gwf_family',
                        ),
                    ),
                ),
            ),
            array(
                'type' => 'slider',
                'name' => 'descriptionfontsize',
                'label' => __('Description Font Size', 'vp_textdomain'),
                'description' => __('Default value is 14px', 'vp_textdomain'),
                'min' => '12',
                'max' => '30',
                'step' => '1',
                'default' => '14',
            ),
            array(
                'type' => 'radiobutton',
                'name' => 'imagedescfontstyle',
                'label' => __('Description Font Style', 'vp_textdomain'),
                'default' => array(
                    '{{first}}',
                ),
                'items' => array(
                    array(
                        'value' => 'normal',
                        'label' => 'Normal',
                    ),
                    array(
                        'value' => 'blod',
                        'label' => 'Bold',
                    ),
                    array(
                        'value' => 'italic',
                        'label' => 'Italic',
                    ),
                    array(
                        'value' => 'bloditalic',
                        'label' => 'Bold + Italic',
                    ),
                ),
            ),
            array(
                'type' => 'color',
                'name' => 'descriptionfontcolor',
                'label' => __('Description Font Color', 'vp_textdomain'),
                'description' => __('Default Value is depend with effects', 'vp_textdomain'),
                'default' => '#FFF',
            ),
            array(
                'type' => 'select',
                'name' => 'Customdescriptionfont',
                'label' => __('Custom Description Font', 'vp_textdomain'),
                'description' => __('This font will shown at Description', 'vp_textdomain'),
                'default' => 'Roboto',
                'items' => array(
                    'data' => array(
                        array(
                            'source' => 'function',
                            'value' => 'vp_get_gwf_family',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
