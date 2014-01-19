<?php
/**
 * Helper functions for a theme.
 *
 * @package Wordpress
 * @subpackage allenc3
 * @since allenc 3.0
 */

function allenc_is_page($page) {
  if ($page == "home") {
    return is_home();
  } else if ($page == "archives") {
    return get_page_by_title($page)->ID == get_the_ID() || is_category() || is_month() || is_day() || is_year();
  } else {
    return get_page_by_title($page)->ID == get_the_ID();
  }
}

function allenc_get_bookend_post_date($is_first, $is_article) {
  $query_args = array(
    'numberposts' => 1,
    'post_status' => 'publish',
    "orderby" => "date"
  );
  $query_args['order'] = ($is_first ? 'ASC' : 'DESC');
  if ($is_article) {
    $query_args["meta_key"] = "article";
    $query_args["meta_value"] = 1;
  }
  $post = get_posts($query_args);
  return $post[0]->post_date;
}

function allenc_archive_box_class($categories) {
  $count_class = "0";
  if (count($categories) > 0) {
    switch($categories[0]->slug) {
      case "apps":
      case "technology":
      case "computing":
      case "interface":
      case "google":
      case "hardware":
      case "media":
      case "mobile":
      case "quora":
      case "services":
      case "social-media":
      case "square":
      case "startups":
        $count_class = "1";
        break;

      case "engineering":
      case "front-end":
      case "css":
      case "interview":
      case "javascript":
      case "management":
      case "hiring":
      case "rails":
      case "typography":
      case "web-design":
      case "work":
      case "wordpress":
      case "web-design":
        $count_class = "2";
        break;

      case "blog":
      case "reading":
      case "writing":
      case "games":
      case "learning":
      case "places":
      case "rants":
      case "thoughts":
        $count_class = "3";
        break;

      default:
        $count_class = "0";
    }
  }
  echo "archive-box-" . $count_class;
}

/* Filters */
function new_excerpt_length($length) {
	return 80;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
	return '…';
}
add_filter('excerpt_more', 'new_excerpt_more');

/* Rewrite rules */
add_action('init', 'allenc_add_rewrite_rules');
add_action('init', 'allenc_add_rewrite_tags');

function allenc_add_rewrite_rules() {
  add_rewrite_rule(
    '^articles/([0-9]{4})/?$',
    'index.php?pagename=articles&articlesyear=$matches[1]',
    'top'
  );
  add_rewrite_rule(
    '^archives/([0-9]{4})/?$',
    'index.php?pagename=archives&archivesyear=$matches[1]',
    'top'
  );
}

function allenc_add_rewrite_tags() {
  add_rewrite_tag('%articlesyear%', '([0-9]{4})');
  add_rewrite_tag('%archivesyear%', '([0-9]{4})');
}

function nav_link($page) {
  $css_class = "site-nav-item small-6 column";
  $href = get_permalink(get_page_by_title($page)->ID);
  $attr = "";
  if (allenc_is_page($page)) { $css_class .= " active"; }
  if ($page == "home") { $href = get_home_url(); }
  if ($page == "about") { $attr = "rel=\"author\""; }
  echo "<a class=\"$css_class\" href=\"$href\" $attr>";
}
?>
