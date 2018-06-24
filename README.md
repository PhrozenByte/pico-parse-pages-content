Pico Parse Pages Content
========================

This is the repository of Pico's official `PicoParsePagesContent` plugin.

Pico is a stupidly simple, blazing fast, flat file CMS. See http://picocms.org/ for more info.

**This plugin exists for historic reasons only and should not be used!**

`PicoParsePagesContent` is a simple plugin that parses the Markdown contents of all your pages and makes them available using `{{ page.content }}`. Installing this plugin is **highly discouraged**, because it has a significant negative impact on your website's performance.

Starting with Pico 0.6.1 we were parsing the Markdown contents of all pages. While making some things easier (like generating excerpts), this heavily impacted performance with a larger number of pages (e.g. blog posts). By popular request we removed this feature with Pico 1.0. This significantly improved Pico's performance. To preserve backwards compatibility (BC) we introduced the `PicoParsePagesContent` plugin. This plugin has been removed from Pico's default installation with Pico 2.0, but you can still install it manually.

Install
-------

If you're using a `composer`-based installation of Pico (e.g. [`picocms/pico-composer`][PicoComposer]), simply open a shell on your server, navigate to Pico's install directory (e.g. `/var/www/html`) and run `composer require phrozenbyte/pico-parse-pages-content` (via [Packagist.org][]). That's it!

If you're rather using one of [Pico's pre-built release packages][PicoRelease], you must first create a empty `plugins/PicoParsePagesContent` directory in Pico's install directory (e.g. `/var/www/html`) on your server. Then download [`PicoParsePagesContent`'s latest source package][PicoPluginRelease] and upload all containing files (esp. `PicoParsePagesContent.php`) into said `plugins/PicoParsePagesContent` directory (resulting in `plugins/PicoParsePagesContent/PicoParsePagesContent.php`).

`PicoParsePagesContent` requires Pico 1.0+

Config
------

`PicoParsePagesContent` is disabled by default due to its significant negative performance impact. You can enable the plugin by adding the following to your `config/config.yml`:

```yml
PicoParsePagesContent.enabled: true
```

`PicoParsePagesContent` itself has no config options.

[PicoComposer]: https://github.com/picocms/pico-composer
[Packagist.org]: https://packagist.org/packages/phrozenbyte/pico-parse-pages-content
[PicoRelease]: https://github.com/picocms/Pico/releases/latest
[PicoPluginRelease]: https://github.com/PhrozenByte/pico-parse-pages-content/releases/latest
