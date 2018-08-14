<?php
/*
    Plugin Name: KDK Change Locale
    Plugin URI:  https://github.com/joomlaworks/kdk-change-locale
    Description: Change the site's locale based on active category
    Version:     1.1
    Author:      JoomlaWorks
    Author URI:  https://www.joomlaworks.net
    License:     GNU/GPL v2
*/
defined('ABSPATH') or die('Move along');

/**
 * Change the site's locale based on active category
 *
 * @param   $locale
 * @return  the language locale for the frontend, the language needs to be already installed
 * @uses    $_SERVER[HTTP_HOST] and $_SERVER[REQUEST_URI] in order to get the URL
 * @version 1.1
 * @link    https://github.com/joomlaworks/kdk-change-locale
 */

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
        'en' => 'en_US',
        'de' => 'de_DE',
        'fr' => 'fr_FR',
        'es' => 'es_ES',
        'ru' => 'ru_RU',
        'el' => 'el_GR'
    );
    
    if ($locale) {
        return $locale;
    }
    
    foreach ($languages as $cat_slug => $locale) {
        if (substr($url_path, -3) == '/'.$cat_slug || stripos($url_path, '/'.$cat_slug.'/') !== false || (isset($_GET["lang"]) && $_GET["lang"] === $cat_slug)) {
            return $locale;
        }
    }
}

add_filter('locale', 'kdk_set_locale', 10);
