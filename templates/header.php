<header class="banner" role="banner">
  <div class="container">
    <div class="brand-header">
        <div class="logo">
          <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
            <?php 
              if (function_exists('theme_logo')){
                theme_logo(); 
              } else {
                bloginfo('name'); 
              };
            ?>
          </a>
        </div>
        <div class="search-form">
          <?php get_search_form(); ?>
        </div>
    </div>
  </div>
  <div class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          MENU
        </button>
      </div>

      <nav class="collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
