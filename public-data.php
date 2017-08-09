<?php

function iheu_ultimate_oxi_shortcode_function($data) {
    $id = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $id), ARRAY_A);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $id), ARRAY_A);
    $stylecss = explode('|', $styledata['css']);
    if ($styledata['style_name'] == 'button-1') {
        include_once image_hover_ultimate_plugin_url . 'button-data.php';
        iheu_ultimate_oxi_shortcode_button1($id, $stylecss, $listdata);
    }
    if ($styledata['style_name'] == 'square-1') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square1($id, $stylecss, $listdata);
    }
    if ($styledata['style_name'] == 'square-2') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square2($id, $stylecss, $listdata);
    }
    if ($styledata['style_name'] == 'square-3') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square3($id, $stylecss, $listdata);
    }
    if ($styledata['style_name'] == 'square-4') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square4($id, $stylecss, $listdata);
    }
    if ($styledata['style_name'] == 'square-5') {
        include_once image_hover_ultimate_plugin_url . 'square-data.php';
        iheu_ultimate_oxi_shortcode_square5($id, $stylecss, $listdata);
    }
    if ($styledata['style_name'] == 'general-1') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general1($id, $stylecss, $listdata);
    }
    if ($styledata['style_name'] == 'general-2') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general2($id, $stylecss, $listdata);
    }
    if ($styledata['style_name'] == 'general-3') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general3($id, $stylecss, $listdata);
    }
    if ($styledata['style_name'] == 'general-4') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general4($id, $stylecss, $listdata);
    }
    if ($styledata['style_name'] == 'general-5') {
        include_once image_hover_ultimate_plugin_url . 'general-data.php';
        iheu_ultimate_oxi_shortcode_general5($id, $stylecss, $listdata);
    }
    if ($style['style_name'] == 'style1') {
        include_once image_hover_ultimate_plugin_url . 'old-data.php';
        iheu_ultimate_oxi_shortcode_style1($id);
    }
    if ($style['style_name'] == 'style2') {
        include_once image_hover_ultimate_plugin_url . 'old-data.php';
        iheu_ultimate_oxi_shortcode_style2($id);
    }
    if ($style['style_name'] == 'style3') {
        include_once image_hover_ultimate_plugin_url . 'old-data.php';
        iheu_ultimate_oxi_shortcode_style3($id);
    }
    if ($style['style_name'] == 'style4') {
        include_once image_hover_ultimate_plugin_url . 'old-data.php';
        iheu_ultimate_oxi_shortcode_style4($id);
    }
    if ($style['style_name'] == 'style5') {
        include_once image_hover_ultimate_plugin_url . 'old-data.php';
        iheu_ultimate_oxi_shortcode_style5($id);
    }
    if ($style['style_name'] == 'style6') {
        include_once image_hover_ultimate_plugin_url . 'old-data.php';
        iheu_ultimate_oxi_shortcode_style6($id);
    }
    if ($style['style_name'] == 'style7') {
        include_once image_hover_ultimate_plugin_url . 'old-data.php';
        iheu_ultimate_oxi_shortcode_style7($id);
    }
    if ($style['style_name'] == 'style8') {
        include_once image_hover_ultimate_plugin_url . 'old-data.php';
        iheu_ultimate_oxi_shortcode_style8($id);
    }
    if ($style['style_name'] == 'style9') {
        include_once image_hover_ultimate_plugin_url . 'old-data.php';
        iheu_ultimate_oxi_shortcode_style9($id);
    }
    if ($style['style_name'] == 'style10') {
        include_once image_hover_ultimate_plugin_url . 'old-data.php';
        iheu_ultimate_oxi_shortcode_style10($id);
    }
    if ($style['style_name'] == 'style11') {
        include_once image_hover_ultimate_plugin_url . 'old-data.php';
        iheu_ultimate_oxi_shortcode_style11($id);
    }
    if ($style['style_name'] == 'style12') {
        include_once image_hover_ultimate_plugin_url . 'old-data.php';
        iheu_ultimate_oxi_shortcode_style12($id);
    }
    if ($style['style_name'] == 'style13') {
        include_once image_hover_ultimate_plugin_url . 'old-data.php';
        iheu_ultimate_oxi_shortcode_style13($id);
    }
    if ($style['style_name'] == 'style14') {
        include_once image_hover_ultimate_plugin_url . 'old-data.php';
        iheu_ultimate_oxi_shortcode_style14($id);
    }
    if ($style['style_name'] == 'style15') {
        include_once image_hover_ultimate_plugin_url . 'old-data.php';
        iheu_ultimate_oxi_shortcode_style15($id);
    }
}
