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
        if ( have_posts() ) :
          while ( have_posts() ) : the_post();
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

      </div>
      <?php get_template_part('/parts/pagenation' ); ?>
    </section>
  </div>
  <div class="is-pc">
    <?php get_template_part('/parts/categoryNavi' ); ?>
    <?php get_template_part('/parts/snsNavi' ); ?>
  </div>
</main>

<?php get_footer(); ?>
