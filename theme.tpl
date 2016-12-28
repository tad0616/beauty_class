<!DOCTYPE html>
<html lang="<{$xoops_langcode}>">
  <head>
    <!--目前$_SESSION['bootstrap']="<{php}>echo $_SESSION['bootstrap'];<{/php}>"; -->
    <!--將目前的資料夾名稱，設定為樣板標籤變數 theme_name-->
    <{assign var=theme_name value=$xoTheme->folderName}>

    <!--載入由使用者設定的各項佈景變數-->
    <{includeq file="$xoops_rootpath/modules/tadtools/themes_common/get_var.tpl"}>

    <{includeq file="$xoops_rootpath/modules/tadtools/themes_common/meta.tpl"}>

    <!-- 網站的標題及標語 -->
    <title><{$xoops_sitename}> - <{$xoops_pagetitle}></title>

    <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/link_css.tpl"}>

    <!-- 給模組套用的樣板標籤 -->
    <{$xoops_module_header}>

    <!-- 局部套用的樣式，如果有載入完整樣式 theme_css.tpl 那就不需要這一部份 -->
    <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/theme_css.tpl"}>
    <style type="text/css">
      body{
        font-family: <{$font_family}>;
        <{if $background_cover}>
          background-size: cover;
        <{/if}>
      }

      #container_body{
        margin: <{$margin_top}>px auto 0px auto;
      }

      #container_footer{
        padding: 20px auto;
        display: block;
        background-color: <{$footer_bgcolor}>;
        <{$footer_style}>
      }
    </style>

  </head>
  <body>

    <!-- 導覽列 -->
    <div id="container_nav">
      <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/navbar.tpl"}>
    </div>

    <!-- id 屬性 -->
    <div id="container_body">

      <div id="container_header">
        <div class="row">

          <div class="col-sm-5 col-sm-5">
            <{if $logo_img}>
              <a href="<{$xoops_url}>"><img src="<{$logo_img}>" alt="<{$xoops_sitename}>"></a>
            <{else}>
              <h1><a href="<{$xoops_url}>"><{$xoops_sitename}></a></h1>
            <{/if}>
          </div>

          <div class="col-sm-7 col-sm-7">
            <ul id="head_menu">
              <{foreach from=$topmenu item=tm}>
                <li><a href="<{$tm.url}>" target="<{$tm.target}>"><{$tm.name}></a></li>
              <{/foreach}>
            </ul>
          </div>

        </div>
      </div>


      <!--滑動圖片-->
      <{if $slide_width!=0}>
      <div id="container_slide">
        <{includeq file="$xoops_rootpath/themes/$theme_name/xotpl/templatemo_slider.tpl"}>
      </div>
      <{/if}>

      <!--跑馬燈-->
      <{if $marquee}>
        <marquee style="background-color:<{if $marquee_bg_color}><{$marquee_bg_color}><{else}>#ff7da2<{/if}>;color:<{if $marquee_text_color}><{$marquee_text_color}><{else}>#fff7fd<{/if}>;padding:6px 0px;">
          <{$smarty.const.TF_MARQUEE_PREFIX}><{$marquee}>
        </marquee>
      <{/if}>

      <!--主內容區-->
      <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/$theme_type.tpl"}>
    </div>

    <div id="container_footer">
      <div class="row">
        <div class="col-sm-12">
        <{if $xoops_isadmin}>
          <a href="<{$xoops_url}>/modules/system/admin.php?fct=preferences&op=show&confcat_id=3" class="block_config"></a>
        <{/if}>
        </div>
      </div>
      <{$xoops_footer}>
    </div>


    <!-- 載入 BootStrap所需的javascript -->
    <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/bootstrap_js.tpl"}>

    <!-- 載入自訂的javascript -->
    <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/my_js.tpl"}>

    <!-- 是否顯示樣板變數資訊 -->
    <{if $show_var==1}>
      <{includeq file="$xoops_rootpath/modules/tadtools/themes_common/show_var.tpl"}>
    <{/if}>


  </body>
</html>