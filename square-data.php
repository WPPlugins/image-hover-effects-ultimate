<?php
function iheu_ultimate_oxi_shortcode_square1($styleid, $styledata, $listdata) {

    wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
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
                                        -webkit-transition: all 0.5s ease-in-out;
                                        -moz-transition: all 0.5s ease-in-out;
                                        transition: all 0.5s ease-in-out;
                                        -webkit-transform: rotate(0deg) scale(1);
                                        -moz-transform: rotate(0deg) scale(1);
                                        -ms-transform: rotate(0deg) scale(1);
                                        -o-transform: rotate(0deg) scale(1);
                                        transform: rotate(0deg) scale(1);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                                        background: <?php echo $styledata[13]; ?>;
                                        visibility: hidden;
                                        -webkit-transition: all 0.5s 0.3s ease-in-out;
                                        -moz-transition: all 0.5s 0.3s ease-in-out;
                                        transition: all 0.35s 0.5s ease-in-out;
                                        -webkit-transform: rotate(720deg) scale(0);
                                        -moz-transform: rotate(720deg) scale(0);
                                        -ms-transform: rotate(720deg) scale(0);
                                        -o-transform: rotate(720deg) scale(0);
                                        transform: rotate(720deg) scale(0);
                                        opacity: 0;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                                        display: table-cell;
                                        <?php echo $styledata[15]; ?>
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                                        font-size: <?php echo $styledata[33]; ?>px;
                                        font-weight: <?php echo $styledata[39]; ?>;
                                        padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                                        margin-bottom: <?php echo $styledata[45]; ?>px;
                                        margin-top: <?php echo $styledata[89]; ?>px;
                                        line-height: 120%;
                                        font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                                        width:100%;
                                        float: left;
                                        color: <?php echo $styledata[35]; ?>;
                                        background-color: <?php echo $styledata[85]; ?>;
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
                                         width:100%;
                                        float: left;
                                        font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                                        color: <?php echo $styledata[49]; ?>;
                                        padding:0 <?php echo $styledata[11]; ?>px; 
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
                                        display:-webkit-inline-box;
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

                                    .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img {
                                        -webkit-transform: rotate(720deg) scale(0);
                                        -moz-transform: rotate(720deg) scale(0);
                                        -ms-transform: rotate(720deg) scale(0);
                                        -o-transform: rotate(720deg) scale(0);
                                        transform: rotate(720deg) scale(0);
                                        opacity: 0;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info {
                                        visibility: visible;
                                        opacity: 1;
                                        -webkit-transform: rotate(0deg) scale(1);
                                        -moz-transform: rotate(0deg) scale(1);
                                        -ms-transform: rotate(0deg) scale(1);
                                        -o-transform: rotate(0deg) scale(1);
                                        transform: rotate(0deg) scale(1);
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
                                    echo '<div class="' . $styledata[1] . ' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_square2($styleid, $styledata, $listdata) {

    wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
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
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        text-align: center;
                                        -webkit-backface-visibility: hidden;
                                        backface-visibility: hidden;
                                        display: table;
                                    }

                                    .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                                        animation-duration: <?php echo $styledata[21]; ?>s;
                                    }

                                    .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                                        padding: <?php echo $styledata[9]; ?>px;
                                    }
                                    .image-ultimate-map-<?php echo $styleid; ?> {
                                        max-width: <?php echo $styledata[5]; ?>px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                        overflow: hidden;
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
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                                        background: <?php echo $styledata[13]; ?>;
                                        opacity: 0;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                                        display: table-cell;
                                        <?php echo $styledata[15]; ?>
                                        padding-bottom:  <?php echo $styledata[11]; ?>px;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                                        font-size: <?php echo $styledata[33]; ?>px;
                                        font-weight: <?php echo $styledata[39]; ?>;
                                        padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                                        margin-bottom: <?php echo $styledata[45]; ?>px;
                                        margin-top: 0px;
                                        line-height: 120%;
                                        font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                                        width:100%;
                                        float: left;
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
                                         width:100%;
                                        float: left;
                                        font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                                        color: <?php echo $styledata[49]; ?>;
                                        padding:0 <?php echo $styledata[11]; ?>px; 
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
                                        display:-webkit-inline-box;
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
                                    .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info {
                                        visibility: visible;
                                        opacity: 1;
                                    }

                                    .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                                        bottom:0;
                                        min-height: 50px;
                                        -webkit-transform: translateY(100%);
                                        -moz-transform: translateY(100%);
                                        -ms-transform: translateY(100%);
                                        -o-transform: translateY(100%);
                                        transform: translateY(100%);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img {
                                        -webkit-transform: translateY(-50px);
                                        -moz-transform: translateY(-50px);
                                        -ms-transform: translateY(-50px);
                                        -o-transform: translateY(-50px);
                                        transform: translateY(-50px);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info {
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }

                                    .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {

                                        -webkit-transform: translateY(-100%);
                                        -moz-transform: translateY(-100%);
                                        -ms-transform: translateY(-100%);
                                        -o-transform: translateY(-100%);
                                        transform: translateY(-100%);
                                        top:0;
                                        min-height: 50px;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img {
                                        -webkit-transform: translateY(50px);
                                        -moz-transform: translateY(50px);
                                        -ms-transform: translateY(50px);
                                        -o-transform: translateY(50px);
                                        transform: translateY(50px);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info {
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

                                    echo '<div class="' . $styledata[1] . ' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_square3($styleid, $styledata, $listdata) {

    wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
    ?>
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
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .mask1,
                                    .image-ultimate-hover-<?php echo $styleid; ?> .mask2 {
                                        background: <?php echo $styledata[13]; ?>;
                                        opacity:0.4;
                                        position: absolute;
                                        width: 200%;
                                        height: 200%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .mask1 {
                                        left: auto;
                                        right: 0;
                                        top: 0;
                                        -webkit-transform: rotate(45deg) translateX(-50%);
                                        -moz-transform: rotate(45deg) translateX(-50%);
                                        -ms-transform: rotate(45deg) translateX(-50%);
                                        -o-transform: rotate(45deg) translateX(-50%);
                                        transform: rotate(45deg) translateX(-50%);
                                        -webkit-transform-origin: 100% 0%;
                                        -moz-transform-origin: 100% 0%;
                                        -ms-transform-origin: 100% 0%;
                                        -o-transform-origin: 100% 0%;
                                        transform-origin: 100% 0%;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .mask2 {
                                        top: auto;
                                        bottom: 0;
                                        left: 0;
                                        -webkit-transform: rotate(45deg) translateX(50%);
                                        -moz-transform: rotate(45deg) translateX(50%);
                                        -ms-transform: rotate(45deg) translateX(50%);
                                        -o-transform: rotate(45deg) translateX(50%);
                                        transform: rotate(45deg) translateX(50%);
                                        -webkit-transform-origin: 0% 100%;
                                        -moz-transform-origin: 0% 100%;
                                        -ms-transform-origin: 0% 100%;
                                        -o-transform-origin: 0% 100%;
                                        transform-origin: 0% 100%;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                                        visibility: hidden;
                                        -webkit-transition: all 0.35s ease-in-out 0.35s;
                                        -moz-transition: all 0.35s ease-in-out 0.35s;
                                        transition: all 0.35s ease-in-out 0.35s;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                                        display: table-cell;
                                        <?php echo $styledata[15]; ?>
                                    }
                                   
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .data-2{
                                        background: <?php echo $styledata[13]; ?>;
                                        width:100%;
                                        float: left;
                                        padding-top: <?php echo $styledata[11]; ?>px;
                                        padding-bottom: <?php echo $styledata[11]; ?>px; 
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                                        font-size: <?php echo $styledata[33]; ?>px;
                                        font-weight: <?php echo $styledata[39]; ?>;
                                        padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                                        margin-bottom: <?php echo $styledata[45]; ?>px;
                                        margin-top: <?php echo $styledata[89]; ?>px;
                                        line-height: 120%;
                                        font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                                        width:100%;
                                        float: left;
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
                                        width: 100%;
                                        float:left;
                                        line-height: 120%;
                                        font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                                        color: <?php echo $styledata[49]; ?>;
                                        padding:0 <?php echo $styledata[11]; ?>px; 
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
                                        display:-webkit-inline-box;
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

                                    .image-ultimate-hover-<?php echo $styleid; ?>:hover .mask1 {
                                        -webkit-transform: rotate(45deg) translateX(0);
                                        -moz-transform: rotate(45deg) translateX(0);
                                        -ms-transform: rotate(45deg) translateX(0);
                                        -o-transform: rotate(45deg) translateX(0);
                                        transform: rotate(45deg) translateX(0);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>:hover .mask2 {
                                        -webkit-transform: rotate(45deg) translateX(-0);
                                        -moz-transform: rotate(45deg) translateX(-0);
                                        -ms-transform: rotate(45deg) translateX(-0);
                                        -o-transform: rotate(45deg) translateX(-0);
                                        transform: rotate(45deg) translateX(-0);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                                        visibility: visible;
                                        -webkit-transform: translateX(-100%);
                                        -moz-transform:translateX(-100%);
                                        -ms-transform:translateX(-100%);
                                        -o-transform: translateX(-100%);
                                        transform:translateX(-100%);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info {
                                        width: 100%;
                                        height: 100%;
                                        visibility: visible;
                                        -webkit-transform: translateX(0);
                                        -moz-transform:translateX(0);
                                        -ms-transform:translateX(0);
                                        -o-transform: translateX(0);
                                        transform:translateX(0);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                                        visibility: visible;
                                        -webkit-transform: translateX(100%);
                                        -moz-transform:translateX(100%);
                                        -ms-transform:translateX(100%);
                                        -o-transform: translateX(100%);
                                        transform:translateX(100%);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info {
                                        width: 100%;
                                        height: 100%;
                                        visibility: visible;
                                        -webkit-transform: translateX(0);
                                        -moz-transform:translateX(0);
                                        -ms-transform:translateX(0);
                                        -o-transform: translateX(0);
                                        transform:translateX(0);
                                    }
                                     .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                                        visibility: visible;
                                        -webkit-transform: translateY(-100%);
                                        -moz-transform:translateY(-100%);
                                        -ms-transform:translateY(-100%);
                                        -o-transform: translateY(-100%);
                                        transform:translateY(-100%);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info {
                                        width: 100%;
                                        height: 100%;
                                        visibility: visible;
                                        -webkit-transform: translateX(0);
                                        -moz-transform:translateX(0);
                                        -ms-transform:translateX(0);
                                        -o-transform: translateX(0);
                                        transform:translateX(0);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                                        visibility: visible;
                                        -webkit-transform: translateY(100%);
                                        -moz-transform:translateY(100%);
                                        -ms-transform:translateY(100%);
                                        -o-transform: translateY(100%);
                                        transform:translateY(100%);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info {
                                        width: 100%;
                                        height: 100%;
                                        visibility: visible;
                                        -webkit-transform: translateX(0);
                                        -moz-transform:translateX(0);
                                        -ms-transform:translateX(0);
                                        -o-transform: translateX(0);
                                        transform:translateX(0);
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
                                                    <div class="mask1"></div>
                                                    <div class="mask2"></div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                           <div class="data-2">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                                </div>
                                                        </div>
                                                    </div>';
                                    }
                                    if ($value['link'] != '' && $value['buttom_text'] == '') {
                                        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="iheu-button"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                        <div class="mask1"></div>
                                                        <div class="mask2"></div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                             <div class="data-2">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div> </div>
                                                        </div>
                                                     </a>';
                                    }
                                    if ($value['link'] != '' && $value['buttom_text'] != '') {
                                        $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                     <div class="mask1"></div>
                                                     <div class="mask2"></div>
                                                     <div class="iheu-info">
                                                            <div class="iheu-data">
                                                             <div class="data-2">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                             </div>
                                                     </div>';
                                    }

                                    echo '<div class="' . $styledata[1] . ' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
                                                            ' . $valuedata . '
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
                    </div>
    <?php
}

function iheu_ultimate_oxi_shortcode_square4($styleid, $styledata, $listdata) {

    wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
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
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                                        background: <?php echo $styledata[13]; ?>;
                                        opacity: 0;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        padding-top: <?php echo $styledata[11]; ?>px;
                                        padding-bottom: <?php echo $styledata[11]; ?>px;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                                        display: table-cell;
                                        <?php echo $styledata[15]; ?>
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                                        font-size: <?php echo $styledata[33]; ?>px;
                                        font-weight: <?php echo $styledata[39]; ?>;
                                        padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                                        margin-bottom: <?php echo $styledata[45]; ?>px;
                                        margin-top: <?php echo $styledata[89]; ?>px;
                                        line-height: 120%;
                                        font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                                        width:100%;
                                        float: left;
                                        color: <?php echo $styledata[35]; ?>;
                                        background-color: <?php echo $styledata[85]; ?>;

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
                                        font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                                        color: <?php echo $styledata[49]; ?>;
                                        padding:0 <?php echo $styledata[11]; ?>px; 
                                        width: 100%;
                                        float: left;
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
                                        display:-webkit-inline-box;
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
                                    .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img {
                                        -webkit-transform: scale(0);
                                        -moz-transform: scale(0);
                                        -ms-transform: scale(0);
                                        -o-transform: scale(0);
                                        transform: scale(0);
                                        -webkit-transition-delay: 0;
                                        -moz-transition-delay: 0;
                                        transition-delay: 0;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                                    .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info{
                                        visibility: visible;
                                        opacity: 1;
                                        -webkit-transform: scale(1) rotate(0deg);
                                        -moz-transform: scale(1) rotate(0deg);
                                        -ms-transform: scale(1) rotate(0deg);
                                        -o-transform: scale(1) rotate(0deg);
                                        transform: scale(1) rotate(0deg);
                                        -webkit-transition-delay: 0.3s;
                                        -moz-transition-delay: 0.3s;
                                        transition-delay: 0.3s;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                                        -webkit-transform: scale(0) rotate(-180deg);
                                        -moz-transform: scale(0) rotate(-180deg);
                                        -ms-transform: scale(0) rotate(-180deg);
                                        -o-transform: scale(0) rotate(-180deg);
                                        transform: scale(0) rotate(-180deg);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                                        -webkit-transform: scale(0) rotate(180deg);
                                        -moz-transform: scale(0) rotate(180deg);
                                        -ms-transform: scale(0) rotate(180deg);
                                        -o-transform: scale(0) rotate(180deg);
                                        transform: scale(0) rotate(180deg);
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

                                    echo '<div class="' . $styledata[1] . ' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
                                                            ' . $valuedata . '
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

function iheu_ultimate_oxi_shortcode_square5($styleid, $styledata, $listdata) {

    wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
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
                                    .image-ultimate-hover-<?php echo $styleid; ?>{
                                        overflow: hidden;
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
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                                        background: <?php echo $styledata[13]; ?>;
                                        opacity: 0;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                                        display: table-cell;
                                        <?php echo $styledata[15]; ?>
                                        padding-top:<?php echo $styledata[11]; ?>px;
                                        padding-bottom:<?php echo $styledata[11]; ?>px;
                                    }
                                    .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                                        font-size: <?php echo $styledata[33]; ?>px;
                                        font-weight: <?php echo $styledata[39]; ?>;
                                        padding: <?php echo $styledata[87]; ?>px <?php echo $styledata[11]; ?>px; 
                                        margin-bottom: <?php echo $styledata[45]; ?>px;
                                        margin-top: <?php echo $styledata[89]; ?>px;
                                        line-height: 120%;
                                        font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                                        width:100%;
                                        float: left;
                                        color: <?php echo $styledata[35]; ?>;
                                        background-color: <?php echo $styledata[85]; ?>;

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
                                        font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                                        color: <?php echo $styledata[49]; ?>;
                                        padding:0 <?php echo $styledata[11]; ?>px; 
                                        width: 100%;
                                        float: left;
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
                                        display:-webkit-inline-box;
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
                                    .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img {
                                        -webkit-transform: scale(1.3);
                                        -moz-transform: scale(1.3);
                                        -ms-transform: scale(1.3);
                                        -o-transform: scale(1.3);
                                        transform: scale(1.3);
                                    }
                                     .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info{
                                         opacity: 1;
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

                                    echo '<div class="' . $styledata[1] . ' image-ultimate-hover-padding-' . $styleid . '">
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[91] . '">
                                                            ' . $valuedata . '
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