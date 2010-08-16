<?php
/**
 * Override search form theme.
 *
 * Disable title and modify submit button to image.
 *
 * @param array $form
 * @return The rendered form
 */
function phptemplate_search_theme_form($form) {
  unset($form['search_theme_form']['#title']);
  $form['search_theme_form']['#value'] = t('Search');
  $form['submit']['#type'] = 'image_button';
  $form['submit']['#src'] = drupal_get_path('theme', 'kalmanhosszu') . '/img/search_btn.png';
  return drupal_render($form);
}

function phptemplate_preprocess_page(&$vars) {
  if (!empty($vars['primary_links'])) {
    $vars['body_classes'] .= ' primary_links';
  }

  if (!empty($vars['secondary_links'])) {
    $vars['body_classes'] .= ' secondary_links';
  }

  // Theme settings
  $vars['show_rss_feed_icon'] = theme_get_setting('kalmanhosszu_rss_feed_icon');
  $vars['linked_in_url'] = theme_get_setting('kalmanhosszu_linked_in_url');
  $vars['twitter_url'] = theme_get_setting('kalmanhosszu_twitter_url');
}