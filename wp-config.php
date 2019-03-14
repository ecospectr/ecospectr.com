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
define('DB_NAME', 'ecohost79');

/** MySQL database username */
define('DB_USER', 'ecohost79');

/** MySQL database password */
define('DB_PASSWORD', 'php-1914');

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
define('AUTH_KEY',         '({4cG37:Q3i G/B@^hlZ7~p]c13p@jX&tC.m@MY]7<Wy<8z%ds|Dc|P0q*h:&3<0');
define('SECURE_AUTH_KEY',  '$pG4umu9`Ah%BtvYCeg;teo~=vMYL82r].[-+hZ|R4@?UKi]~%zRQQQ-/3qS>g)O');
define('LOGGED_IN_KEY',    '0T[!91k5?Sk#&:uS(/NWxO&Caf8:P]{E07o=RV%1/3px]B2,e+QxM_UnaYYxh@t[');
define('NONCE_KEY',        'E5&)Gf0bx&LO_Iml;.@Fo=_-5&-%tWL-2[#];6U.T/7A6?S|HH]2sSYgVs2BTm}z');
define('AUTH_SALT',        'wD@UUriiF5:}=]Gl>3YbAHM,h4` MBhsAf-?Mj`ou,~#g/Qsj6mkmb cU_^ii+)}');
define('SECURE_AUTH_SALT', ']1=0O8p/]%^[Tk(=oK%0(QbnMb<YW7y0H_1E)b&L,Q)C) ,u3Bi:~2vatEcD@0pN');
define('LOGGED_IN_SALT',   'Sqa}{B`}mLzV~;s.iI.[:joMM%|8%qN/!i_#ElpryD%*1P>2B7?Zh3:`;UArr.+z');
define('NONCE_SALT',       'QRo9}@a|=#AiGtNJn<gs22zZ$}[TyJiPTdQp1%ftU8wa26KJp+KE=J!B1LMfu:}g');

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
