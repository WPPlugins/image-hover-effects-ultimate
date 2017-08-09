<?php
if (!defined('ABSPATH'))
    exit;
wp_enqueue_script('jQuery');
wp_enqueue_script('iheu-vendor-bootstrap-jss', plugins_url('css-js/bootstrap.min.js', __FILE__));
wp_enqueue_style('iheu-vendor-bootstrap', plugins_url('css-js/bootstrap.min.css', __FILE__));
wp_enqueue_style('iheu-vendor-style', plugins_url('css-js/style.css', __FILE__));
wp_enqueue_style('font-awesome', plugins_url('css-js/font-awesome.min.css', __FILE__));
wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
wp_enqueue_style('iheu-button-demo', plugins_url('css-js/square-demo.css', __FILE__));
wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));

if (!current_user_can('edit_others_pages')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
}
if ($_POST['submit'] != '' && $_POST['submit'] == 'Save') {
    if ($_POST['style'] == 'square-1') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-2|image-radius ||image-width |300|image-height |300|image-margin |20|image-padding |20|background-color |rgba(0, 109, 181, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation |iheu-fade-down|inner-shadow |0|inner-shadow-color |rgba(52, 72, 224, 0.77)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#00648c|bottom-font-background |rgba(255, 255, 255, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#00648c|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(0, 77, 166, 1)|heading-padding |16|heading-margin-top |20|';
    }
    if ($_POST['style'] == 'square-2') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-2|image-radius ||image-width |300|image-height |300|image-margin |20|image-padding |20|background-color |rgba(0, 149, 179, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation |iheu-fade-left|inner-shadow |0|inner-shadow-color |rgba(52, 72, 224, 0.77)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |yes|heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#00648c|bottom-font-background |rgba(255, 255, 255, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#00648c|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color ||heading-padding |16|heading-margin-top ||iheu-directions |top_to_bottom|';
    }
    if ($_POST['style'] == 'square-3') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-2|image-radius ||image-width |300|image-height |300|image-margin |20|image-padding |20|background-color |rgba(0, 149, 179, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation |iheu-fade-down|inner-shadow |0|inner-shadow-color |rgba(52, 72, 224, 0.77)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#00648c|bottom-font-background |rgba(255, 255, 255, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#00648c|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color ||heading-padding |10|heading-margin-top |0|iheu-directions |top_to_bottom|';
    }
    if ($_POST['style'] == 'square-4') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-2|image-radius ||image-width |300|image-height |300|image-margin |20|image-padding |20|background-color |rgba(0, 149, 179, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation |iheu-fade-down|inner-shadow |0|inner-shadow-color |rgba(52, 72, 224, 0.77)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#00648c|bottom-font-background |rgba(255, 255, 255, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#00648c|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(0, 151, 189, 1)|heading-padding |10|heading-margin-top |20|iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'square-5') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-2|image-radius ||image-width |300|image-height |300|image-margin |20|image-padding |20|background-color |rgba(0, 149, 179, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation |iheu-fade-down|inner-shadow |0|inner-shadow-color |rgba(52, 72, 224, 0.77)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#00648c|bottom-font-background |rgba(255, 255, 255, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#00648c|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(66, 200, 245, 1)|heading-padding |10|heading-margin-top |20|iheu-directions ||';
    }
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $wpdb->query($wpdb->prepare("INSERT INTO {$table_name} (name, style_name, css) VALUES ( %s, %s, %s )", array($name, $style_name, $css)));
    $redirect_id = $wpdb->insert_id;
    if ($redirect_id == 0) {
        $url = admin_url("admin.php?page=image-hover-ultimate-new");
    }
    if ($redirect_id != 0) {
        $url = admin_url("admin.php?page=image-hover-ultimate-new&styleid=$redirect_id");
    }
    echo '<script type="text/javascript"> document.location.href = "' . $url . '"; </script>';
    exit;
}
?>

