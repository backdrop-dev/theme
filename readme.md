# Backdrop\Theme
Backdrop Theme is a collection of helper functions and filters to aid in theme development.

## Requirements
* [ClassicPress](https://www.classicpress.net)
* [WordPress](https://wordpress.org)
* [PHP 7.4](https://www.php.net/releases/7_4_0.php)
* [Composer](https://getcomposer.org)

## Registering and Booting
Add the provider before booting the Backdrop application. The functions in this package are available as soon as Composer's autoloader is loaded; the provider adds the filters.
<pre>
$theme->provider( Backdrop\Theme\Provider::class );
</pre>

The comments template filter looks for `comments/{post type}.php`, `comments/default.php` and `comments.php` inside the theme's views folder (see `backdrop-dev/template-helpers`).

## Copyright and Licenses
This project is licensed under the GNU GPL, version 2 or later.

2019–2026 © Benjamin Lu