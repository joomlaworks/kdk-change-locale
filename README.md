# KDK Change Locale

## Description

Change a WordPress site's locale based on active category.

This plugin assists when creating multi-lingual sites where each language is essentially a top-level category. By using category slugs like "en" or "es", this plugin can detect from the URL path the locale to set the site to.

E.g. if the category slug is "en", the locale will be set to `en_US` for US English. If it's "es", the locale will be set to `es_ES` for Spanish and so on.


## Requirements

You need to have the desired languages installed in your WordPress site so the site's frontend (interface) properly switches to the correct language.


## Modify

Define extra languages in the '$languages' array.


## To Do

- Add option to dynamically set the languages based on installed language packs in WordPress or add a WP backend UI to manually set the languages.


## Installation

Download the repo from https://github.com/kodeka/kdk_change_locale/archive/master.zip and extract the zip file. Rename the created folder to "kdk_change_locale". Zip that folder. Install the newly created zip file like any other WordPress plugin through the plugin manager.


## License & Credits

Licensed under the GNU/GPL license (https://www.gnu.org/copyleft/gpl.html).

Copyright (c) 2018 - 2020 Kodeka OÜ. All rights reserved.
