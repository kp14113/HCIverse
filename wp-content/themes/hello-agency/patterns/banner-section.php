<?php

/**
 * Title: Banner Section
 * Slug: hello-agency/banner-section
 * Categories: hello-agency
 */
$hello_agency_url = trailingslashit(get_template_directory_uri());
$hello_agency_images = array(
    $hello_agency_url . 'assets/images/arrow_icon.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"100px","bottom":"100px"}}},"className":"hello-agency-animate","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group hello-agency-animate" style="padding-top:100px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"style":{"typography":{"fontSize":"148px","textTransform":"uppercase","letterSpacing":"3.5px"}},"className":"hello-agency-text-stroke"} -->
    <h2 class="wp-block-heading hello-agency-text-stroke" style="font-size:148px;letter-spacing:3.5px;text-transform:uppercase"><?php echo esc_html('Always', 'hello-agency') ?></h2>
    <!-- /wp:heading -->

    <!-- wp:heading {"style":{"typography":{"fontSize":"148px","textTransform":"uppercase","letterSpacing":"3.5px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"right":"0","left":"0"}}},"textColor":"primary"} -->
    <h2 class="wp-block-heading has-primary-color has-text-color" style="margin-right:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:148px;font-style:normal;font-weight:700;letter-spacing:3.5px;text-transform:uppercase"><?php echo esc_html('Evolving', 'hello-agency') ?></h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"85px"}}}} -->
    <div class="wp-block-columns" style="margin-top:85px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","lineHeight":"1.7"}},"textColor":"heading-color","fontSize":"normal"} -->
            <p class="has-heading-color-color has-text-color has-normal-font-size" style="font-style:normal;font-weight:500;line-height:1.7;text-transform:uppercase"><?php echo esc_html('Crafting Exquisite Digital Experiences: The ultimate target for growth is always matters for business and agency.', 'hello-agency') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:image {"align":"right","id":144,"width":44,"height":44,"sizeSlug":"full","linkDestination":"custom"} -->
            <figure class="wp-block-image alignright size-full is-resized"><a href="#hello-agency-content"><img src="<?php echo esc_url($hello_agency_images[0]) ?>" alt="" class="wp-image-144" style="width:44px;height:44px" width="44" height="44" /></a></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div id="hello-agency-content" class="wp-block-group"></div>
<!-- /wp:group -->