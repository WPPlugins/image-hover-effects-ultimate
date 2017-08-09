<?php
function iheu_ultimate_oxi_shortcode_styleall($styledata, $listdata, $styleid) {

    echo '<div class="image-ultimate-container"> 
        <div class="image-ultimate-row">';
    foreach ($listdata as $value) {

        if ($value['title'] != '') {
            $valuetitle = '<h3>' . iheu_html_special_charecter($value['title']) . '</h3>';
        }
        if ($value['files']) {
            $valuedesc = '<p>' . iheu_html_special_charecter($value['files']) . '</p>';
        }
        $valueurl = $value['link'];

        if ($value['link'] == '') {
            $valuedata = '<div class="hover-img">
                                                            <img src="' . $value['image'] . '" alt="' . iheu_html_special_charecter($value['title']) . '">
                                                        </div>
                                                        <div class="image-ultimate-info">
                                                        ' . $valuetitle . '
                                                        ' . $valuedesc . '
                                                        </div>';
        }
        if ($value['link'] != '' && $value['buttom_text'] == '') {
            $valuedata = '<a target="' . $styledata[11] . '" href="' . $value['link'] . '"><div class="hover-img">
                                                            <img src="' . $value['image'] . '" alt="' . iheu_html_special_charecter($value['title']) . '">
                                                        </div>
                                                        <div class="image-ultimate-info">
                                                        ' . $valuetitle . '
                                                        ' . $valuedesc . '
                                                        </div></a>';
        }
        if ($value['link'] != '' && $value['buttom_text'] != '') {
            $valuedata = '<div class="hover-img">
                                                            <img src="' . $value['image'] . '" alt="' . iheu_html_special_charecter($value['title']) . '">
                                                        </div>
                                                        <div class="image-ultimate-info">
                                                        ' . $valuetitle . '
                                                        ' . $valuedesc . '
                                                        <a target="' . $styledata[11] . '" href="" class="image-ultimate-button">' . iheu_html_special_charecter($value['buttom_text']) . '</a>    
                                                        </div>';
        }

        echo '<div class="' . $styledata[1] . ' image-ultimate-hover-padding-' . $styleid . '">
                                               
                                                <div class="image-ultimate-map-' . $styleid . '">
                                                    <div class="image-ultimate-map-absulate">
                                                        <div class="image-ultimate-hover-' . $styleid . '  ' . $styledata[79] . '">
                                                          ' . $valuedata . ' 
                                                        </div> 
                                                    </div>
                                                </div>  
                                            </div>';
    }
    echo '</div>
    </div>';
}

