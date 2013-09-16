# JT Cross-Domain AJAX GUI

Are you trying to get information from your WordPress site but you have two different domains and keep getting the Access-Control-Allow-Origin error? This plugin adds the correct headers to allow you to access your WordPress site using AJAX from any other domain.

Simply install the plugin and add a list of domains under Settings > General then click save. WordPress will then start sending the correct headers to allow you to run cross-domain ajax with no problem.

## Features

* Adds a simple input in your general settings page to allow you to give cross-domain abilities to other sites.

## Installation

1. Copy the `jt-cross-domain-ajax-gui` directory into your `wp-content/plugins` directory or install the zip file through WordPress's plugin installer
2. Navigate to the "Plugins" dashboard page
3. Locate the menu item that reads "JT Cross Domain"
4. Click on "Activate"

## Use

In the WordPress admin menu bar, click on Settings > General.
Under Cross Domain Settings, enter a comma-separated list of sites you'd like to allow to access your site and then click Save Changes.
NOTE - you must enter the list in the format "http://example.com, http://store.example.com". The space is optional, the comma is not. The protocol is also not optional.

## License

The WordPress Cross-Domain AJAX GUI is licensed under the Creative Commons Attribution 3.0 Unported License.

> This program is free software; you can redistribute it and/or modify
it under the terms of the license. Any version of this software including modified and commercial versions must give credit to Jacopo Tarantino for the original software.

> This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.


## Changelog

### 3 (16 September 2013)

* Updated name to be compliant with WordPress plugin guidelines.
* Updated CORS code to be W3C spec compliant which also fixed a bug.
* Various bug/typo fixes.

### 2 (17 January 2013)

* Moved to Creative Commons Attribution 3.0 Unported License

### 1.0 (13 January 2013)

* Official Release

## Author Information

The WordPress Cross-Domain AJAX GUI was originally created and is maintained by [Jack Tarantino](http://twitter.com/jacopotarantino/).

The project is open-source and contributions are welcome.

##To Do

Add way to only enable Access-Control-Allow-Origin headers for certain pages/page types.

