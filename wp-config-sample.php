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
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '.++I]1o;P[t>QvZ.p&Yafv(ADe%=;ML;m)ova.Ls?tE z!${7|sbi+Q]+d*zn+i5');
define('SECURE_AUTH_KEY',  '36vIAABRI,`v:)FNFO&V,BQ[dL,X;hUa8^,GW,+htJWjq0M$S>!<lw$cw3<3*^3-');
define('LOGGED_IN_KEY',    '[z9x;eiU@hd58(Mi)H+R/z1|][G3}u_$+#e6{4S;eweSr;U`),f4<d5r0$U$QA(1');
define('NONCE_KEY',        'R>o, ;wv~L7:6%v_!Fw9S*w+$OxQyem)Oz/^r[H]U~[(+`:2%:dsFq|^6k}.xcU7');
define('AUTH_SALT',        '`n~33sJdBJRjTDS+Z~<-Xi[#2QHYQ9Wo,/9:oqz5K0 bfvZ];&/7}sdye|,:PV;!');
define('SECURE_AUTH_SALT', '&XEqA%!icCHg|uGJ?<>.(Z+D0t/|U6[SNzWI+>+_{467l194&:12[!z^M]-[S~HA');
define('LOGGED_IN_SALT',   'D KbId:JdLrl)9q#~.SWbHZ)PMSOM1t$_*f2uhE[dp4+X1>mH<@FX f~]l6n&2I:');
define('NONCE_SALT',       'gj&o{(>ms|-1DpTc+r}T3DmL5.hhzZ6<T+w6/D5]1{?7P~>w|d|*J !DCk4%KL]/');

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
