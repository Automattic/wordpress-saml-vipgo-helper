<?php
/**
 * Plugin Name:  VIP Go helper for OneLogin SAML plugin for WordPress
 * Plugin URI:   https://github.com/Automattic/wordpress-saml-vipgo-helper/
 * Description:  Necessary VIP Go modifications for the OneLogin SAML plugin for WordPress.
 * Version:      0.1
 * Author:       Automattic / WordPress.com VIP
 * Author URI:   https://vip.wordpress.com/
 * License:      GPL3
 * License URI:  https://www.gnu.org/licenses/gpl-3.0.html
 */

/*
 * Prepend the plugin's cookies with `wordpress_` in order
 * to allow requests to bypass Varnish cache.
 */
if ( false === defined( 'SAML_LOGIN_COOKIE' ) ) {
	define( 'SAML_LOGIN_COOKIE', 'wordpress_saml_login' );
}
if ( false === defined( 'SAML_NAMEID_COOKIE' ) ) {
	define( 'SAML_NAMEID_COOKIE', 'wordpress_saml_nameid' );
}
if ( false === defined( 'SAML_SESSIONINDEX_COOKIE' ) ) {
	define( 'SAML_SESSIONINDEX_COOKIE', 'wordpress_saml_sessionindex' );
}
if ( false === defined( 'SAML_NAMEID_FORMAT_COOKIE' ) ) {
	define( 'SAML_NAMEID_FORMAT_COOKIE', 'wordpress_saml_nameid_format' );
}

/**
 * Send private Cache-Control headers when appropriate.
 *
 * The function needs to be triggered prior the original one (on init hook with priority of 1).
 */
function vipgo_saml_checker() {
	if ( ( true === isset( $_GET['saml_acs'] ) && false === empty( $_POST['SAMLResponse'] ) ) || true === isset( $_GET['saml_sls'] ) ) { // input var. OK.
		header( 'Cache-Control: private' );
	}
}

add_action( 'init', 'vipgo_saml_checker', 0 );

