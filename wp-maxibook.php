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
  $html_cont .= '<link rel="stylesheet" type="text/css" href="'.$url_plugin.'css/nrtspplayer-estile.css'.'" media="screen" />';
  return $html_cont;
}

function wp_nrtspplayer_get_js(){
  $url_plugin = plugin_dir_url(__FILE__);
  $html_cont .= '<script href="'.$url_plugin.'js/flashphoner.js'.'"></script>';
  $html_cont .= '<script href="'.$url_plugin.'js/nikov_rtsp_player.js'.'"></script>';
  return $html_cont;
}


function wp_nikov_rtsp_player_short_code($attrs){
  $url = $attrs['url'];
  $w   = $attrs['width'];
  $h   = $attrs['height'];

  $HTML  = '';
  $HTML .= wp_nrtspplayer_get_html_styles();
  $HTML .= wp_nrtspplayer_get_js();
  $HTML .= '<div class="" id="" style="width:'.$w.'; height:'.$h.';">';
  $HTML .= '</div>';
  return $HTML;
}
add_shortcode('nikov_rtsp_player', 'wp_nikov_rtsp_player_short_code');

function wp_mxibook_on_activate()
{
}
register_activation_hook(__FILE__,'wp_nrtspplayer_on_activate');

?>
