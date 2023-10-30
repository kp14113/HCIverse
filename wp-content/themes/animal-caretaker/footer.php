<!-- Start: Footer Sidebar
============================= -->
<?php if ( is_active_sidebar( 'footer-widget-area' ) ) { ?>
	<footer id="footer-widgets" class="footer-sidebar footer_bg">
		<div class="footer-widgets">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'footer-widget-area' ); ?>
				</div>
			</div>
		</div>
	</footer>
<?php } ?>
<!-- End: Footer Sidebar
============================= -->
<?php 
	$animal_caretaker_copyright_on_off = get_theme_mod('animal_caretaker_copyright_on_off','1');	
	$animal_caretaker_copyright_content   = get_theme_mod('copyright_content','[site_title] | Powered by [theme_author]');
	$animal_caretaker_copyright_content_text   = get_theme_mod('animal_caretaker_copyright_content_text','Animal Caretaker WordPress Theme');
?>

<section id="footer-copyright">
	<div class="container">
		<div class="text-center">
			<?php if ( true == get_theme_mod( 'animal_caretaker_copyright_on_off', 'on' ) ) : ?>
				<p class="mb-0">
					 <?php 
						$animal_caretaker_copyright_allowed_tags = array(
							'[current_year]' => date_i18n('Y'),
							'[site_title]'   => ''.$animal_caretaker_copyright_content_text.'',
							'[theme_author]' => sprintf(__('<a href="https://wordpress.org/" target="_blank">WordPress.org</a>', 'animal-caretaker')),
						);
						echo apply_filters('animal_caretaker_footer_copyright', wp_kses_post(animal_caretaker_str_replace_assoc($animal_caretaker_copyright_allowed_tags, $animal_caretaker_copyright_content)));
					?>
				</p>
			<?php endif; ?>
			<?php if ( true == get_theme_mod( 'animal_caretaker_scroll_to_top_setting', 'off' ) ) : ?>
				<a href="#" class="scrollup"><i class="fa fa-arrow-up"></i></a>
			<?php endif; ?>
		</div>
	</div>
</section>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>