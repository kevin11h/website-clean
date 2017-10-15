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
define('DB_PASSWORD', 'A6tyQ4xS6BkO67Y5bGqh3Bff');

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
define('AUTH_KEY',         '1##&9|>(V7}C{F9 &4Ph0KpS^2yu_VK0(bv7K6JGl)5?y.7$o29pe*AvjW%^{mU/');
define('SECURE_AUTH_KEY',  '+(Q[=6qJ.q*qD}+*PZ-Xp:l8s/kw#n>-_q[_vfF4x}OAdW0<w%,(HtZSF3[GDP;e');
define('LOGGED_IN_KEY',    ' sw7uCtU}WJUFt`-uT|z(!@dkTjO]VN|q8fYEiJe}@oj;r]2D}f}8CMkJOs/:;w%');
define('NONCE_KEY',        'jgEu>9a>u@F=0SUb%#qKcmRTS8-Fg@]&X{3.sc=*VQ,2O5*^95f[Qr09X#o3/+?%');
define('AUTH_SALT',        '0TjpqGP$y>O2tz_xpjt4a#MGx& >s%K3IFU6+;kdBmCUJ)9Mr3X(ZJn=5ZY*{ aA');
define('SECURE_AUTH_SALT', 'BZ%ApbG4[;xbmyB+LL[k UapX+WD;|/qJmJl;Wh3.xmjMz~.uYG|Vl|G(V-#7v`w');
define('LOGGED_IN_SALT',   '9l@p%v?/T~^Xad19f(43*CTflwo4IZza9m:YW`in)ltmY26XDZkIIW~+>4sjVr+=');
define('NONCE_SALT',       '=$a9&Pt$61&07:Qg}7h(-Znke`D8H(R{r+<gE`pi l2T=poR?T<3M V-l$Kd,DUo');

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
