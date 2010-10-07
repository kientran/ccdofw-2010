  <nav>
    <div id="nav_donate"><a href="" class="green awesome">Donate now</a></div>
    <div id='nav_container'>
    
    <?php 
      $args = array (
        'theme_location' => 'main-menu',
        'menu_class' => 'clearfix sf-menu',
        'menu_id' => 'nav'
      );
      wp_nav_menu( $args ); 
    ?>

  </div>
  </nav>

