<?php
/*
Plugin Name: Podio Webforms
Text Domain: podio-webforms
Plugin URI: http://wordpress.org/extend/plugins/podio-webforms/
Description: Easily add your Podio Webforms anywhere in WordPress via shortcode. Don't worry about all that Podio Webform code, and you don't have to switch to the HTML Editor to paste anything. Just go to your Podio app's webform page and find your code (no need to copy and paste). Look at the code and find the https://podio.com/webforms/<strong>9876543/123456</strong>.js part, and create a shortcode like this: <strong>[podioform appid='9876543' formid='123456']</strong>. <em>That's it.</em> Optionally, can add [podioform ... showfooter='no'].
Version: 1.0
Author: TourKick (Clifford P)
Author URI: https://podio.com/r/enlaREvfxo9M-sl8uX4EtA
License: GPLv2 or later
*/

// ideas:
// suggestions for custom success message to track goals or consider something like http://www.podiomail.com/blog/podio-webforms-and-google-analytics-goals.php

// Add Shortcode
function pf_podioform( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'appid' => '',
			'formid' => '',
			'showfooter' => 'yes',
			'footerlink' => 'https://podio.com/r/enlaREvfxo9M-sl8uX4EtA',
							// Cliff's Referral Link instead of the default https://company.podio.com/crm-software
							// Feel free to use your own if you wish
							// Info at https://help.podio.com/entries/25962877-Referring-people-to-Podio
		), $atts )
	);

	// Only Allow Numbers (Also for protection)
	$appid = preg_replace('/[^0-9]/','',$appid);
	$formid = preg_replace('/[^0-9]/','',$formid);

	// Code
	if( !empty($appid) && !empty($formid) ) {

		// script
		//$pfhandle = 'pfpodioform' . $appid . $formid;
		$pfsrc = sprintf('https://podio.com/webforms/%s/%s.js', $appid, $formid);
		//wp_enqueue_script( $pfhandle, $pfsrc, '', null, true);
			// form wouldn't display :-(

		// output
		//$pfoutput = sprintf('<!-- BEGIN Podio web form --><script type="text/javascript">_podioWebForm.render("%s")</script><noscript>Please enable JavaScript to view this <a href='%s' target='_blank'>Podio</a> form.</noscript>', $formid, $footerlink);
		$pfoutput = "<!-- BEGIN Podio web form --><script src='$pfsrc'></script><script type='text/javascript'>_podioWebForm.render('$formid')</script><noscript>Please enable JavaScript to view this <a href='$footerlink' target='_blank'>Podio</a> form.</noscript>";

		// footer text
		// need to find out what Podio uses for non-English, and/or do http://codex.wordpress.org/I18n_for_WordPress_Developers
		if( $showfooter == 'yes' ) {
			$pffooter = sprintf('<div class="podio-webform-container">Webform built by PODIO &mdash; Project and <a href="%s" class="podio-webform-inner" target="_blank">CRM Software</a> that works like you.</div>', $footerlink);
			$pfoutput .= $pffooter;
		}

		$pfoutput .= '<!-- END Podio web form -->';

		// work
		return $pfoutput;
	} else {
		return '';
	}
}
add_shortcode( 'podioform', 'pf_podioform' );

// End of plugin
// Do not add closing PHP tag