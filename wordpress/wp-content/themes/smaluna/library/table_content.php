<?php
/* 目次に特定のクラスを付与
* ---------------------------------------- */
add_action('wp_head', 'add_class_table_of_content');
function add_class_table_of_content(){
  if(is_single()) {  ?>
    <script type="text/javascript">
    jQuery(function() {
      if(jQuery('#toc_container').length) {
        jQuery('#toc_container').addClass('tableContents');
        jQuery('.toc_title').addClass('tableContents__title');
      }
    });
    </script>
  <?php  }
};
?>
