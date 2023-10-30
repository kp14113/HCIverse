<?php
function animal_caretaker_premium_setting( $wp_customize ) {
	
	/*=========================================
	Page Layout Settings Section
	=========================================*/
	$wp_customize->add_section(
        'upgrade_premium',
        array(
            'title' 		=> __('Upgrade to Pro','animal-caretaker'),
			'priority'      => 1,
		)
    );
	
	/*=========================================
	Add Buttons
	=========================================*/
	
	class Animal_Caretaker_WP_Button_Customize_Control extends WP_Customize_Control {
	public $type = 'upgrade_premium';

	   function render_content() {
		?>
			<div class="premium_info">
				<ul>
					<li><a class="upgrade-to-pro" href="https://www.mishkatwp.com/themes/animal-caretaker-wordpress-theme/" target="_blank"><?php esc_html_e( 'Upgrade to Pro','animal-caretaker' ); ?> </a></li>
				</ul>
			</div>
		<?php
	   }
	}
	
	$wp_customize->add_setting('premium_info_buttons', array(
	   'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'animal_caretaker_sanitize_text',
	));
		
	$wp_customize->add_control( new Animal_Caretaker_WP_Button_Customize_Control( $wp_customize, 'premium_info_buttons', array(
		'section' => 'upgrade_premium',
    ))
);
}
add_action( 'customize_register', 'animal_caretaker_premium_setting' );