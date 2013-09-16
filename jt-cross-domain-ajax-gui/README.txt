=== JT Cross Domain Ajax GUI ===
Contributors: jacopo.vip
Donate link: http://jacopotarantino.com/wordpress-cross-domain-access-control-allow-origin-plugin/
Tags: cross-domain, apache, access-control-allow-origin, wp-headers
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

= 3.0 =

* Updated name to be compliant with WordPress plugin guidelines.
* Updated CORS code to be W3C spec compliant which also fixed a bug.
* Various bug/typo fixes.

= 2.0 =
* Moved to Creative Commons Attribution 3.0 Unported License

= 1.0 =
* Official Release

== To Do ==

Add ability to only allow cross-domain requests to certain pages.
