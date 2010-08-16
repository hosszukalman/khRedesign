<?php
/**
 * Implementation of THEMEHOOK_settings() function.
 *
 * @param $saved_settings
 *   array An array of saved settings for this theme.
 * @return
 *   array A form array.
 */
function kalmanhosszu_settings($saved_settings, $subtheme_defaults = array()) {

  $form = array();

  // Get the default values from the .info file.
  $themes = list_themes();
  $defaults = $themes['kalmanhosszu']->info['settings'];

  // Allow a subtheme to override the default values.
  $defaults = array_merge($defaults, $subtheme_defaults);

  // Merge the saved variables and their default values.
  $settings = array_merge($defaults, $saved_settings);

  // Create the form
  $form['kalmanhosszu_rss_feed_icon'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable RSS feed icon'),
    '#default_value' => $settings['kalmanhosszu_rss_feed_icon'],
  );

  $form['kalmanhosszu_linked_in_url'] = array(
    '#type' => 'textfield',
    '#title' => t('LinkedIn URL'),
    '#default_value' => $settings['kalmanhosszu_linked_in_url'],
  );

  $form['kalmanhosszu_twitter_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter URL'),
    '#default_value' => $settings['kalmanhosszu_twitter_url'],
  );

  return $form;
}