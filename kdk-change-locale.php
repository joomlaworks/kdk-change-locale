<?php
/*
	Plugin Name: Kodeka Change Locale
	Plugin URI:  https://kodeka.net
	Description: Change the locale based on the active category
	Version:     1.0
	Author:      Kodeka
	Author URI:  https://kodeka.net
	License:     Commercial
*/
defined( 'ABSPATH' ) or die( 'Move along' );

/**
 * Depending on the category change the locale of the site
 *
 * @param $locale
 * @return the language locale for the frontend, the language needs to be already installed
 * @uses $_SERVER[HTTP_HOST] and $_SERVER[REQUEST_URI] in order to get the URL
 * @version 1.0
 * @link kodeka.net
 */

add_filter('locale', 'kdk_set_locale', 10);

function kdk_set_locale($locale)
{
		$current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$is_english  = strpos( $current_url , "/en");
		$is_german   = strpos( $current_url , "/de");
		$is_greek 	 = strpos( $current_url , "/el");
		$is_spanish  = strpos( $current_url , "/es");
		$is_russian	 = strpos( $current_url , "/ru");
		$is_turkish	 = strpos( $current_url , "/tr");

		if ( !is_admin() )
		{
			if ( $is_english !== false || ( isset($_GET["lang"]) && $_GET["lang"] === 'en' )  )
			{
				return 'en_US';
			}
			elseif( $is_greek !== false || ( isset($_GET["lang"]) && $_GET["lang"] === 'el' ) )
			{
				return 'el_GR';
			}
			elseif( $is_german !== false || ( isset($_GET["lang"]) && $_GET["lang"] === 'de' ) )
			{
				return 'de_DE';
			}
			elseif( $is_russian !== false || ( isset($_GET["lang"]) && $_GET["lang"] === 'ru' ) )
			{
				return 'ru_RU';
			}
			elseif( $is_spanish !== false || ( isset($_GET["lang"]) && $_GET["lang"] === 'es' ) )
			{
				return 'es_ES';
			}
			elseif( $is_turkish !== false || ( isset($_GET["lang"]) && $_GET["lang"] === 'tr' ) )
			{
				return 'tr_TR';
			}
			else
			{
				return $locale;
			}
		}
}
