<?php /*
Template Name: 投稿一覧表示用
*/ ?>

<?php get_header(); ?>

<main class="t-contents page_blog">
  <div class="is-sp">
    <?php get_template_part('/parts/categoryNavi' ); ?>
  </div>
  <div class="page_blog__item">
    <section class="o-archive">
      <h1 class="a-title -center">All articles</h1>
      <p class="a-title__subTitle -center">すべての記事</p>
      <div class="o-archive__inner">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
        $args = array(
          'paged' => $paged,
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
        <?php endwhile; endif; ?>
      </div>

      <?php get_template_part('/parts/pagenation' ); ?>
      <?php wp_reset_query(); ?>

    </section>
  </div>
  <div class="is-pc">
    <?php get_template_part('/parts/categoryNavi' ); ?>
    <?php get_template_part('/parts/snsNavi' ); ?>
  </div>
</main>

<?php get_footer(); ?>