<div class="wrap">
    <?php iheu_promote_free();?>
    <div class="iheu-admin-wrapper">
        <h1>Select Style</h1>
        <p>Select Style from our Template list</p>
        <div class="iheu-admin-new-row">
            <div class="iheu-admin-row">
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-508">
                                    <div class="image-ultimate-map-508">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-508">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-down"> Fully Customization </h3>
                                                        <p class="iheu-fade-down">  Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-508").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-508 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-507">
                                    <div class="image-ultimate-map-507">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-507">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-down"> Fully Customization  </h3>
                                                        <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-507").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-507 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-506">
                                    <div class="image-ultimate-map-506">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-506">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-down"> Fully Customization </h3>
                                                        <p class="iheu-fade-down">  Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-506").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-506 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 1 <span>Single Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#iheu-square-1-data">Select</button>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-1-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-1">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-505">
                                    <div class="image-ultimate-map-505">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-505 bottom_to_top">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-left"> Fully Customization </h3>
                                                        <p class="iheu-fade-left">  Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-505").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-505 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 

                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-503">
                                    <div class="image-ultimate-map-503">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-503 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="mask1"></div>
                                                <div class="mask2"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <div class="data-2">
                                                            <h3 class="iheu-fade-down"> Fully Customization </h3>
                                                            <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-503").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-503 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-504">
                                    <div class="image-ultimate-map-504">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-504 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-down"> Fully Customization </h3>
                                                        <p class="iheu-fade-down">  Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-504").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-504 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 2 <span>2 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#iheu-square-2-data">Select</button>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-2-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-2">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-503">
                                    <div class="image-ultimate-map-503">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-503 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="mask1"></div>
                                                <div class="mask2"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <div class="data-2">
                                                            <h3 class="iheu-fade-down"> Fully Customization </h3>
                                                            <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-503").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-503 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-502">
                                    <div class="image-ultimate-map-502">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-502 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="mask1"></div>
                                                <div class="mask2"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <div class="data-2">
                                                            <h3 class="iheu-fade-down"> Fully Customization </h3>
                                                            <p class="iheu-fade-down">  Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-502").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-502 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-501">
                                    <div class="image-ultimate-map-501">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-501 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="mask1"></div>
                                                <div class="mask2"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <div class="data-2">
                                                            <h3 class="iheu-fade-down"> Fully Customization  </h3>
                                                            <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-501").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-501 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 3 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#iheu-square-3-data">Select</button>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-3-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-3">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-499">
                                    <div class="image-ultimate-map-499">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-499 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-down"> Fully Customization </h3>
                                                        <p class="iheu-fade-down">  Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-499").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-499 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-498">
                                    <div class="image-ultimate-map-498">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-498 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-left-big"> Fully Customization  </h3>
                                                        <p class="iheu-fade-left-big"> Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-498").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-498 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-497">
                                    <div class="image-ultimate-map-497">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-497 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-down"> Fully Customizable </h3>
                                                        <p class="iheu-fade-down">  Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-497").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-497 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>   
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 4 <span>2 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#iheu-square-4-data">Select</button>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-4-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-4">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-496">
                                    <div class="image-ultimate-map-496">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-496 ">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-down"> Fully Customizable  </h3>
                                                        <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-496").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-496 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-495">
                                    <div class="image-ultimate-map-495">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-495 ">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-zoom-in"> Fully Customizable  </h3>
                                                        <p class="iheu-zoom-in"> Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-495").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-495 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-494">
                                    <div class="image-ultimate-map-494">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-494 ">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-down-big"> Fully Customizable  </h3>
                                                        <p class="iheu-fade-down-big"> Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-494").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-494 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 5 <span>Single Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#iheu-square-5-data">Select</button>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-5-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-5">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-493">
                                    <div class="image-ultimate-map-493">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-493 scale_up">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Fully Customizable </h3>
                                                        <p class="iheu-fade-down">  Customize With Image Hover Awesome Tools </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-493").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-493 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-492">
                                    <div class="image-ultimate-map-492">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-492 scale_down">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Fully Customizable </h3>
                                                        <p class="iheu-fade-down">  Customize With Image Hover Awesome Tools </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-492").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-492 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-490">
                                    <div class="image-ultimate-map-490">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-490 scale_up">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Fully Customizable  </h3>
                                                        <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-490").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-490 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 6 <span>2 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-6-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-6">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-489">
                                    <div class="image-ultimate-map-489">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-489 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info-2">  <div class="iheu-info">
                                                        <div class="iheu-data">

                                                            <h3 class="iheu-fade-down"> Fully Customizable </h3>
                                                            <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>

                                                        </div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-489").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-489 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-488">
                                    <div class="image-ultimate-map-488">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-488 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info-2">  <div class="iheu-info">
                                                        <div class="iheu-data">

                                                            <h3 class="iheu-fade-down"> Fully Customizable  </h3>
                                                            <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>

                                                        </div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-488").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-488 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-487">
                                    <div class="image-ultimate-map-487">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-487 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info-2">  <div class="iheu-info">
                                                        <div class="iheu-data">

                                                            <h3 class="iheu-fade-down"> Fully Customizable </h3>
                                                            <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>

                                                        </div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-487").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-487 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 7 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-7-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-7">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-486">
                                    <div class="image-ultimate-map-486">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-486 bottom_to_top">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Fully Customizable  </h3>
                                                        <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-486").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-486 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-485">
                                    <div class="image-ultimate-map-485">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-485 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Fully Customizable </h3>
                                                        <p class="iheu-fade-down">  Customize With Image Hover Awesome Tools </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-485").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-485 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-484">
                                    <div class="image-ultimate-map-484">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-484 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Fully Customizable  </h3>
                                                        <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-484").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-484 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>      
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 8 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-8-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-8">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-483">
                                    <div class="image-ultimate-map-483">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-483 bottom_to_top">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Fully Customizable  </h3>
                                                        <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-483").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-483 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-482">
                                    <div class="image-ultimate-map-482">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-482 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Fully Customizable </h3>
                                                        <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-482").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-482 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-481">
                                    <div class="image-ultimate-map-481">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-481 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Fully Customizable </h3>
                                                        <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-481").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-481 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 9 <span>4 Layout</span>
                        </div>
                         <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-9-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-9">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">

                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-480">
                                    <div class="image-ultimate-map-480">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-480 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-down"> Fully Customizable </h3>
                                                        <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-480").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-480 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-479">
                                    <div class="image-ultimate-map-479">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-479 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-down"> Fully Customizable </h3>
                                                        <p class="iheu-fade-down">  Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-479").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-479 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-478">
                                    <div class="image-ultimate-map-478">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-478 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-down"> Fully Customizable  </h3>
                                                        <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-478").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-478 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>   
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 10 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-10-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-10">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-477">
                                    <div class="image-ultimate-map-477">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-477 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Fully Customizable </h3>
                                                        <p class="iheu-fade-down">  Customize With Image Hover Awesome Tools </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-477").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-477 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-476">
                                    <div class="image-ultimate-map-476">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-476 bottom_to_top">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Fully Customizable </h3>
                                                        <p class="iheu-fade-down">  Customize With Image Hover Awesome Tools </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-476").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-476 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-475">
                                    <div class="image-ultimate-map-475">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-475 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Fully Customizable </h3>
                                                        <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-475").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-475 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 11 <span>Single Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-11-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-11">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-474">
                                    <div class="image-ultimate-map-474">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-474 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Most Beautiful Butterfly </h3>
                                                        <p class="iheu-fade-down">  A butterfly is a mainly day-flying insect of the order Lepidoptera </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-474").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-474 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-473">
                                    <div class="image-ultimate-map-473">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-473 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Most Beautiful Butterfly  </h3>
                                                        <p class="iheu-fade-down"> A butterfly is a mainly day-flying insect of the order Lepidoptera </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-473").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-473 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-472">
                                    <div class="image-ultimate-map-472">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-472 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Most Beautiful Butterfly </h3>
                                                        <p class="iheu-fade-down"> A butterfly is a mainly day-flying insect of the order Lepidoptera </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-472").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-472 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 12 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-12-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-12">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-471">
                                    <div class="image-ultimate-map-471">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-471 bottom_to_top">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Fully Customizable  </h3>
                                                        <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-471").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-471 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-470">
                                    <div class="image-ultimate-map-470">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-470 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">

                                                        <h3 class="iheu-fade-down"> Fully Customizable </h3>
                                                        <p class="iheu-fade-down">  Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-470").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-470 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-469">
                                    <div class="image-ultimate-map-469">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-469 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-down"> Fully Customizable </h3>
                                                        <p class="iheu-fade-down"> Customize With Image Hover Awesome Tools </p>
                                                        <a  href="#" class="iheu-fade-down iheu-button"> Buy Now </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-469").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-469 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 13 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-13-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-13">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-468">
                                    <div class="image-ultimate-map-468">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-468 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-down"> Most Beautiful Butterfly </h3>
                                                        <p class="iheu-fade-down">  A butterfly is a mainly day-flying insect of the order Lepidoptera </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-468").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-468 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-467">
                                    <div class="image-ultimate-map-467">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-467 bottom_to_top">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-down"> Most Beautiful Butterfly </h3>
                                                        <p class="iheu-fade-down">  A butterfly is a mainly day-flying insect of the order Lepidoptera </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-467").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-467 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-412">
                                    <div class="image-ultimate-map-412">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-412 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-down"> Most Beautiful Butterfly </h3>
                                                        <p class="iheu-fade-down"> A butterfly is a mainly day-flying insect of the order Lepidoptera </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-412").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-412 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 14 <span>4 Layout</span>
                        </div>
                         <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-14-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-14">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-465">
                                    <div class="image-ultimate-map-465">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-465 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-right"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-right"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-465").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-465 bounceInRight",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-464">
                                    <div class="image-ultimate-map-464">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-464 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-right"> Fully Customizable  </h3>
                                                        <p class="iheu-fade-right"> Customize With Image Hover Awesome Tools </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-464").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-464 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-463">
                                    <div class="image-ultimate-map-463">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-463 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-right"> Amazing IPhone Photos </h3>
                                                        <p class="iheu-fade-right"> 10 iPhone Photography Tips To Quickly Improve Your Photos </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-463").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-463 bounceInRight",
                                            offset: 100
                                        });
                                    });
                                </script>      
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 15 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-15-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-15">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">


                                <div class="image-ultimate-responsive-2 image-ultimate-hover-padding-575">
                                    <div class="image-ultimate-map-575">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-575 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-right"> Music </h3>
                                                        <p class="iheu-fade-right"> By Jacob Cummings </p>
                                                        <a  href="#" class="iheu-fade-right iheu-button"> Take a Look </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-575").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-575 bounceInRight",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-2 image-ultimate-hover-padding-574">
                                    <div class="image-ultimate-map-574">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-574 bottom_to_top">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-right"> Music </h3>
                                                        <p class="iheu-fade-right"> By Jacob Cummings </p>
                                                        <a  href="#" class="iheu-fade-right iheu-button"> Take a Look </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-574").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-574 bounceInRight",
                                            offset: 100
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 16 <span>2 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-16-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-16">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">

                                <div class="image-ultimate-responsive-2 image-ultimate-hover-padding-578">
                                    <div class="image-ultimate-map-578">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-578 bottom_to_top">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-right"> Music </h3>
                                                        <p class="iheu-fade-right"> By Jacob Cummings </p>
                                                        <a  href="#" class="iheu-fade-right iheu-button"> Take a Look </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-578").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-578 bounceInRight",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-2 image-ultimate-hover-padding-577">
                                    <div class="image-ultimate-map-577">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-577 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Music  </h3>
                                                        <p class="iheu-fade-up"> By Jacob Cummings </p>
                                                        <a  href="#" class="iheu-fade-up iheu-button"> Take a Look </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-577").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-577 bounceInRight",
                                            offset: 100
                                        });
                                    });
                                </script>  
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 17 <span>2 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-17-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-17">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">

                                <div class="image-ultimate-responsive-2 image-ultimate-hover-padding-580">
                                    <div class="image-ultimate-map-580">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-580 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-right"> Music </h3>
                                                        <p class="iheu-fade-right">  By Jacob Cummings </p>
                                                        <a  href="#" class="iheu-fade-right iheu-button"> Take a Look </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-580").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-580 bounceInRight",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-2 image-ultimate-hover-padding-579">
                                    <div class="image-ultimate-map-579">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-579 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-right"> Music </h3>
                                                        <p class="iheu-fade-right"> By Jacob Cummings </p>
                                                        <a  href="#" class="iheu-fade-right iheu-button"> Take a Look </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-579").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-579 bounceInRight",
                                            offset: 100
                                        });
                                    });
                                </script>  
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 18 <span>2 Layout</span>
                        </div>
                       <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-18-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-18">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">

                                <div class="image-ultimate-responsive-2 image-ultimate-hover-padding-581">
                                    <div class="image-ultimate-map-581">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-581 ">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-right"> Music </h3>
                                                        <p class="iheu-fade-right"> By Jacob Cummings </p>
                                                        <a  href="#" class="iheu-fade-right iheu-button"> Take a Look </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-582").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-581 bounceInRight",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-2 image-ultimate-hover-padding-582">
                                    <div class="image-ultimate-map-582">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-582 ">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-right"> Music </h3>
                                                        <p class="iheu-fade-right"> By Jacob Cummings </p>
                                                        <a  href="#" class="iheu-fade-right iheu-button"> Take a Look </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-582").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-582 bounceInRight",
                                            offset: 100
                                        });
                                    });
                                </script>  

                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 19 <span>Single Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-square-19-data" >
                        <form method="post">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Style Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-group-sm">
                                            <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                            <div class="col-sm-6 nopadding">
                                                <input class="form-control" type="text" value=""  name="style-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="style" value="square-19">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div> 
</div>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('[data-toggle="tooltip"]').tooltip();
    });
</script>