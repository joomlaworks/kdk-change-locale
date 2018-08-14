# KDK Change Locale
===

## Description
Change a WordPress site's locale based on active category.

This plugin assists when creating multi-lingual sites where each language is essentially a top-level category. By using category slugs like "en" or "es", this plugin can detect from the URL path the locale to set the site to.

E.g. if the category slug is "en", the locale will be set to "en_US" for US English. If it's "es", the locale will be set to "es_ES" for Spanish and so on.

## Installation
Download the repo and create a .zip archive. Install it like any other WordPress plugin.

## Requirements
You need to have the desired languages installed in your WordPress site so the site's frontend (interface) properly switches to the correct language.

## Usage
Depending on the URL the plugin will change WP's frontend language to match the language of the content.

Define extra languages in the '$languages' array.
