  </div> <!-- end of main -->

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/bower_components/foundation/js/foundation.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/app.js"></script>

  <footer id="site-footer" class="row">
    <div class="small-centered column">
      <div class="row">
        <div class="medium-6 column">
          <ul id="social-icons" class="small-block-grid-6">
            <li class="social-icon">
              <a href="http://twitter.com/#!/allenmhc" target="_blank" title="Twitter" class="twitter" rel="me">
                <span>Twitter</span>
              </a>
            </li>
            <li class="social-icon">
              <a rel="author" target="_blank" title="Google+" class="googleplus"
                 rel="me" href="https://profiles.google.com/allenc">
                <span>Google+</span>
              </a>
            </li>
            <li class="social-icon">
              <a href="http://www.quora.com/Allen-Cheung" target="_blank" title="Quora" class="quora" rel="me">
                <span>Quora</span>
              </a>
            </li>
            <li class="social-icon">
              <a href="http://www.linkedin.com/in/allencheung" target="_blank" title="LinkedIn" class="linkedin" rel="me">
                <span>LinkedIn</span>
              </a>
            </li>
            <li class="social-icon">
              <a href="https://github.com/allenmhc" target="_blank" title="Github" class="github" rel="me">
                <span>Github</span>
              </a>
            </li>
            <li class="social-icon">
              <a id="rss" title="rss" class="rss" href="<?php bloginfo('rss2_url'); ?>">
                <span>RSS</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="medium-6 column" id="search-form-wrapper">
          <?php if (is_search()): ?>
            <?php
            global $wp_query;
            $total_results = $wp_query->found_posts;
            ?>
            <aside id="search-info">
              <?php echo $total_results; ?> match<?php echo ($total_results == 1) ? "" : "es" ?>
            </aside>
            <?php wp_reset_query(); ?>
          <?php endif; ?>
          <?php get_search_form(); ?>
        </div>

        <div class="small-12 column" id="copyright">
          <span>copyright &copy;&nbsp;<?php
            $start_year = 2011;
            $curr_year = date('Y');
            echo $start_year . ($start_year == $curr_year ? '' : '-' . $curr_year);
          ?> allenc.com</span>
        </div>
      </div>
    </div>
  </footer>
  <?php
    wp_footer();
  ?>
</body>

</html>
