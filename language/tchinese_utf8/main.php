<?php
include_once XOOPS_ROOT_PATH . '/modules/tadtools/language/' . $xoopsConfig['language'] . '/theme_common.php';

/**自訂設定之語系**/
define("TF_SHOW_VAR", "顯示佈景變數資訊");
define("TF_SHOW_VAR_DESC", "佈景開發時，會顯示所有 tad_themes 提供的控制變數及設定值");
define("TF_FONT_FAMILY", "佈景字型設定");
define("TF_FONT_FAMILY_DEFAULT", "\"Helvetica Neue\",Helvetica,Arial,\"微軟正黑體\",sans-serif");
define("TF_FONT_FAMILY_DESC", "輸入字型名稱，有空白的部份需要用\"\"包起來。如：" . TF_FONT_FAMILY_DEFAULT);
define("TF_FOOTER_BGCOLOR", "頁尾底色");
define("TF_FOOTER_BGCOLOR_DESC", "頁尾底部的顏色");
define("TF_BG_COVER", "底圖自動放大");
define("TF_BG_COVER_DESC", "底圖是否要自動放大？");
define("TF_FOOTER_STYLE", "頁尾內容樣式設定");
define("TF_FOOTER_STYLE_DESC", "可使用CSS語法控制頁尾內容的外觀");
define("TF_TOPMENU", "上方選單");
define("TF_TOPMENU_DEFAULT", '[{"name":"回首頁","url":"index.php"},\n{"name":"最新消息","url":"/modules/tadnews/"},\n{"name":"電子相簿","url":"/modules/tadgallery/"},\n{"name":"檔案下載","url":"/modules/tad_uploader/"},\n{"name":"聯絡我們","url":"/modules/ugm_contact_us/"}]');
define("TF_TOPMENU_DESC", '最多五項，以json格式撰寫：[{"name":"項目名稱","url":"對應網址"},{第二組設定...},{第三組設定...}]');

define("TF_MARQUEE_PREFIX", "<span style='color:red;'>快報：</span>");
define("TF_MARQUEE", "設定跑馬燈");
define("TF_MARQUEE_DESC", "請輸入跑馬燈內容，可用HTML及圖片");
define("TF_MARQUEE_DEFAULT", "這裡是跑馬燈的預設內容，可從佈景管理的額外設定輸入您想要的內容。");
define("TF_MARQUEE_BGCOLOR", "跑馬燈底色");
define("TF_MARQUEE_BGCOLOR_DESC", "設定跑馬燈底色");
define("TF_MARQUEE_TEXT_COLOR", "跑馬燈文字顏色");
define("TF_MARQUEE_TEXT_COLOR_DESC", "設定跑馬燈文字顏色");
