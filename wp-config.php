<?php
// ** SpaceWeb technical domain BEGIN **
if (strpos($_SERVER['HTTP_HOST'], '.swtest.ru') !== false) {
    if (!defined('WP_HOME')) define('WP_HOME','http://' . $_SERVER['HTTP_HOST'] . '');
    if (!defined('WP_SITEURL')) define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '');
}
// ** SpaceWeb technical domain END **

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
define('DB_NAME', 'ankerok1y3');

/** MySQL database username */
define('DB_USER',       'ankerok1y3');

/** MySQL database password */
define('DB_PASSWORD',       'asidunneis');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',       'gun9J@OCm#FcVjPoWUnfNZq@ngYyJ24qeu2Ex^IIro(9zixUOS7WcfzQVRDJd71A');
define('SECURE_AUTH_KEY',       '@PGdT2cdM9XZgJME@H^GVJrvi9L5)gnSxq2v%%QXAB(ODsX#cfZ4TKSvg!NB10VF');
define('LOGGED_IN_KEY',       'JX73682EnFjDCh^D2@LlUc3e*Z2urm0d7v86(GzyUN6LOv#*IhH2&E6IDBAFR7ch');
define('NONCE_KEY',       '%gu!4EGSxEMLJHAdv3RRURPciWE1SYh*rp5EBq#FvYqD3tVxUPQV(Y*D8*7Ww&ds');
define('AUTH_SALT',       'lm4AY*o5YzFx5G!ShsR2A@VDD4OqAxby7wnhSC4#TlJ@36R6#hLNzMQKBVJ%QOJ)');
define('SECURE_AUTH_SALT',       'cl0dzg%h1%#Nq@1&hb*tUaIv!QVytibONJ5zdHuV(InF#p)C*(a9boMcg3^(dtFU');
define('LOGGED_IN_SALT',       'jy%SRZC@6kzwfiWod1@M7bgCl3@VP7Be3ZG(nzruwFg7FOjnrKO5chfdCY02p2nD');
define('NONCE_SALT',       '7U(k(dkMp&BGKKc0FX6&GE6@pBBRBM&rvAtaSW)!!7e8c&4naHyL(R8hPZB8TXv%');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
?>