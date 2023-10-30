<?php

namespace SuperbThemesThemeInformationContent\ThemePage;

defined("ABSPATH") || exit();

class ThemePageTemplate
{
    private $Theme;
    private $ParentName;
    private $ThemeName;
    private $PremiumText;

    private $Features;
    private $ThemeLink;
    private $DemoLink;

    public function __construct($data)
    {
        $this->Theme = wp_get_theme();
        $this->ParentName = is_child_theme() ? wp_get_theme($this->Theme->Template) : '';
        $this->ThemeName = is_child_theme() ? sprintf(__("%s and %s", 'sonoran'), $this->Theme, $this->ParentName) : $this->Theme;
        $this->PremiumText = is_child_theme() ? sprintf(__("Unlock all features by upgrading to the premium edition of %s and its parent theme %s.", 'sonoran'), $this->Theme, $this->ParentName) : sprintf(__("Unlock all features by upgrading to the premium edition of %s.", 'sonoran'), $this->Theme);
        $this->ThemeLink = $data['theme_url'];
        $this->DemoLink = $data['demo_url'];
        $base_features = array(
            array(
                'title' => __("Get free traffic", "sonoran"), 'base' => true, 'icon' => "icon-loop.png", 'description' => __("Get free traffic by ranking #1 on Google with our lightning-fast & SEO-optimized products.", "sonoran")
            ),
            array(
                'title' => __("WordPress sections", "sonoran"), 'base' => true, 'icon' => "img-2.png", 'description' => __("Browse and insert the 400+ ready-to-use WordPress sections with just one click", "sonoran")
            ),
            array(
                'title' => __("WordPress themes", "sonoran"), 'base' => true, 'icon' => "icon-browser.png", 'description' => __("Gain access to our library of 50+ WordPress themes and 180+ child themes.", "sonoran")
            ),
            array(
                'title' => __("WordPress blocks", "sonoran"), 'base' => true, 'icon' => "stack-duotone.png", 'description' => __("Use our many custom WordPress Gutenberg blocks for every purpose!", "sonoran")
            ),
            array(
                'title' => __("WordPress patterns", "sonoran"), 'base' => true, 'icon' => "grid-nine-duotone.png", 'description' => __("Take advantage of the 400+ beautiful patterns for every type of website.", "sonoran")
            ),
            array(
                'title' => __("Elementor sections", "sonoran"), 'base' => true, 'icon' => "img-1.png", 'description' => __("Access 300+ pre-built elementor sections and build beautiful sites, fast.", "sonoran")
            ),
            array(
                'title' => __("Elementor Elements", "sonoran"), 'base' => true, 'icon' => "puzzle-piece-duotone.png", 'description' => __("Unlock our many Elementor Elements to supercharge Elementor functionality.", "sonoran")
            ),
            array(
                'title' => __("Responsive design", "sonoran"), 'base' => true, 'icon' => "icon-mobile.png", 'description' => __("Everything included is responsive and looks perfect on all devices.", "sonoran")
            )
        );
        $this->Features = $data['features'] ? array_merge($base_features, $data['features']) : $base_features;

        $this->Render();
    }

    private function Render()
    {
?>
        <div class="wrap">
            <div class="spt-theme-settings-wrapper">
                <div class="spt-theme-settings-wrapper-main-content">

                    <div class="spt-theme-settings-wrapper-main-content-section">
                        <div class="spt-theme-settings-wrapper-main-content-section-top">
                            <span class="spt-theme-settings-headline"><?php esc_html_e("Customize Settings", 'sonoran'); ?></span>
                            <a class="spt-theme-settings-headline-link" href="<?php echo esc_url(admin_url('site-editor.php'))  ?>"><?php esc_html_e("Go To Site Editor", 'sonoran'); ?></a>
                        </div>

                        <div class="spt-theme-settings-content">

                            <div class="spt-theme-settings-content-getting-started-wrapper">
                                <div class="spt-theme-settings-content-item">
                                    <div class="spt-theme-settings-content-item-header">
                                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/list-bullets.svg'); ?>" />
                                        <div class="spt-theme-settings-content-item-headline">
                                            <?php esc_html_e("Add Menus", 'sonoran'); ?>
                                        </div>
                                        <p><?php esc_html_e("Add a navigation to your website to improve the user experience.", 'sonoran'); ?></p>
                                    </div>
                                    <div class="spt-theme-settings-content-item-content">
                                        <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('site-editor.php'))  ?>"><?php esc_html_e("Go To Site Editor", 'sonoran'); ?></a>
                                    </div>
                                </div>

