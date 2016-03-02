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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wptrello');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{Ctn(-f.SkDpjn~X|3W!q@UvA8:_;_w~>1PKp]22X>/jR>G~j^6<UmI!*bt@E~A[');
define('SECURE_AUTH_KEY',  'OH099FY^n&|`ODuES8. _iC%J9NV^hBf|pF/,n(6mmaL6VRs_0ss.GB-QQ9@=EYU');
define('LOGGED_IN_KEY',    ' BiAtFodev?$|N3|dfG@z#V)8`^{H+|@BMb6*F-8nc=927fMQ8#31vJN9+hKqu[L');
define('NONCE_KEY',        'PQLyfPU1lF wdT3YI3v6v(&<-`XPHRsScggLPf}y[flO=%L-R^8WWcPFY}Ox.O[<');
define('AUTH_SALT',        'wznNin;s~Rpg|#/Ud]zIf}]q#+*juj==VJ^fHZv&!V50RaV>eteh?kM1UP&m{&[N');
define('SECURE_AUTH_SALT', '$-4|LY B?V$!+B~qM5LOo)sS~HQHpFfiP~|U]%t5JhFfnlG|iC4-s+^yEbf<L*aX');
define('LOGGED_IN_SALT',   'l|>=&p+<7hgv-h2_*+vu4Ijtq&l{h?y{?o MDH(~|hZq.69}~80F(?yr|w`(HGhM');
define('NONCE_SALT',       'ZI<.$.OD1*-.,UygR|XNQ]r^3*GSaq*-9N)rEt/^bB|)1C2Y?](gqb3E9FxI|1++');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
