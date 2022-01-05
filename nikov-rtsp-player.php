<?php
/*
Plugin Name: NikovRTSPPlayer
Plugin URI:
Description: RTSP Player basado en la librería de: https://flashphoner.com
Version: 1.0
Author:
Author URI:
License: GPL2
*/

function wp_nrtspplayer_get_html_styles(){
  $url_plugin = plugin_dir_url(__FILE__);
  $html_cont = '<link href="'.$url_plugin.'css/video-js.css" rel="stylesheet">';
  return $html_cont;
}

function wp_nrtspplayer_get_js(){
  $url_plugin = plugin_dir_url(__FILE__);
  $html_cont = '<script src="'.$url_plugin.'js/video.js"></script>
                <script src="'.$url_plugin.'js/videojs-http-streaming.js"></script>
                <script src="'.$url_plugin.'js/wp-rts-main.js"></script>';
  return $html_cont;
}


function wp_nikov_rtsp_player_short_code($attrs){
  $url = $attrs['url'];
  $w   = $attrs['width'];
  $h   = $attrs['heigth'];

  $HTML  = '';
  $HTML .= wp_nrtspplayer_get_html_styles();
  $HTML .= wp_nrtspplayer_get_js();
  $HTML .= '
      <video-js autoplay id="my_video_1" class="vjs-default-skin" controls preload="auto" width="'.$w.'" height="'.$h.'">
      <source src="'.$url.'" type="application/x-mpegURL">
      </video-js>';
  return $HTML;
}
add_shortcode('nikov_rtsp_player', 'wp_nikov_rtsp_player_short_code');

function wp_nrtspplayer_on_activate()
{
}
register_activation_hook(__FILE__,'wp_nrtspplayer_on_activate');

?>
