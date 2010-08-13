<?php
// $Id$
/**
 * @file custom-blocks-categories-block.tpl.php - 2010-08-13
 *
 * Available variables:
 *  - $links Array og the link with title and href keys.
 *
 *
 * @author Kálmán Hosszu - hosszu.kalman@gmail.com - http://kalman-hosszu.com
 */
?>
<?php
if (count($links)) {
  ?>
  <div class="item-list"><?php echo theme('links', $links, array('class' => 'views-summary')); ?> </div>
  <?php
}
else {
  ?>
  <div><p>No categories</p></div>
  <?php
}
?>