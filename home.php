<?php
/* Home template */
define('WP_USE_THEMES', false);
global $wp_query;
?>

<?php
  get_header();
?>

<section id="featured-article">
  <?php
  rewind_posts();
  $query_args = array(
    "meta_key" => "article",
    "meta_value" => 1,
    "posts_per_page" => 1
  );
  query_posts($query_args);
  the_post();
  ?>
  <a href="<?php the_permalink(); ?>" class="post-box article-box row">
    <div class="article-label small-3 medium-4 column">
      <div class="dot-mask"></div>
      <div class="dot icomoon-icon icon-paste"></div>
      <label>latest article</label>
    </div>
    <div class="post-content small-8 small-offset-1 medium-7 column">
      <h3 class="post-title article-title"><?php the_title(); ?></h3>
      <div class="post-separator"></div>
      <div class="post-excerpt article-excerpt"><?php the_excerpt(); ?></div>
    </div>
  </a>
</section>

<?php
  get_footer();
?>
