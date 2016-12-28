<link rel="stylesheet" href="<{xoImgUrl css/nivo-slider.css}>" type="text/css" media="screen" />

<div id="templatemo_slider">
 <div id="slider-wrapper">
    <div id="slider" class="nivoSlider">

      <{foreach from=$slider_var item=sl}>
        <{if $sl.slide_url}>
          <a href="<{$sl.slide_url}>">
            <img src="<{$sl.file_url}>" alt="Slider" title="<{$sl.description}>" />
          </a>
        <{else}>
          <img src="<{$sl.file_url}>" alt="Slider" title="<{$sl.description}>" />
        <{/if}>
      <{/foreach}>


    </div>
    <div id="htmlcaption" class="nivo-html-caption">
      <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
    </div>
  </div>
  <script type="text/javascript" src="<{xoImgUrl js/jquery.nivo.slider.pack.js}>"></script>
  <script type="text/javascript">
  $(window).load(function() {
    $('#slider').nivoSlider();
  });
  </script>
</div>
