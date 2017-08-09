<?php
/*
  Plugin Name: Image Hover Effects Ultimate
  Plugin URI: https://www.oxilab.org/downloads/image-hover-ultimate-pro/
  Description: Image Hover Effects Ultimate is an impressive, lightweight, responsive Image hover effects. Use modern and elegant CSS hover effects and animations.
  Author: Biplob Adhikari
  Author URI: http://www.oxilab.org/
  Version: 6.9
 */
if (!defined('ABSPATH'))
    exit;

$image_hover_ultimate_version = '6.9';
define('image_hover_ultimate_plugin_url', plugin_dir_path(__FILE__));

add_shortcode('iheu_ultimate_oxi', 'iheu_ultimate_oxi_shortcode');
include image_hover_ultimate_plugin_url . 'public-data.php';

function iheu_ultimate_oxi_shortcode($atts) {
    extract(shortcode_atts(array('id' => ' ',), $atts));
    $styleid = $atts['id'];
    iheu_ultimate_oxi_shortcode_function($styleid);
}

add_action('admin_menu', 'image_hover_ultimate_menu');

function image_hover_ultimate_menu() {
    add_menu_page('Image Hover', 'Image Hover', 'manage_options', 'image-hover-ultimate', 'image_hover_ultimate_home');
    add_submenu_page('image-hover-ultimate', 'List All ', 'List All', 'manage_options', 'image-hover-ultimate', 'image_hover_ultimate_home');
    add_submenu_page('image-hover-ultimate', 'General Effects', 'General Effects', 'manage_options', 'image-hover-ultimate-new', 'image_hover_ultimate_new');
    add_submenu_page('image-hover-ultimate', 'Square Effects', 'Square Effects', 'manage_options', 'image-hover-ultimate-square', 'image_hover_ultimate_square');
    add_submenu_page('image-hover-ultimate', 'Button Effects', 'Button Effects', 'manage_options', 'image-hover-ultimate-button', 'image_hover_ultimate_button');
    add_submenu_page('image-hover-ultimate', 'Other Plugins', 'Other Plugins', 'manage_options', 'image-hover-ultimate-other-plugins', 'image_hover_ultimate_other_plugins');
}

