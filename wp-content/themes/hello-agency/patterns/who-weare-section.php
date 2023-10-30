<?php

/**
 * Title: Who We Are Section
 * Slug: hello-agency/who-weare-section
 * Categories: hello-agency
 */
$hello_agency_url = trailingslashit(get_template_directory_uri());
$hello_agency_images = array(
    $hello_agency_url . 'assets/images/about_image_1.jpg',
    $hello_agency_url . 'assets/images/about_image_2.jpg',
    $hello_agency_url . 'assets/images/read_more_texts.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"className":"hello-agency-animate","layout":{"type":"constrained","contentSize":"1045px"}} -->
<div class="wp-block-group hello-agency-animate" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:image {"id":157,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($hello_agency_images[0]) ?>" alt="" class="wp-image-157" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:image {"id":158,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($hello_agency_images[1]) ?>" alt="" class="wp-image-158" /></figure>
            <!-- /wp:image -->

            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
                <div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"style":{"typography":{"fontSize":"110px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"className":"hello-agency-text-stroke"} -->
                    <h2 class="wp-block-heading hello-agency-text-stroke" style="font-size:110px;font-style:normal;font-weight:700;text-transform:uppercase"><?php echo esc_html('Who', 'hello-agency') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"style":{"typography":{"fontSize":"110px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}}} -->
                    <h2 class="wp-block-heading" style="font-size:110px;font-style:normal;font-weight:700;text-transform:uppercase"><?php echo esc_html('We', 'hello-agency') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"style":{"typography":{"fontSize":"110px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"className":"hello-agency-text-stroke"} -->
                    <h2 class="wp-block-heading hello-agency-text-stroke" style="font-size:110px;font-style:normal;font-weight:700;text-transform:uppercase"><?php echo esc_html('Are', 'hello-agency') ?></h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":162,"height":140,"sizeSlug":"full","linkDestination":"custom","className":"hello-agency-rotator"} -->
                    <figure class="wp-block-image aligncenter size-full is-resized hello-agency-rotator"><a href="#"><img src="<?php echo esc_url($hello_agency_images[2]) ?>" alt="" class="wp-image-162" style="height:140px" height="140" /></a></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->