<?php



add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'menu_main_header', 'Меню в шапке' );
}


function create_posttype()
{
    register_post_type('news',
        array('labels' => array('name' => __('Новости'),
            'singular_name' => __('Новости')
        ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'news'),
            'show_in_rest' => true,
        )

    );

}

add_action('init', 'create_posttype');



function custom_news_template($template) {
    if (is_singular('news')) {
        $custom_template = locate_template('single-news.php');
        if ($custom_template !== '') {
            return $custom_template;
        }
    }
    return $template;
}
add_filter('template_include', 'custom_news_template');



?>