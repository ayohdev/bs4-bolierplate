<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ayohdev_starter' );

/** MySQL database username */
define( 'DB_USER', 'ayohdev' );

/** MySQL database password */
define( 'DB_PASSWORD', '5Ts5EDhwBVaoEjmS' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'B/eE#Re{nsH]4Vg*o=Z@$^&H)JS[eL1PG/$Wv!;d7INxEqArDs5Zn!<N]4Uv:SmF' );
define( 'SECURE_AUTH_KEY',  '+`f%Icd;Z(S=>u_hfqA2|GqGwBgO(FYYW&5qLb]^_?Wy#:gc^Fn(%(zV.fX1dgJz' );
define( 'LOGGED_IN_KEY',    'Dk;18p;A0S)jnp^^K p_rgEq3rjneOlAMWe!-n.n!AkL&6NL>~]:s33i]qbgPkWn' );
define( 'NONCE_KEY',        '&oKbcp~jv)]1XiC6;}Le4vmDs%lXkvj3#bl1 V/Kto.?7UnoKZ0aIGqN85-HLL ^' );
define( 'AUTH_SALT',        '&,Wu^Unwma@|5d44DYtF&_AbC!Lv w+/+7FD=f&QEx4{R%Bj`[>TKCj;hx>4y@<r' );
define( 'SECURE_AUTH_SALT', '3h;Yf.ok{zbQG(l,01K%S?`msv5tuX|RPls?dd//~ `jm;)>]@dk#]`8K @xE0]l' );
define( 'LOGGED_IN_SALT',   'Pv%^>L7j@-!q%hLriFf|P[eq7}VOHugx}?wo>d(QFKWY9l^;D*m;QpLdvR VxY_4' );
define( 'NONCE_SALT',       '8,a$ra33][8br;kW0^U19+8f`{*8xV^ybA.YtHk]:#%tM*]$&^)SB4d<8ep34l6U' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ayohdb_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
