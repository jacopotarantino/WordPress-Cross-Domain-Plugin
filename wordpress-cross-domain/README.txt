=== WordPress Cross Domain Ajax Fixer ===
Contributors: jacopo.vip
Donate link: http://jacopotarantino.com
Tags: cross-domain, apache, access-control, wp-headers
Requires at least: 3.5
Tested up to: 3.5
Stable tag: trunk

Adds headers via WordPress so you can do AJAX across domains and not run into the access-control-allow-origin error.

== Description ==

Are you trying to get information from your WordPress site but you have two different domains and keep getting the Access-Control-Allow-Origin error? This plugin adds the correct headers to allow you to access your WordPress site using AJAX from any other domain. 

Simply install the plugin and add a list of domains under Settings > General then click save. WordPress will then start sending the correct headers to allow you to run cross-domain ajax with no problem.

== Installation ==

1. Upload `wordpress-cross-domain` to the `/wp-content/plugins/` directory
1. OR Install the .zip of the plugin through WordPress's "Add New" interface
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Navigate to Settings > General and add your list of domains you'd like to allow AJAX for.

== Frequently Asked Questions ==

= No questions so far =

But feel free to ask one.

== Screenshots ==



== Changelog ==

= 1.0 =
* First release!

== To Do ==

Add ability to only allow cross-domain requests to certain pages.
