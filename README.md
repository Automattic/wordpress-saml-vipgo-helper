# wordpress-saml-vipgo-helper
VIP Go helper for [OneLogin SAML plugin for WordPress](https://github.com/onelogin/wordpress-saml)

# Installation
This file needs to be loaded prior the plugin itself, in order to make appropriate changes in time.

The `vipgo-helper.php` file can either be located in [`client-mu-plugins`](https://github.com/Automattic/vip-go-skeleton/tree/master/client-mu-plugins) directory, or loaded manually from your theme's functions.php before calling `wpcom_vip_load_plugin` for loading the wordpress-saml plugin.
