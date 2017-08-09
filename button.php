<?php
if (!defined('ABSPATH'))
    exit;
wp_enqueue_script('jQuery');
wp_enqueue_script('iheu-vendor-bootstrap-jss', plugins_url('css-js/bootstrap.min.js', __FILE__));
wp_enqueue_style('iheu-vendor-bootstrap', plugins_url('css-js/bootstrap.min.css', __FILE__));
wp_enqueue_style('iheu-vendor-style', plugins_url('css-js/style.css', __FILE__));
wp_enqueue_style('font-awesome', plugins_url('css-js/font-awesome.min.css', __FILE__));
wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
wp_enqueue_style('iheu-button-demo', plugins_url('css-js/button-demo.css', __FILE__));
wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));

if (!current_user_can('edit_others_pages')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
}
if ($_POST['submit'] != '' && $_POST['submit'] == 'Save') {
    $name = sanitize_text_field($_POST['style-name']);
    $style_name = sanitize_text_field($_POST['style']);
    $css = 'iheu-item |image-ultimate-responsive-2|image-radius |0|image-width |300|image-height |300|image-margin |20|image-padding |30|background-color |rgba(0, 149, 179, 1)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(49, 224, 148, 0.33)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |20|button-font-color |#00946d|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(0, 148, 109, 1)|button-border-radius |10|button-height-width |50|button-margin-right |5|';
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
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-418">
                                    <div class="image-ultimate-map-418">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-418">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-418").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-418 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-420">
                                    <div class="image-ultimate-map-420">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-420">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/2.jpg', __FILE__); ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a  href="#"><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-420").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-420 pulse",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-421">
                                    <div class="image-ultimate-map-421">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-421">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/3.jpg', __FILE__); ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a  href="#"><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-421").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-421 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>   
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Button Effects 1 <span>Single Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#iheu-button-1-data">Select</button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="iheu-button-1-data" >
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
                                    <input type="hidden" name="style" value="button-1">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-461">
                                    <div class="image-ultimate-map-461">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-461 bottom_to_top">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a  href="#"><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-461").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-461 fadeIn",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-460">
                                    <div class="image-ultimate-map-460">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-460 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a  href="#"><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-460").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-460 lightSpeedIn",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-459">
                                    <div class="image-ultimate-map-459">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-459 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a  href="#"><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-459").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-459 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Button Effects 2 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro Only</em>
                        </div>
                    </div>
                </div>
          
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-458 iheu-editing">
                                    <div class="image-ultimate-map-458">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-458 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a  href="#"><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-458").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-458 fadeIn",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-457 iheu-editing">
                                    <div class="image-ultimate-map-457">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-457 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a  href="#"><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-457").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-457 fadeInRight",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-456 iheu-editing">
                                    <div class="image-ultimate-map-456">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-456 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a  href="#"><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-456").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-456 fadeIn",
                                            offset: 100
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Button Effects 3 <span>2 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro Only</em>  
                        </div>
                    </div>
                </div>
              
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">

                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-455">
                                    <div class="image-ultimate-map-455">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-455 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a  href="#"><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-455").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-455 bounceInUp",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-454">
                                    <div class="image-ultimate-map-454">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-454 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a  href="#"><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-454").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-454 bounceInRight",
                                            offset: 100
                                        });
                                    });
                                </script>   
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-453">
                                    <div class="image-ultimate-map-453">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-453 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a  href="#"><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-453").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-453 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Button Effects 4 <span>2 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro Only</em>
                        </div>
                    </div>
                </div>
             
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-452">
                                    <div class="image-ultimate-map-452">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-452 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/1.jpg', __FILE__); ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a  href="#"><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-452").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-452 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-450">
                                    <div class="image-ultimate-map-450">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-450 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/3.jpg', __FILE__); ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-450").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-450 fadeIn",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-449">
                                    <div class="image-ultimate-map-449">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-449 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/4.jpg', __FILE__); ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a  href="#"><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-449").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-449 rubberBand",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Button Effects 5 <span>3 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro Only</em>  
                        </div>
                    </div>
                </div>
               
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">


                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-446">
                                    <div class="image-ultimate-map-446">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-446 bottom_to_top">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/5.jpg', __FILE__); ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-446").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-446 shake",
                                            offset: 100
                                        });
                                    });
                                </script>       
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-445">
                                    <div class="image-ultimate-map-445">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-445 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/6.jpg', __FILE__); ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-445").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-445 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-444">
                                    <div class="image-ultimate-map-444">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-444 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/1.jpg', __FILE__); ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-444").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-444 shake",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Button Effects 6 <span>4 Layout</span>
                        </div>
                         <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro Only</em>  
                        </div>     
                    </div>
                </div>
              
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-443">
                                    <div class="image-ultimate-map-443">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-443 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/2.jpg', __FILE__); ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-443").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-443 wobble",
                                            offset: 100
                                        });
                                    });
                                </script>   
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-442">
                                    <div class="image-ultimate-map-442">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-442 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/3.jpg', __FILE__); ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-442").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-442 swing",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-441">
                                    <div class="image-ultimate-map-441">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-441 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/4.jpg', __FILE__); ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-441").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-441 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Button Effects 7 <span>2 Layout</span>
                        </div>
                         <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro Only</em>  
                        </div>
                    </div>
                </div>
                
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-440">
                                    <div class="image-ultimate-map-440">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-440 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/5.jpg', __FILE__); ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-440").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-440 fadeInDown",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-439">
                                    <div class="image-ultimate-map-439">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-439 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/6.jpg', __FILE__); ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-439").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-439 rotateIn",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-438">
                                    <div class="image-ultimate-map-438">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-438 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/1.jpg', __FILE__); ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-438").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-438 zoomInRight",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Button Effects 8 <span>2 Layout</span>
                        </div>
                         <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro Only</em>  
                        </div>
                    </div>
                </div>
             
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-437">
                                    <div class="image-ultimate-map-437">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-437 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-437").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-437 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-436">
                                    <div class="image-ultimate-map-436">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-436 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-436").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-436 zoomIn",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-435">
                                    <div class="image-ultimate-map-435">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-435 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-435").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-435 zoomIn",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Button Effects 9 <span>2 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro Only</em>  
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="iheu-button-9-data" >
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
                                    <input type="hidden" name="style" value="button-9">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-433">
                                    <div class="image-ultimate-map-433">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-433 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/2.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="overlayB"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-433").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-433 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-432">
                                    <div class="image-ultimate-map-432">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-432 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/3.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="overlayB"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-432").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-432 bounce",
                                            offset: 100
                                        });
                                    });
                                </script>  
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-431">
                                    <div class="image-ultimate-map-431">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-431 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="overlayB"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-431").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-431 shake",
                                            offset: 100
                                        });
                                    });
                                </script> 
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Button Effects 10 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro Only</em>  
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="iheu-button-10-data" >
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
                                    <input type="hidden" name="style" value="button-10">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-429">
                                    <div class="image-ultimate-map-429">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-429 bottom_to_top">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-429").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-429 fadeIn",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-430">
                                    <div class="image-ultimate-map-430">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-430 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-430").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-430 flipInX",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-428">
                                    <div class="image-ultimate-map-428">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-428 top_to_bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/1.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-428").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-428 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 

                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Button Effects 11 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro Only</em>  
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="iheu-button-11-data" >
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
                                    <input type="hidden" name="style" value="button-11">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-425">
                                    <div class="image-ultimate-map-425">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-425 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/4.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-425").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-425 bounce",
                                            offset: 100
                                        });
                                    });
                                </script> 
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-424">
                                    <div class="image-ultimate-map-424">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-424 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/5.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-424").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-424 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>
                                <div class="image-ultimate-responsive-3 image-ultimate-hover-padding-423">
                                    <div class="image-ultimate-map-423">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-423 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo plugins_url('public/image/6.jpg', __FILE__); ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a  href=""><i class="fa  fa-facebook"></i></a>
                                                        <a  href=""><i class="fa fa-address-book"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        jQuery(".image-ultimate-hover-padding-423").addClass("iheu-hidden").viewportChecker({
                                            classToAdd: "iheu-visible image-ultimate-hover-animation-423 pulse",
                                            offset: 100
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Button Effects 12 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <em>Pro Only</em>  
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="iheu-button-12-data" >
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
                                    <input type="hidden" name="style" value="button-12">
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
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('[data-toggle="tooltip"]').tooltip();
    });
</script>