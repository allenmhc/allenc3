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
      <aside class="dot">
        <div class="dot-mask"></div>
        <div class="dot-icon icomoon-icon icon-book"></div>
        <label>latest article</label>
      </aside>
    </div>

    <div class="article-content small-9 medium-8 column">
      <div class="article-content-inner">
        <h3 class="post-title article-title"><?php the_title(); ?></h3>
        <div class="post-excerpt article-excerpt"><?php the_excerpt(); ?></div>
      </div>
    </div>
  </a>
</section>

<section id="more-posts">
  <div class="row">
    <div class="archives-label small-9 small-offset-3 medium-8 medium-offset-4 column">
      <aside class="dot">
        <div class="dot-mask"></div>
        <div class="dot-icon icomoon-icon icon-copy"></div>
        <label>more posts</label>
      </aside>
    </div>
  </div>

  <div class="row archives-list">
    <?php
    rewind_posts();
    $query_args = array(
      "posts_per_page" => 10
    );
    query_posts($query_args);
    while (have_posts()): the_post();
    ?>
    <a href="<?php the_permalink(); ?>" class="post-box small-12 medium-4 large-3 column">
      <div class="post-date archive-date"><?php the_time("Y.m.d"); ?></div>
      <span class="post-title archive-title"><?php the_title(); ?></span>
    </a>
    <?php endwhile; ?>
  </div>
</section>

<?php
  get_footer();
?>
