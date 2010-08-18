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
  $vars['rss_feed_url'] = theme_get_setting('kalmanhosszu_rss_feed_url');
  if (is_null($vars['rss_feed_url'])) {
    $vars['rss_feed_url'] = 'rss.xml';
  }
  $vars['linked_in_url'] = theme_get_setting('kalmanhosszu_linked_in_url');
  $vars['twitter_url'] = theme_get_setting('kalmanhosszu_twitter_url');
  $vars['show_facebook_share'] = theme_get_setting('kalmanhosszu_show_facebook_share');
  $vars['show_iwiw_share'] = theme_get_setting('kalmanhosszu_show_iwiw_share');
  $vars['show_twitter_share'] = theme_get_setting('kalmanhosszu_show_twitter_share');
  $vars['twitter_acc'] = theme_get_setting('kalmanhosszu_twitter_acc');
}

/**
 * Theme a "Submitted by ..." notice.
 *
 * @param stdClass $comment The comment data object
 */
function phptemplate_comment_submitted($comment) {
  return t('By !username - @datetime.',
    array(
      '!username' => '<span class="comment_username">' . theme('username', $comment) . '</span>',
      '@datetime' => format_date($comment->timestamp)
    ));

}