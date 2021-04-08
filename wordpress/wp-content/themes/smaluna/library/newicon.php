<?php
/* newアイコン表示
* ---------------------------------------- */
function new_icon($days){
  $today = date_i18n('U');
  $entry_day = get_the_time('U');
  $progress = date('U',($today - $entry_day)) / 86400;
  if ( $days > $progress ):
    echo '<svg class="a-icon"><use xlink:href="#new"></use></svg>';
  endif;
}
?>
