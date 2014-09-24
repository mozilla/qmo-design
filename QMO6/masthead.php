    <div id="branding" role="banner">
    <?php if ( (is_front_page()) && ($paged < 1) ) : ?>
      <h1 id="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/head-logo.png" alt="<?php bloginfo('name'); ?>"></h1>
    <?php else : ?>
      <h4 id="logo"><a href="<?php echo bloginfo('url'); ?>" rel="home"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/head-logo.png" alt="<?php bloginfo('name'); ?>"></a></h4>
    <?php endif; ?>
    </div><!-- /#branding -->

    <!-- navigation -->
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav', 'container_id' => 'nav-primary', 'fallback_cb' => 'false', ) ); ?>
    <a href="http://www.mozilla.org/" id="tabzilla">Mozilla</a>

    <?php if ( is_front_page()):  ?>
  <header id="masthead" role="banner" <?php if (get_header_image()) : ?>class="image"<?php endif; ?>>
    <hgroup>
    <?php if ( (is_front_page()) && ($paged < 1) ) : ?>
      <h1 id="site-title"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></h1>
    <?php else : ?>
      <h1 id="site-title"><a href="<?php echo esc_url( home_url('/') ); ?>" rel="home" title="<?php _e('Go to the front page', 'onemozilla'); ?>"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a></h1>
    <?php endif; ?>
    <?php if (get_bloginfo('description','display')) : ?>
      <h2 id="site-description"><?php echo esc_attr( get_bloginfo('description', 'display') ); ?></h2>
    <?php endif; ?>
    </hgroup>
  </header><!-- #masthead -->
    <?php endif; ?>
