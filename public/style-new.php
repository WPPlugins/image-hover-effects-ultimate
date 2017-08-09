<?php
if (!defined('ABSPATH'))
    exit;
wp_enqueue_script('jQuery');

if (!current_user_can('edit_others_pages')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
}
if ($_POST['submit'] != '' && $_POST['submit'] == 'Save') {
    if ($_POST['style'] == 'general-1') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-2|image-radius |0|image-width |300|image-height |300|image-margin |20|image-padding |15|background-color |rgba(0, 184, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |bounce|animation-durations |2|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(200, 0, 235, 0.41)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |10|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |0|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(0, 126, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#007e9e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||';
    }
    if ($_POST['style'] == 'general-2') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-2|image-radius |0|image-width |300|image-height |300|image-margin |20|image-padding |15|background-color |rgba(0, 184, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |bounce|animation-durations |2|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(200, 0, 235, 0.41)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |10|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |0|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(0, 126, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#007e9e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
    }
    if ($_POST['style'] == 'general-3') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-2|image-radius |0|image-width |300|image-height |300|image-margin |20|image-padding |15|background-color |rgba(0, 184, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |bounce|animation-durations |2|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(200, 0, 235, 0.41)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |10|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |0|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(0, 126, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#007e9e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |top_to_bottom|';
    }
    if ($_POST['style'] == 'general-4') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-2|image-radius |0|image-width |300|image-height |300|image-margin |20|image-padding |15|background-color |rgba(0, 184, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |bounce|animation-durations |2|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(200, 0, 235, 0.41)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |10|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |0|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(0, 126, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#007e9e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |right_to_left|';
    }
    if ($_POST['style'] == 'general-5') {
        $name = sanitize_text_field($_POST['style-name']);
        $style_name = sanitize_text_field($_POST['style']);
        $css = 'iheu-item |image-ultimate-responsive-2|image-radius |0|image-width |300|image-height |300|image-margin |20|image-padding |15|background-color |rgba(0, 184, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |bounce|animation-durations |2|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(200, 0, 235, 0.41)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |10|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |10|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(0, 126, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#007e9e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |right_to_left|';
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-573">
                                    <div class="image-ultimate-map-573">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-573">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-573").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-573 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-572">
                                    <div class="image-ultimate-map-572">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-572">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-572").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-572 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-571">
                                    <div class="image-ultimate-map-571">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-571">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt  </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-571").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-571 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 1 <span>Single Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#iheu-general-1-data">Select</button>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-1-data" >
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
                                        <input type="hidden" name="style" value="general-1">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-570">
                                    <div class="image-ultimate-map-570">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-570 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-570").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-570 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>   
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-569">
                                    <div class="image-ultimate-map-569">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-569 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up">  Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-569").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-569 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-568">
                                    <div class="image-ultimate-map-568">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-568 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up">  Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-568").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-568 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 2 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#iheu-general-2-data">Select</button>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-2-data" >
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
                                        <input type="hidden" name="style" value="general-2">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-567">
                                    <div class="image-ultimate-map-567">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-567 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt  </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-567").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-567 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>   
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-566">
                                    <div class="image-ultimate-map-566">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-566 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-566").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-566 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-565">
                                    <div class="image-ultimate-map-565">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-565 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-565").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-565 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>    
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 3 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#iheu-general-3-data">Select</button>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-3-data" >
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
                                        <input type="hidden" name="style" value="general-3">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-561">
                                    <div class="image-ultimate-map-561">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-561 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-561").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-561 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-560">
                                    <div class="image-ultimate-map-560">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-560 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-560").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-560 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-559">
                                    <div class="image-ultimate-map-559">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-559 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-559").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-559 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>    
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 4 <span>Single Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#iheu-general-4-data">Select</button>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-4-data" >
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
                                        <input type="hidden" name="style" value="general-4">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-558">
                                    <div class="image-ultimate-map-558">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-558 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info-2">
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                            <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-558").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-558 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-557">
                                    <div class="image-ultimate-map-557">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-557 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info-2">
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                            <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-557").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-557 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-555">
                                    <div class="image-ultimate-map-555">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-555 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info-2">
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                            <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-555").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-555 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 5 <span>2 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#iheu-general-5-data">Select</button>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-5-data" >
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
                                        <input type="hidden" name="style" value="general-5">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-553">
                                    <div class="image-ultimate-map-553">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-553 scale_down">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-553").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-553 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-552">
                                    <div class="image-ultimate-map-552">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-552 scale_down_up">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt  </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-552").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-552 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-551">
                                    <div class="image-ultimate-map-551">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-551 scale_up">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-551").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-551 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 6 <span>3 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-6-data" >
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
                                        <input type="hidden" name="style" value="general-6">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-550">
                                    <div class="image-ultimate-map-550">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-550 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt  </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-550").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-550 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-549">
                                    <div class="image-ultimate-map-549">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-549 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-549").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-549 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-548">
                                    <div class="image-ultimate-map-548">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-548 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt  </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-548").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-548 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>  
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 7 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-7-data" >
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
                                        <input type="hidden" name="style" value="general-7">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-547">
                                    <div class="image-ultimate-map-547">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-547 bottom_to_top">
                                                <div class="iheu-img-2">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo plugins_url('image/1.jpg', __FILE__); ?>">
                                                    </div>
                                                </div>
                                                <div class="iheu-info-2">
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                            <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-547").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-547 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>   
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-546">
                                    <div class="image-ultimate-map-546">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-546 top_to_bottom">
                                                <div class="iheu-img-2">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo plugins_url('image/2.jpg', __FILE__); ?>">
                                                    </div>
                                                </div>
                                                <div class="iheu-info-2">
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                            <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-546").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-546 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-545">
                                    <div class="image-ultimate-map-545">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-545 left_to_right">
                                                <div class="iheu-img-2">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo plugins_url('image/3.jpg', __FILE__); ?>">
                                                    </div>
                                                </div>
                                                <div class="iheu-info-2">
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                            <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-545").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-545 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>  
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 8 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-8-data" >
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
                                        <input type="hidden" name="style" value="general-8">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-544">
                                    <div class="image-ultimate-map-544">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-544 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-544").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-544 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>   
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-543">
                                    <div class="image-ultimate-map-543">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-543 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up">  Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-543").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-543 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-542">
                                    <div class="image-ultimate-map-542">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-542 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-542").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-542 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>   
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 9 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-9-data" >
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
                                        <input type="hidden" name="style" value="general-9">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-541">
                                    <div class="image-ultimate-map-541">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-541 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt  </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-541").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-541 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-540">
                                    <div class="image-ultimate-map-540">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-540 bottom_to_top">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-540").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-540 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-539">
                                    <div class="image-ultimate-map-539">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-539 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-539").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-539 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>  
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 10 <span>2 Layout</span>
                        </div>
                       <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-10-data" >
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
                                        <input type="hidden" name="style" value="general-10">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-538">
                                    <div class="image-ultimate-map-538">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-538 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up">  Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-538").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-538 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-537">
                                    <div class="image-ultimate-map-537">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-537 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up">  Unique and Handmade Beautiful T-Shirts

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-537").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-537 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-536">
                                    <div class="image-ultimate-map-536">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-536 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt  </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-536").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-536 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 11 <span>4 Layout</span>
                        </div>
                      <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-11-data" >
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
                                        <input type="hidden" name="style" value="general-11">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-535">
                                    <div class="image-ultimate-map-535">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-535 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt  </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-535").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-535 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-534">
                                    <div class="image-ultimate-map-534">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-534 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt  </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-534").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-534 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-533">
                                    <div class="image-ultimate-map-533">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-533 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up">  Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-533").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-533 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 12 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-12-data" >
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
                                        <input type="hidden" name="style" value="general-12">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-532">
                                    <div class="image-ultimate-map-532">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-532">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-zoom-in"> Beautiful T-Shirt  </h3>
                                                        <p class="iheu-zoom-in"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-532").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-532 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>   
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-531">
                                    <div class="image-ultimate-map-531">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-531">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up">  Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-531").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-531 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-530">
                                    <div class="image-ultimate-map-530">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-530">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-530").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-530 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>   
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 13 <span>Single Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-13-data" >
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
                                        <input type="hidden" name="style" value="general-13">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-529">
                                    <div class="image-ultimate-map-529">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-529 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt  </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-529").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-529 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-528">
                                    <div class="image-ultimate-map-528">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-528 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-528").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-528 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>   
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-527">
                                    <div class="image-ultimate-map-527">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-527 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-527").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-527 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>  
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 14 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-14-data" >
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
                                        <input type="hidden" name="style" value="general-14">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-526">
                                    <div class="image-ultimate-map-526">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-526">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-526").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-526 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-525">
                                    <div class="image-ultimate-map-525">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-525">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-525").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-525 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-524">
                                    <div class="image-ultimate-map-524">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-524">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt  </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-524").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-524 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 15 <span>Single Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-15-data" >
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
                                        <input type="hidden" name="style" value="general-15">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-523">
                                    <div class="image-ultimate-map-523">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-523 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt  </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-523").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-523 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>   
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-522">
                                    <div class="image-ultimate-map-522">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-522 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-522").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-522 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-521">
                                    <div class="image-ultimate-map-521">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-521 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up">  Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-521").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-521 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 16 <span>2 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-16-data" >
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
                                        <input type="hidden" name="style" value="general-16">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-520">
                                    <div class="image-ultimate-map-520">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-520">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-down-big"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-down-big">  Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-520").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-520 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-519">
                                    <div class="image-ultimate-map-519">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-519">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-519").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-519 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-518">
                                    <div class="image-ultimate-map-518">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-518">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-518").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-518 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>  
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 17 <span>Single Layout</span>
                        </div>
                         <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-17-data" >
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
                                        <input type="hidden" name="style" value="general-17">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-517">
                                    <div class="image-ultimate-map-517">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-517 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info-2">  <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                            <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                        </div>
                                                    </div>  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-517").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-517 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-516">
                                    <div class="image-ultimate-map-516">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-516 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info-2">  <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Beautiful T-Shirt  </h3>
                                                            <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                        </div>
                                                    </div>  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-516").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-516 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-515">
                                    <div class="image-ultimate-map-515">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-515 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info-2">  <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Beautiful T-Shirt  </h3>
                                                            <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                        </div>
                                                    </div>  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-515").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-515 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>     
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 18 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-18-data" >
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
                                        <input type="hidden" name="style" value="general-18">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-514">
                                    <div class="image-ultimate-map-514">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-514 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info-2">   <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                            <p class="iheu-fade-up">  Unique and Handmade Beautiful T-Shirts </p>
                                                        </div>
                                                    </div> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-514").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-514 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-513">
                                    <div class="image-ultimate-map-513">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-513 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info-2">   <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                            <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                        </div>
                                                    </div> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-513").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-513 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-512">
                                    <div class="image-ultimate-map-512">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-512 bottom_to_top">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info-2">   <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                            <p class="iheu-fade-up">  Unique and Handmade Beautiful T-Shirts </p>
                                                        </div>
                                                    </div> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-512").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-512 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 19 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-19-data" >
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
                                        <input type="hidden" name="style" value="general-19">
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-511">
                                    <div class="image-ultimate-map-511">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-511 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-511").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-511 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-510">
                                    <div class="image-ultimate-map-510">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-510 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt  </h3>
                                                        <p class="iheu-fade-up"> Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-510").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-510 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-509">
                                    <div class="image-ultimate-map-509">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-509 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Beautiful T-Shirt </h3>
                                                        <p class="iheu-fade-up">  Unique and Handmade Beautiful T-Shirts </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-509").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-509 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            General Effects 20 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro only</em>
                        </div>
                    </div>
                    <div class="modal fade" id="iheu-general-20-data" >
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
                                        <input type="hidden" name="style" value="general-20">
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