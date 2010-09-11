<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

  <head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <!--[if IE 8]>
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo base_path() . drupal_get_path('theme', 'kalmanhosszu') ?>/ie8.css" />
    <![endif]-->

  </head>
  <body class="<?php print $body_classes; ?>">

    <div id="out">

      <div id="left_out">
        <img id="left_img_bg" src="<?php echo base_path() . path_to_theme() ?>/img/left_out_bg.jpg" />
      </div>
      <div id="right_out">
        <img id="right_img_bg" src="<?php echo base_path() . path_to_theme() ?>/img/right_out_bg.jpg" />
      </div>

      <div id="page">
        <div id="header_left">
          <?php if (!empty($logo)): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="Hosszu Kálmám - Drupal fejelsztő és tanácsadó" />
            </a>
          <?php elseif (!empty($site_name)): ?>
            <h1 id="site-name">
              <a href="<?php print $front_page ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
          <?php if ($rss_feed_url || $linked_in_url || $twitter_url): ?>
            <div id="social_media">
              <?php if ($rss_feed_url): ?>
                <?php echo l(theme('image', drupal_get_path('theme', 'kalmanhosszu') . '/img/rss_ico.png', 'RSS', 'RSS'), $rss_feed_url,
                  array('html' => TRUE, 'attributes' => array('target' => '_blank'))); ?>
              <?php endif; ?>
              <?php if ($linked_in_url): ?>
                <?php echo l(theme('image', drupal_get_path('theme', 'kalmanhosszu') . '/img/linked_in_ico.png', 'LinkedIn', 'LinkedIn'), $linked_in_url,
                  array('html' => TRUE, 'attributes' => array('target' => '_blank'))); ?>
              <?php endif; ?>
              <?php if ($twitter_url): ?>
                <?php echo l(theme('image', drupal_get_path('theme', 'kalmanhosszu') . '/img/twitter_ico.png', 'Twitter', 'Twitter'), $twitter_url,
                  array('html' => TRUE, 'attributes' => array('target' => '_blank'))); ?>
              <?php endif; ?>
              </div> <!-- /social_media -->
          <?php endif; ?>
        </div> <!-- /header_left -->

        <div id="header_right">
          <?php if (!empty($secondary_links)): ?>
            <div id="secondary" class="clear-block">
              <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')); ?>
            </div>
            <div class="clear"></div>
          <?php endif; ?>

          <?php if (!empty($primary_links)): ?>
            <div id="primary" class="clear-block">
              <?php print theme('links', $primary_links, array('class' => 'links primary-links')); ?>
            </div>
            <div class="clear"></div>
          <?php endif; ?>

          <?php if (!empty($site_slogan)): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>

          <?php if (!empty($search_box)): ?>
            <div id="search-box"><?php print $search_box; ?></div>
          <?php endif; ?>
        </div> <!-- /header_right -->

        <div class="clear"></div>


        <div id="container" class="clear-block">

          <?php if (!empty($left)): ?>
            <div id="sidebar-left" class="column sidebar">
              <?php print $left; ?>
            </div> <!-- /sidebar-left -->
          <?php endif; ?>

          <div id="main" class="column"><div id="main-squeeze">
            <?php if (!empty($breadcrumb)): ?><div id="breadcrumb"><?php print $breadcrumb; ?></div><?php endif; ?>
            <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>

            <div id="content">
              <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
              <?php if ($show_facebook_share || $show_iwiw_share || $show_twitter_share): ?>
                <div id="share_links">
                  <?php if ($show_facebook_share): ?>
                    <a name="fb_share" type="button" href="http://www.facebook.com/sharer.php">Megosztás</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
                  <?php endif; ?>
                  <?php if ($show_iwiw_share): ?>
                    <script>function iwiwshare_click() {u=location.href;t=document.title;window.open('http://iwiw.hu/pages/share/share.jsp?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'iwiwshare','toolbar=0,status=0,location=1, width=650,height=600,scrollbars=1');return false;}</script><a href="http://iwiw.hu/pages/share/share.jsp?u=<url>" onclick="return iwiwshare_click()" target="_blank"><img src="http://static.iwiw.hu/common/image/share/b-megosztas-b.gif" alt="" border="0" /></a>
                  <?php endif; ?>
                  <?php if ($show_twitter_share): ?>
                    <a href="http://twitter.com/share" class="twitter-share-button" data-count="none" <?php if ($twitter_acc) echo 'data-via="' . $twitter_acc . '"' ?>>Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              <div class="c-l"></div>
              <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
              <?php if (!empty($messages)): print $messages; endif; ?>
              <?php if (!empty($help)): print $help; endif; ?>
              <div id="content-content" class="clear-block">
                <?php if (!empty($content_top)): ?>
                  <div id="content_top">
                    <?php print $content_top; ?>
                  </div> <!-- /content_top -->
                <?php endif; ?>

                <?php print $content; ?>
              </div> <!-- /content-content -->
            </div> <!-- /content -->

          </div></div> <!-- /main-squeeze /main -->
          <div class="clear"></div>
        </div> <!-- /container -->


        <?php print $closure; ?>

      </div> <!-- /page -->

      <div id="footer-wrapper">
        <div id="footer_center">
          <div id="footer">
            <p>The theme originally created by <a href="http://www.kalman-hosszu.com" title="Kálmán Hosszu, Drupal developer and counsultan">Kálmán Hosszu</a></p>
            <?php print $footer_message; ?>
            <?php if (!empty($footer)): print $footer; endif; ?>
          </div> <!-- /footer -->
        </div> <!-- /footer_center -->
      </div> <!-- /footer-wrapper -->

      <div id="footer_bottom"></div>

    </div> <!-- /out- -->

  </body>
</html>
