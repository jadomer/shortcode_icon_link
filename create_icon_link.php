<?php

function create_icon_link($atts) {
  $html = "";
  extract(shortcode_atts(array(
    'title' => 'No Title Set',
    'link'  => '',
    'icon'  => ''
  ), $atts));

  $html =  '<a href="' . $link . '" target="_blank"><img src="' . $icon . '"/></a> ';
  $html .= '<a href="' . $link . '" target="_blank">' . $title . '</a>';

  return $html;
}

add_shortcode("pdf_link", "create_pdf_link");
