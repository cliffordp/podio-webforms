<?php
/*
Plugin Name: Podio Webforms
Plugin URI: https://wordpress.org/plugins/podio-webforms/
Description: Easily add your Podio Webforms anywhere in WordPress via shortcode. Don't worry about all that Podio Webform code, and you don't have to switch to the HTML Editor to paste anything. Just go to your Podio app's webform page and find your code (no need to copy and paste). Look at the code and find the https://podio.com/webforms/<strong>9876543/123456</strong>.js part, and create a shortcode like this: <strong>[podioform appid='9876543' formid='123456']</strong>. <em>That's it.</em> Optionally, can add [podioform ... showfooter='no'].
Version: 1.2
Author: TourKick (Clifford P)
Author URI: https://tourkick.com/?utm_source=wordpressdotorg&utm_medium=podiowebformsplugin&utm_content=authoruri&utm_campaign=podiowebformsplugin
License: GPL version 3 or any later version
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

function pf_podioform( $atts ) {

	$defaults = array(
		'appid'      => '',
		'formid'     => '',
		'showfooter' => 'yes',
		'footerlink' => 'https://podio.com/r/enlaREvfxo9M-sl8uX4EtA',
		// Cliff's referral link instead of the default https://podio.com
		// Feel free to use your own if you wish
	);

	$atts = shortcode_atts( $defaults, $atts, 'podioform' );

	// Only Allow Numbers (Also for protection)
	$appid  = preg_replace( '/[^0-9]/', '', $atts['appid'] );
	$formid = preg_replace( '/[^0-9]/', '', $atts['formid'] );

	if (
		empty( $appid )
		|| empty( $formid )
	) {
		return '';
	}

	// footer text
	if ( 'yes' === $atts['showfooter'] ) {
		$footer = sprintf(
			'<div class="podio-webform-container">
A webform by <a href="%s" class="podio-webform-inner" rel="nofollow">Podio</a>
</div>',
			esc_url( $atts['footerlink'] )
		);
	} else {
		$footer = '';
	}

	$noscript = esc_html_x( 'Please fill out the form', 'Message within <noscript>', 'podio-webforms' );

	// output
	return sprintf(
		'<!-- BEGIN Podio web form -->
<script src="https://podio.com/webforms/%1$d/%2$d.js"></script>
<script type="text/javascript">
  _podioWebForm.render("%2$d")
</script>
<noscript>
  <a href="https://podio.com/webforms/%1$d/%2$d" target="_blank">%3$s</a>
</noscript>
  %4$s
<!-- END Podio web form -->',
		$appid,
		$formid,
		$noscript,
		$footer
	);
}

add_shortcode( 'podioform', 'pf_podioform' );