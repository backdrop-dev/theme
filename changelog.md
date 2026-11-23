# Changelog

## 1.0.8 - November 23, 2026
Fixed
* A `%` in a post title or the site title broke the page. `Backdrop\Theme\Entry\render_title()` and `Backdrop\Theme\Site\render_site_title()` passed the title to `render_permalink()` and `render_home_link()` as their `text`, which those functions use as a `sprintf()` format. A title such as `100%^` threw a `ValueError` on PHP 8 and cut the page off at that post, and one with `%s` or `% d` printed the wrong text. The `%` is now doubled before the title is passed in.

## 1.0.7 - November 17, 2026
Fixed
* `Backdrop\Theme\Comment\render_reply_link()` and `display_reply_link()` caused a fatal error ("Return value must be of type string, null returned") on comments at the maximum thread depth, and on any comment when comments are closed, because `get_comment_reply_link()` returns null there. They now return an empty string.

## 1.0.6 - November 17, 2026
Fixed
* `Backdrop\Theme\is_plugin_or_class_active()` was hooked to `init`. It needs a plugin path, so on every request it was called with an empty string, did nothing useful and loaded `wp-admin/includes/plugin.php` on the front end. It is a helper to call from your own code, so the hook was removed.
* The package's own files are now included with `__DIR__`, instead of relying on PHP's relative include path.

Changed
* Requires `backdrop-dev/framework` ^2.0 and `backdrop-dev/template-helpers` ^1.0.1, which the package uses but didn't declare. PHP 7.4 or later.

## 1.0.3 - July 27, 2023
Fixed
* Make sure that single post is using h1

## 1.0.2 - July 11, 2023
Added
* Added `link_class` to render_site_title

## 1.0.1 - July 6, 2023
Fixed
* do not add home class if is_home.

## 1.0.0 - June 11, 2023
Added
* Our very first official release.