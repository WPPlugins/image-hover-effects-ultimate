<?php
if (!defined('ABSPATH'))
    exit;
if (!current_user_can('edit_others_pages')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
}
$styleid = (int) $_GET['styleid'];
global $wpdb;
$table_list = $wpdb->prefix . 'image_hover_ultimate_list';
$table_name = $wpdb->prefix . 'image_hover_ultimate_style';
$title = '';
$files = '';
$link = '';
$bottom = '';
$image = '';
$itemid = '';

if (!empty($_POST['submit']) && $_POST['submit'] == 'submit') {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'iheuitemdata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $ihtitle = $_POST['iheu-title'];
        $ihfiles = $_POST['iheu-desc'];
        $ihbotton = $_POST['iheu-bottom'];
        $ihlink = sanitize_text_field($_POST['iheu-link']);
        $ihimage = sanitize_text_field($_POST['iheu-image-upload-url']);
        if ($_POST['item-id'] == '') {
            $wpdb->query($wpdb->prepare("INSERT INTO {$table_list} (title, files, buttom_text, link, image, styleid) VALUES ( %s, %s, %s, %s, %s, %d)", array($ihtitle, $ihfiles, $ihbotton, $ihlink, $ihimage, $styleid)));
        }
        if ($_POST['item-id'] != '' && is_numeric($_POST['item-id'])) {
            $item_id = (int) $_POST['item-id'];
            $wpdb->update("$table_list", array("title" => $ihtitle, "files" => $ihfiles, "buttom_text" => $ihbotton, "link" => $ihlink, "image" => $ihimage), array('id' => $item_id), array('%s', '%s'), array('%d'));
        }
    }
}
if (!empty($_POST['edit']) && is_numeric($_POST['item-id'])) {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'iheueditdata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $item_id = (int) $_POST['item-id'];
        $data = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_list WHERE id = %d ", $item_id), ARRAY_A);
        $title = $data['title'];
        $files = $data['files'];
        $link = $data['link'];
        $bottom = $data['buttom_text'];
        $image = $data['image'];
        $itemid = $data['id'];
        echo '<script type="text/javascript"> jQuery(document).ready(function () {setTimeout(function() { jQuery("#iheb-add-new-item-data").modal("show")  }, 500); });</script>';
    }
}
if (!empty($_POST['delete']) && is_numeric($_POST['item-id'])) {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'iheudeletedata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $item_id = (int) $_POST['item-id'];
        $wpdb->query($wpdb->prepare("DELETE FROM {$table_list} WHERE id = %d ", $item_id));
    }
}
if (!empty($_POST['data-submit']) && $_POST['data-submit'] == 'Save') {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'iheueffectsstyle')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $data = 'iheu-item |' . sanitize_text_field($_POST['iheu-item']) . '|'
                . 'image-radius |' . sanitize_text_field($_POST['image-radius']) . '|'
                . 'image-width |' . sanitize_text_field($_POST['image-width']) . '|'
                . 'image-height |' . sanitize_text_field($_POST['image-height']) . '|'
                . 'image-margin |' . sanitize_text_field($_POST['image-margin']) . '|'
                . 'image-padding |' . sanitize_text_field($_POST['image-padding']) . '|'
                . 'background-color |' . sanitize_text_field($_POST['background-color']) . '|'
                . 'content-alignment |' . sanitize_text_field($_POST['content-alignment']) . '|'
                . 'open-in-new-tab |' . sanitize_text_field($_POST['open-in-new-tab']) . '|'
                . 'image-animation |' . sanitize_text_field($_POST['image-animation']) . '|'
                . 'animation-durations |' . sanitize_text_field($_POST['animation-durations']) . '|'
                . 'content-animation |' . sanitize_text_field($_POST['content-animation']) . '|'
                . 'inner-shadow |' . sanitize_text_field($_POST['inner-shadow']) . '|'
                . 'inner-shadow-color |' . sanitize_text_field($_POST['inner-shadow-color']) . '|'
                . 'box-shadow |' . sanitize_text_field($_POST['box-shadow']) . '|'
                . 'box-shadow-color |' . sanitize_text_field($_POST['box-shadow-color']) . '|'
                . 'heading-font-size |' . sanitize_text_field($_POST['heading-font-size']) . '|'
                . 'heading-font-color |' . sanitize_text_field($_POST['heading-font-color']) . '|'
                . 'heading-font-familly |' . sanitize_text_field($_POST['heading-font-familly']) . '|'
                . 'heading-font-weight |' . sanitize_text_field($_POST['heading-font-weight']) . '|'
                . 'heading-underline |' . sanitize_text_field($_POST['heading-underline']) . '|'
                . 'heading-padding-bottom |' . sanitize_text_field($_POST['heading-padding-bottom']) . '|'
                . 'heading-margin-bottom |' . sanitize_text_field($_POST['heading-margin-bottom']) . '|'
                . 'desc-font-size |' . sanitize_text_field($_POST['desc-font-size']) . '|'
                . 'desc-font-color |' . sanitize_text_field($_POST['desc-font-color']) . '|'
                . 'desc-font-familly |' . sanitize_text_field($_POST['desc-font-familly']) . '|'
                . 'desc-font-weight |' . sanitize_text_field($_POST['desc-font-weight']) . '|'
                . 'desc-padding-bottom |' . sanitize_text_field($_POST['desc-padding-bottom']) . '|'
                . 'bottom-font-size |' . sanitize_text_field($_POST['bottom-font-size']) . '|'
                . 'bottom-font-color |' . sanitize_text_field($_POST['bottom-font-color']) . '|'
                . 'bottom-font-background |' . sanitize_text_field($_POST['bottom-font-background']) . '|'
                . 'bottom-font-familly |' . sanitize_text_field($_POST['bottom-font-familly']) . '|'
                . 'bottom-font-weight |' . sanitize_text_field($_POST['bottom-font-weight']) . '|'
                . 'bottom-hover-color |' . sanitize_text_field($_POST['bottom-hover-color']) . '|'
                . 'bottom-hover-background |' . sanitize_text_field($_POST['bottom-hover-background']) . '|'
                . 'bottom-border-radius |' . sanitize_text_field($_POST['bottom-border-radius']) . '|'
                . 'bottom-padding-top-bottom |' . sanitize_text_field($_POST['bottom-padding-top-bottom']) . '|'
                . 'bottom-padding-left-right |' . sanitize_text_field($_POST['bottom-padding-left-right']) . '|'
                . 'bottom-align |' . sanitize_text_field($_POST['bottom-align']) . '|'
                . 'bottom-margin-left |' . sanitize_text_field($_POST['bottom-margin-left']) . '|'
                . 'bottom-margin-right |' . sanitize_text_field($_POST['bottom-margin-right']) . '|'
                . 'iheu-css |' . sanitize_text_field($_POST['iheu-css']) . '|'
                . 'iheu-directions |' . sanitize_text_field($_POST['iheu-directions']) . '|';

        $data = sanitize_text_field($data);
        $wpdb->query($wpdb->prepare("UPDATE $table_name SET css = %s WHERE id = %d", $data, $styleid));
    }
}
$listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
$styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
$styledata = $styledata['css'];
$styledata = explode('|', $styledata);
wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
?>
<div class="wrap">
    <?php iheu_promote_free();?>
    <div class="iheu-admin-wrapper">
        <div class="iheu-admin-row">
            <div class="iheu-style-panel-left">
                <div class="iheu-style-setting-panel">
                    <form method="post">

                        <div class="ctu-ultimate-wrapper-3"> 
                            <ul class="ctu-ulimate-style-3">  
                                <li ref="#ctu-ulitate-style-3-id-6">
                                    General
                                </li>  
                                <li ref="#ctu-ulitate-style-3-id-5">
                                    Heading
                                </li>   
                                <li ref="#ctu-ulitate-style-3-id-4">
                                    Description
                                </li>  
                                <li ref="#ctu-ulitate-style-3-id-3">
                                    Bottom text
                                </li> 
                                <li ref="#ctu-ulitate-style-3-id-2">
                                    Custom CSS
                                </li>
                                <li ref="#ctu-ulitate-style-3-id-1">
                                    Video Tutorial
                                </li>
                            </ul>

                            <div class="ctu-ultimate-style-3-content">
                                <div class="ctu-ulitate-style-3-tabs" id="ctu-ulitate-style-3-id-6">
                                    <div class="iheu-admin-style-settings-div-left">
                                        <div class="form-group row form-group-sm">
                                            <label for="iheu-item" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize How mane Item You want to Show in a single Row ">Item Per Row </label>
                                            <div class="col-sm-6 nopadding">
                                                <select class="form-control" id="iheu-item" name="iheu-item">
                                                    <?php iheu_item_admin_data($styledata[1]); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="iheu-directions" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize How Which type of Effects You Want to Use ">Effects Directions </label>
                                            <div class="col-sm-6 nopadding">
                                                <select class="form-control" id="iheu-directions" name="iheu-directions">
                                                    <option <?php if($styledata[85] == 'left_to_right'){echo 'selected';}?> value="left_to_right">left to Right</option>
                                                    <option <?php if($styledata[85] == 'right_to_left'){echo 'selected';}?> value="right_to_left">Right to left</option>
                                                    <option <?php if($styledata[85] == 'top_to_bottom'){echo 'selected';}?> value="top_to_bottom">Top to Bottom</option>
                                                    <option <?php if($styledata[85] == 'bottom_to_top'){echo 'selected';}?> value="bottom_to_top">Bottom to Top</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="image-radius"  class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Radius Your Image, for example to make Circle make 50">Image Radius</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0"  max="50" step="1" id="image-radius" name="image-radius" value="<?php echo $styledata[3]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="image-width" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Set Image Max width, It will work if max Width is available in div" >Image Width</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="50" max="1200" step="1" id="image-width" name="image-width" value="<?php echo $styledata[5]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="image-height" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Set Height, Our Auto Set make it on percentize with width for responsive" >Image Height</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="50" max="1200" step="1" id="image-height" name="image-height" value="<?php echo $styledata[7]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="image-margin" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Set Image Margin make Distange from Image to Image" >Image Margin</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="100" step="1" id="image-margin" name="image-margin" value="<?php echo $styledata[9]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="image-padding" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Set Content Padding to make distance of Image Content" >Content Padding</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="100" step="1" id="image-padding" name="image-padding" value="<?php echo $styledata[11]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="background-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Set Your image hover background Color, Based on Color">Background </label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="text" class="form-control iheu-vendor-color" data-format="rgb" data-opacity="true" id="background-color" name="background-color" value="<?php echo $styledata[13]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="content-alignment" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your content Alignments ">Content Alignments </label>
                                            <?php iheu_content_alignment_admin_data($styledata[15]); ?>
                                        </div>
                                    </div>
                                    <div class="iheu-admin-style-settings-div-right">
                                        <div class="form-group row row form-group-sm">
                                            <label class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Make sure that You want to Open your link in same Tab or new Tab">Open In New Tab?</label>
                                            <div class="col-sm-6">
                                                <div class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-info <?php
                                                    if ($styledata[17] == '_blank') {
                                                        echo 'active';
                                                    }
                                                    ?>">
                                                        <input type="radio" name="open-in-new-tab" id="open-in-new-tab-yes" autocomplete="off"  value="_blank" <?php
                                                        if ($styledata[17] == 'image-ultimate-hover-circle') {
                                                            echo 'checked';
                                                        }
                                                        ?>> Yes
                                                    </label>
                                                    <label class="btn btn-info <?php
                                                    if ($styledata[17] == '') {
                                                        echo 'active';
                                                    }
                                                    ?>">
                                                        <input type="radio" name="open-in-new-tab" id="open-in-new-tab-no" autocomplete="off" value="" <?php
                                                        if ($styledata[17] == '') {
                                                            echo 'checked';
                                                        }
                                                        ?>> No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="image-animation" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Image Vewing Animaion">Image Animation</label>
                                            <div class="col-sm-6 nopadding">
                                                <select class="form-control" id="image-animation" name="image-animation">                                           
                                                    <?php iheu_image_animation_admin_data($styledata[19]) ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="animation-durations" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Image Viewing Animation Duration" >Animation Duration</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="10" step=0.1 id="animation-durations" name="animation-durations" value="<?php echo $styledata[21]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="content-animation" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Choose Your Text Animation">Content Animation  </label>
                                            <div class="col-sm-6 nopadding">
                                                <select class="form-control" id="content-animation" name="content-animation">
                                                    <?php iheu_content_animation_admin_panel($styledata[23]) ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="inner-shadow" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Inner Shadow is showing on Image inner, Doesn't want make it 0" >Inner Shadow</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control"  min="0" max="100" step="1" id="inner-shadow" name="inner-shadow" value="<?php echo $styledata[25]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="inner-shadow-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize Your Inner Shadow Color">Inner Shadow Color </label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="text" class="form-control iheu-vendor-color" data-format="rgb" data-opacity="true"  id="inner-shadow-color" name="inner-shadow-color" value="<?php echo $styledata[27]; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctu-ulitate-style-3-tabs" id="ctu-ulitate-style-3-id-5">
                                    <div class="iheu-admin-style-settings-div-left">
                                        <div class="form-group row form-group-sm">
                                            <label for="heading-font-size" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Set Your Heanding or Title font size" >Heading font Size</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="100" step="1" id="heading-font-size" name="heading-font-size" value="<?php echo $styledata[33]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="heading-font-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Change The Title font Color">Font Color </label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="text" class="form-control iheu-vendor-color" id="heading-font-color" name="heading-font-color" value="<?php echo $styledata[35]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="heading-font-familly" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Choose Your Title Preferred font, Based on Google Font"> Font Family </label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="cau-admin-font" type="text" name="heading-font-familly" id="heading-font-familly" value="<?php echo $styledata[37]; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row form-group-sm">
                                            <label for="heading-font-weight" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Title Font Style">Font Weight</label>
                                            <div class="col-sm-6 nopadding">
                                                <select class="form-control" id="heading-font-weight" name="heading-font-weight">
                                                    <?php iheu_font_weight_admin_panel($styledata[39]) ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="iheu-admin-style-settings-div-right">
                                        <div class="form-group row">
                                            <label class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Dow You Want Heading Underline?">Heading  Underline</label>
                                            <div class="col-sm-6">
                                                <div class="btn-group" data-toggle="buttons">
                                                    <?php iheu_headign_underline_admin_panel($styledata[41]); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="heading-padding-bottom" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Make Distance From Underline" >Padding Bottom</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="100" step="1" id="heading-padding-bottom" name="heading-padding-bottom" value="<?php echo$styledata[43]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="heading-margin-bottom" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Make Distance From Descriptions" >Margin Bottom</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="100" step="1" id="heading-margin-bottom" name="heading-margin-bottom" value="<?php echo$styledata[45]; ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="ctu-ulitate-style-3-tabs " id="ctu-ulitate-style-3-id-4">
                                    <div class="iheu-admin-style-settings-div-left">
                                        <div class="form-group row form-group-sm">
                                            <label for="desc-font-size" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Set Your Description Font Size" >font Size</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="100" step="1" id="desc-font-size" name="desc-font-size" value="<?php echo$styledata[47]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="desc-font-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Set Your Description Color, Based on Color">Font Color </label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="text" class="form-control iheu-vendor-color" id="desc-font-color" name="desc-font-color" value="<?php echo $styledata[49]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="desc-font-familly" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Choose Your Description Preferred font, Based on Google Font"> Font Family </label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="cau-admin-font" type="text" name="desc-font-familly" id="desc-font-familly" value="<?php echo $styledata[51]; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row form-group-sm">
                                            <label for="desc-font-weight" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Description Font Style ">Font Weight </label>
                                            <div class="col-sm-6 nopadding">
                                                <select class="form-control" id="desc-font-weight" name="desc-font-weight">
                                                    <?php iheu_font_weight_admin_panel($styledata[53]); ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="iheu-admin-style-settings-div-right">
                                        <div class="form-group row form-group-sm">
                                            <label for="desc-padding-bottom" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Make distance from Bottom text, word as percentage of Div" >Padding Bottom</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="100" step="1" id="desc-padding-bottom" name="desc-padding-bottom" value="<?php echo$styledata[55]; ?>">
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                <div class="ctu-ulitate-style-3-tabs" id="ctu-ulitate-style-3-id-3">
                                    <div class="iheu-admin-style-settings-div-left">
                                        <div class="form-group row form-group-sm">
                                            <label for="bottom-font-size" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Set Buttom Font Size as you want" >Buttom font Size</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="100" step="1" id="bottom-font-size" name="bottom-font-size" value="<?php echo$styledata[57]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="bottom-font-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Set Your Buttom Color, Based on Color">Font Color </label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="text" class="form-control iheu-vendor-color" id="bottom-font-color" name="bottom-font-color" value="<?php echo $styledata[59]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="bottom-font-background" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Set Your Buttom background Color, Based on Color">Background Color </label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="text" class="form-control iheu-vendor-color" data-format="rgb" data-opacity="true"  id="bottom-font-background" name="bottom-font-background" value="<?php echo $styledata[61]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="bottom-font-familly" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Choose Your Buttom Preferred font, Based on Google Font"> Font Family </label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="cau-admin-font" type="text" name="bottom-font-familly" id="bottom-font-familly" value="<?php echo $styledata[63]; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row form-group-sm">
                                            <label for="bottom-font-weight" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Buttom Font Style ">Font Weight</label>
                                            <div class="col-sm-6 nopadding">
                                                <select class="form-control" id="bottom-font-weight" name="bottom-font-weight">
                                                    <?php iheu_font_weight_admin_panel($styledata[65]); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="bottom-hover-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Set Your Buttom Hover Color, Based on Color">Hover Color </label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="text" class="form-control iheu-vendor-color" id="bottom-hover-color" name="bottom-hover-color" value="<?php echo $styledata[67]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="bottom-hover-background" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Set Your Buttom Hover background Color, Based on Color">Hover Background </label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="text" class="form-control iheu-vendor-color" data-format="rgb" data-opacity="true"  id="bottom-hover-background" name="bottom-hover-background" value="<?php echo $styledata[69]; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iheu-admin-style-settings-div-right">
                                        <div class="form-group row form-group-sm">
                                            <label for="bottom-border-radius" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Make Radius on Your button" >Bottom Radius</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="100" step="1" id="bottom-border-radius" name="bottom-border-radius" value="<?php echo$styledata[71]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="bottom-padding-top-bottom" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Change Padding top Bottom to make bigger or smaller Button" >Padding Top Bottom</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="100" step="1" id="bottom-padding-top-bottom" name="bottom-padding-top-bottom" value="<?php echo$styledata[73]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm">
                                            <label for="bottom-padding-left-right" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Change Padding left right to make bigger or smaller Button" >Padding Left Right</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="0" max="100" step="1" id="bottom-padding-left-right" name="bottom-padding-left-right" value="<?php echo$styledata[75]; ?>">
                                            </div>
                                        </div> 
                                        <div class="form-group row form-group-sm">
                                            <label for="bottom-align" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Change Buttom Align to make Accurate Position">Button Align</label>
                                            <?php iheu_button_left_admin_panel($styledata); ?>
                                        </div>
                                        <div class="form-group row form-group-sm bottom-margin-left-js">
                                            <label for="bottom-margin-left" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Make Distance from left" >Margin Left</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="-20" max="100" step="1" id="bottom-margin-left" name="bottom-margin-left" value="<?php echo$styledata[79]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row form-group-sm bottom-margin-right-js">
                                            <label for="bottom-margin-right" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Make Distance from Right" >Margin Right</label>
                                            <div class="col-sm-6 nopadding">
                                                <input type="number" class="form-control" min="-20" max="100" step="1" id="bottom-margin-right" name="bottom-margin-right" value="<?php echo$styledata[81]; ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="ctu-ulitate-style-3-tabs" id="ctu-ulitate-style-3-id-2">
                                    <div class="iheu-admin-style-settings-div-css">
                                        <div class="form-group">
                                            <label for="iheu-css">Add Your Custom CSS Code Here</label>
                                            <textarea class="form-control" rows="4" id="iheu-css" name="iheu-css"><?php echo$styledata[83]; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctu-ulitate-style-3-tabs" id="ctu-ulitate-style-3-id-1">
                                    <div class="iheu-admin-style-settings-div-css">
                                        <iframe width="100%" height="500" src="https://www.youtube.com/embed/DIJDRzjLU2A" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div> 

                        </div>    

                        <div class="iheu-style-setting-save">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <?php wp_nonce_field("iheueffectsstyle") ?>
                            <input type="submit" class="btn btn-primary" name="data-submit" value="Save">
                        </div>
                    </form>
                    <script type="text/javascript">
                        jQuery(document).ready(function () {
                            jQuery(".ctu-ulimate-style-3 li:first").addClass("active");
                            jQuery(".ctu-ulitate-style-3-tabs:first").addClass("active");
                            jQuery(".ctu-ulimate-style-3 li").click(function () {
                                jQuery(".ctu-ulimate-style-3 li").removeClass("active");
                                jQuery(this).toggleClass("active");
                                jQuery(".ctu-ulitate-style-3-tabs").removeClass("active");
                                var activeTab = jQuery(this).attr("ref");
                                jQuery(activeTab).addClass("active");
                            });
                        });
                    </script>   
                </div>
                <div class="iheb-style-settings-preview">
                    <div class="iheb-style-settings-preview-heading">
                        <div class="iheb-style-settings-preview-heading-left">
                            Preview
                        </div>
                        <div class="iheb-style-settings-preview-heading-right">
                            <input type="text" class="form-control iheu-vendor-color"  data-format="rgb" data-opacity="true"  id="iheb-preview-data-background" name="iheb-preview-data-background" value="rgba(255, 255, 255, 1)">
                        </div>
                    </div>
                    <div class="iheb-preview-data" id="iheb-preview-data">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <style>
                                    .image-ultimate-map-absulate{
                                        position: absolute;
                                        width: 100%;
                                        height: 100%;
                                        top: 0;
                                    }
                                    .image-ultimate-map-absulate img{
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-map-absulate a{
                                        text-decoration: none !important;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                        text-align: center;
                                        -webkit-backface-visibility: hidden;
                                        backface-visibility: hidden;
                                        display: table;
                                    }

                                    .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                                        animation-duration: <?php echo $styledata[21]; ?>s;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>, 
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                                        border-radius: <?php echo $styledata[3]; ?>%;
                                        -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                                        -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                                        padding: <?php echo $styledata[9]; ?>px;
                                    }
                                    .image-ultimate-map-<?php echo $styleid; ?> {
                                        max-width: <?php echo $styledata[5]; ?>px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-<?php echo $styleid; ?>:after {
                                        padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;

                                    }

                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                                        width: 100%;
                                        float: left;
                                        opacity: 1;
                                        -webkit-transition: all 0.4s ease-in-out;
                                        -moz-transition: all 0.4s ease-in-out;
                                        transition: all 0.4s ease-in-out;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                                        background: <?php echo $styledata[13]; ?>;
                                        opacity: 0;
                                        visibility: hidden;
                                        pointer-events: none;
                                        -webkit-transition: all 0.35s ease;
                                        -moz-transition: all 0.35s ease;
                                        transition: all 0.35s ease;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                                        display: table-cell;
                                        <?php echo $styledata[15]; ?>
                                        padding: <?php echo $styledata[11]; ?>px; 
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                                        font-size: <?php echo $styledata[33]; ?>px;
                                        font-weight: <?php echo $styledata[39]; ?>;
                                        padding-bottom: <?php echo $styledata[43]; ?>px;
                                        margin-bottom: <?php echo $styledata[45]; ?>px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                                        display: inline-block;
                                        color: <?php echo $styledata[35]; ?>;
                                        <?php
                                        if ($styledata[41] == 'yes') {
                                            echo ' border-bottom: 1px solid currentColor;';
                                        }
                                        ?>
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                                        font-size: <?php echo $styledata[47]; ?>px;
                                        font-weight: <?php echo $styledata[53]; ?>;
                                        margin-bottom: <?php echo $styledata[55]; ?>px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float: left;
                                        font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                                        color: <?php echo $styledata[49]; ?>;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                                        padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                                        -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                                        -moz-border-radius: <?php echo $styledata[71]; ?>px;
                                        border-radius: <?php echo $styledata[71]; ?>px;
                                        font-weight: <?php echo $styledata[65]; ?>;
                                        font-size: <?php echo $styledata[57]; ?>px;
                                        font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                                        background: <?php echo $styledata[61]; ?>;
                                        color: <?php echo $styledata[59]; ?>;
                                        text-decoration: none;
                                        display:table;
                                        <?php echo $styledata[77]; ?>
                                        <?php
                                        if ($styledata[77] == 'float: left ;') {
                                            echo 'margin-left : ' . $styledata[79] . 'px';
                                        }
                                        if ($styledata[77] == 'float: right;') {
                                            echo 'margin-right : ' . $styledata[81] . 'px';
                                        }
                                        ?>
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                                        background: <?php echo $styledata[69]; ?>;
                                        color: <?php echo $styledata[67]; ?>;
                                    }
                                    <?php echo $styledata[83]; ?>


                                    .image-ultimate-hover-<?php echo $styleid; ?> a:hover .iheu-img,
                                    .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img{
                                        opacity: 0;
                                        pointer-events: none;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> a:hover .iheu-info,
                                    .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info{
                                        visibility: visible;
                                        opacity: 1;
                                        pointer-events: auto;
                                    }

                                    .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                                        -webkit-transform: translateX(-100%);
                                        -moz-transform: translateX(-100%);
                                        -ms-transform: translateX(-100%);
                                        -o-transform: translateX(-100%);
                                        transform: translateX(-100%);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right a:hover .iheu-img,
                                    .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img{
                                        -webkit-transform: translateX(100%);
                                        -moz-transform: translateX(100%);
                                        -ms-transform: translateX(100%);
                                        -o-transform: translateX(100%);
                                        transform: translateX(100%);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right a:hover .iheu-info,
                                    .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info{
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                    }

                                    .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                                        -webkit-transform: translateX(100%);
                                        -moz-transform: translateX(100%);
                                        -ms-transform: translateX(100%);
                                        -o-transform: translateX(100%);
                                        transform: translateX(100%);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left a:hover .iheu-img,
                                    .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img{
                                        -webkit-transform: translateX(-100%);
                                        -moz-transform: translateX(-100%);
                                        -ms-transform: translateX(-100%);
                                        -o-transform: translateX(-100%);
                                        transform: translateX(-100%);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left a:hover .iheu-info,
                                    .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info{
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                    }

                                    .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                                        -webkit-transform: translateY(100%);
                                        -moz-transform: translateY(100%);
                                        -ms-transform: translateY(100%);
                                        -o-transform: translateY(100%);
                                        transform: translateY(100%);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom a:hover .iheu-img,
                                    .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img{
                                        -webkit-transform: translateY(-100%);
                                        -moz-transform: translateY(-100%);
                                        -ms-transform: translateY(-100%);
                                        -o-transform: translateY(-100%);
                                        transform: translateY(-100%);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom a:hover .iheu-info,
                                    .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info{
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }

                                    .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                                        -webkit-transform: translateY(-100%);
                                        -moz-transform: translateY(-100%);
                                        -ms-transform: translateY(-100%);
                                        -o-transform: translateY(-100%);
                                        transform: translateY(-100%);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top a:hover .iheu-img,
                                    .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img{
                                        -webkit-transform: translateY(100%);
                                        -moz-transform: translateY(100%);
                                        -ms-transform: translateY(100%);
                                        -o-transform: translateY(100%);
                                        transform: translateY(100%);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top a:hover .iheu-info,
                                    .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info{
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }
                                </style>

                                <?php
                                foreach ($listdata as $value) {
                                    if ($styledata[17] == '_blank') {
                                        $opennewtab = 'target="_blank"';
                                    }
                                    if ($value['title'] != '') {
                                        $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                                    }
                                    if ($value['files'] != '') {
                                        $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                                    }
                                    if ($value['buttom_text'] != '') {
                                        $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                                    }

                                    if ($value['link'] == '') {
                                        $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
                                    }
                                    if ($value['link'] != '' && $value['buttom_text'] == '') {
                                        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="iheu-button"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
                                    }
                                    if ($value['link'] != '' && $value['buttom_text'] != '') {
                                        $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                     <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
                                    }

                                    echo '<div class="' . $styledata[1] . ' image-ultimate-hover-padding-' . $styleid . ' iheu-editing">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="iheu-admin-absulote">
                                                <div class="iheu-style-absulate-edit">
                                                    <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                                        <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                                        <button class="btn btn-primary btn-xs" type="submit" value="edit" name="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                    </form>
                                                </div>
                                                <div class="iheu-style-absulate-delete">
                                                    <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                                        <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                                        <button class="btn btn-danger btn-xs" type="submit" value="delete" name="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                         </div>';
                                }


                                echo ' <script type="text/javascript">
                                            jQuery(document).ready(function () {
                                                jQuery(".image-ultimate-hover-padding-' . $styleid . '").addClass("iheu-hidden").viewportChecker({
                                                     classToAdd: "iheu-visible image-ultimate-hover-animation-' . $styleid . ' ' . $styledata[19] . '",
                                                     offset: 100
                                                });
                                            });
                                       </script>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php iheu_jquery_file_pass($styleid); ?>
            </div>

            <?php iheu_admin_style_panel_tab2($styleid); ?>


        </div>
    </div>
    <?php iheu_admin_style_item_data($title, $files, $link, $bottom, $image, $itemid); ?>

</div>
