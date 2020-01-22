<?php
/*
 * Plugin Name:  KDK Change Locale (by Kodeka)
 * Plugin URI:   https://github.com/kodeka/kdk_change_locale
 * Description:  Change the site's locale based on active category
 * Version:      1.1.0
 * Author:       Kodeka
 * Author URI:   https://kodeka.io
 * License:      GNU/GPL https://www.gnu.org/copyleft/gpl.html
 */

defined('ABSPATH') or die('Move along');

function kdk_set_locale($locale)
{
    // Don't execute in the backend
    if (is_admin()) {
        return;
    }

    /*
    $protocol = (stripos($_SERVER['SERVER_PROTOCOL'],'https') === true) ? 'https://' : 'http://';
    $url_path = $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    */
    $url_path = $_SERVER['REQUEST_URI'];

    $languages = array(
        'en' => 'en_US', // US English
        'de' => 'de_DE', // German
        'fr' => 'fr_FR', // French
        'es' => 'es_ES', // Spanish
        'ru' => 'ru_RU', // Russian
    );

    $new_locale = '';

    foreach ($languages as $cat_slug => $lcl) {
        if (substr($url_path, -3) == '/'.$cat_slug || stripos($url_path, '/'.$cat_slug.'/') !== false || (isset($_GET["lang"]) && $_GET["lang"] === $cat_slug)) {
            $new_locale = $lcl;
        }
    }

    if ($new_locale) {
        return $new_locale;
    } else {
        return $locale;
    }
}

add_filter('locale', 'kdk_set_locale', 10);
