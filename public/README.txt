=== BlockX ===
Contributors: palasthotel, edwardbock
Donate link: http://palasthotel.de/
Tags: gutenberg, block, developer, utils
Requires at least: 5.0
Tested up to: 5.7.0
Stable tag: 1.0.10
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl

Easy, php developer friendly way to add new gutenberg blocks to your wordpress.

== Description ==

Easy, php developer friendly way to add new gutenberg blocks to your wordpress.

== Installation ==

1. Upload `blockx.zip` to the `/wp-content/plugins/` directory
1. Extract the Plugin to a `blockx` Folder
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use core block-X
1. Create new block-x in your custom theme or plugin code

== Frequently Asked Questions ==

= How can I add my own blockX? =

You can find all you need to know here: https://github.com/palasthotel/blockX/blob/master/README.md


== Screenshots ==


== Changelog ==

= 1.0.11 =
* Refactoring: Uses wp-components library now

= 1.0.10 =
* Bugfix: missing database table when updating from 1.0.0

= 1.0.9 =
* Bugfix: SSRQ rendering crash when using none latin1 chars
* Refactoring: deprecated registerStore function replaced with createReduxStore and register

= 1.0.8 =
* New Widget: Textarea
* Optimization: you can add a help text to Text widget
* Optimization: Select Widget multiple values
* Bugfix: fixed wrong auto save timeout sanitation

= 1.0.7 =
* New Widget: ListOf
* Optimization: auto save block changes after a specific time

= 1.0.6 =
* New Widget: Media
* Optimization: All block attributes are available in the blockx templates now
* Bugfix: Taxonomies

= 1.0.5 =
* Checkt compatibility with WP5.7
* Bugfix: Posts block was not using taxonomy query

= 1.0.4 =
* New Param: Filter "blockx_rest_posts" got a new $args parameter that holds the query args for the initial wp query

= 1.0.3 =
* New Widget: Divider
* New Widget: Readonly
* Bugfix: Post Widget custom post type title resolution

= 1.0.2 =
* Feature: Bidirectional relation for embedded posts exposed via public function 'blockx_get_embedded_in_post_ids'
* Feature: New widget type Hidden
* New filter: 'blockx_rest_posts' to change query result of posts query
* Optimization: Custom ServerSideRenderQueue component for ssr rendering of blocks in a single request

= 1.0.1 =
* Feature: Template inheritance
* New Block: Post Embed
* New Block: Authors
* New Widget: Post - Relate a post
* New overridable methods for block types on post_save and post_delete
* New overridable methods for widgets on post_save and post_delete

= 1.0.0 =
* First release

== Upgrade Notice ==


== Arbitrary section ==



