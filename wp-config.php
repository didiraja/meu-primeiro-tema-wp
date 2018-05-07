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
define('DB_NAME', 'malura');

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
define('AUTH_KEY',         'iv4t95Lwsq06v4M v(wyC~l_e!6,*C08~8[C4ZZ8 bl_}l>,aG3#O{fojlEN&v[5');
define('SECURE_AUTH_KEY',  'GN8;izx}owiieaxd0d-]^Mq ELLAlKih=^W%9D}lJAzP,#M77TQy3*8P.hL2/=<=');
define('LOGGED_IN_KEY',    'vOS{uI{^)m7E<aV$@tnvsOh~ber^YhQ,V$Q#]wH5+s_/si$0#vLN2H#ZyvV+<#+E');
define('NONCE_KEY',        '^6C,pW|j_mls,)wLEV8/gT7&DYc{9s,_d}~iE3n#L-~Re5w^&3*b!!)tY#zX+Z7o');
define('AUTH_SALT',        'Qv.ij!K.M2M_KIdqq-V@,(h]72A28nAy;GvWaz#V]_eJ$y2WAm*e0nCN}NHOSPn_');
define('SECURE_AUTH_SALT', '*7Pe#eN{/6[GK$c=Y9/H]O3 #O#SbBofy[e=km,ie<fcR kAzV~>-OwT1QV>%V/9');
define('LOGGED_IN_SALT',   'GfDfA5OQL^c/TiscqU&+gOkG.pA8HrkZ7V8OkZOdS1yO`gz!@ M&L ,I8i( ]$Y5');
define('NONCE_SALT',       'e^-#NYjqI?~Uj=SwC>dY^0SI``n1%esZ~ix^YUJ?UtJ9NPs5KNrW!Lb<^rLyd0]n');

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
