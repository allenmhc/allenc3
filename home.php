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
  <a href="<?php the_permalink(); ?>" class="article-box row">
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

  <div class="row">
    <div class="archives-list-wrapper column">
      <ul class="archives-list small-block-grid-2 medium-block-grid-4 large-block-grid-6">
        <?php
        rewind_posts();
        $query_args = array(
          "posts_per_page" => 12
        );
        query_posts($query_args);
        while (have_posts()): the_post();
        ?>
        <li>
          <a href="<?php the_permalink(); ?>" class="archive-box">
            <div class="archive-box-inner">
              <div class="archive-date icomoon-icon icon-calendar"><?php the_time("Y.m.d"); ?></div>
              <h4 class="archive-title"><?php the_title(); ?></h4>
            </div>
          </a>
        </li>
      <?php endwhile; ?>
      </ul>
    </div>
  </div>
</section>

<?php
  get_footer();
?>