function iheu_ultimate_oxi_shortcode_style1($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[27] . '|' . $styledata[45] . '|' . $styledata[49] . '');
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    ?>
    <style>
        .image-ultimate-hover-padding-<?php echo $styleid; ?>{
            padding: <?php echo $styledata[7]; ?>px <?php echo $styledata[9]; ?>px;
        }
        .image-ultimate-map-<?php echo $styleid; ?>{
            max-width: <?php echo $styledata[3]; ?>px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .image-ultimate-map-<?php echo $styleid; ?>:after{
            padding-bottom: <?php echo $styledata[3] / $styledata[5] * 100; ?>%;
            content: "";
            display: block;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> {
            position: relative;
            width: 100%;
            text-align: center;
            height: 100%;
            height: 100%;
            text-align: center;
            margin: 0 auto;

        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img img{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100% !important; 
            height: 100% !important;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img, image-ultimate-hover-<?php echo $styleid; ?> a .hover-img {
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index:1;
            position: relative;
            width: 100%;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            height: 100%;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .hover-img:before{
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            box-shadow: inset 0 0 0 <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?>;
            z-index: 1; 
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info{
            position: absolute;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: <?php echo $styledata[13]; ?>;
            top: 0;
            bottom: 0;
            left: 0;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            right: 0
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info h3{
            color: <?php echo $styledata[25]; ?>;
            font-size: <?php echo $styledata[23]; ?>px;
            position: relative;
            padding: <?php echo $styledata[35]; ?>% 10% <?php echo $styledata[37]; ?>%;
            text-shadow: 0 0 1px <?php echo $styledata[39]; ?>, 0 1px 2px rgba(0, 0, 0, 0.3);
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[27]); ?>;
            font-wight: <?php echo $styledata[29]; ?>;
            margin: 0 10%;

            <?php
            if ($styledata[31] == 'yes') {
                echo 'border-bottom: 1px solid ' . $styledata[33] . ';';
            }
            ?>
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  .image-ultimate-info p{
            color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[49]; ?>% 0 <?php echo $styledata[51]; ?>%;
            margin: 0 10%;
            line-height: 140%;
            overflow:hidden;
            font-size: <?php echo $styledata[41]; ?>px;
            font-weight: <?php echo $styledata[47]; ?>;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[45]); ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a.image-ultimate-button{
            padding: <?php echo $styledata[67]; ?>px <?php echo $styledata[69]; ?>px;
            border-radius: 5px;
            text-align: center;
            font-size: <?php echo $styledata[53]; ?>px;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[59]); ?>;
            color: <?php echo $styledata[55]; ?> !important;
            border: 1px solid <?php echo $styledata[55]; ?>;
            font-weight: <?php echo $styledata[61]; ?>;
            background-color:<?php echo $styledata[57]; ?>;
            text-decoration: none;
            transition: all 0.3s ease;
            <?php
            echo $styledata[71];
            if ($styledata[71] == 'float: left ;') {
                echo 'margin-left: ' . $styledata[73] . '%';
            }
            if ($styledata[71] == 'float: right;') {
                echo 'margin-right: ' . $styledata[75] . '%';
            }
            ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  a:hover.image-ultimate-button{
            color: <?php echo $styledata[63]; ?> !important;
            background-color:<?php echo $styledata[65]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            opacity: 0;
            visibility: hidden;

        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .image-ultimate-info, .image-ultimate-hover-<?php echo $styleid; ?>:hover .image-ultimate-info {
            visibility: visible;
            opacity: 1;
            transition:0.5s
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            -webkit-transform: rotate(-20deg);
            -moz-transform: rotate(-20deg);
            -o-transform: rotate(-20deg);
            -ms-transform: rotate(-20deg);
            transform: rotate(-20deg);
        }
        <?php echo $styledata[77]; ?>
    </style>

    <?php
    iheu_ultimate_oxi_shortcode_styleall($styledata, $listdata, $styleid);
}

function iheu_ultimate_oxi_shortcode_style2($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[27] . '|' . $styledata[45] . '|' . $styledata[49] . '');
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    ?>
    <style>
        .image-ultimate-hover-padding-<?php echo $styleid; ?>{
            padding: <?php echo $styledata[7]; ?>px <?php echo $styledata[9]; ?>px;
        }
        .image-ultimate-map-<?php echo $styleid; ?>{
            max-width: <?php echo $styledata[3]; ?>px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .image-ultimate-map-<?php echo $styleid; ?>:after{
            padding-bottom: <?php echo $styledata[3] / $styledata[5] * 100; ?>%;
            content: "";
            display: block;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> {
            position: relative;
            width: 100%;
            text-align: center;
            height: 100%;
            height: 100%;
            text-align: center;
            margin: 0 auto;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img img{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100% !important; 
            height: 100% !important;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img, image-ultimate-hover-<?php echo $styleid; ?> a .hover-img {
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index:1;
            position: relative;
            width: 100%;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            height: 100%;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .hover-img:before{
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            box-shadow: inset 0 0 0 <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?> ;
            z-index: 1; 
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info{
            position: absolute;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: <?php echo $styledata[13]; ?>;
            top: 0;
            bottom: 0;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            left: 0;
            right: 0
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info h3{
            color: <?php echo $styledata[25]; ?>;
            font-size: <?php echo $styledata[23]; ?>px;
            position: relative;
            padding: <?php echo $styledata[35]; ?>% 10% <?php echo $styledata[37]; ?>%;
            text-shadow: 0 0 1px <?php echo $styledata[39]; ?>, 0 1px 2px rgba(0, 0, 0, 0.3);
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[27]); ?>;
            font-wight: <?php echo $styledata[29]; ?>;
            margin: 0 10%;

            <?php
            if ($styledata[31] == 'yes') {
                echo 'border-bottom: 1px solid ' . $styledata[33] . ';';
            }
            ?>
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  .image-ultimate-info p{
            color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[49]; ?>% 0 <?php echo $styledata[51]; ?>%;
            margin: 0 10%;
            line-height: 140%;
            overflow:hidden;
            font-size: <?php echo $styledata[41]; ?>px;
            font-weight: <?php echo $styledata[47]; ?>;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[45]); ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a.image-ultimate-button{
            padding: <?php echo $styledata[67]; ?>px <?php echo $styledata[69]; ?>px;
            border-radius: 5px;
            text-align: center;
            font-size: <?php echo $styledata[53]; ?>px;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[59]); ?>;
            color: <?php echo $styledata[55]; ?> !important;
            border: 1px solid <?php echo $styledata[55]; ?>;
            font-weight: <?php echo $styledata[61]; ?>;
            background-color:<?php echo $styledata[57]; ?>;
            text-decoration: none;
            transition: all 0.3s ease;
            <?php
            echo $styledata[71];
            if ($styledata[71] == 'float: left ;') {
                echo 'margin-left: ' . $styledata[73] . '%';
            }
            if ($styledata[71] == 'float: right;') {
                echo 'margin-right: ' . $styledata[75] . '%';
            }
            ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  a:hover.image-ultimate-button{
            color: <?php echo $styledata[63]; ?> !important;
            background-color:<?php echo $styledata[65]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            opacity: 0;
            visibility: hidden;

        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .image-ultimate-info, .image-ultimate-hover-<?php echo $styleid; ?>:hover .image-ultimate-info {
            visibility: visible;
            opacity: 1;
            transition:0.5s
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            opacity: 0;
            content:'';
            position: absolute;
            top: 0%;
            left: 0%;
            width: 0%;
            height: 10%;
            background: rgba(255,255,255,0.3);
            border-radius: 5px;
            transition: all 2s ease;
        }
        <?php echo $styledata[77]; ?>
    </style>

    <?php
    iheu_ultimate_oxi_shortcode_styleall($styledata, $listdata, $styleid);
}

function iheu_ultimate_oxi_shortcode_style3($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[27] . '|' . $styledata[45] . '|' . $styledata[49] . '');
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    ?>
    <style>
        .image-ultimate-hover-padding-<?php echo $styleid; ?>{
            padding: <?php echo $styledata[7]; ?>px <?php echo $styledata[9]; ?>px;
        }
        .image-ultimate-map-<?php echo $styleid; ?>{
            max-width: <?php echo $styledata[3]; ?>px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .image-ultimate-map-<?php echo $styleid; ?>:after{
            padding-bottom: <?php echo $styledata[3] / $styledata[5] * 100; ?>%;
            content: "";
            display: block;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> {
            position: relative;
            width: 100%;
            text-align: center;
            height: 100%;
            height: 100%;
            text-align: center;
            margin: 0 auto;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img img{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100% !important; 
            height: 100% !important;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img, image-ultimate-hover-<?php echo $styleid; ?> a .hover-img {
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index:1;
            position: relative;
            width: 100%;
            height: 100%;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .hover-img:before{
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            box-shadow: inset 0 0 0 <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?>;
            z-index: 1; 
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info{
            position: absolute;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: <?php echo $styledata[13]; ?>;
            top: 0;
            bottom: 0;
            left: 0;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            right: 0
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info h3{
            color: <?php echo $styledata[25]; ?>;
            font-size: <?php echo $styledata[23]; ?>px;
            position: relative;
            padding: <?php echo $styledata[35]; ?>% 10% <?php echo $styledata[37]; ?>%;
            text-shadow: 0 0 1px <?php echo $styledata[39]; ?>, 0 1px 2px rgba(0, 0, 0, 0.3);
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[27]); ?>;
            font-wight: <?php echo $styledata[29]; ?>;
            margin: 0 10%;

            <?php
            if ($styledata[31] == 'yes') {
                echo 'border-bottom: 1px solid ' . $styledata[33] . ';';
            }
            ?>
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  .image-ultimate-info p{
            color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[49]; ?>% 0 <?php echo $styledata[51]; ?>%;
            margin: 0 10%;
            line-height: 140%;
            overflow:hidden;
            font-size: <?php echo $styledata[41]; ?>px;
            font-weight: <?php echo $styledata[47]; ?>;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[45]); ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a.image-ultimate-button{
            padding: <?php echo $styledata[67]; ?>px <?php echo $styledata[69]; ?>px;
            border-radius: 5px;
            text-align: center;
            font-size: <?php echo $styledata[53]; ?>px;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[59]); ?>;
            color: <?php echo $styledata[55]; ?> !important;
            border: 1px solid <?php echo $styledata[55]; ?>;
            font-weight: <?php echo $styledata[61]; ?>;
            background-color:<?php echo $styledata[57]; ?>;
            text-decoration: none;
            transition: all 0.3s ease;
            <?php
            echo $styledata[71];
            if ($styledata[71] == 'float: left ;') {
                echo 'margin-left: ' . $styledata[73] . '%';
            }
            if ($styledata[71] == 'float: right;') {
                echo 'margin-right: ' . $styledata[75] . '%';
            }
            ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  a:hover.image-ultimate-button{
            color: <?php echo $styledata[63]; ?> !important;
            background-color:<?php echo $styledata[65]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            opacity: 0;
            visibility: hidden;

        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .image-ultimate-info, .image-ultimate-hover-<?php echo $styleid; ?>:hover .image-ultimate-info {
            visibility: visible;
            opacity: 1;
            transition:0.5s
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
        }
        <?php echo $styledata[77]; ?>
    </style>

    <?php
    iheu_ultimate_oxi_shortcode_styleall($styledata, $listdata, $styleid);
}

function iheu_ultimate_oxi_shortcode_style4($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[27] . '|' . $styledata[45] . '|' . $styledata[49] . '');
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    ?>
    <style>
        .image-ultimate-hover-padding-<?php echo $styleid; ?>{
            padding: <?php echo $styledata[7]; ?>px <?php echo $styledata[9]; ?>px;
        }
        .image-ultimate-map-<?php echo $styleid; ?>{
            max-width: <?php echo $styledata[3]; ?>px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .image-ultimate-map-<?php echo $styleid; ?>:after{
            padding-bottom: <?php echo $styledata[3] / $styledata[5] * 100; ?>%;
            content: "";
            display: block;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> {
            position: relative;
            width: 100%;
            text-align: center;
            height: 100%;
            height: 100%;
            text-align: center;
            margin: 0 auto;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img img{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100% !important; 
            height: 100% !important;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img, image-ultimate-hover-<?php echo $styleid; ?> a .hover-img {
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index:1;
            position: relative;
            width: 100%;
            height: 100%;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .hover-img:before{
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            box-shadow: inset 0 0 0 <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?>;
            z-index: 1; 
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info{
            position: absolute;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: <?php echo $styledata[13]; ?>;
            top: 0;
            bottom: 0;
            left: 0;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            right: 0
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info h3{
            color: <?php echo $styledata[25]; ?>;
            font-size: <?php echo $styledata[23]; ?>px;
            position: relative;
            padding: <?php echo $styledata[35]; ?>% 10% <?php echo $styledata[37]; ?>%;
            text-shadow: 0 0 1px <?php echo $styledata[39]; ?>, 0 1px 2px rgba(0, 0, 0, 0.3);
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[27]); ?>;
            font-wight: <?php echo $styledata[29]; ?>;
            margin: 0 10%;

            <?php
            if ($styledata[31] == 'yes') {
                echo 'border-bottom: 1px solid ' . $styledata[33] . ';';
            }
            ?>
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  .image-ultimate-info p{
            color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[49]; ?>% 0 <?php echo $styledata[51]; ?>%;
            margin: 0 10%;
            line-height: 140%;
            overflow:hidden;
            font-size: <?php echo $styledata[41]; ?>px;
            font-weight: <?php echo $styledata[47]; ?>;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[45]); ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a.image-ultimate-button{
            padding: <?php echo $styledata[67]; ?>px <?php echo $styledata[69]; ?>px;
            border-radius: 5px;
            text-align: center;
            font-size: <?php echo $styledata[53]; ?>px;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[59]); ?>;
            color: <?php echo $styledata[55]; ?> !important;
            border: 1px solid <?php echo $styledata[55]; ?>;
            font-weight: <?php echo $styledata[61]; ?>;
            background-color:<?php echo $styledata[57]; ?>;
            text-decoration: none;
            transition: all 0.3s ease;
            <?php
            echo $styledata[71];
            if ($styledata[71] == 'float: left ;') {
                echo 'margin-left: ' . $styledata[73] . '%';
            }
            if ($styledata[71] == 'float: right;') {
                echo 'margin-right: ' . $styledata[75] . '%';
            }
            ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  a:hover.image-ultimate-button{
            color: <?php echo $styledata[63]; ?> !important;
            background-color:<?php echo $styledata[65]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            opacity: 1;
            z-index: 2;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .image-ultimate-info, .image-ultimate-hover-<?php echo $styleid; ?>:hover .image-ultimate-info {
            visibility: visible;
            opacity: 1;
            transition:0.5s
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
            -webkit-transform-origin: 50% 0;
            -moz-transform-origin: 50% 0;
            -ms-transform-origin: 50% 0;
            -o-transform-origin: 50% 0;
            transform-origin: 50% 0;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            -webkit-transform: rotate3d(1, 0, 0, 180deg);
            -moz-transform: rotate3d(1, 0, 0, 180deg);
            -ms-transform: rotate3d(1, 0, 0, 180deg);
            -o-transform: rotate3d(1, 0, 0, 180deg);
            transform: rotate3d(1, 0, 0, 180deg);
        }
        <?php echo $styledata[77]; ?>
    </style>

    <?php
    iheu_ultimate_oxi_shortcode_styleall($styledata, $listdata, $styleid);
}

function iheu_ultimate_oxi_shortcode_style5($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[27] . '|' . $styledata[45] . '|' . $styledata[49] . '');
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    ?>
    <style>
        .image-ultimate-hover-padding-<?php echo $styleid; ?>{
            padding: <?php echo $styledata[7]; ?>px <?php echo $styledata[9]; ?>px;
        }
        .image-ultimate-map-<?php echo $styleid; ?>{
            max-width: <?php echo $styledata[3]; ?>px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .image-ultimate-map-<?php echo $styleid; ?>:after{
            padding-bottom: <?php echo $styledata[3] / $styledata[5] * 100; ?>%;
            content: "";
            display: block;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> {
            position: relative;
            width: 100%;
            text-align: center;
            height: 100%;
            height: 100%;
            text-align: center;
            margin: 0 auto;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img img{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100% !important; 
            height: 100% !important;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img, image-ultimate-hover-<?php echo $styleid; ?> a .hover-img {
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index:1;
            position: relative;
            width: 100%;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            height: 100%;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .hover-img:before{
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            box-shadow: inset 0 0 0 <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?>;
            z-index: 1; 
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info{
            position: absolute;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: <?php echo $styledata[13]; ?>;
            top: 0;
            bottom: 0;
            left: 0;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            right: 0
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info h3{
            color: <?php echo $styledata[25]; ?>;
            font-size: <?php echo $styledata[23]; ?>px;
            position: relative;
            padding: <?php echo $styledata[35]; ?>% 10% <?php echo $styledata[37]; ?>%;
            text-shadow: 0 0 1px <?php echo $styledata[39]; ?>, 0 1px 2px rgba(0, 0, 0, 0.3);
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[27]); ?>;
            font-wight: <?php echo $styledata[29]; ?>;
            margin: 0 10%;

            <?php
            if ($styledata[31] == 'yes') {
                echo 'border-bottom: 1px solid ' . $styledata[33] . ';';
            }
            ?>
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  .image-ultimate-info p{
            color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[49]; ?>% 0 <?php echo $styledata[51]; ?>%;
            margin: 0 10%;
            line-height: 140%;
            overflow:hidden;
            font-size: <?php echo $styledata[41]; ?>px;
            font-weight: <?php echo $styledata[47]; ?>;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[45]); ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a.image-ultimate-button{
            padding: <?php echo $styledata[67]; ?>px <?php echo $styledata[69]; ?>px;
            border-radius: 5px;
            text-align: center;
            font-size: <?php echo $styledata[53]; ?>px;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[59]); ?>;
            color: <?php echo $styledata[55]; ?> !important;
            border: 1px solid <?php echo $styledata[55]; ?>;
            font-weight: <?php echo $styledata[61]; ?>;
            background-color:<?php echo $styledata[57]; ?>;
            text-decoration: none;
            transition: all 0.3s ease;
            <?php
            echo $styledata[71];
            if ($styledata[71] == 'float: left ;') {
                echo 'margin-left: ' . $styledata[73] . '%';
            }
            if ($styledata[71] == 'float: right;') {
                echo 'margin-right: ' . $styledata[75] . '%';
            }
            ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  a:hover.image-ultimate-button{
            color: <?php echo $styledata[63]; ?> !important;
            background-color:<?php echo $styledata[65]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            opacity: 1;
            z-index: 2;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .image-ultimate-info, .image-ultimate-hover-<?php echo $styleid; ?>:hover .image-ultimate-info {
            visibility: visible;
            opacity: 1;
            transition:0.5s
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
            -webkit-transform-origin: 50% 100%;
            -moz-transform-origin: 50% 100%;
            -ms-transform-origin: 50% 100%;
            -o-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            -webkit-transform: rotate3d(1, 0, 0, -180deg);
            -moz-transform: rotate3d(1, 0, 0, -180deg);
            -ms-transform: rotate3d(1, 0, 0, -180deg);
            -o-transform: rotate3d(1, 0, 0, -180deg);
            transform: rotate3d(1, 0, 0, -180deg);
        }
        <?php echo $styledata[77]; ?>
    </style>
    <?php
    iheu_ultimate_oxi_shortcode_styleall($styledata, $listdata, $styleid);
}

function iheu_ultimate_oxi_shortcode_style6($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[27] . '|' . $styledata[45] . '|' . $styledata[49] . '');
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    ?>
    <style>
        .image-ultimate-hover-padding-<?php echo $styleid; ?>{
            padding: <?php echo $styledata[7]; ?>px <?php echo $styledata[9]; ?>px;
        }
        .image-ultimate-map-<?php echo $styleid; ?>{
            max-width: <?php echo $styledata[3]; ?>px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .image-ultimate-map-<?php echo $styleid; ?>:after{
            padding-bottom: <?php echo $styledata[3] / $styledata[5] * 100; ?>%;
            content: "";
            display: block;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> {
            position: relative;
            width: 100%;
            text-align: center;
            height: 100%;
            height: 100%;
            text-align: center;
            margin: 0 auto;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img img{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100% !important; 
            height: 100% !important;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img, image-ultimate-hover-<?php echo $styleid; ?> a .hover-img {
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index:1;
            position: relative;
            width: 100%;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            height: 100%;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .hover-img:before{
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            box-shadow: inset 0 0 0 <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?>;
            z-index: 1; 
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info{
            position: absolute;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: <?php echo $styledata[13]; ?>;
            top: 0;
            bottom: 0;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            left: 0;
            right: 0
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info h3{
            color: <?php echo $styledata[25]; ?>;
            font-size: <?php echo $styledata[23]; ?>px;
            position: relative;
            padding: <?php echo $styledata[35]; ?>% 10% <?php echo $styledata[37]; ?>%;
            text-shadow: 0 0 1px <?php echo $styledata[39]; ?>, 0 1px 2px rgba(0, 0, 0, 0.3);
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[27]); ?>;
            font-wight: <?php echo $styledata[29]; ?>;
            margin: 0 10%;

            <?php
            if ($styledata[31] == 'yes') {
                echo 'border-bottom: 1px solid ' . $styledata[33] . ';';
            }
            ?>
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  .image-ultimate-info p{
            color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[49]; ?>% 0 <?php echo $styledata[51]; ?>%;
            margin: 0 10%;
            line-height: 140%;
            overflow:hidden;
            font-size: <?php echo $styledata[41]; ?>px;
            font-weight: <?php echo $styledata[47]; ?>;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[45]); ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a.image-ultimate-button{
            padding: <?php echo $styledata[67]; ?>px <?php echo $styledata[69]; ?>px;
            border-radius: 5px;
            text-align: center;
            font-size: <?php echo $styledata[53]; ?>px;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[59]); ?>;
            color: <?php echo $styledata[55]; ?> !important;
            border: 1px solid <?php echo $styledata[55]; ?>;
            font-weight: <?php echo $styledata[61]; ?>;
            background-color:<?php echo $styledata[57]; ?>;
            text-decoration: none;
            transition: all 0.3s ease;
            <?php
            echo $styledata[71];
            if ($styledata[71] == 'float: left ;') {
                echo 'margin-left: ' . $styledata[73] . '%';
            }
            if ($styledata[71] == 'float: right;') {
                echo 'margin-right: ' . $styledata[75] . '%';
            }
            ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  a:hover.image-ultimate-button{
            color: <?php echo $styledata[63]; ?> !important;
            background-color:<?php echo $styledata[65]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            opacity: 1;
            z-index: 2;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .image-ultimate-info, .image-ultimate-hover-<?php echo $styleid; ?>:hover .image-ultimate-info {
            visibility: visible;
            opacity: 1;
            transition:0.5s
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
            -webkit-transform-origin: 100% 50%;
            -moz-transform-origin: 100% 50%;
            -ms-transform-origin: 100% 50%;
            -o-transform-origin: 100% 50%;
            transform-origin: 100% 50%;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            -webkit-transform: rotate3d(0, 1, 0, 180deg);
            -moz-transform: rotate3d(0, 1, 0, 180deg);
            -ms-transform: rotate3d(0, 1, 0, 180deg);
            -o-transform: rotate3d(0, 1, 0, 180deg);
            transform: rotate3d(0, 1, 0, 180deg);
        }
        <?php echo $styledata[77]; ?>
    </style>
    <?php
    iheu_ultimate_oxi_shortcode_styleall($styledata, $listdata, $styleid);
}

function iheu_ultimate_oxi_shortcode_style7($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[27] . '|' . $styledata[45] . '|' . $styledata[49] . '');
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    ?>
    <style>
        .image-ultimate-hover-padding-<?php echo $styleid; ?>{
            padding: <?php echo $styledata[7]; ?>px <?php echo $styledata[9]; ?>px;
        }
        .image-ultimate-map-<?php echo $styleid; ?>{
            max-width: <?php echo $styledata[3]; ?>px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .image-ultimate-map-<?php echo $styleid; ?>:after{
            padding-bottom: <?php echo $styledata[3] / $styledata[5] * 100; ?>%;
            content: "";
            display: block;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> {
            position: relative;
            width: 100%;
            text-align: center;
            height: 100%;
            height: 100%;
            text-align: center;
            margin: 0 auto;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img img{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100% !important; 
            height: 100% !important;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img, image-ultimate-hover-<?php echo $styleid; ?> a .hover-img {
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index:1;
            position: relative;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            width: 100%;
            height: 100%;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .hover-img:before{
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            box-shadow: inset 0 0 0 <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?>;
            z-index: 1; 
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info{
            position: absolute;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: <?php echo $styledata[13]; ?>;
            top: 0;
            bottom: 0;
            left: 0;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            right: 0
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info h3{
            color: <?php echo $styledata[25]; ?>;
            font-size: <?php echo $styledata[23]; ?>px;
            position: relative;
            padding: <?php echo $styledata[35]; ?>% 10% <?php echo $styledata[37]; ?>%;
            text-shadow: 0 0 1px <?php echo $styledata[39]; ?>, 0 1px 2px rgba(0, 0, 0, 0.3);
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[27]); ?>;
            font-wight: <?php echo $styledata[29]; ?>;
            margin: 0 10%;

            <?php
            if ($styledata[31] == 'yes') {
                echo 'border-bottom: 1px solid ' . $styledata[33] . ';';
            }
            ?>
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  .image-ultimate-info p{
            color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[49]; ?>% 0 <?php echo $styledata[51]; ?>%;
            margin: 0 10%;
            line-height: 140%;
            overflow:hidden;
            font-size: <?php echo $styledata[41]; ?>px;
            font-weight: <?php echo $styledata[47]; ?>;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[45]); ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a.image-ultimate-button{
            padding: <?php echo $styledata[67]; ?>px <?php echo $styledata[69]; ?>px;
            border-radius: 5px;
            text-align: center;
            font-size: <?php echo $styledata[53]; ?>px;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[59]); ?>;
            color: <?php echo $styledata[55]; ?> !important;
            border: 1px solid <?php echo $styledata[55]; ?>;
            font-weight: <?php echo $styledata[61]; ?>;
            background-color:<?php echo $styledata[57]; ?>;
            text-decoration: none;
            transition: all 0.3s ease;
            <?php
            echo $styledata[71];
            if ($styledata[71] == 'float: left ;') {
                echo 'margin-left: ' . $styledata[73] . '%';
            }
            if ($styledata[71] == 'float: right;') {
                echo 'margin-right: ' . $styledata[75] . '%';
            }
            ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  a:hover.image-ultimate-button{
            color: <?php echo $styledata[63]; ?> !important;
            background-color:<?php echo $styledata[65]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            opacity: 1;
            z-index: 2;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .image-ultimate-info, .image-ultimate-hover-<?php echo $styleid; ?>:hover .image-ultimate-info {
            visibility: visible;
            opacity: 1;
            transition:0.5s
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
            -webkit-transform-origin: 0% 50%;
            -moz-transform-origin: 0% 50%;
            -ms-transform-origin: 0% 50%;
            -o-transform-origin: 0% 50%;
            transform-origin: 0% 50%;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            -webkit-transform: rotate3d(0, 1, 0, -180deg);
            -moz-transform: rotate3d(0, 1, 0, -180deg);
            -ms-transform: rotate3d(0, 1, 0, -180deg);
            -o-transform: rotate3d(0, 1, 0, -180deg);
            transform: rotate3d(0, 1, 0, -180deg);
        }
        <?php echo $styledata[77]; ?>
    </style>
    <?php
    iheu_ultimate_oxi_shortcode_styleall($styledata, $listdata, $styleid);
}

function iheu_ultimate_oxi_shortcode_style8($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[27] . '|' . $styledata[45] . '|' . $styledata[49] . '');
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    ?>
    <style>
        .image-ultimate-hover-padding-<?php echo $styleid; ?>{
            padding: <?php echo $styledata[7]; ?>px <?php echo $styledata[9]; ?>px;
        }
        .image-ultimate-map-<?php echo $styleid; ?>{
            max-width: <?php echo $styledata[3]; ?>px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .image-ultimate-map-<?php echo $styleid; ?>:after{
            padding-bottom: <?php echo $styledata[3] / $styledata[5] * 100; ?>%;
            content: "";
            display: block;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> {
            position: relative;
            width: 100%;
            text-align: center;
            height: 100%;
            height: 100%;
            text-align: center;
            margin: 0 auto;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img img{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100% !important; 
            height: 100% !important;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img, image-ultimate-hover-<?php echo $styleid; ?> a .hover-img {
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index:1;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            position: relative;
            width: 100%;
            height: 100%;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .hover-img:before{
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            box-shadow: inset 0 0 0 <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?>;
            z-index: 1; 
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info{
            position: absolute;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: <?php echo $styledata[13]; ?>;
            top: 0;
            bottom: 0;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            left: 0;
            right: 0
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info h3{
            color: <?php echo $styledata[25]; ?>;
            font-size: <?php echo $styledata[23]; ?>px;
            position: relative;
            padding: <?php echo $styledata[35]; ?>% 10% <?php echo $styledata[37]; ?>%;
            text-shadow: 0 0 1px <?php echo $styledata[39]; ?>, 0 1px 2px rgba(0, 0, 0, 0.3);
            font-family: <?php echo $styledata[27]; ?>;
            font-wight: <?php echo $styledata[29]; ?>;
            margin: 0 10%;

            <?php
            if ($styledata[31] == 'yes') {
                echo 'border-bottom: 1px solid ' . $styledata[33] . ';';
            }
            ?>
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  .image-ultimate-info p{
            color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[49]; ?>% 0 <?php echo $styledata[51]; ?>%;
            margin: 0 10%;
            line-height: 140%;
            overflow:hidden;
            font-size: <?php echo $styledata[41]; ?>px;
            font-weight: <?php echo $styledata[47]; ?>;
            font-family: <?php echo $styledata[45]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a.image-ultimate-button{
            padding: <?php echo $styledata[67]; ?>px <?php echo $styledata[69]; ?>px;
            border-radius: 5px;
            text-align: center;
            font-size: <?php echo $styledata[53]; ?>px;
            font-family: <?php echo $styledata[59]; ?>;
            color: <?php echo $styledata[55]; ?> !important;
            border: 1px solid <?php echo $styledata[55]; ?>;
            font-weight: <?php echo $styledata[61]; ?>;
            background-color:<?php echo $styledata[57]; ?>;
            text-decoration: none;
            transition: all 0.3s ease;
            <?php
            echo $styledata[71];
            if ($styledata[71] == 'float: left ;') {
                echo 'margin-left: ' . $styledata[73] . '%';
            }
            if ($styledata[71] == 'float: right;') {
                echo 'margin-right: ' . $styledata[75] . '%';
            }
            ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  a:hover.image-ultimate-button{
            color: <?php echo $styledata[63]; ?> !important;
            background-color:<?php echo $styledata[65]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            opacity: 0;
            visibility: hidden;

        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .image-ultimate-info, .image-ultimate-hover-<?php echo $styleid; ?>:hover .image-ultimate-info {
            visibility: visible;
            opacity: 1;
            transition:0.5s
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img {
            margin-top: 0px;
            -webkit-transition: margin 1s ease;
            -moz-transition: margin 1s ease;
            -o-transition: margin 1s ease;
            -ms-transition: margin 1s ease;
            transition: margin 1s ease;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            margin-top: -25%;
        }
        <?php echo $styledata[77]; ?>
    </style>
    <?php
    iheu_ultimate_oxi_shortcode_styleall($styledata, $listdata, $styleid);
}

function iheu_ultimate_oxi_shortcode_style9($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[27] . '|' . $styledata[45] . '|' . $styledata[49] . '');
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    ?>
    <style>
        .image-ultimate-hover-padding-<?php echo $styleid; ?>{
            padding: <?php echo $styledata[7]; ?>px <?php echo $styledata[9]; ?>px;
        }
        .image-ultimate-map-<?php echo $styleid; ?>{
            max-width: <?php echo $styledata[3]; ?>px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .image-ultimate-map-<?php echo $styleid; ?>:after{
            padding-bottom: <?php echo $styledata[3] / $styledata[5] * 100; ?>%;
            content: "";
            display: block;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> {
            position: relative;
            width: 100%;
            text-align: center;
            height: 100%;
            height: 100%;
            text-align: center;
            margin: 0 auto;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img img{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100% !important; 
            height: 100% !important;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img, image-ultimate-hover-<?php echo $styleid; ?> a .hover-img {
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index:1;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            position: relative;
            width: 100%;
            height: 100%;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .hover-img:before{
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            box-shadow: inset 0 0 0 <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?>;
            z-index: 1; 
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info{
            position: absolute;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: <?php echo $styledata[13]; ?>;
            top: 0;
            bottom: 0;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            left: 0;
            right: 0
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info h3{
            color: <?php echo $styledata[25]; ?>;
            font-size: <?php echo $styledata[23]; ?>px;
            position: relative;
            padding: <?php echo $styledata[35]; ?>% 10% <?php echo $styledata[37]; ?>%;
            text-shadow: 0 0 1px <?php echo $styledata[39]; ?>, 0 1px 2px rgba(0, 0, 0, 0.3);
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[27]); ?>;
            font-wight: <?php echo $styledata[29]; ?>;
            margin: 0 10%;

            <?php
            if ($styledata[31] == 'yes') {
                echo 'border-bottom: 1px solid ' . $styledata[33] . ';';
            }
            ?>
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  .image-ultimate-info p{
            color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[49]; ?>% 0 <?php echo $styledata[51]; ?>%;
            margin: 0 10%;
            line-height: 140%;
            overflow:hidden;
            font-size: <?php echo $styledata[41]; ?>px;
            font-weight: <?php echo $styledata[47]; ?>;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[45]); ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a.image-ultimate-button{
            padding: <?php echo $styledata[67]; ?>px <?php echo $styledata[69]; ?>px;
            border-radius: 5px;
            text-align: center;
            font-size: <?php echo $styledata[53]; ?>px;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[59]); ?>;
            color: <?php echo $styledata[55]; ?> !important;
            border: 1px solid <?php echo $styledata[55]; ?>;
            font-weight: <?php echo $styledata[61]; ?>;
            background-color:<?php echo $styledata[57]; ?>;
            text-decoration: none;
            transition: all 0.3s ease;
            <?php
            echo $styledata[71];
            if ($styledata[71] == 'float: left ;') {
                echo 'margin-left: ' . $styledata[73] . '%';
            }
            if ($styledata[71] == 'float: right;') {
                echo 'margin-right: ' . $styledata[75] . '%';
            }
            ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  a:hover.image-ultimate-button{
            color: <?php echo $styledata[63]; ?> !important;
            background-color:<?php echo $styledata[65]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            opacity: 0;
            visibility: hidden;

        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .image-ultimate-info, .image-ultimate-hover-<?php echo $styleid; ?>:hover .image-ultimate-info {
            visibility: visible;
            opacity: 1;
            transition:0.5s
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {

        }
        <?php echo $styledata[77]; ?>
    </style>
    <?php
    iheu_ultimate_oxi_shortcode_styleall($styledata, $listdata, $styleid);
}

function iheu_ultimate_oxi_shortcode_style10($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[27] . '|' . $styledata[45] . '|' . $styledata[49] . '');
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    ?>
    <style>
        .image-ultimate-hover-padding-<?php echo $styleid; ?>{
            padding: <?php echo $styledata[7]; ?>px <?php echo $styledata[9]; ?>px;
        }
        .image-ultimate-map-<?php echo $styleid; ?>{
            max-width: <?php echo $styledata[3]; ?>px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .image-ultimate-map-<?php echo $styleid; ?>:after{
            padding-bottom: <?php echo $styledata[3] / $styledata[5] * 100; ?>%;
            content: "";
            display: block;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> {
            position: relative;
            width: 100%;
            text-align: center;
            height: 100%;
            height: 100%;
            text-align: center;
            margin: 0 auto;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img img{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100% !important; 
            height: 100% !important;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img, image-ultimate-hover-<?php echo $styleid; ?> a .hover-img {
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index:1;
            position: relative;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            width: 100%;
            height: 100%;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .hover-img:before{
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            box-shadow: inset 0 0 0 <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?>;
            z-index: 1; 
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info{
            position: absolute;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: <?php echo $styledata[13]; ?>;
            top: 0;
            bottom: 0;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            left: 0;
            right: 0
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info h3{
            color: <?php echo $styledata[25]; ?>;
            font-size: <?php echo $styledata[23]; ?>px;
            position: relative;
            padding: <?php echo $styledata[35]; ?>% 10% <?php echo $styledata[37]; ?>%;
            text-shadow: 0 0 1px <?php echo $styledata[39]; ?>, 0 1px 2px rgba(0, 0, 0, 0.3);
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[27]); ?>;
            font-wight: <?php echo $styledata[29]; ?>;
            margin: 0 10%;

            <?php
            if ($styledata[31] == 'yes') {
                echo 'border-bottom: 1px solid ' . $styledata[33] . ';';
            }
            ?>
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  .image-ultimate-info p{
            color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[49]; ?>% 0 <?php echo $styledata[51]; ?>%;
            margin: 0 10%;
            line-height: 140%;
            overflow:hidden;
            font-size: <?php echo $styledata[41]; ?>px;
            font-weight: <?php echo $styledata[47]; ?>;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[45]); ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a.image-ultimate-button{
            padding: <?php echo $styledata[67]; ?>px <?php echo $styledata[69]; ?>px;
            border-radius: 5px;
            text-align: center;
            font-size: <?php echo $styledata[53]; ?>px;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[59]); ?>;
            color: <?php echo $styledata[55]; ?> !important;
            border: 1px solid <?php echo $styledata[55]; ?>;
            font-weight: <?php echo $styledata[61]; ?>;
            background-color:<?php echo $styledata[57]; ?>;
            text-decoration: none;
            transition: all 0.3s ease;
            <?php
            echo $styledata[71];
            if ($styledata[71] == 'float: left ;') {
                echo 'margin-left: ' . $styledata[73] . '%';
            }
            if ($styledata[71] == 'float: right;') {
                echo 'margin-right: ' . $styledata[75] . '%';
            }
            ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  a:hover.image-ultimate-button{
            color: <?php echo $styledata[63]; ?> !important;
            background-color:<?php echo $styledata[65]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            opacity: 0;
            visibility: hidden;

        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .image-ultimate-info, .image-ultimate-hover-<?php echo $styleid; ?>:hover .image-ultimate-info {
            visibility: visible;
            opacity: 1;
            transition:0.5s
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
            opacity: 1;
            transform: translateY(0%) translateX(0%) scale(1);
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            top: 50%;
            left: 50%;
            background: transparent;
            opacity: 0;
            transform: translateY(-50%) translateX(-50%) scale(0.25);
        }
        <?php echo $styledata[77]; ?>
    </style>
    <?php
    iheu_ultimate_oxi_shortcode_styleall($styledata, $listdata, $styleid);
}

function iheu_ultimate_oxi_shortcode_style11($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[27] . '|' . $styledata[45] . '|' . $styledata[49] . '');
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    ?>
    <style>
        .image-ultimate-hover-padding-<?php echo $styleid; ?>{
            padding: <?php echo $styledata[7]; ?>px <?php echo $styledata[9]; ?>px;
        }
        .image-ultimate-map-<?php echo $styleid; ?>{
            max-width: <?php echo $styledata[3]; ?>px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .image-ultimate-map-<?php echo $styleid; ?>:after{
            padding-bottom: <?php echo $styledata[3] / $styledata[5] * 100; ?>%;
            content: "";
            display: block;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> {
            position: relative;
            width: 100%;
            text-align: center;
            height: 100%;
            height: 100%;
            text-align: center;
            margin: 0 auto;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img img{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100% !important; 
            height: 100% !important;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img, image-ultimate-hover-<?php echo $styleid; ?> a .hover-img {
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index:1;
            position: relative;
            width: 100%;
            height: 100%;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .hover-img:before{
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            box-shadow: inset 0 0 0 <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?>;
            z-index: 1; 
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info{
            position: absolute;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: <?php echo $styledata[13]; ?>;
            top: 0;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            bottom: 0;
            left: 0;
            right: 0
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info h3{
            color: <?php echo $styledata[25]; ?>;
            font-size: <?php echo $styledata[23]; ?>px;
            position: relative;
            padding: <?php echo $styledata[35]; ?>% 10% <?php echo $styledata[37]; ?>%;
            text-shadow: 0 0 1px <?php echo $styledata[39]; ?>, 0 1px 2px rgba(0, 0, 0, 0.3);
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[27]); ?>;
            font-wight: <?php echo $styledata[29]; ?>;
            margin: 0 10%;

            <?php
            if ($styledata[31] == 'yes') {
                echo 'border-bottom: 1px solid ' . $styledata[33] . ';';
            }
            ?>
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  .image-ultimate-info p{
            color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[49]; ?>% 0 <?php echo $styledata[51]; ?>%;
            margin: 0 10%;
            line-height: 140%;
            overflow:hidden;
            font-size: <?php echo $styledata[41]; ?>px;
            font-weight: <?php echo $styledata[47]; ?>;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[45]); ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a.image-ultimate-button{
            padding: <?php echo $styledata[67]; ?>px <?php echo $styledata[69]; ?>px;
            border-radius: 5px;
            text-align: center;
            font-size: <?php echo $styledata[53]; ?>px;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[59]); ?>;
            color: <?php echo $styledata[55]; ?> !important;
            border: 1px solid <?php echo $styledata[55]; ?>;
            font-weight: <?php echo $styledata[61]; ?>;
            background-color:<?php echo $styledata[57]; ?>;
            text-decoration: none;
            transition: all 0.3s ease;
            <?php
            echo $styledata[71];
            if ($styledata[71] == 'float: left ;') {
                echo 'margin-left: ' . $styledata[73] . '%';
            }
            if ($styledata[71] == 'float: right;') {
                echo 'margin-right: ' . $styledata[75] . '%';
            }
            ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  a:hover.image-ultimate-button{
            color: <?php echo $styledata[63]; ?> !important;
            background-color:<?php echo $styledata[65]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            opacity: 0;
            visibility: hidden;

        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .image-ultimate-info, .image-ultimate-hover-<?php echo $styleid; ?>:hover .image-ultimate-info {
            visibility: visible;
            opacity: 1;
            transition:0.5s
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            position: absolute;
            top: 50%; left: 50%;
            margin: -30% 0 0 -30%;
            animation: rotation ease-in-out 2s infinite;
        }
        @keyframes rotation {
            0% {transform: rotate(0deg);}
            20% {transform: rotate(360deg);}
            100% {transform: rotate(360deg);}
        }
        <?php echo $styledata[77]; ?>
    </style>
    <?php
    iheu_ultimate_oxi_shortcode_styleall($styledata, $listdata, $styleid);
}

function iheu_ultimate_oxi_shortcode_style12($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[27] . '|' . $styledata[45] . '|' . $styledata[49] . '');
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    ?>
    <style>
        .image-ultimate-hover-padding-<?php echo $styleid; ?>{
            padding: <?php echo $styledata[7]; ?>px <?php echo $styledata[9]; ?>px;
        }
        .image-ultimate-map-<?php echo $styleid; ?>{
            max-width: <?php echo $styledata[3]; ?>px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .image-ultimate-map-<?php echo $styleid; ?>:after{
            padding-bottom: <?php echo $styledata[3] / $styledata[5] * 100; ?>%;
            content: "";
            display: block;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> {
            position: relative;
            width: 100%;
            text-align: center;
            height: 100%;
            height: 100%;
            text-align: center;
            margin: 0 auto;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img img{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100% !important; 
            height: 100% !important;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img, image-ultimate-hover-<?php echo $styleid; ?> a .hover-img {
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index:1;
            position: relative;
            width: 100%;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            height: 100%;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .hover-img:before{
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            box-shadow: inset 0 0 0 <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?>;
            z-index: 1; 
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info{
            position: absolute;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: <?php echo $styledata[13]; ?>;
            top: 0;
            bottom: 0;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            left: 0;
            right: 0
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info h3{
            color: <?php echo $styledata[25]; ?>;
            font-size: <?php echo $styledata[23]; ?>px;
            position: relative;
            padding: <?php echo $styledata[35]; ?>% 10% <?php echo $styledata[37]; ?>%;
            text-shadow: 0 0 1px <?php echo $styledata[39]; ?>, 0 1px 2px rgba(0, 0, 0, 0.3);
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[27]); ?>;
            font-wight: <?php echo $styledata[29]; ?>;
            margin: 0 10%;

            <?php
            if ($styledata[31] == 'yes') {
                echo 'border-bottom: 1px solid ' . $styledata[33] . ';';
            }
            ?>
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  .image-ultimate-info p{
            color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[49]; ?>% 0 <?php echo $styledata[51]; ?>%;
            margin: 0 10%;
            line-height: 140%;
            overflow:hidden;
            font-size: <?php echo $styledata[41]; ?>px;
            font-weight: <?php echo $styledata[47]; ?>;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[45]); ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a.image-ultimate-button{
            padding: <?php echo $styledata[67]; ?>px <?php echo $styledata[69]; ?>px;
            border-radius: 5px;
            text-align: center;
            font-size: <?php echo $styledata[53]; ?>px;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[59]); ?>;
            color: <?php echo $styledata[55]; ?> !important;
            border: 1px solid <?php echo $styledata[55]; ?>;
            font-weight: <?php echo $styledata[61]; ?>;
            background-color:<?php echo $styledata[57]; ?>;
            text-decoration: none;
            transition: all 0.3s ease;
            <?php
            echo $styledata[71];
            if ($styledata[71] == 'float: left ;') {
                echo 'margin-left: ' . $styledata[73] . '%';
            }
            if ($styledata[71] == 'float: right;') {
                echo 'margin-right: ' . $styledata[75] . '%';
            }
            ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  a:hover.image-ultimate-button{
            color: <?php echo $styledata[63]; ?> !important;
            background-color:<?php echo $styledata[65]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            opacity: 0;
            visibility: hidden;

        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .image-ultimate-info, .image-ultimate-hover-<?php echo $styleid; ?>:hover .image-ultimate-info {
            visibility: visible;
            opacity: 1;
            transition:0.5s
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img {
            -webkit-transform: scale(1) translateX(0);
            -moz-transform: scale(1) translateX(0);
            -ms-transform: scale(1) translateX(0);
            -o-transform: scale(1) translateX(0);
            transform: scale(1) translateX(0);
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            -webkit-transform: scale(0.5) translateX(100%);
            -moz-transform: scale(0.5) translateX(100%);
            -ms-transform: scale(0.5) translateX(100%);
            -o-transform: scale(0.5) translateX(100%);
            transform: scale(0.5) translateX(100%);
        }
        <?php echo $styledata[77]; ?>
    </style>
    <?php
    iheu_ultimate_oxi_shortcode_styleall($styledata, $listdata, $styleid);
}

function iheu_ultimate_oxi_shortcode_style13($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[27] . '|' . $styledata[45] . '|' . $styledata[49] . '');
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    ?>
    <style>
        .image-ultimate-hover-padding-<?php echo $styleid; ?>{
            padding: <?php echo $styledata[7]; ?>px <?php echo $styledata[9]; ?>px;
        }
        .image-ultimate-map-<?php echo $styleid; ?>{
            max-width: <?php echo $styledata[3]; ?>px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .image-ultimate-map-<?php echo $styleid; ?>:after{
            padding-bottom: <?php echo $styledata[3] / $styledata[5] * 100; ?>%;
            content: "";
            display: block;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> {
            position: relative;
            width: 100%;
            text-align: center;
            height: 100%;
            height: 100%;
            text-align: center;
            margin: 0 auto;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img img{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100% !important; 
            height: 100% !important;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img, image-ultimate-hover-<?php echo $styleid; ?> a .hover-img {
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index:1;
            position: relative;
            width: 100%;
            height: 100%;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .hover-img:before{
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            box-shadow: inset 0 0 0 <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?>;
            z-index: 1; 
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info{
            position: absolute;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: <?php echo $styledata[13]; ?>;
            top: 0;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            bottom: 0;
            left: 0;
            right: 0
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info h3{
            color: <?php echo $styledata[25]; ?>;
            font-size: <?php echo $styledata[23]; ?>px;
            position: relative;
            padding: <?php echo $styledata[35]; ?>% 10% <?php echo $styledata[37]; ?>%;
            text-shadow: 0 0 1px <?php echo $styledata[39]; ?>, 0 1px 2px rgba(0, 0, 0, 0.3);
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[27]); ?>;
            font-wight: <?php echo $styledata[29]; ?>;
            margin: 0 10%;

            <?php
            if ($styledata[31] == 'yes') {
                echo 'border-bottom: 1px solid ' . $styledata[33] . ';';
            }
            ?>
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  .image-ultimate-info p{
            color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[49]; ?>% 0 <?php echo $styledata[51]; ?>%;
            margin: 0 10%;
            line-height: 140%;
            overflow:hidden;
            font-size: <?php echo $styledata[41]; ?>px;
            font-weight: <?php echo $styledata[47]; ?>;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[45]); ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a.image-ultimate-button{
            padding: <?php echo $styledata[67]; ?>px <?php echo $styledata[69]; ?>px;
            border-radius: 5px;
            text-align: center;
            font-size: <?php echo $styledata[53]; ?>px;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[59]); ?>;
            color: <?php echo $styledata[55]; ?> !important;
            border: 1px solid <?php echo $styledata[55]; ?>;
            font-weight: <?php echo $styledata[61]; ?>;
            background-color:<?php echo $styledata[57]; ?>;
            text-decoration: none;
            transition: all 0.3s ease;
            <?php
            echo $styledata[71];
            if ($styledata[71] == 'float: left ;') {
                echo 'margin-left: ' . $styledata[73] . '%';
            }
            if ($styledata[71] == 'float: right;') {
                echo 'margin-right: ' . $styledata[75] . '%';
            }
            ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  a:hover.image-ultimate-button{
            color: <?php echo $styledata[63]; ?> !important;
            background-color:<?php echo $styledata[65]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            opacity: 0;
            visibility: hidden;

        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .image-ultimate-info, .image-ultimate-hover-<?php echo $styleid; ?>:hover .image-ultimate-info {
            visibility: visible;
            opacity: 1;
            transition:0.5s
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
            -webkit-transform: scale(1) translateX(0);
            -moz-transform: scale(1) translateX(0);
            -ms-transform: scale(1) translateX(0);
            -o-transform: scale(1) translateX(0);
            transform: scale(1) translateX(0);
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            -webkit-transform: rotate(-20deg);
            -moz-transform: rotate(-20deg);
            -o-transform: rotate(-20deg);
            -ms-transform: rotate(-20deg);
            transform: rotate(-20deg);
            -webkit-transform: scale(0.5) translateX(-100%);
            -moz-transform: scale(0.5) translateX(-100%);
            -ms-transform: scale(0.5) translateX(-100%);
            -o-transform: scale(0.5) translateX(-100%);
            transform: scale(0.5) translateX(-100%);
        }
        <?php echo $styledata[77]; ?>
    </style>
    <?php
    iheu_ultimate_oxi_shortcode_styleall($styledata, $listdata, $styleid);
}

function iheu_ultimate_oxi_shortcode_style14($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[27] . '|' . $styledata[45] . '|' . $styledata[49] . '');
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    ?>
    <style>
        .image-ultimate-hover-padding-<?php echo $styleid; ?>{
            padding: <?php echo $styledata[7]; ?>px <?php echo $styledata[9]; ?>px;
        }
        .image-ultimate-map-<?php echo $styleid; ?>{
            max-width: <?php echo $styledata[3]; ?>px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .image-ultimate-map-<?php echo $styleid; ?>:after{
            padding-bottom: <?php echo $styledata[3] / $styledata[5] * 100; ?>%;
            content: "";
            display: block;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> {
            position: relative;
            width: 100%;
            text-align: center;
            height: 100%;
            height: 100%;
            text-align: center;
            margin: 0 auto;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img img{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100% !important; 
            height: 100% !important;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img, image-ultimate-hover-<?php echo $styleid; ?> a .hover-img {
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index:1;
            position: relative;
            width: 100%;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            height: 100%;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .hover-img:before{
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            box-shadow: inset 0 0 0 <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?>;
            z-index: 1; 
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info{
            position: absolute;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: <?php echo $styledata[13]; ?>;
            top: 0;
            bottom: 0;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            left: 0;
            right: 0
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info h3{
            color: <?php echo $styledata[25]; ?>;
            font-size: <?php echo $styledata[23]; ?>px;
            position: relative;
            padding: <?php echo $styledata[35]; ?>% 10% <?php echo $styledata[37]; ?>%;
            text-shadow: 0 0 1px <?php echo $styledata[39]; ?>, 0 1px 2px rgba(0, 0, 0, 0.3);
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[27]); ?>;
            font-wight: <?php echo $styledata[29]; ?>;
            margin: 0 10%;

            <?php
            if ($styledata[31] == 'yes') {
                echo 'border-bottom: 1px solid ' . $styledata[33] . ';';
            }
            ?>
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  .image-ultimate-info p{
            color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[49]; ?>% 0 <?php echo $styledata[51]; ?>%;
            margin: 0 10%;
            line-height: 140%;
            overflow:hidden;
            font-size: <?php echo $styledata[41]; ?>px;
            font-weight: <?php echo $styledata[47]; ?>;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[45]); ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a.image-ultimate-button{
            padding: <?php echo $styledata[67]; ?>px <?php echo $styledata[69]; ?>px;
            border-radius: 5px;
            text-align: center;
            font-size: <?php echo $styledata[53]; ?>px;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[59]); ?>;
            color: <?php echo $styledata[55]; ?> !important;
            border: 1px solid <?php echo $styledata[55]; ?>;
            font-weight: <?php echo $styledata[61]; ?>;
            background-color:<?php echo $styledata[57]; ?>;
            text-decoration: none;
            transition: all 0.3s ease;
            <?php
            echo $styledata[71];
            if ($styledata[71] == 'float: left ;') {
                echo 'margin-left: ' . $styledata[73] . '%';
            }
            if ($styledata[71] == 'float: right;') {
                echo 'margin-right: ' . $styledata[75] . '%';
            }
            ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  a:hover.image-ultimate-button{
            color: <?php echo $styledata[63]; ?> !important;
            background-color:<?php echo $styledata[65]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            opacity: 0;
            visibility: hidden;

        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .image-ultimate-info, .image-ultimate-hover-<?php echo $styleid; ?>:hover .image-ultimate-info {
            visibility: visible;
            opacity: 1;
            transition:0.5s
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
            -webkit-transform: scale(1) translateY(0);
            -moz-transform: scale(1) translateY(0);
            -ms-transform: scale(1) translateY(0);
            -o-transform: scale(1) translateY(0);
            transform: scale(1) translateY(0);
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            -webkit-transform: scale(0.5) translateY(100%);
            -moz-transform: scale(0.5) translateY(100%);
            -ms-transform: scale(0.5) translateY(100%);
            -o-transform: scale(0.5) translateY(100%);
            transform: scale(0.5) translateY(100%);
        }
        <?php echo $styledata[77]; ?>
    </style>
    <?php
    iheu_ultimate_oxi_shortcode_styleall($styledata, $listdata, $styleid);
}

function iheu_ultimate_oxi_shortcode_style15($data) {
    $styleid = (int) $data;
    global $wpdb;
    $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
    $table_list = $wpdb->prefix . 'image_hover_ultimate_list';
    $style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $styledata = explode("|", $style['css']);
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[27] . '|' . $styledata[45] . '|' . $styledata[49] . '');
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    ?>
    <style>
        .image-ultimate-hover-padding-<?php echo $styleid; ?>{
            padding: <?php echo $styledata[7]; ?>px <?php echo $styledata[9]; ?>px;
        }
        .image-ultimate-map-<?php echo $styleid; ?>{
            max-width: <?php echo $styledata[3]; ?>px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .image-ultimate-map-<?php echo $styleid; ?>:after{
            padding-bottom: <?php echo $styledata[3] / $styledata[5] * 100; ?>%;
            content: "";
            display: block;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> {
            position: relative;
            width: 100%;
            text-align: center;
            height: 100%;
            height: 100%;
            text-align: center;
            margin: 0 auto;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img img{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100% !important; 
            height: 100% !important;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img, image-ultimate-hover-<?php echo $styleid; ?> a .hover-img {
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index:1;
            position: relative;
            width: 100%;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            height: 100%;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .hover-img:before{
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            box-shadow: inset 0 0 0 <?php echo $styledata[15]; ?>px <?php echo $styledata[17]; ?>;
            z-index: 1; 
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info{
            position: absolute;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: <?php echo $styledata[13]; ?>;
            top: 0;
            box-shadow: 0 0 <?php echo $styledata[19]; ?>px <?php echo $styledata[21]; ?>;
            bottom: 0;
            left: 0;
            right: 0
        }
        .image-ultimate-hover-<?php echo $styleid; ?> .image-ultimate-info h3{
            color: <?php echo $styledata[25]; ?>;
            font-size: <?php echo $styledata[23]; ?>px;
            position: relative;
            padding: <?php echo $styledata[35]; ?>% 10% <?php echo $styledata[37]; ?>%;
            text-shadow: 0 0 1px <?php echo $styledata[39]; ?>, 0 1px 2px rgba(0, 0, 0, 0.3);
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[27]); ?>;
            font-wight: <?php echo $styledata[29]; ?>;
            margin: 0 10%;

            <?php
            if ($styledata[31] == 'yes') {
                echo 'border-bottom: 1px solid ' . $styledata[33] . ';';
            }
            ?>
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  .image-ultimate-info p{
            color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[49]; ?>% 0 <?php echo $styledata[51]; ?>%;
            margin: 0 10%;
            line-height: 140%;
            overflow:hidden;
            font-size: <?php echo $styledata[41]; ?>px;
            font-weight: <?php echo $styledata[47]; ?>;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[45]); ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a.image-ultimate-button{
            padding: <?php echo $styledata[67]; ?>px <?php echo $styledata[69]; ?>px;
            border-radius: 5px;
            text-align: center;
            font-size: <?php echo $styledata[53]; ?>px;
            font-family: <?php echo iheu_font_familly_special_charecter($styledata[59]); ?>;
            color: <?php echo $styledata[55]; ?> !important;
            border: 1px solid <?php echo $styledata[55]; ?>;
            font-weight: <?php echo $styledata[61]; ?>;
            background-color:<?php echo $styledata[57]; ?>;
            text-decoration: none;
            transition: all 0.3s ease;
            <?php
            echo $styledata[71];
            if ($styledata[71] == 'float: left ;') {
                echo 'margin-left: ' . $styledata[73] . '%';
            }
            if ($styledata[71] == 'float: right;') {
                echo 'margin-right: ' . $styledata[75] . '%';
            }
            ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?>  a:hover.image-ultimate-button{
            color: <?php echo $styledata[63]; ?> !important;
            background-color:<?php echo $styledata[65]; ?>;
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            opacity: 0;
            visibility: hidden;

        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .image-ultimate-info, .image-ultimate-hover-<?php echo $styleid; ?>:hover .image-ultimate-info {
            visibility: visible;
            opacity: 1;
            transition:0.5s
        }

        .image-ultimate-hover-<?php echo $styleid; ?> .hover-img {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
            -webkit-transform: scale(1) translateY(0);
            -moz-transform: scale(1) translateY(0);
            -ms-transform: scale(1) translateY(0);
            -o-transform: scale(1) translateY(0);
            transform: scale(1) translateY(0);
        }
        .image-ultimate-hover-<?php echo $styleid; ?> a:hover .hover-img, .image-ultimate-hover-<?php echo $styleid; ?>:hover .hover-img {
            -webkit-transform: scale(0.5) translateY(-100%);
            -moz-transform: scale(0.5) translateY(-100%);
            -ms-transform: scale(0.5) translateY(-100%);
            -o-transform: scale(0.5) translateY(-100%);
            transform: scale(0.5) translateY(-100%);
        }
        <?php echo $styledata[77]; ?>
    </style>
    <?php
    iheu_ultimate_oxi_shortcode_styleall($styledata, $listdata, $styleid);
}
