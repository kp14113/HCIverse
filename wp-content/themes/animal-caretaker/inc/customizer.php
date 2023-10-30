<?php
/**
 * animal-caretaker Theme Customizer.
 *
 * @package animal-caretaker
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function animal_caretaker_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
	$wp_customize->get_setting('custom_logo')->transport = 'refresh';	
}
add_action( 'customize_register', 'animal_caretaker_customize_register' );

if ( class_exists("Kirki")){

	/* Post Options */

	new \Kirki\Section(
		'animal_caretaker_post_layouts_section',
		[
			'title'       => esc_html__( 'Post Layout Options', 'animal-caretaker' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Radio_Image(
		[
			'settings'    => 'animal_caretaker_post_layout',
			'label'       => esc_html__( 'Blog Layout', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_post_layouts_section',
			'default'     => 'two_column_right',
			'priority'    => 10,
			'choices'     => [
				'one_column'   => get_template_directory_uri().'/images/1column.png',
				'two_column_right' => get_template_directory_uri().'/images/right-sidebar.png',
				'two_column_left'  => get_template_directory_uri().'/images/left-sidebar.png',
				'three_column'  => get_template_directory_uri().'/images/3column.png',
				'four_column'  => get_template_directory_uri().'/images/4column.png',
				'grid_post'  => get_template_directory_uri().'/images/grid.png',
			],
		]
	);
	/* Post Options End */

	/* General Options */

	new \Kirki\Section(
		'animal_caretaker_general_options_section',
		[
			'title'       => esc_html__( 'General Options', 'animal-caretaker' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_preloader_setting',
			'label'       => esc_html__( 'Preloader On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_general_options_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_scroll_to_top_setting',
			'label'       => esc_html__( 'Scroll To Top On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_general_options_section',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	/* General Options End */

	/* Header Button */

	new \Kirki\Section(
		'animal_caretaker_header_button_section',
		[
			'title'       => esc_html__( 'Header Button', 'animal-caretaker' ),
			'description' => esc_html__( 'Here you can add header button text and link.', 'animal-caretaker' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'animal_caretaker_header_button_text',
			'label'    => esc_html__( 'Add Button Text', 'animal-caretaker' ),
			'section'  => 'animal_caretaker_header_button_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'animal_caretaker_header_button_link',
			'label'    => esc_html__( 'Add Button Link', 'animal-caretaker' ),
			'section'  => 'animal_caretaker_header_button_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	/* Home Slider */

	new \Kirki\Section(
		'animal_caretaker_home_slider_section',
		[
			'title'       => esc_html__( 'Home Slider', 'animal-caretaker' ),
			'description' => esc_html__( 'Here you can add slider image, title and text.', 'animal-caretaker' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_slide_on_off',
			'label'       => esc_html__( 'Slider On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_home_slider_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'animal_caretaker_slide_count',
			'label'    => esc_html__( 'Slider Number Control', 'animal-caretaker' ),
			'section'  => 'animal_caretaker_home_slider_section',
			'default'  => '',
			'choices'  => [
				'min'  => 0,
				'max'  => 3,
				'step' => 1,
			],
		]
	);

	$slide_count = get_theme_mod('animal_caretaker_slide_count');

	for ($i=1; $i <= $slide_count; $i++) { 
		
		new \Kirki\Field\Image(
			[
				'settings'    => 'animal_caretaker_slider_image'.$i,
				'label'       => esc_html__( 'Slider Image 0', 'animal-caretaker' ).$i,
				'section'     => 'animal_caretaker_home_slider_section',
				'default'     => '',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'animal_caretaker_slider_heading'.$i,
				'label'    => esc_html__( 'Main Heading 0', 'animal-caretaker' ).$i,
				'section'  => 'animal_caretaker_home_slider_section',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'animal_caretaker_slider_button_text'.$i,
				'label'    => esc_html__( 'Button Text 0', 'animal-caretaker' ).$i,
				'section'  => 'animal_caretaker_home_slider_section',
			]
		);

		new \Kirki\Field\URL(
			[
				'settings' => 'animal_caretaker_slider_button_link'.$i,
				'label'    => esc_html__( 'Button Url 0', 'animal-caretaker' ).$i,
				'section'  => 'animal_caretaker_home_slider_section',
				'default'  => '',
			]
		);

	}

	/* Home Products */

	new \Kirki\Section(
		'animal_caretaker_home_product_section',
		[
			'title'       => esc_html__( 'Home Products', 'animal-caretaker' ),
			'description' => esc_html__( 'Here you can select product category to display products.', 'animal-caretaker' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_product_on_off',
			'label'       => esc_html__( 'Products On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_home_product_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'animal_caretaker_featured_product_heading',
			'label'    => esc_html__( 'Main Heading', 'animal-caretaker' ),
			'section'  => 'animal_caretaker_home_product_section',
		]
	);

	/* Footer */

	new \Kirki\Section(
		'animal_caretaker_footer_section',
		[
			'title'       => esc_html__( 'Footer', 'animal-caretaker' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_copyright_on_off',
			'label'       => esc_html__( 'Footer On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_footer_section',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'animal_caretaker_copyright_content_text',
			'label'    => esc_html__( 'Copyright Text', 'animal-caretaker' ),
			'section'  => 'animal_caretaker_footer_section',
		]
	);

}

function animal_caretaker_customizer_settings( $wp_customize ) {

	$animal_caretaker_args = array(
       'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );

	$categories = get_categories($animal_caretaker_args);
	$cat_posts = array();
	$m = 0;
	$cat_posts[]='Select';
	foreach($categories as $category){
		if($m==0){
			$default = $category->slug;
			$m++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('animal_caretaker_featured_product_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'animal_caretaker_sanitize_select',
	));

	$wp_customize->add_control('animal_caretaker_featured_product_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select category to display products ','animal-caretaker'),
		'section' => 'animal_caretaker_home_product_section',
	));

}

add_action( 'customize_register', 'animal_caretaker_customizer_settings' );