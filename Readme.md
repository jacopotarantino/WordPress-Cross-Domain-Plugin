#WordPress Cross-Domain AJAX GUI

Are you trying to get information from your WordPress site but you have two different domains and keep getting the Access-Control-Allow-Origin error? This plugin adds the correct headers to allow you to access your WordPress site using AJAX from any other domain. 

Simply install the plugin and add a list of domains under Settings > General then click save. WordPress will then start sending the correct headers to allow you to run cross-domain ajax with no problem.

## Features

* Adds a simple input in your general settings page to allow you to give cross-domain abilities to other sites.
## Usage

##Use

1. Copy the `wordpress-cross-domain` directory into your `wp-content/plugins` directory or install the zip file through WordPress's plugin installer
2. Navigate to the "Plugins" dashboard page
3. Locate the menu item that reads "WordPress Cross Domain"
4. Click on "Activate"

## License

The WordPress Cross-Domain AJAX GUI is licensed under the GPL v3 or later.

> This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 3, as 
published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

> You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

## Changelog

### 1.0 (13 January 2013)

* Official Release

## Author Information

The WordPress Cross-Domain AJAX GUI was originally created and is maintained by [Jack Tarantino](http://twitter.com/jacopotarantino/). 

The project is open-source and contributions are welcome.

##To Do

Add way to only enable Access-Control-Allow-Origin headers for certain pages/page types.

