<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.

/** Enable W3 Total Cache - disabled locally so DDEV doesn't serve stale live-site cache */
if ( getenv( 'IS_DDEV_PROJECT' ) == 'true' ) {
    } else {
     // Added by W3 Total Cache
}

/* LIVE */


// define('WP_HOME','https://e-tecpc.co.uk');
// define('		','https://e-tecpc.co.uk');


/* STAGING */



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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define('DB_NAME', 'etec_mech_db');

/** MySQL database username */
// define('DB_USER', 'etec_admin');

/** MySQL database password */
// define('DB_PASSWORD', 'MostynLaburn12');

/** MySQL hostname */
// define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
// define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
// define('DB_COLLATE', '');


// Include for ddev-managed settings in wp-config-ddev.php.
$ddev_settings = dirname(__FILE__) . '/wp-config-ddev.php';
if (is_readable($ddev_settings) && !defined('DB_USER')) {
  require_once($ddev_settings);
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$kFZem9}mtrVt7@515k{;/h%Z<1f[{@&{R.Qk^~WO26(k.C]R-zKJYRBXGk`&Cy6');
define('SECURE_AUTH_KEY',  'FX0-[H`tbS;j~W8x<_nwMa8n(%biGPj0[s>OY7y+b9uovv0W}`@8x5u/NB3!a&U$');
define('LOGGED_IN_KEY',    '#;evr ftH!QpkKSO>[D>?=I)w <.)wDeXmQ)BE5HirwwP))0eZ*~RNCGgrb&k,i?');
define('NONCE_KEY',        '#/aUZ98%F1$%!/WVOG*-14?6r|}lK/aY+^#~!I;%T9u?X&((n<<L!BbhTx]`S(_8');
define('AUTH_SALT',        'wtphYs@;O=:bYJU]@v5puV^_cgs|m0WCPF/?L6h|]ZB}P{fbdjwMv%MFfTRe;S]g');
define('SECURE_AUTH_SALT', '5Xb**o<h%%GC/vU7}/*Ev:Cloo3N~Cwcagt$RiF,<pN8W99D2}vmm5g~Fr(:*Msv');
define('LOGGED_IN_SALT',   'fqGuu0Sgtrec`s@{VBM-ha/._Cs$NcFE>Aj4f57zf]P2<Ymt; lx-7w$DRiZ#ru2');
define('NONCE_SALT',       'bmuQkVa1w[)@{lkf^1A/ps|dwRRlH d?-+Q2 a^tM.rf|>>P-dX6k)2(WH2WOFq}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
