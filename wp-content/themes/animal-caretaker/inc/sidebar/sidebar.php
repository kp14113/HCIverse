<?php	
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package animal-caretaker
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function animal_caretaker_widgets_init() {
	register_sidebar( array(
		'name' => esc_html__( 'Sidebar Widget Area', 'animal-caretaker' ),
		'id' => 'sidebar-primary',
		'description' => esc_html__( 'Primary widget area', 'animal-caretaker' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5><span class="animate-border border-black"></span>',
	) );	
	
	register_sidebar( array(
		'name' => esc_html__( 'Footer widget  area', 'animal-caretaker' ),
		'id' => 'footer-widget-area',
		'description' => esc_html__( 'Footer widget area', 'animal-caretaker' ),
		'before_widget' => '<div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-4"><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside></div>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5><span class="animate-border border-black"></span>',
	) );
}
add_action( 'widgets_init', 'animal_caretaker_widgets_init' );