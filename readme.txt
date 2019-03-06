=== Podio Webforms ===
Contributors: cliffpaulick
Tags: podio, shortcode, forms, https, responsive
Requires at least: 4.6
Tested up to: 5.1
Stable tag: 1.2
License: GPL version 3 or any later version
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Easily add your Podio Webforms anywhere in WordPress via shortcode.

== Description ==

Easily add your Podio Webforms anywhere in WordPress via shortcode. Don't worry about all that Podio Webform code, and you don't have to switch to the HTML Editor to paste anything.

Just go to your Podio app's webform page and find your code (no need to copy and paste). Look at the "Sharable Link" (e.g. https...podio.com/webforms/<strong>9876543/123456</strong>), and create a shortcode like this: <strong>[podioform appid='9876543' formid='123456']</strong>. <em>That's it.</em>

Optionally, can add [podioform ... showfooter='no'].

= List of Examples =

* [podioform appid='9876543' formid='123456']
* [podioform appid='9876543' formid='123456' *showfooter*='no']
* [podioform appid='9876543' formid='123456' *footerlink*='https://podio.com/r/enlaREvfxo9M-sl8uX4EtA']

Don't forget to whitelist your allowed domains in your Podio settings, otherwise your forms won't show up.

= Podio Webform Tips =

* <a href="https://podio.com/r/enlaREvfxo9M-sl8uX4EtA" target="_blank">Sign up for Podio</a> (it's free!)
* <a href="https://help.podio.com/hc/en-us/articles/201019628-Webforms" target="_blank">How to create a Podio Webform</a>
* <a href="https://podio.com/market" target="_blank">Podio Apps Market</a> (all apps are free, some come pre-configured as Webforms)
* <a href="https://zapier.com/apps/podio/integrations" target="_blank">Zapier Podio Integrations</a>

FYI: This is a third-party plugin, not officially from the Podio company.

Developers may contribute at https://github.com/cliffordp/podio-webforms

== Installation ==

Automatically or manually install to wp-content/plugins/

== Frequently Asked Questions ==

= Why? =

Because Podio is free, cool, and very flexible. One example is webforms, which is what this shortcode plugin makes even easier. Don't have Podio yet? Sign up now at my referral link: https://podio.com/r/enlaREvfxo9M-sl8uX4EtA

= MultiSite? =

It's a simple shortcode plugin with no network admin level settings. Works fine as a regular plugin within Multisite.

= How can I give back? =

No need. Just enjoy. If you don't have a Podio account yet, I'd appreciate you signing up for your free or paid account via my referral link: https://podio.com/r/enlaREvfxo9M-sl8uX4EtA

== Screenshots ==

1. 1) From within your Podio app, go to the app's settings and click "Webform"
2. 2) Make sure your domains are whitelisted
3. 3) Find your AppID and FormID (if you don't need advanced customization, skip to screenshot #7)
4. 4) Configure the Webform settings as desired
5. 5) For example, customize the form's look and feel, possibly with custom CSS
6. 6) Custom CSS is loaded via the form, not via WordPress, so read Podio's documentation if you want to customize to this extent
7. 7) Insert shortcode using your Podio AppID and FormID (from screenshot #3, above)

== Changelog ==

* Changelog DIFFs for all versions are available at <a href="http://plugins.trac.wordpress.org/browser/podio-webforms/trunk" target="_blank">WordPress SVN</a>.

= 1.2 =
* March 6, 2019
* License changed from GPLv2+ to GPLv3+.
* Now passes the shortcode name to `shortcode_atts()` to allow filtering this plugin's shortcode.
* Text within `<noscript>` is now translatable.
* Now requires WordPress version 4.6 or newer.
* Readme compatibility changed to WordPress version 5.1

= 1.1 =
* April 28, 2015
* Readme compatibility changed to WordPress version 4.2.1

= 1.0 =
* October 30, 2013
* Initial release