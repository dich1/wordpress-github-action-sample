<?php
global $post;
$cats =get_the_category();
$catkwds = array();
foreach($cats as $cat){
  $catkwds[] = $cat->term_id;
}

$args = array(
  'posts_per_page' => 6, //6件表示(デフォルトは５件)
  'post_type' => 'post', //投稿タイプ名
  'category__in' => $catkwds,
  'orderby' => 'rand', //日付表示
  'post__not_in' => array($post->ID) //表示中の記事を除外
);
?>


<?php $myPosts = get_posts($args); if($myPosts) : ?>
  <?php foreach($myPosts as $post) : setup_postdata($post); ?>

    <?php
    //アイキャッチ IDを取得して画像の「URL,横幅,高さ」を取得。
    if (has_post_thumbnail() )	{
      $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    }
    ?>

    <article class="m-card_articleHorizontal">
      <div class="m-card_article__img" style="background-image: url(<?php echo $image_url[0]; ?>)"></div>
      <div>
        <ul class="a-categoryList">
          <li class="date">
            <?php the_time('Y.m.d');?>
          </li>
          <li class="category">
            <a class="textLink" href="<?php echo get_category_link( $cat->cat_ID );?>"><?php echo $cat->cat_name; ?></a>
          </li>
        </ul>
        <h2 class="m-card_article__title">
          <?php the_title();?>
        </h2>
      </div>
      <a class="overAll" href="<?php the_permalink() ?>"></a>
    </article>

  <?php endforeach; ?>
<?php else : ?>
  関連アイテムはまだありません。
<?php endif; wp_reset_postdata(); ?>
