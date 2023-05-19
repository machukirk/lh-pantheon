<?php
/**
 * This config file is yours to hack on. It will work out of the box on Pantheon
 * but you may find there are a lot of neat tricks to be used here.
 *
 * See our documentation for more details:
 *
 * https://pantheon.io/docs
 */

/**
 * Pantheon platform settings. Everything you need should already be set.
 */
if (file_exists(dirname(__FILE__) . '/wp-config-pantheon.php') && isset($_ENV['PANTHEON_ENVIRONMENT'])) {
	require_once(dirname(__FILE__) . '/wp-config-pantheon.php');

/**
 * Local configuration information.
 *
 * If you are working in a local/desktop development environment and want to
 * keep your config separate, we recommend using a 'wp-config-local.php' file,
 * which you should also make sure you .gitignore.
 */
} elseif (file_exists(dirname(__FILE__) . '/wp-config-local.php') && !isset($_ENV['PANTHEON_ENVIRONMENT'])){
	# IMPORTANT: ensure your local config does not include wp-settings.php
	require_once(dirname(__FILE__) . '/wp-config-local.php');

/**
 * This block will be executed if you are NOT running on Pantheon and have NO
 * wp-config-local.php. Insert alternate config here if necessary.
 *
 * If you are only running on Pantheon, you can ignore this block.
 */
} else {
	define('DB_NAME',          'pantheon');
	define('DB_USER',          'pantheon');
	define('DB_PASSWORD',      'pantheon');
	define('DB_HOST',          'database');
	define('DB_CHARSET',       'utf8');
	define('DB_COLLATE',       '');
	define('AUTH_KEY',         'I7AhaR+q,fTJaI@=K9uWo,*5 !nD+c{-:+-fTC4Y7l]oj4#Z|X_QyFZnM;hxJW29');
	define('SECURE_AUTH_KEY',  '5{p(/+~kNaiAW7B$6|Hf)9n}D<}[o**_P+(ac]i3{/p,HsDnuW@qM,JfwW|h#pD)');
	define('LOGGED_IN_KEY',    '5q9EiB7xe#B)xoqQb(@=*.q9SFMO+Ir$7eHaVXL_A/+2&xWF1h1w@.N/@q,i|!xb');
	define('NONCE_KEY',        'hOTO3 y`S6ZI@J6.Vx_(v8r%.B7ePMW?.e4q|D;fl;g S//8QSR##8| uxeQu|9c');
	define('AUTH_SALT',        'Cd,+zAe5cPMOT&GF674OpcO3V:4O6mC[h{ :.jdY#W00h^%G?LF&i2xV;z/oc17s');
	define('SECURE_AUTH_SALT', '1_2yiW$|I^eP$hfebkhn7`a=25WZL_O?wc:uY6qv5qD!K/TyrcmB_QJ<J!=gAsVK');
	define('LOGGED_IN_SALT',   '!>A~jMV(Ug#+duq;!-_sG^*/T-74EzgAti5e11uS$P@!0GA{7k~Z``cPLSH ;,ix');
	define('NONCE_SALT',       'z!8=](K&Fp$+APZtw6~lWA.-Dz=u.iSCh1`tB=[*e,oL~C(Jq:;#j|,tUmQn,(D-');
}

/** Standard wp-config.php stuff from here on down. **/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', '//' . $_SERVER['HTTP_HOST'] . '/wp-content' );

/* That's all, stop editing! Happy Pressing. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
