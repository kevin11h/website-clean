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
define('DB_NAME', 'bitcoin');

/** MySQL database username */
define('DB_USER', 'bitcoin');

/** MySQL database password */
define('DB_PASSWORD', 'BxDcXrFJL0gx6rxTtWwLueMI');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         ')jfh=2zB0Rvm7z KoO``xXgnZxU)mkt.nT>Ee}q{A4D!F].R7KnPA<TMTPSbLpD>');
define('SECURE_AUTH_KEY',  'yJTH=oEs-Zgr;5F1w*+eBR}VjG}NCys{S:}qp4QO_4`xMaUC6ULYWC;vE]&Z%/Qn');
define('LOGGED_IN_KEY',    '+]PXVGZTf2#Xh<b6_ztyq;!ogEeo^yI&VPghDAH@NP@>1tad-X -tkt &+Z)hD|o');
define('NONCE_KEY',        'PcN$8l>]tW/R:t^{pb88K8J4QWb<m(D>o0%pI/uvHBLcdr-MT:C%g7.>vWgNSK<%');
define('AUTH_SALT',        ' }4H4>f`)JD2WPIv,;8v}Yw5-4GWJS`Tpi3T9LnJ.M*iVM+Cg6MiH?k;np81pC~(');
define('SECURE_AUTH_SALT', 'soqX+qjB`.OK:7YW|L,Nb;YLMK KK7-+f7r[0o@6%&1v^2Kf-? %|kL:Rf)Y]_Un');
define('LOGGED_IN_SALT',   '6IAsD?P ^UchX7;b^5KB.).uL2NCaBU7=nU$d73ULhM1xXYzEI<pZ8^Y09:Be/L+');
define('NONCE_SALT',       'od6{);Q!12YJGQsq1zAw),BM%EwP2 [.nJXu{q80XS$#lN9:N5asM4+76s&^Q>7U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_conf_';

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
