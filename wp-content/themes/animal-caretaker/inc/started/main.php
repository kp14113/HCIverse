<?php

add_action( 'admin_menu', 'animal_caretaker_getting_started' );
function animal_caretaker_getting_started() {
	add_theme_page( esc_html__('Theme Info', 'animal-caretaker'), esc_html__('Theme Info', 'animal-caretaker'), 'edit_theme_options', 'animal-caretaker-guide-page', 'animal_caretaker_test_guide', 1);
}

if ( ! defined( 'ANIMAL_CARETAKER_DOCS_FREE' ) ) {
define('ANIMAL_CARETAKER_DOCS_FREE',__('https://mishkatwp.com/instruction/animal-caretaker-free-docs/','animal-caretaker'));
}
if ( ! defined( 'ANIMAL_CARETAKER_DOCS_PRO' ) ) {
define('ANIMAL_CARETAKER_DOCS_PRO',__('https://mishkatwp.com/instruction/animal-caretaker-pro-docs/','animal-caretaker'));
}
if ( ! defined( 'ANIMAL_CARETAKER_BUY_NOW' ) ) {
define('ANIMAL_CARETAKER_BUY_NOW',__('https://www.mishkatwp.com/themes/animal-caretaker-wordpress-theme/','animal-caretaker'));
}
if ( ! defined( 'ANIMAL_CARETAKER_SUPPORT_FREE' ) ) {
define('ANIMAL_CARETAKER_SUPPORT_FREE',__('https://wordpress.org/support/theme/animal-caretaker','animal-caretaker'));
}
if ( ! defined( 'ANIMAL_CARETAKER_REVIEW_FREE' ) ) {
define('ANIMAL_CARETAKER_REVIEW_FREE',__('https://wordpress.org/support/theme/animal-caretaker/reviews/#new-post','animal-caretaker'));
}
if ( ! defined( 'ANIMAL_CARETAKER_DEMO_PRO' ) ) {
define('ANIMAL_CARETAKER_DEMO_PRO',__('https://mishkatwp.com/pro/animal-caretaker/','animal-caretaker'));
}

function animal_caretaker_test_guide() { ?>
	<?php $animal_caretaker_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="righty">
			<div class="postbox donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'animal-caretaker' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','animal-caretaker'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( ANIMAL_CARETAKER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'animal-caretaker' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( ANIMAL_CARETAKER_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'animal-caretaker' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( ANIMAL_CARETAKER_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'animal-caretaker' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','animal-caretaker'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','animal-caretaker'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','animal-caretaker'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','animal-caretaker'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('LearnPress Campatiblity','animal-caretaker'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','animal-caretaker'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','animal-caretaker'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','animal-caretaker'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','animal-caretaker'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','animal-caretaker'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','animal-caretaker'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','animal-caretaker'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','animal-caretaker'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','animal-caretaker'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','animal-caretaker'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','animal-caretaker'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
				</div>
				<div id="admin_links">
					<a href="<?php echo esc_url( ANIMAL_CARETAKER_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'animal-caretaker' ) ?></a>
					<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'animal-caretaker' ); ?> </a>
				</div>
				<div id="admin_links">
					<a class="blue-button-2" href="<?php echo esc_url( ANIMAL_CARETAKER_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'animal-caretaker' ) ?></a>
					<a href="<?php echo esc_url( ANIMAL_CARETAKER_REVIEW_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Review', 'animal-caretaker' ) ?></a>
				</div>
		</div>
		<div id="lefty">
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','animal-caretaker'); ?><?php echo esc_html( $animal_caretaker_theme ); ?>  <span><?php esc_html_e('Version: ', 'animal-caretaker'); ?><?php echo esc_html($animal_caretaker_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $animal_caretaker_theme->get_screenshot() ); ?>" />
				<div id="description-inside">
					<?php
						$animal_caretaker_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'theme_description', esc_html( $animal_caretaker_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
