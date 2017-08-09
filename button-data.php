<?php

function iheu_ultimate_oxi_shortcode_button1($styleid, $styledata, $listdata) {

    wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    wp_enqueue_style('iheu-style', plugins_url('css-js/font-awesome.min.css', __FILE__));
    ?>
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
                    overflow: hidden;
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
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    vertical-align: middle;
                    text-align: center;
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a{
                    display: inline-block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:first-child{
                    margin-right: <?php echo $styledata[99]; ?>px
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:hover,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:active,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data a:focus{
                    border:none;
                    box-shadow: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data .fa{
                    background: <?php echo $styledata[89]; ?>;
                    -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                    -webkit-border-radius: <?php echo $styledata[95]; ?>%;
                    -moz-border-radius:<?php echo $styledata[95]; ?>%;
                    border-radius: <?php echo $styledata[95]; ?>%;
                    color: <?php echo $styledata[87]; ?>;
                    display: inline-block;
                    line-height: <?php echo $styledata[97]; ?>px;
                    font-size: <?php echo $styledata[85]; ?>px;
                    text-align: center;
                    text-decoration: none;
                    width: <?php echo $styledata[97]; ?>px;
                    height: <?php echo $styledata[97]; ?>px;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data .fa:hover{
                    color: <?php echo $styledata[91]; ?>;
                    background-color: <?php echo $styledata[93]; ?>;
                }


                <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info {
                    opacity: 1;
                }
            </style>

            <?php
            foreach ($listdata as $value) {

                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if ($value['data1'] != '') {
                    $valuedata1 = ' <a ' . $opennewtab . ' href="' . $value['data1link'] . '"><i class="fa ' . $value['data1'] . '"></i></a>';
                }
                if ($value['data2'] != '') {
                    $valuedata2 = ' <a ' . $opennewtab . ' href="' . $value['data2link'] . '"><i class="fa ' . $value['data2'] . '"></i></a>';
                }

                echo '<div class="' . $styledata[1] . ' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . '">
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                           
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                             ' . $valuedata1 . '
                                                             ' . $valuedata2 . '
                                                            </div>
                                                        </div>
                                                    </div>
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

    <?php
}
