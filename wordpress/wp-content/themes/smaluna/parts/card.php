<?php
$cats = get_the_category( $post->ID );
$cat = $cats[0];
if (has_post_thumbnail() )	{
  $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
}
?>

<article class="m-card_article">
  <?php new_icon(7);?>
  <div class="m-card_article__img" style="background-image: url(<?php echo $image_url[0]; ?>)"></div>
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
  <ul class="a-tagList">
    <?php
    $posttags = get_the_tags();
    if ($posttags) {
      foreach($posttags as $tag) {
        echo '<li>'.$tag->name.'</li>';
      }
    }
    ?>
  </ul>
  <a class="overAll" href="<?php the_permalink(); ?>"></a>
</article>
