<?php


if ( !is_admin() ) {

  wp_enqueue_style('main-style', get_bloginfo('template_url') . '/stylesheets/screen.css', false, '1.0', 'screen');
  wp_enqueue_style('superfish-style', get_bloginfo('template_url') . '/stylesheets/superfish.css', false, '1.0', 'all');

  wp_enqueue_script('hoverIntent', get_bloginfo('template_url') . '/js/hoverIntent.js',false, '1.0');
  wp_enqueue_script('superFish', get_bloginfo('template_url') . '/js/superfish.js', false, '1.0');
  wp_enqueue_script('supersubs', get_bloginfo('template_url') . '/js/supersubs.js', false, '1.0');
  wp_enqueue_script('cycle', 'http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.2.72.js', false, '2.72');
  wp_enqueue_script('slider', get_bloginfo('template_url') . '/js/slider.js', false, '1.0');
}

add_action( 'init', 'register_menus');

function register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'side-menu' => __( 'Sidebar Menu' ),
      'foot-menu' => __( 'Footer Menu' )
    )
  );
}

function remove_menus () {
global $menu;
	$restricted = array(__('Dashboard'), __('Posts'), __('Media'), __('Links'),  __('Tools'), __('Comments')) ;
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_menus');

?>
