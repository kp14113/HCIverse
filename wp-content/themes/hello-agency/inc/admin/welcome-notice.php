<?php

/**
 * file for holding dashboard welcome page for theme
 */
if (!function_exists('hello_agency_is_plugin_installed')) {
    function hello_agency_is_plugin_installed($plugin_slug)
    {
        $plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
        return file_exists($plugin_path);
    }
}
if (!function_exists('hello_agency_is_plugin_activated')) {
    function hello_agency_is_plugin_activated($plugin_slug)
    {
        return is_plugin_active($plugin_slug);
    }
}
if (!function_exists('hello_agency_welcome_notice')) :
    function hello_agency_welcome_notice()
    {
        global $pagenow;
        $meta            = get_option('hello-agency-welcome-notice-update');
        $current_screen  = get_current_screen();

        if (is_admin() && !$meta) {
            if ($current_screen->id !== 'dashboard' && $current_screen->id !== 'themes') {
                return;
            }
            if (is_network_admin()) {
                return;
            }
            if (!current_user_can('manage_options')) {
                return;
            }
            $theme = wp_get_theme();

            if (is_child_theme()) {
                $theme = wp_get_theme()->parent();
            }
            $hello_agency_version = $theme->get('Version');


?>
            <div class="hello-agency-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice">
                <div class="info-content">
                    <h5><span class="theme-name"><span><?php echo __('Welcome to Hello Agency', 'hello-agency'); ?></span></h5>
                    <h1><?php echo __('Powerup your website and experience the limitless customization with Hello Agency.', 'hello-agency'); ?></h1>
                    </h3>
                    <p class="notice-text"><?php echo __('Please install and activate all recommended pluign to import the demo with "one click demo import" feature.', 'hello-agency') ?></p>
                    <h3><?php echo __('Required Plugins', 'hello-agency'); ?></h3>
                    <ul class="hello-agency-required-plugin">
                        <li>

                            <h4><?php echo __('1. Cozy Addons', 'hello-agency'); ?>
                                <?php
                                if (hello_agency_is_plugin_activated('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'hello-agency');
                                } elseif (hello_agency_is_plugin_installed('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'hello-agency');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'hello-agency') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>

                            <h4><?php echo __('2. Cozy Essential Addons', 'hello-agency'); ?>
                                <?php
                                if (hello_agency_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'hello-agency');
                                } elseif (hello_agency_is_plugin_installed('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'hello-agency');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-essential-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'hello-agency') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>
                            <h4><?php echo __('3. Advanced Import - Need only to use "one click demo import" features', 'hello-agency'); ?>
                                <?php
                                if (hello_agency_is_plugin_activated('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin has been already activated!', 'hello-agency');
                                } elseif (hello_agency_is_plugin_installed('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import feature.', 'hello-agency');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=advanced-import&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'hello-agency') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>

                    </ul>
                    <a href="<?php echo admin_url(); ?>themes.php?page=about-hello-agency" class="button admin-button info-button"><?php echo __('Explore Hello Agency', 'hello-agency'); ?></a>
                    <a href="<?php echo admin_url(); ?>themes.php?hello-agency-welcome-notice-update=true" class="admin-button dismiss-notice btn-notice-dismiss"><?php echo __('Dismiss Notice', 'hello-agency'); ?></a>

                </div>
                <div class="theme-hero-screens">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/style_patterns.png'); ?>" />
                </div>

            </div>
    <?php
        }
    }
endif;
add_action('admin_notices', 'hello_agency_welcome_notice');

if (!function_exists('hello_agency_ignore_admin_notice')) :
    function hello_agency_ignore_admin_notice()
    {
        if (isset($_GET['hello-agency-welcome-notice-update']) && $_GET['hello-agency-welcome-notice-update'] = 'true') {
            update_option('hello-agency-welcome-notice-update', true);
        }
    }
endif;
add_action('admin_init', 'hello_agency_ignore_admin_notice');


function hello_agency_dashboard_menu()
{
    add_theme_page(esc_html__('Hello Agency', 'hello-agency'), esc_html__('Hello Agency', 'hello-agency'), 'edit_theme_options', 'about-hello-agency', 'hello_agency_theme_info_display');
}
add_action('admin_menu', 'hello_agency_dashboard_menu');
function hello_agency_theme_info_display()
{ ?>
    <div class="dashboard-about-hello-agency">
        <h1> <?php echo __('Welcome to the Hello Agency - FSE WordPress Theme', 'hello-agency') ?></h1>
        <p><?php echo __('Hello Agency is the multipurpose FSE theme which provides more than 20 home sections patterns which is ready to build any type of functional website. With its minimal, clean design and powerful feature set, Hello Agency enables power to build any kinds of website and provides a wide range of valuable patterns, including hero/banner, about us, portfolio/project, call-to-action buttons, and customer testimonials, teams and more. Hello Agency is suitable for any niches whether  for your business, personal brand, or creative project or blogs and comes with more than 40+ beautiful premium patterns. Explore more about Hello Agency at https://cozythemes.com/hello-agency/.', 'hello-agency') ?></p>

        <h3 class="hello-agency-baisc-guideline-header"><?php echo __('Basic Theme Setup', 'hello-agency') ?></h3>
        <div class="hello-agency-baisc-guideline">
            <div class="featured-box">
                <ul>
                    <li><strong><?php echo __('Setup Header Layout:', 'hello-agency') ?></strong>
                        <ul>
                            <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Header:', 'hello-agency') ?></li>
                            <li> - <?php echo __('click on Header > Click on Edit (Icon) -> Add or Remove Requirend block/content as your requirement.:', 'hello-agency') ?></li>
                            <li> - <?php echo __('Click on save to update your layout', 'hello-agency') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="featured-box">
                <ul>
                    <li><strong><?php echo __('Setup Footer Layout:', 'hello-agency') ?></strong>
                        <ul>
                            <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Footer:', 'hello-agency') ?></li>
                            <li> - <?php echo __('click on Footer > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'hello-agency') ?></li>
                            <li> - <?php echo __('Click on save to update your layout', 'hello-agency') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="featured-box">
                <ul>
                    <li><strong><?php echo __('Setup Templates like Homepage/404/Search/Page/Single and more templates Layout:', 'hello-agency') ?></strong>
                        <ul>
                            <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'hello-agency') ?></li>
                            <li> - <?php echo __('click on Template(You need to edit/update) > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'hello-agency') ?></li>
                            <li> - <?php echo __('Click on save to update your layout', 'hello-agency') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="featured-box">
                <ul>
                    <li><strong><?php echo __('Restore/Reset Default Content layout of Template(Like: Frontpage/Blog/Archive etc.)', 'hello-agency') ?></strong>
                        <ul>
                            <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'hello-agency') ?></li>
                            <li> - <?php echo __('Click on Manage all Templates', 'hello-agency') ?></li>
                            <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template', 'hello-agency') ?></li>
                            <li> - <?php echo __('Click on Clear Customization', 'hello-agency') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="featured-box">
                <ul>
                    <li><strong><?php echo __('Restore/Reset Default Content layout of Template Parts(Header/Footer/Sidebar)', 'hello-agency') ?></strong>
                        <ul>
                            <li> - <?php echo __('Go to Appearance -> Editor -> Patterns:', 'hello-agency') ?></li>
                            <li> - <?php echo __('Click on Manage All Template Parts', 'hello-agency') ?></li>
                            <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template parts', 'hello-agency') ?></li>
                            <li> - <?php echo __('Click on Clear Customization', 'hello-agency') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <h3><?php echo __('Required Plugins', 'hello-agency'); ?></h3>
        <p class="notice-text"><?php echo __('Please install and activate all recommended pluign to import the demo with "one click demo import" feature and unlock premium features!(for pro version)', 'hello-agency') ?></p>
        <ul class="hello-agency-required-plugin">
            <li>

                <h4><?php echo __('1. Cozy Addons', 'hello-agency'); ?>
                    <?php
                    if (hello_agency_is_plugin_activated('cozy-addons/cozy-addons.php')) {
                        echo __(': Plugin has been already activated!', 'hello-agency');
                    } elseif (hello_agency_is_plugin_installed('cozy-addons/cozy-addons.php')) {
                        echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'hello-agency');
                    } else {
                        echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'hello-agency') . '</a>';
                    }
                    ?>
                </h4>
            </li>
            <li>

                <h4><?php echo __('2. Cozy Essential Addons', 'hello-agency'); ?>
                    <?php
                    if (hello_agency_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php')) {
                        echo __(': Plugin has been already activated!', 'hello-agency');
                    } elseif (hello_agency_is_plugin_installed('cozy-essential-addons/cozy-essential-addons.php')) {
                        echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'hello-agency');
                    } else {
                        echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-essential-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'hello-agency') . '</a>';
                    }
                    ?>
                </h4>
            </li>
            <li>
                <h4><?php echo __('3. Advanced Import - Need only to use "one click demo import" features', 'hello-agency'); ?>
                    <?php
                    if (hello_agency_is_plugin_activated('advanced-import/advanced-import.php')) {
                        echo __(': Plugin has been already activated!', 'hello-agency');
                    } elseif (hello_agency_is_plugin_installed('advanced-import/advanced-import.php')) {
                        echo __(': Plugin does not activated, Activate the plugin to use one click demo import feature.', 'hello-agency');
                    } else {
                        echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=advanced-import&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'hello-agency') . '</a>';
                    }
                    ?>
                </h4>
            </li>
        </ul>
        <div class="featured-list">
            <div class="half-col free-features">
                <h3><?php echo __('Hello Agency Features (Free)', 'hello-agency') ?></h3>
                <ul>
                    <li><strong> - <?php echo __('Offer 20+ ready to use Home Sections Patterns', 'hello-agency') ?></strong>
                        <ul>
                            <li> <?php echo __('Banner/Hero section pattern - 2', 'hello-agency') ?></li>
                            <li> <?php echo __('Who We Are Section Pattern', 'hello-agency') ?></li>
                            <li> <?php echo __('About section pattern', 'hello-agency') ?></li>
                            <li> <?php echo __('Brands Logo section pattern', 'hello-agency') ?></li>
                            <li> <?php echo __('Call to Action section pattern', 'hello-agency') ?></li>
                            <li> <?php echo __('FAQ section pattern', 'hello-agency') ?></li>
                            <li> <?php echo __('How It Works section pattern', 'hello-agency') ?></li>
                            <li> <?php echo __('Latest posts section pattern', 'hello-agency') ?></li>
                            <li> <?php echo __('Mision and solutions content tabs section pattern', 'hello-agency') ?></li>
                            <li> <?php echo __('Newsletter section pattern', 'hello-agency') ?></li>
                            <li> <?php echo __('Our Works section pattern', 'hello-agency') ?></li>
                            <li> <?php echo __('Pricing Table section pattern', 'hello-agency') ?></li>
                            <li> <?php echo __('Service section pattern', 'hello-agency') ?></li>
                            <li> <?php echo __('Stats Counter section pattern', 'hello-agency') ?></li>
                            <li> <?php echo __('Team section pattern - 2', 'hello-agency') ?></li>
                            <li> <?php echo __('Testimonial section pattern', 'hello-agency') ?></li>
                            <li> <?php echo __('Featured Products section pattern', 'hello-agency') ?></li>
                        </ul>
                    </li>

                    <li> <strong>- <?php echo __('15+ FSE Templates Ready', 'hello-agency') ?></strong>
                        <ul>
                            <li> <?php echo __('404 Template', 'hello-agency') ?></li>
                            <li> <?php echo __('Archive Template', 'hello-agency') ?></li>
                            <li> <?php echo __('Blank Template', 'hello-agency') ?></li>
                            <li> <?php echo __('Front Page Template', 'hello-agency') ?></li>
                            <li> <?php echo __('Blog Home Template', 'hello-agency') ?></li>
                            <li> <?php echo __('Index Page Template', 'hello-agency') ?></li>
                            <li> <?php echo __('Search Template', 'hello-agency') ?></li>
                            <li> <?php echo __('Sitemap Template', 'hello-agency') ?></li>
                            <li> <?php echo __('Page Template', 'hello-agency') ?></li>
                            <li> <?php echo __('Left Sidebar Page Template', 'hello-agency') ?></li>
                            <li> <?php echo __('Right sidebar page  Template', 'hello-agency') ?></li>
                            <li> <?php echo __('Single Template', 'hello-agency') ?></li>
                            <li> <?php echo __('Left Sidebar Single Template', 'hello-agency') ?></li>
                            <li> <?php echo __('Right Sidebar Single Template', 'hello-agency') ?></li>
                            <li> <?php echo __('Product Archive Template', 'hello-agency') ?></li>
                            <li> <?php echo __('Single Product Template', 'hello-agency') ?></li>

                        </ul>
                    <li>
                    <li><strong> - <?php echo __('Header Layout', 'hello-agency') ?></strong></li>
                    <li> <strong>- <?php echo __('Footer Layout', 'hello-agency') ?></strong></li>
                    <li><strong> - <?php echo __('12+ Beautiful Fonts Option', 'hello-agency') ?></strong></li>
                    <li> <strong>- <?php echo __('8 Styles Variations', 'hello-agency') ?></strong></li>
                </ul>
            </div>
            <div class="half-col pro-features">
                <h3><?php echo __('Premium Features', 'hello-agency') ?></h3>
                <ul>
                    <li><?php echo __('Including all free features and comes with more 40+ Premium patterns (total 60+ patterns)', 'hello-agency') ?></strong></li>
                    <li><?php echo __('Header Layout - 8', 'hello-agency') ?></li>
                    <li><?php echo __('Footer Layout- 4', 'hello-agency') ?></li>
                    <li><?php echo __('Banner Layout', 'hello-agency') ?></li>
                    <li><?php echo __('Logo Branding Section ', 'hello-agency') ?></li>
                    <li><?php echo __('Featured Product Layout', 'hello-agency') ?></li>
                    <li><?php echo __('About Us Layout - 4 ', 'hello-agency') ?></li>
                    <li><?php echo __('Testimonials Layout - 2', 'hello-agency') ?></li>
                    <li><?php echo __('Teams Layout-2', 'hello-agency') ?></li>
                    <li><?php echo __('FAQ Layout Patterns', 'hello-agency') ?></li>
                    <li><?php echo __('Featured Services Layout- 4', 'hello-agency') ?></li>
                    <li><?php echo __('Price List Section', 'hello-agency') ?></li>
                    <li><?php echo __('Pricing Table Layout', 'hello-agency') ?></li>
                    <li><?php echo __('About Layout Patterns', 'hello-agency') ?></li>
                    <li><?php echo __('Features List Layout', 'hello-agency') ?></li>
                    <li><?php echo __('Call to Action Layout', 'hello-agency') ?></li>
                    <li><?php echo __('How it Works Layout', 'hello-agency') ?></li>
                    <li><?php echo __('Portfolio Layout', 'hello-agency') ?></li>
                    <li><?php echo __('Latest Projects Layout', 'hello-agency') ?></li>
                    <li><?php echo __('Our Story and Mission Section', 'hello-agency') ?></li>
                    <li><?php echo __('Latest Post Section - 2', 'hello-agency') ?></li>
                    <li><?php echo __('Stas Counter with Description Text', 'hello-agency') ?></li>
                    <li><?php echo __('Products Layout Sections - 4', 'hello-agency') ?></li>
                </ul>
                <a href="https://cozythemes.com/pricing-and-plans/" class="upgrade-btn button" target="_blank"><?php echo __('Upgrade to Pro', 'hello-agency') ?></a>
            </div>
        </div>
    </div>
<?php
}