                                <div class="spt-theme-settings-content-item">
                                    <div class="spt-theme-settings-content-item-header">
                                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/squares-four.svg'); ?>" />
                                        <div class="spt-theme-settings-content-item-headline">
                                            <?php esc_html_e("Edit Front Page", 'sonoran'); ?>
                                        </div>
                                        <p><?php esc_html_e("Edit and customize your front page design through the site editor.", 'sonoran'); ?></p>
                                    </div>
                                    <div class="spt-theme-settings-content-item-content">
                                        <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('site-editor.php'))  ?>"><?php esc_html_e("Go To Site Editor", 'sonoran'); ?></a>
                                    </div>
                                </div>

                                <div class="spt-theme-settings-content-item">
                                    <div class="spt-theme-settings-content-item-header">
                                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/paint-brush.svg'); ?>" />
                                        <div class="spt-theme-settings-content-item-headline">
                                            <?php esc_html_e("Customize Design", 'sonoran'); ?>
                                        </div>
                                        <p><?php esc_html_e("Customize your website design to fit your personality or brand.", 'sonoran'); ?></p>
                                    </div>
                                    <div class="spt-theme-settings-content-item-content">
                                        <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('site-editor.php'))  ?>"><?php esc_html_e("Go To Site Editor", 'sonoran'); ?></a>
                                    </div>
                                </div>

                                <div class="spt-theme-settings-content-item">
                                    <div class="spt-theme-settings-content-item-header">
                                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/text-a-underline.svg'); ?>" />
                                        <div class="spt-theme-settings-content-item-headline">
                                            <?php esc_html_e("Change Site Title", 'sonoran'); ?>
                                        </div>
                                        <p><?php esc_html_e("Add your website name and tagline to improve the design and SEO.", 'sonoran'); ?></p>
                                    </div>
                                    <div class="spt-theme-settings-content-item-content">
                                        <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('site-editor.php'))  ?>"><?php esc_html_e("Go To Site Editor", 'sonoran'); ?></a>
                                    </div>
                                </div>

                                <div class="spt-theme-settings-content-item">
                                    <div class="spt-theme-settings-content-item-header">
                                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/image.svg'); ?>" />
                                        <div class="spt-theme-settings-content-item-headline">
                                            <?php esc_html_e("Upload Logo", 'sonoran'); ?>
                                        </div>
                                        <p><?php esc_html_e("Add a custom logo to make your website look more professional.", 'sonoran'); ?></p>
                                    </div>
                                    <div class="spt-theme-settings-content-item-content">
                                        <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('site-editor.php'))  ?>"><?php esc_html_e("Go To Site Editor", 'sonoran'); ?></a>
                                    </div>
                                </div>

                                <div class="spt-theme-settings-content-item">
                                    <div class="spt-theme-settings-content-item-header">
                                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/file.svg'); ?>" />
                                        <div class="spt-theme-settings-content-item-headline">
                                            <?php esc_html_e("Create New Pages", 'sonoran'); ?>
                                        </div>
                                        <p><?php esc_html_e("Start creating your website by adding pages to it.", 'sonoran'); ?></p>
                                    </div>
                                    <div class="spt-theme-settings-content-item-content">
                                        <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('edit.php?post_type=page')) ?>"><?php esc_html_e("Create a new page", 'sonoran'); ?></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="spt-theme-settings-wrapper-main-content-section">
                        <div class="spt-theme-settings-wrapper-main-content-section-top">
                            <span class="spt-theme-settings-headline"><?php esc_html_e("Premium Features", 'sonoran'); ?></span>
                            <a class="spt-theme-settings-headline-link" href="<?php echo esc_url($this->ThemeLink); ?>"><?php esc_html_e("Unlock All Features", 'sonoran'); ?></a>
                        </div>
                        <p class="spt-theme-settings-wrapper-main-content-section-top-description">
                            <?php esc_html_e("Create a beautiful website easily, without coding.", 'sonoran'); ?>
                        </p>

                        <div class="spt-theme-settings-content spt-theme-settings-content-us">
                            <?php
                            foreach ($this->Features as $feature) :
                            ?>
                                <a target="_blank" href="<?php echo esc_url($this->ThemeLink); ?>" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
                                    <span class="spt-theme-settings-content-item-unavailable-premium"><?php echo esc_html__("Premium", 'sonoran'); ?></span>
                                    <div class="spt-theme-settings-content-item-header">
                                        <div>
                                            <img height="32" width="32" src="<?php echo esc_url(get_template_directory_uri() . (isset($feature['base']) ? '/inc/superbthemes-info-content/icons/' : '/inc/superbthemes-info-assets/') . $feature["icon"]); ?>" />
                                        </div>
                                        <span class="spt-theme-settings-content-us-title"><?php echo esc_html($feature["title"]); ?></span></span>
                                        <?php if (isset($feature['description'])) : ?>
                                            <p><?php echo esc_html($feature['description']); ?></p>
                                        <?php else : ?>
                                            <p><?php echo esc_html(sprintf(__("With %s Premium you'll have full access to this feature as well as all the other features listed.", 'sonoran'), $this->ThemeName)); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="spt-theme-settings-content-item-content">
                                        <span class="spt-theme-settings-content-us-button-link"><?php esc_html_e("Get Premium Version", 'sonoran'); ?></span>
                                    </div>
                                </a>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>

                <div class="spt-theme-settings-wrapper-sidebar">
                    <div class="spt-theme-settings-wrapper-sidebar-item">
                        <div class="spt-theme-settings-wrapper-sidebar-item-content">
                            <img class="spt-theme-settings-wrapper-sidebar-item-content-demo-image" src="<?php echo esc_url(get_template_directory_uri() . '/screenshot.png'); ?>" alt="<?php echo esc_attr($this->ThemeName); ?> Preview" />
                            <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("View Demo", 'sonoran'); ?></div>
                            <p><?php echo esc_html__("Need inspiration? Take a moment to view our theme demo!", 'sonoran') ?></p>
                            <a href="<?php echo esc_url($this->DemoLink); ?>" target="_blank" class="button"><?php esc_html_e("View Demo", 'sonoran'); ?></a>
                        </div>
                    </div>

                    <div class="spt-theme-settings-wrapper-sidebar-item">
                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/color-crown.svg'); ?>" />
                        <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Upgrade to premium", 'sonoran'); ?></div>
                        <div class="spt-theme-settings-wrapper-sidebar-item-content">
                            <p><?php echo esc_html($this->PremiumText); ?></p>
                            <a href="<?php echo esc_url($this->ThemeLink); ?>" target="_blank" class="button button-primary"><?php esc_html_e("View Premium Version", 'sonoran'); ?></a>
                        </div>
                    </div>

                    <div class="spt-theme-settings-wrapper-sidebar-item">
                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/chats.svg'); ?>" />
                        <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Contact support", 'sonoran'); ?></div>
                        <div class="spt-theme-settings-wrapper-sidebar-item-content">
                            <p><?php echo esc_html(sprintf(__("If you have issues with %s, please send us an email through our website!", 'sonoran'), $this->Theme)); ?></p>
                            <a href="https://superbthemes.com/customer-support/" target="_blank" class="button"><?php esc_html_e("Contact Support", 'sonoran'); ?></a>
                        </div>
                    </div>

                    <div class="spt-theme-settings-wrapper-sidebar-item">
                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/shooting-star.svg'); ?>" />
                        <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Give us feedback", 'sonoran'); ?></div>
                        <div class="spt-theme-settings-wrapper-sidebar-item-content">
                            <p><?php echo esc_html(sprintf(__("Do you enjoy using %s? Support us by reviewing us on WordPress.org!", 'sonoran'), $this->Theme)); ?></p>
                            <a href="https://wordpress.org/support/theme/<?php echo esc_attr(get_stylesheet()); ?>/reviews/#new-post" target="_blank" class="button"><?php esc_html_e("Leave a Review", 'sonoran'); ?></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
<?php
    }
}
