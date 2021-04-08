<?php
// カテゴリ情報を取得
$cats = get_the_category( $post->ID );
$cat = $cats[0];
// タグ情報を取得
$posttags = get_the_tags();
if (has_post_thumbnail() )	{
  $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
}
?>

<article class="o-post">
  <div class="o-post__upper">
    <?php the_post_thumbnail( 'full', array('class' => 'upperThumbnail') ); ?>
    <h1 class="upperTitle"><?php the_title();?></h1>
    <ul class="a-categoryList">
      <li class="date">
        <?php the_time('Y.m.d');?>
      </li>
      <li class="category">
        <a class="textLink" href="<?php echo get_category_link( $cat->cat_ID );?>"><?php echo $cat->cat_name; ?></a>
      </li>
    </ul>
    <div class="upperDetail">
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
      <ul class="snsShare">
        <li class="snsShare__title">SHARE</li>
        <li>
          <a href="//www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank">
          <svg class="a-icon">
            <use xlink:href="#facebook"></use>
          </svg>
          </a>
        </li>
        <li>
          <a href="//twitter.com/share?url=<?php echo get_the_permalink(); ?>&text=<?php echo get_the_title(); ?>" target="_blank">
            <svg class="a-icon">
              <use xlink:href="#twitter"></use>
            </svg>
          </a>
        </li>
        <li>
          <a href="//timeline.line.me/social-plugin/share?url=<?php echo urlencode(get_permalink()); ?>" target="_blank">
            <svg class="a-icon">
              <use xlink:href="#line"></use>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="o-post__inner">
    <?php the_content(); ?>
    <dl style="padding: 32px; border: 2px solid #E6EBF2;">
      <dt>ピルとは？</dt>
      <dd>&rdsh; ピルには2種類の女性ホルモンが配合されている
        <dl>
          <dt>&rdsh; エストロゲン（卵胞ホルモン）、プロゲステロン（黄体ホルモン）</dt>
        </dl>
      </dd>
      <dd>&rdsh; 低用量ピル、中用量ピル、アフターピルがある
        <dl>
          <dd>&rdsh; 低用量ピル、中用量ピル、アフターピルがある</dd>
        </dl>
      </dd>
    </dl>
  </div>
  <div class="o-post__lower">
    <div class="ctaArea">
      <img class="is-pc ctaArea__title" src="<?php echo get_template_directory_uri(); ?>/img/common/ctaTitle.svg" alt="あなたのお悩みは、スマルナクリニックへ 06-4797-6100">
      <img class="is-sp ctaArea__title" src="<?php echo get_template_directory_uri(); ?>/img/common/ctaTitle_sp.svg" alt="あなたのお悩みは、スマルナクリニックへ 06-4797-6100">
      <ul class="ctaArea__list">
        <li>
          <a href="#" class="a-btn -secondary">
            <svg class="a-icon -primary">
              <use xlink:href="#subtract"></use>
            </svg>
            <p><span>COLSULT</span>無料相談</p>
          </a>
        </li>
        <li>
          <a href="https://airrsv.net/smaluna-clinic-osaka/calendar" target="_blank" class="a-btn -primary">
            <svg class="a-icon -secondary">
              <use xlink:href="#reserve"></use>
            </svg>
            <p><span>RESERVE</span>診断予約</p>
          </a>
        </li>
      </ul>
    </div>
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
    <div class="m-card_share">
      <div class="m-card_share__img" style="background-image: url(<?php echo $image_url[0]; ?>)"></div>
      <div class="m-card_share__detail">
        <p class="detailTitle">この記事をシェアする</p>
        <p class="detailText"><?php the_title();?></p>
        <div class="shareList">
          <a class="a-btnSns -fb" href="//www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-f"></i>シェアする</a>
          <a class="a-btnSns -tw" href="//twitter.com/share?url=<?php echo get_the_permalink(); ?>&text=<?php echo get_the_title(); ?>" target="_blank"><i class="fab fa-twitter"></i>ツイートする</a>
          <a class="a-btnSns -line" href="//timeline.line.me/social-plugin/share?url=<?php echo urlencode(get_permalink()); ?>" target="_blank"><i class="fab fa-line"></i>LINEで送る</a>
        </div>
      </div>
    </div>
  </div>
</article>
