=== Stock Photo Slider Widget ===
Contributors: salzano
Tags: car dealer, dealership photos
Requires at least: 5.0.0
Tested up to: 5.6.2
Stable tag: 2.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A slider widget that includes automobile stock photography.


== Description ==

This plugin was built as an add-on for websites running Inventory Presser, but it will work on any WordPress website with or without Inventory Presser.


== Changelog ==

= 2.0.1 =
* [Fixed] Changes the hook priority used to enqueue scripts and styles to explicitly come after Inventory Presser's similar calls. This plugin piggybacks on the flexslider that ships with Inventory Presser.

= 2.0.0 =
* [Fixed] Fixes a broken path that prevented this plugin's stylesheet from being included on pages where the slider appears.
* [Removed] This plugin no longer includes its own version of flexslider, and now depends on the version of flexslider that ships with Inventory Presser.

= 1.0.1 =
* [Fixed] Fixes problems around the upgraded version of flexslider shipping with Inventory Presser core since version 10.2.0.
* [Removed] Removes checks for a copy of flexslider existing in the _dealer theme. This theme no longer provides the library.

= 1.0.0 =
* [Added] This is the first version of the plugin.
