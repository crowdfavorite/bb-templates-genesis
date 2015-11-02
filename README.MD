# Beaver Builder Templates for Genesis

Loads Genesis child theme style sheet after plugin style sheets.

## Description

Provides custom page templates for use with Beaver Builder plugin.

It checks to see if the Beaver Builder plugin is active and, if so, this plugin conditionally
loads theme template files for pages, posts, and custom post types. These template files
are minimal (no post title, no meta, full-width) so that any templates or modules added 
with Beaver Builder will look better.

## Requirements
 * WordPress 4.1
 * Genesis 2.2
 * Beaver Builder 1.6.0

## Installation

### Upload

1. Download the latest tagged archive (choose the "zip" option).
2. Go to the __Plugins -> Add New__ screen and click the __Upload__ tab.
3. Upload the zipped archive directly.
4. Go to the Plugins screen and click __Activate__.

### Manual

1. Download the latest tagged archive (choose the "zip" option).
2. Unzip the archive.
3. Copy the folder to your `/wp-content/plugins/` directory.
4. Go to the Plugins screen and click __Activate__.

Check out the Codex for more information about [installing plugins manually](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

### Git

Using git, browse to your `/wp-content/plugins/` directory and clone this repository:

`git clone git@github.com:crowdfavorite/bb-templates-genesis.git`

Then go to your Plugins screen and click __Activate__.


## Usage

### Configuration

There are no configuration options.

### Styles

These templates add a body class called `fl-builder-full`. If additional theme styles are needed to
make Beaver Builder pages look good, you can use this class to target to target posts and pages.

### Additional Notes

Each single page or post will still need a Beaver Builder template or module applied on an 
individual basis. https://www.wpbeaverbuilder.com/support/q/pre-sales-questions-2/

This plugin is for sites where every single post and page will use Beaver Builder. If that's not 
the case, this plugin is not for you.

If you only want to use Beaver Builder on certain pages, you don't need this plugin. Copy 
`page_beaver.php` and drop it into your theme folder (can live in `root` or `templates` folder 
off of `root`. From there, just select that template from Page Attributes > Templates on 
desired page.

## Future Goals

Add configuration options to the plugin to allow a site admin to optionally use custom templates.
Consider these scenarios:

* Only replace page templates (not used on posts)
* Only replace templates on selected pages and posts
* Only replace templates on selected posts
