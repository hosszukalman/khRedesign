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
  $form['community'] = array(
    '#type' => 'fieldset',
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#title' => t('Community buttons'),
    '#description' => t('Header left side community buttons.'),
  );

  $form['community']['kalmanhosszu_rss_feed_url'] = array(
    '#type' => 'textfield',
    '#title' => t('RSS URL'),
    '#default_value' => $settings['kalmanhosszu_rss_feed_url'],
  );

  $form['community']['kalmanhosszu_linked_in_url'] = array(
    '#type' => 'textfield',
    '#title' => t('LinkedIn URL'),
    '#default_value' => $settings['kalmanhosszu_linked_in_url'],
  );

  $form['community']['kalmanhosszu_twitter_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter URL'),
    '#default_value' => $settings['kalmanhosszu_twitter_url'],
  );

  $form['share'] = array(
    '#type' => 'fieldset',
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#title' => t('Share buttons'),
  );

  $form['share']['kalmanhosszu_show_facebook_share'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show facebook share button'),
    '#default_value' => $settings['kalmanhosszu_show_facebook_share'],
  );

  $form['share']['kalmanhosszu_show_iwiw_share'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show iwiw share button'),
    '#default_value' => $settings['kalmanhosszu_show_iwiw_share'],
    '#description' => t('IWIW is a Hungarian social media site like facebook.')
  );

  $form['share']['kalmanhosszu_show_twitter_share'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show twitter share button'),
    '#default_value' => $settings['kalmanhosszu_show_twitter_share'],
  );

  $form['share']['kalmanhosszu_twitter_acc'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter account'),
    '#default_value' => $settings['kalmanhosszu_twitter_acc'],
    '#description' => t('If You add yout twitter account name, it will shows in shared tweets.')
  );

  return $form;
}