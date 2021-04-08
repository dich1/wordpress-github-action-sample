<ul class="m-categoryNavi">
  <li class="m-categoryNavi__item <?php if(is_page('article')) echo 'is-active'; ?>">
    <a class="" href="<?php echo home_url('/article'); ?>">
      <span>#すべて</span>
    </a>
  </li>
  <li class="m-categoryNavi__item <?php if( !is_home() && !is_front_page() && in_category('pill') ) echo 'is-active'; ?>">
    <a class="" href="<?php echo home_url('/pill'); ?>">
     <span>#ピル</span>
    </a>
  </li>
  <li class="m-categoryNavi__item <?php if( !is_home() && !is_front_page() && in_category('contraception') ) echo 'is-active'; ?>">
    <a class="" href="<?php echo home_url('/contraception'); ?>">
      <span>#避妊</span>
    </a>
  </li>
  <li class="m-categoryNavi__item <?php if( !is_home() && !is_front_page() && in_category('period') ) echo 'is-active'; ?>">
    <a class="" href="<?php echo home_url('/period'); ?>">
      <span>#生理・月経</span>
    </a>
  </li>
  <li class="m-categoryNavi__item <?php if( !is_home() && !is_front_page() && in_category('gynecology') ) echo 'is-active'; ?>">
    <a class="" href="<?php echo home_url('/gynecology'); ?>">
      <span>#婦人科の病気</span>
    </a>
  </li>
  <li class="m-categoryNavi__item <?php if( !is_home() && !is_front_page() && in_category('sex_education') ) echo 'is-active'; ?>">
    <a class="" href="<?php echo home_url('/sex_education'); ?>">
      <span>#性教育</span>
    </a>
  </li>
</ul>
