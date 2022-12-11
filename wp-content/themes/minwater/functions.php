<?php 

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css' );

	wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.min.js', array(), '20221207222505', false );
});

add_filter( 'script_loader_tag', function ( $tag, $handle, $src ) {
	if ( 'app' === $handle ) {
		return str_replace( ' src', ' defer src', $tag );
	}
	return $tag;
}, 10, 3 );

add_filter( 'post_thumbnail_html', 'remove_wps_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_wps_width_attribute', 10 );
function remove_wps_width_attribute( $html ) {
	$html = preg_replace( '/(width|height|sizes)=\"[^"]*\"\s?/', "", $html );
	return $html;
}


add_filter('nav_menu_css_class', function($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}, 1, 3);
add_filter( 'nav_menu_link_attributes', function ( $atts, $item, $args, $depth ) {
	if(isset($args->add_a_class)) {
		$class = $args->add_a_class;
		$atts['class'] = isset( $atts['class'] ) ? "{$atts['class']} $class" : $class;
	}
	return $atts;
}, 10, 4 );

add_theme_support( 'menus' );
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

?>