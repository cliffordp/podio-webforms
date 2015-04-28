=== Podio Webforms ===
Contributors: cliffpaulick
Tags: podio, shortcode, shortcodes, crm, contact, contacts, customer, customers, lead, leads, quote, contact form, contact forms, form, forms, secure form, wp contact form, webform, webforms widget, security, ssl, https, script, scripts, responsive
Requires at least: 3.0
Tested up to: 4.2.1
Stable tag: /trunk/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily add your Podio Webforms anywhere in WordPress via shortcode.

== Description ==

Easily add your Podio Webforms anywhere in WordPress via shortcode. Don't worry about all that Podio Webform code, and you don't have to switch to the HTML Editor to paste anything.

Just go to your Podio app's webform page and find your code (no need to copy and paste). Look at the "Sharable Link" (e.g. https...podio.com/webforms/<strong>9876543/123456</strong>), and create a shortcode like this: <strong>[podioform appid='9876543' formid='123456']</strong>. <em>That's it.</em>

Optionally, can add [podioform ... showfooter='no'].

= List of Examples: =
* [podioform appid='9876543' formid='123456']
* [podioform appid='9876543' formid='123456' *showfooter*='no']
* [podioform appid='9876543' formid='123456' *footerlink*='https://podio.com/r/enlaREvfxo9M-sl8uX4EtA']

Don't forget to whitelist your allowed domains in your Podio settings, otherwise your forms won't show up.

= Podio Webform Tips: =
* <a href="https://podio.com/r/enlaREvfxo9M-sl8uX4EtA" target="_blank">Sign up for Podio</a> (it's free!)
* <a href="https://help.podio.com/entries/21684758-Creating-a-webform-from-an-app" target="_blank">How to create a Podio Webform</a>
* <a href="https://developers.podio.com/examples/webforms" target="_blank">Webform Examples for Podio Developers</a>
* <a href="https://podio.com/market" target="_blank">Podio Apps Market</a> (all apps are free, some come pre-configured as Webforms)
* <a href="https://zapier.com/zapbook/podio/" target="_blank">Zapier Podio Integrations</a>
* <a href="https://www.itduzzit.com/connect/podio" target="_blank">itDuzzit Podio Integrations</a>

FYI: This is a third-party plugin, not officially from the Podio company.

Developers may contribute at https://github.com/cliffordp/Podio-Webforms

== Installation ==

Automatically or manually install to wp-content/plugins/

== Frequently Asked Questions ==

= Why? =

Because Podio is free, cool, and very flexible. One example is webforms, which is what this shortcode plugin makes even easier. Don't have Podio yet? Sign up now at my referral link: https://podio.com/r/enlaREvfxo9M-sl8uX4EtA

= MultiSite? =

It's a simple shortcode plugin with no network admin level settings. Works fine as a regular plugin within Multisite.

= What's on the Wish List? =

Unfortunately, I couldn't get the forms to render using WP's enqueue script code. Not sure why. Feel free to edit the code to try to get that to work and let me know if you do. I'd like to get that working, if possible.
The footer is English-only as-is. Feel free to contribute there too.

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
= 1.1 =
* April 28, 2015
* Readme compatibility changed to WordPress version 4.2.1
= 1.0 =
* October 30, 2013
* Initial release