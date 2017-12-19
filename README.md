# wordpress-saml-vipgo-helper
[VIP Go](https://vip.wordpress.com/documentation/vip-go/) helper file for [OneLogin SAML plugin for WordPress](https://github.com/onelogin/wordpress-saml). This helper plugin is designed exclusively for the "VIP Go" platform run by WordPress.com VIP, and there may be unintended effects if it is used on a different platform.

## Installation

This file needs to be loaded prior the plugin itself, in order to make appropriate changes in time.

The `vipgo-helper.php` file can either be located in [`client-mu-plugins`](https://github.com/Automattic/vip-go-skeleton/tree/master/client-mu-plugins) directory ([read more on client-mu-plugins](https://vip.wordpress.com/documentation/vip-go/understanding-your-vip-go-codebase/#mu-plugins-on%c2%a0vip-go)), or loaded manually from your theme's functions.php before calling `wpcom_vip_load_plugin` for loading the wordpress-saml plugin.

## Compatibility measures performed

The plugin does the following:

* Prepend the plugin's cookies with `wordpress_` in order to allow requests to bypass Varnish cache
* Specific cache control headers for particular responses during the authentication flow
* Remove forced login redirection for XML RPC requests
