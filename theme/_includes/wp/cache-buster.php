<?php
/**
 * WordPress Cache Busting made simple.
 *
 * @author Recolize GmbH <service@recolize.com>
 * @license http://opensource.org/licenses/GPL-3.0 GNU General Public License Version 3 (GPLv3)
 *
 * This script is based on
 * @see https://medium.com/@futuremediagr/easy-versioning-for-css-and-js-files-in-wordpress-e7dad756586c
 * @see https://gist.github.com/ocean90/1966227
 */

function set_custom_ver_css_js($src)
{
    // Don't touch admin scripts.
    if (is_admin()) {
        return $src;
    }

    $_src = $src;
    if (strpos($_src, '//') === 0) {
        $_src = 'http:' . $_src;
    }

    $_src = parse_url($_src);

    // Give up if malformed URL.
    if (false === $_src) {
        return $src;
    }

    // Check if it's a local URL.
    $wordPressUrl = parse_url(home_url());
    if (isset($_src['host']) && $_src['host'] !== $wordPressUrl['host']) {
        return $src;
    }

    $filePath = ABSPATH . $_src['path'];
    if (file_exists($filePath) && strpos($src, 'ver=') !== false) {
        $src = add_query_arg('ver', filemtime($filePath), $src);
    }

    return $src;
}

function css_js_versioning()
{
    add_filter('style_loader_src', 'set_custom_ver_css_js', 9999);
    add_filter('script_loader_src', 'set_custom_ver_css_js', 9999);
}

add_action('init', 'css_js_versioning');