<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $body_classes; ?>">
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
          <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
          <?php if (!empty($messages)): print $messages; endif; ?>
          <?php if (!empty($help)): print $help; endif; ?>
          <div id="content-content" class="clear-block">
            <?php print $content; ?>
          </div> <!-- /content-content -->
          <?php print $feed_icons; ?>
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

</body>
</html>
