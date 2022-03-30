<div class="container-fluid fixed-top mt-3">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">     
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <a href="<?php home_url('/'); ?>"><img src="http://localhost/messaoud/blogVoitures&motos/wp-content/uploads/2022/03/auto-moto.jpg" width="100" height="100" alt=""></a>
        <?php 
        
          wp_nav_menu(array('theme_location' => 'main_menu',
                                'container_class' => 'custom-menu-class'
                              )
                      );
        ?>
        </ul>
      </div>
    </div>
  </nav>
</div>
