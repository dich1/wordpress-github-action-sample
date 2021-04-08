<?php get_header(); ?>
<main class="t-contents page_blog -index">
  <section class="page_blog__item -swiper">
    <?php get_template_part('/parts/swiper' ); ?>
  </section>
  <div class="page_blog__item -popular">
    <div class="inner">
      <section class="innerTitle">
        <h1 class="a-title">Popular now</h1>
        <p class="a-title__subTitle">みんなに人気の記事</p>
        <p class="textCaption">今いちばん見られている記事を<br>
          ピックアップしました</p>
        <img class="innerImg" src="<?php echo get_template_directory_uri(); ?>/img/common/checkNow.svg" alt="check Now">
      </section>
      <div class="js-seeMore o-archive">
        <div class="o-archive__inner">
          <?php

          $metaquerysp[] = array(
            'key'=>'is_popular',
            'value'=> '表示する',
          );
          $metaquerysp['relation'] = 'AND';

          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'meta_query' => $metaquerysp,
            'order' => 'DESC'
          );

          $wp_query = new WP_Query($args);
          ?>

          <?php if($wp_query -> have_posts()): ?>
            <?php while($wp_query -> have_posts()): $wp_query -> the_post(); ?>

              <?php get_template_part('/parts/card' ); ?>

            <?php endwhile; ?>
          <?php else: ?>
          <?php endif; ?>
          <?php wp_reset_query(); ?>

        </div>
        <?php get_template_part('/parts/btnMore' ); ?>
      </div>
    </div>
  </div>
  <div class="page_blog__item -archive">
    <section class="o-archive">
      <h1 class="a-title -center">All articles</h1>
      <p class="a-title__subTitle -center">すべての記事</p>
      <div class="o-archive__inner">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
        $args = array(
          'paged' => $paged,
          'posts_per_page' => 8,
          'orderby' => 'post_date',
          'order' => 'DESC',
          'post_type' => 'post',
          'post_status' => 'publish'
        );
        $wp_query = new WP_Query($args);
        if ( $wp_query->have_posts() ) :
          while ( $wp_query->have_posts() ) : $wp_query->the_post();
          ?>

          <?php get_template_part('/parts/card' ); ?>

          <?php
        endwhile;
        else :
          ?>

          表示できる投稿がまだありません。

          <?php
        endif;
        ?>
        <?php wp_reset_query(); ?>

      </div>
      <a class="a-btn -primary" href="<?php echo home_url('/article'); ?>">記事一覧へ</a>
    </section>
  </div>
  <div class="is-sp">
    <div class="js-navigation">
      <?php get_template_part('/parts/navigation' ); ?>
    </div>
  </div>
  <div class="is-pc">
    <?php get_template_part('/parts/categoryNavi' ); ?>
    <?php get_template_part('/parts/snsNavi' ); ?>
  </div>
</main>
<?php get_footer(); ?>
