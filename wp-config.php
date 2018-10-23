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
define('DB_NAME', 'papakwstas');

/** MySQL database username */
define('DB_USER', 'papakwstas');

/** MySQL database password */
define('DB_PASSWORD', 'mFM8CUgFFMgG70c3');

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
define('AUTH_KEY',         'BZACw=ZE3: Hk3SNJZnjXY?T|i:uOjz}by4N!w^}8lvwNNNbwQ;3uv1: HAzLw9l');
define('SECURE_AUTH_KEY',  '[`4_f/X<y,yD!rRy<W#doutXXc47Fhkfma.ZcAjk2eFC]+s6V.2-<5t+:=Ly;2D#');
define('LOGGED_IN_KEY',    '`)/^fq[iljQsx+*p!CG0)pWaUm[~,&!s-tT9~EE1(9klJx+TIMFGo@9oZ/oy:ZHZ');
define('NONCE_KEY',        'z/%P$^YOIz|`3l&9S_4GD){UM$2/NtgPY3:zP5OJXj?A_x{kIIM;S@~wEgQGG#L0');
define('AUTH_SALT',        '9R[|)/@9A=[VY5Q{=*UF5_ZH(:0[sm}<j,h0ke>%mv^e]Mp[qc)m5{Eyad<kTsEB');
define('SECURE_AUTH_SALT', '*B=KzCJBt])s+$HQg-au9ks57!~UrP}@dXK?O=e!As`kN:XI.}>esN&`tJ>Pnc|3');
define('LOGGED_IN_SALT',   'H9.J4bQ7IT(n_PC98m`{IG^{ycVZL.-8ohqS@>yH${%Ki)Ea4OOxi6:qUUc}Si}~');
define('NONCE_SALT',       '&^@lGxJESCEWo|v)~1gA4QhiYkVBV+Cge+hIUqw-j|DF|t?faIE|ljxLJ:N~wMyB');

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
