# Change WordPress' locale based on the active category.

## Installation
Download the repo and create a .zip archive. Install it like any other WordPress plugin.

## Requirements
You need to have the desired languages installed in your WordPress site.

## Usage
Depending on the URL the plugin will change WP's frontend language to match the language of the content.

## Modification
The code is pretty straightforward.
Based on `$_SERVER[REQUEST_URI]` the function returns a different locale and hooks it into WP's filter.
You can remove or add your own languages.

## Example
If the URL contains /ru/ then the Russian locale is being loaded.