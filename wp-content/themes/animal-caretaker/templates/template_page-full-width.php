<?php
/**
Template Name: Page Fullwidth
**/

get_header();
?>

<section id="site-content" class="section-padding-80">
	<div class="container">
		<div class="site-content">
			<?php the_post(); the_content(); ?>
		</div>
		 <?php 
			if( $post->comment_status == 'open' ) { 
				comments_template( '', true ); // show comments 
			}
		?>
	</div>
</section>

<?php get_footer(); ?>