<?php
$i                           = 0;
$theme_config[$i]['name']    = "show_var";
$theme_config[$i]['text']    = TF_SHOW_VAR;
$theme_config[$i]['desc']    = TF_SHOW_VAR_DESC;
$theme_config[$i]['type']    = "yesno";
$theme_config[$i]['default'] = "0";

//字型設定
$i++;
$theme_config[$i]['name']    = "font_family";
$theme_config[$i]['text']    = TF_FONT_FAMILY;
$theme_config[$i]['desc']    = TF_FONT_FAMILY_DESC;
$theme_config[$i]['type']    = "text";
$theme_config[$i]['default'] = constant('TF_FONT_FAMILY_DEFAULT');

//底圖放大
$i++;
$theme_config[$i]['name']    = "background_cover";
$theme_config[$i]['text']    = TF_BG_COVER;
$theme_config[$i]['desc']    = TF_BG_COVER_DESC;
$theme_config[$i]['type']    = "yesno";
$theme_config[$i]['default'] = 0;

//頁尾底色
$i++;
$theme_config[$i]['name']    = "footer_bgcolor";
$theme_config[$i]['text']    = TF_FOOTER_BGCOLOR;
$theme_config[$i]['desc']    = TF_FOOTER_BGCOLOR_DESC;
$theme_config[$i]['type']    = "color";
$theme_config[$i]['default'] = "#EAEAEA";

//頁尾內容樣式設定
$i++;
$theme_config[$i]['name']    = "footer_style";
$theme_config[$i]['text']    = TF_FOOTER_STYLE;
$theme_config[$i]['desc']    = TF_FOOTER_STYLE_DESC;
$theme_config[$i]['type']    = "textarea";
$theme_config[$i]['default'] = "min-height: 60px; line-height: 60px; text-align: center;";

//頂頭選單陣列
$i++;
$theme_config[$i]['name']    = "topmenu";
$theme_config[$i]['text']    = TF_TOPMENU;
$theme_config[$i]['desc']    = TF_TOPMENU_DESC;
$theme_config[$i]['type']    = "array";
$theme_config[$i]['default'] = constant('TF_TOPMENU_DEFAULT');

//跑馬燈
$i++;
$theme_config[$i]['name']    = "marquee";
$theme_config[$i]['text']    = TF_MARQUEE;
$theme_config[$i]['desc']    = TF_MARQUEE_DESC;
$theme_config[$i]['type']    = "text";
$theme_config[$i]['default'] = constant('TF_MARQUEE_DEFAULT');

//跑馬燈底色
$i++;
$theme_config[$i]['name']    = "marquee_bg_color";
$theme_config[$i]['text']    = TF_MARQUEE_BGCOLOR;
$theme_config[$i]['desc']    = TF_MARQUEE_BGCOLOR_DESC;
$theme_config[$i]['type']    = "color";
$theme_config[$i]['default'] = '#000000';

//跑馬燈文字顏色
$i++;
$theme_config[$i]['name']    = "marquee_text_color";
$theme_config[$i]['text']    = TF_MARQUEE_TEXT_COLOR;
$theme_config[$i]['desc']    = TF_MARQUEE_TEXT_COLOR_DESC;
$theme_config[$i]['type']    = "color";
$theme_config[$i]['default'] = 'yellow';
