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
define('DB_NAME', 'lunwingc_prolinemedical_db');

/** MySQL database username */
define('DB_USER', 'lunwingc_proline');

/** MySQL database password */
define('DB_PASSWORD', 'PozoLVbt3L');

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
define('AUTH_KEY',         '#B<)K}ixAaiB%$nzX^9WDZ|BY%^#8-X5-n$QsP-jY0xXB2f~_nR-+dJTSbvhnax6');
define('SECURE_AUTH_KEY',  '@3LPxyCK9@@Fg#Xnu{!1 N{~9c2*q`fO}$;2L>_X-Ti;7zljo&.5LHlH>4Fw4`rd');
define('LOGGED_IN_KEY',    '8k}u8yqBJoB}%%fwC!iho$L_kXNvFg5U;y{$g<C%r&`v$q_i><p5.@B)P6m.9OF~');
define('NONCE_KEY',        'b2lngR[iweuc?td}&5K-,{YKe{kWhyG9dF;sh<VLHnhnkvUutS4^IcxVDmw9oIcY');
define('AUTH_SALT',        'YMLGb].oSsP}?J,A6MZ1Ht:m)Wh&0J9wXO_a12d!HW;rLVFFyQevSM_QR-ellVe&');
define('SECURE_AUTH_SALT', 'qpCDe1>J|g=X k$[@fp9j12}u|4=^v$D8?HJ[_Y8[,G!k3f]^pK o- DyK{:8akH');
define('LOGGED_IN_SALT',   'V`@+ZOt|un7u %hYY(l/[8!qlX{qPKd@?;P%#u-*MW/Ry!wahh^=5L{O?~AZpxa!');
define('NONCE_SALT',       '-~Q]P47?ezVAR&aN(#~.wu74/r{Fwk)0!C^tqkL1, U#V_xcpivAYE<Pp+/F@#Mz');

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
