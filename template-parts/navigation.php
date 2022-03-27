<div class="container-fluid fixed-top mt-3">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">     
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php wp_nav_menu(array('theme_location' => 'main_menu',
                                'container_class' => 'custom-menu-class'
                              )
                        ); 
      ?>
        </ul>
      </div>
    </div>
  </nav>
</div>

<!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top mt-3" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button> -->
        <?php
        // wp_nav_menu( array(
        //     'theme_location'    => 'main_menu',
        //     'depth'             => 2,
        //     'container'         => 'div',
        //     'container_class'   => 'collapse navbar-collapse',
        //     'container_id'      => 'bs-example-navbar-collapse-1',
        //     'menu_class'        => 'nav navbar-nav',
        //     'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        //     'walker'            => new WP_Bootstrap_Navwalker(),
        //)// );
        ?>
    <!-- </div>
</nav> --> -->
