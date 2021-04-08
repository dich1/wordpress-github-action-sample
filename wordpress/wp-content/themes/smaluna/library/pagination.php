<?php
/* ページャーの生成
* ---------------------------------------- */
if( !function_exists('pagination') ){
  function pagination() {
    global $wp_query;
    $bignum = 999999999;
    if ( $wp_query->max_num_pages <= 1 )
    return;

    $page_links = paginate_links( array(
      'base' => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
      'prev_text' => '<svg class="a-icon -primary"><use xlink:href="#arrow"></use></svg>',
      'next_text' => '<svg class="a-icon -secondary"><use xlink:href="#arrow"></use></svg>',
      'current' => max( 1, get_query_var('paged') ),
      'total' => $wp_query->max_num_pages,
      'type' => 'array',
      'end_size' => 3,
      'mid_size' => 1
    ));

    echo '<ul class="m-pagenation">';
    foreach ($page_links as $value) {
      // 特定の文字があった場合分岐
      if(strpos($value,'current') !== false){
        echo '<li class="is-active"><a href="#">' . $value . '</a></li>';
      } else {
        echo '<li>' . $value . '</li>';
      }
    }
    echo '</ul>';
  }
}
?>
