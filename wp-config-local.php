<?php

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

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * You may want to examine $_ENV['PANTHEON_ENVIRONMENT'] to set this to be
 * "true" in dev, but false in test and live.
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define('WP_DEBUG', true);
}