function image_hover_ultimate_home() {
    if (!current_user_can('edit_others_pages')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
    include image_hover_ultimate_plugin_url . 'home.php';
}

function image_hover_ultimate_new() {
    if (!current_user_can('edit_others_pages')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
    include image_hover_ultimate_plugin_url . 'admin.php';
}

function image_hover_ultimate_square() {
    if (!current_user_can('edit_others_pages')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
    include image_hover_ultimate_plugin_url . 'square.php';
}

function image_hover_ultimate_button() {
    if (!current_user_can('edit_others_pages')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
    include image_hover_ultimate_plugin_url . 'button.php';
}

function image_hover_ultimate_other_plugins() {
    if (!current_user_can('edit_others_pages')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
    include image_hover_ultimate_plugin_url . 'other-plugins/other-plugins.php';
}

add_action('admin_head', 'add_image_hover_ultimate_icons_styles');

function add_image_hover_ultimate_icons_styles() {
    ?>
    <style>
        #adminmenu #toplevel_page_image-hover-ultimate div.wp-menu-image:before {
            content: "\f168";
        }
    </style>

    <?php
}

register_activation_hook(__FILE__, 'image_hover_ultimate_install');

function image_hover_ultimate_install() {
    global $wpdb;
    global $image_hover_ultimate_version;

    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';

    $charset_collate = $wpdb->get_charset_collate();

    $sql1 = "CREATE TABLE $table_name (
		id mediumint(5) NOT NULL AUTO_INCREMENT,
                name varchar(50) NOT NULL,
		style_name varchar(10) NOT NULL,
                css text NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

    $sql2 = "CREATE TABLE $table_list (
		id mediumint(5) NOT NULL AUTO_INCREMENT,
                styleid mediumint(6) NOT NULL,
		title varchar(100),
                files varchar(400),
                buttom_text varchar(100),
                link varchar(500),
                data1 varchar(50),
                data1link varchar(500),
                data2 varchar(50),
                data2link varchar(500),
		PRIMARY KEY  (id)
	) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($sql1);
    dbDelta($sql2);

    add_option('image_hover_ultimate_version', $image_hover_ultimate_version);
}

add_filter('widget_text', 'do_shortcode');

function iheu_html_special_charecter($data) {
    $data = str_replace("\'", "'", $data);
    $data = str_replace('\"', '"', $data);
    return $data;
}

function iheu_font_familly_special_charecter($data) {
    $data = str_replace('+', ' ', $data);
    $data = explode(':', $data);
    $data = $data[0];
    $data = '"' . $data . '"';
    return $data;
}

add_action('vc_before_init', 'iheu_oxi_VC_extension');
add_shortcode('iheu_oxi_VC', 'iheu_oxi_VC_shortcode');

function iheu_oxi_VC_shortcode($atts) {
    extract(shortcode_atts(array(
        'id' => ''
                    ), $atts));
    $styleid = $atts['id'];
    $data = iheu_ultimate_oxi_shortcode_function($styleid);
    return $data;
}

function iheu_oxi_VC_extension() {
    global $wpdb;
    $data = $wpdb->get_results('SELECT * FROM ' . $wpdb->prefix . 'image_hover_ultimate_style ORDER BY id DESC', ARRAY_A);
    $vcdata = array();
    foreach ($data as $value) {
        $vcdata[] = $value['id'];
    }
    vc_map(array(
        "name" => __("Image Hover Ultimate"),
        "base" => "iheu_oxi_VC",
        "category" => __("Content"),
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => "Image Hover Select",
                "param_name" => "id",
                "value" => $vcdata,
                'save_always' => true,
                "description" => "Select your Image Hover ID",
                "group" => 'Settings',
            ),
        )
    ));
}

function iheu_promote_free() {
    ?>

    <div class="iheu-admin-wrapper-promote">
        <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
            <div class="iheu-h1">Image Hover Effects  <span>Ultimate</div>
            <p>If you have any difficulties in using the options, please follow the link to <a href="http://www.oxilab.org/docs/image-hover-effects-ultimate/getting-started/installing-for-first-time/">Documentation</a> </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
            <p><a target="_blank" href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/" class="ctu-admin-wrapper-promote-botton"><i class="fa fa-cart-plus" aria-hidden="true"></i> Upgrade NOW </a> <br> Just click on "Upgrade NOW" to get Pro Version only $10.99.</p>
        </div>
        <div class="col-lg-3 col-md-3  hidden-sm hidden-xs iheu-admin-wrapper-promote-rate">
            <p> <i class="fa fa-heart" aria-hidden="true"></i>  <a target="_blank" href="https://wordpress.org/support/plugin/image-hover-effects-ultimate/reviews/">Rate Us</a></p>
            <p> <i class="fa fa-life-ring" aria-hidden="true"></i>  <a target="_blank" href="https://wordpress.org/support/plugin/image-hover-effects-ultimate/">Support Ticket</a></p>
            <p> <i class="fa fa-envelope" aria-hidden="true"></i>  <a target="_blank" href="https://www.oxilab.org/contact-us/">Contact Oxilab</a></p>
            <p> <i class="fa fa-youtube" aria-hidden="true"></i> <a target="_blank" href="https://youtu.be/DIJDRzjLU2A">Video Tutorials</a></p>
        </div>
    </div>
    <?php
}

if (!class_exists('VP_IHEB_OXI_AutoLoader')) {
    defined('VP_IHEB_OXI_VERSION') or define('VP_IHEB_OXI_VERSION', '2.0');
    defined('VP_IHEB_OXI_URL') or define('VP_IHEB_OXI_URL', plugin_dir_url(__FILE__));
    defined('VP_IHEB_OXI_DIR') or define('VP_IHEB_OXI_DIR', plugin_dir_path(__FILE__));
    defined('VP_IHEB_OXI_FILE') or define('VP_IHEB_OXI_FILE', __FILE__);

// Looding Bootstrap framework
    require 'framework/bootstrap.php';
}

// Register Custom Post
function iheb_oxi_custom_post_calling() {
    register_post_type('iheb-oxi-hov', array(
        'labels' => array(
            'name' => __('Image Effects'),
            'singular_name' => __('Image Hover Effect'),
            'add_new_item' => __('Add New Item')
        ),
        'public' => true,
        'supports' => array('title'),
        'show_ui' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'iheb-hover-effects'),
        'show_in_menu' => false,
    ));
}

add_action('init', 'iheb_oxi_custom_post_calling');

// Loading Option Framework Main Metaboxes 
new VP_Metabox(array
    (
    'id' => 'iheb_oxi_meta',
    'types' => array('iheb-oxi-hov'),
    'title' => __('Image Hover Effects ', 'vp_textdomain'),
    'priority' => 'high',
    'template' => VP_IHEB_OXI_DIR . '/admin/metabox.php'
        ));
// calling shortcode
require (VP_IHEB_OXI_DIR . 'admin/views.php');
require (VP_IHEB_OXI_DIR . 'admin/shortcode.php');

