<?php
include_once XOOPS_ROOT_PATH . '/modules/tadtools/language/' . $xoopsConfig['language'] . '/theme_common.php';

/**自訂設定之語系**/
define("TF_SHOW_VAR", "Display themes vars.");
define("TF_SHOW_VAR_DESC", "Display all variable of tad_themes module that you could use it to design theme.");
define("TF_FONT_FAMILY", "Theme fonts");
define("TF_FONT_FAMILY_DEFAULT", "\"Helvetica Neue\",Helvetica,Arial,sans-serif");
define("TF_FONT_FAMILY_DESC", "CSS font-family setup.ex:" . TF_FONT_FAMILY_DEFAULT);
define("TF_FOOTER_BGCOLOR", "Footer background color");
define("TF_FOOTER_BGCOLOR_DESC", "Set footer background color.");
define("TF_BG_COVER", "Use 'background-size: cover;'?");
define("TF_BG_COVER_DESC", "");
define("TF_FOOTER_STYLE", "Custom styles");
define("TF_FOOTER_STYLE_DESC", "You can design footer style by CSS.");
define("TF_TOPMENU", "Top Menu");
define("TF_TOPMENU_DEFAULT", '[{"name":"Home","url":"index.php"},\n{"name":"News","url":"/modules/tadnews/"},\n{"name":"Photos","url":"/modules/tadgallery/"},\n{"name":"Files","url":"/modules/tad_uploader/"},\n{"name":"Contact us","url":"/modules/ugm_contact_us/"}]');
define("TF_TOPMENU_DESC", 'json content：[{"name":"item name","url":"item url"},{...},{...}]');

define("TF_MARQUEE_PREFIX", "<span style='color:red;'></span>");
define("TF_MARQUEE", "Marquee");
define("TF_MARQUEE_DESC", "Please input marquee content.");
define("TF_MARQUEE_DEFAULT", "You could input marquee content from theme admin.");
define("TF_MARQUEE_BGCOLOR", "Marquee background color");
define("TF_MARQUEE_BGCOLOR_DESC", "");
define("TF_MARQUEE_TEXT_COLOR", "Marquee text color");
define("TF_MARQUEE_TEXT_COLOR_DESC", "");
