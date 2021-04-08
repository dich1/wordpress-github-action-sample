<?php

$metaquerysp[] = array(
  'key'=>'is_pickup',
  'value'=> '表示する',
);
$metaquerysp['relation'] = 'AND';

$args = array(
  'post_type' => 'post',
  'posts_per_page' => 6, // 最大取得数は6件に制限
  'meta_query' => $metaquerysp,
  'order' => 'DESC'
);

$wp_query = new WP_Query($args);
?>

<?php if($wp_query -> have_posts()): ?>

  <div class="js-swipeArea swiper-container">
    <div class="swiper-wrapper">
      <?php while($wp_query -> have_posts()): $wp_query -> the_post(); ?>
        <?php
        $cats = get_the_category( $post->ID );
        $cat = $cats[0];
        if (has_post_thumbnail() )	{
          $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
        }
        ?>
        <div class="swiper-slide">
          <div class="m-card_articleLarge">
            <div class="m-card_article__img" style="background-image: url(<?php echo $image_url[0]; ?>)"></div>
            <div class="m-card_article__inner">
              <ul class="a-categoryList">
                <li class="date">
                  <?php the_time('Y.m.d');?>
                </li>
                <li class="category">
                  <a class="textLink" href="<?php echo get_category_link( $cat->cat_ID );?>"><?php echo $cat->cat_name; ?></a>
                </li>
              </ul>
              <h1 class="m-card_article__title">
                <?php the_title();?>
              </h1>
              <div class="detailArea">
                <p class="m-card_article__text">
                  <?php
                  if(mb_strlen($post->post_content, 'UTF-8')>78){
                    $content= mb_substr(strip_tags($post->post_content), 0, 78, 'UTF-8');
                    echo $content.'…';
                  }else{
                    echo strip_tags($post->post_content);
                  } ?>
                </p>
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
                <a class="a-btn -text textLink" href="<?php the_permalink();?>">
                  <svg class="a-icon">
                    <use xlink:href="#circle"></use>
                  </svg>
                  READ MORE
                </a>
              </div>
            </div>

            <a class="overAll" href="<?php the_permalink();?>"></a>
          </div>
        </div>
      <?php endwhile; ?>

    </div>
    <div class="js-iconPickUp">
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/pickup.svg" alt="pickup">
    </div>
    <div class="swiper-pagination"></div>
  </div>

<?php else: ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
