<?php



add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'menu_main_header', 'Меню в шапке' );
}


?>