<?php

defined( 'ABSPATH' ) or die( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

function seopress_admin_header() { ?>
    <div id="seopress-header">
    	<div id="seopress-admin">
            <div id="seopress-navbar">
                <h1>
                    <a href="<?php echo admin_url( 'admin.php?page=seopress-option' ); ?>">
                        <span class="screen-reader-text"><?php _e( 'SEOPress', 'wp-seopress' ); ?></span>
                        <?php if ( is_plugin_active( 'wp-seopress-pro/seopress-pro.php' ) ) { ?>
                            <span class="seopress-info-version">
                                <strong>
                                    <?php _e('PRO', 'wp-seopress'); ?>
                                    <?php echo SEOPRESS_VERSION; ?>
                                </strong>
                            </span>
                        <?php } else { ?>
                            <span class="seopress-info-version"><?php echo SEOPRESS_VERSION; ?></span>
                        <?php } ?>
                        <div class="seopress-quick-access">
                            <ul>
                                <li>
                                    <a href="<?php echo admin_url( 'admin.php?page=seopress-titles' ); ?>">
                                        <span class="dashicons dashicons-editor-table"></span>
                                        <?php _e( 'Titles & Metas', 'wp-seopress' ); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo admin_url( 'admin.php?page=seopress-xml-sitemap' ); ?>">
                                        <span class="dashicons dashicons-media-spreadsheet"></span>
                                        <?php _e( 'XML / HTML Sitemap', 'wp-seopress' ); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo admin_url( 'admin.php?page=seopress-social' ); ?>">
                                        <span class="dashicons dashicons-share"></span>
                                        <?php _e( 'Social Networks', 'wp-seopress' ); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo admin_url( 'admin.php?page=seopress-google-analytics' ); ?>">
                                        <span class="dashicons dashicons-chart-area"></span>
                                        <?php _e( 'Google Analytics', 'wp-seopress' ); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo admin_url( 'admin.php?page=seopress-advanced' ); ?>">
                                        <span class="dashicons dashicons-admin-tools"></span>
                                        <?php _e( 'Advanced', 'wp-seopress' ); ?>
                                    </a>
                                </li>
                                <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
                                if ( is_plugin_active( 'wp-seopress-pro/seopress-pro.php' ) ) { ?>
                                    <li>
                                        <a href="<?php echo admin_url( 'admin.php?page=seopress-pro-page#tab=tab_seopress_woocommerce$1' ); ?>">
                                            <span class="dashicons dashicons-cart"></span>
                                            <?php _e( 'WooCommerce', 'wp-seopress' ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo admin_url( 'admin.php?page=seopress-pro-page#tab=tab_seopress_local_business$10' ); ?>">
                                            <span class="dashicons dashicons-store"></span>
                                            <?php _e( 'Local Business', 'wp-seopress' ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo admin_url( 'admin.php?page=seopress-pro-page#tab=tab_seopress_dublin_core$8' ); ?>">
                                            <span class="dashicons dashicons-welcome-learn-more"></span>
                                            <?php _e( 'Dublin Core', 'wp-seopress' ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo admin_url( 'admin.php?page=seopress-pro-page#tab=tab_seopress_rich_snippets$9' ); ?>">
                                            <span class="dashicons dashicons-media-spreadsheet"></span>
                                            <?php _e( 'Structured Data Types', 'wp-seopress' ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo admin_url( 'admin.php?page=seopress-pro-page#tab=tab_seopress_breadcrumbs$2' ); ?>">
                                            <span class="dashicons dashicons-feedback"></span>
                                            <?php _e( 'Breadcrumbs', 'wp-seopress' ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo admin_url( 'admin.php?page=seopress-pro-page#tab=tab_seopress_page_speed$3' ); ?>">
                                            <span class="dashicons dashicons-performance"></span>
                                            <?php _e( 'Google Page Speed', 'wp-seopress' ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo admin_url( 'admin.php?page=seopress-pro-page#tab=tab_seopress_robots$4' ); ?>">
                                            <span class="dashicons dashicons-media-text"></span>
                                            <?php _e( 'robots.txt', 'wp-seopress' ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo admin_url( 'admin.php?page=seopress-pro-page#tab=tab_seopress_news$5' ); ?>">
                                            <span class="dashicons dashicons-admin-post"></span>
                                            <?php _e( 'Google News Sitemap', 'wp-seopress' ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo admin_url( 'admin.php?page=seopress-pro-page#tab=tab_seopress_404$6' ); ?>">
                                            <span class="dashicons dashicons-admin-links"></span>
                                            <?php _e( 'Redirections', 'wp-seopress' ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo admin_url( 'edit.php?post_type=seopress_bot' ); ?>">
                                            <span class="dashicons dashicons-admin-generic"></span>
                                            <?php _e( 'SEOPress BOT - Broken links', 'wp-seopress' ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo admin_url( 'admin.php?page=seopress-pro-page#tab=tab_seopress_htaccess$7' ); ?>">
                                            <span class="dashicons dashicons-media-text"></span>
                                            <?php _e( '.htaccess', 'wp-seopress' ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo admin_url( 'admin.php?page=seopress-pro-page#tab=tab_seopress_rss$11' ); ?>">
                                            <span class="dashicons dashicons-rss"></span>
                                            <?php _e( 'RSS', 'wp-seopress' ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo admin_url( 'admin.php?page=seopress-license' ); ?>">
                                            <span class="dashicons dashicons-admin-network"></span>
                                            <?php _e( 'License', 'wp-seopress' ); ?>
                                        </a>
                                    </li>
                                <?php } ?>
                                <li>
                                    <a href="<?php echo admin_url( 'admin.php?page=seopress-import-export' ); ?>">
                                        <span class="dashicons dashicons-admin-settings"></span>
                                        <?php _e( 'Tools', 'wp-seopress' ); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </a>
                </h1>
                <div id="seopress-notice">
                    <div class="small">
                        <a href="https://www.seopress.org/changelog/" alt="<?php _e('See the changelog (new window)','wp-seopress'); ?>" target="_blank">
                            <div class="dashicons dashicons-media-text"></div>
                            <div class="tooltip"><?php _e('See the changelog','wp-seopress'); ?></div>
                        </a>
                        <a href="mailto:contact@seopress.org" alt="<?php _e('Send feedback','wp-seopress'); ?>" target="_blank">
                            <div class="dashicons dashicons-megaphone"></div>
                            <div class="tooltip"><?php _e('Send feedback','wp-seopress'); ?></div>
                        </a>
                        <a href="http://twitter.com/wpcloudy" alt="<?php _e('Follow us on Twitter (new window)','wp-seopress'); ?>" target="_blank">
                            <div class="dashicons dashicons-twitter"></div>
                            <div class="tooltip"><?php _e('Follow us on Twitter','wp-seopress'); ?></div>
                        </a>
                        <a href="https://www.seopress.org/" alt="<?php _e('Official website (new window)','wp-seopress'); ?>" target="_blank">
                            <div class="dashicons dashicons-info"></div>
                            <div class="tooltip"><?php _e('Official website','wp-seopress'); ?></div>
                        </a>
                        <a href="https://www.seopress.org/support" alt="<?php _e('Support (new window)','wp-seopress'); ?>" target="_blank">
                            <div class="dashicons dashicons-editor-help"></div>
                            <div class="tooltip"><?php _e('Support','wp-seopress'); ?></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>