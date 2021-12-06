<?php
/**
 * タイトルタグ表示
 */
add_theme_support('title-tag');
/**
 * タイトルの区切り文字変更
 */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator) {
    $separator = '|';
    return $separator;
}
/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');

// Contact Form 7の自動pタグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

function display_link($link) {
  if (is_front_page()) {
    return $link;
  } else {
    return esc_url(home_url()) . $link;
  }
} 
