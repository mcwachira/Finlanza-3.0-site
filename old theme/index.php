<?php
/**
 * index.php
 * Required by WordPress. Acts as the ultimate fallback template.
 * In the Finlanza theme, all pages have their own templates, so this
 * redirects unmatched requests to the homepage.
 */
if ( is_front_page() || is_home() ) {
    include( get_template_directory() . '/front-page.php' );
} else {
    // Fallback: redirect to homepage for any unmatched template
    wp_redirect( home_url('/') );
    exit;
}
 