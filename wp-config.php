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
define( 'DB_NAME', 'paulbuys_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ')><Nt;5Io7IL~~qS*]>{mB)>!%LLP5gm^]V5G$*-;;y5!kFkeuL`HDz2i(n<U-RY' );
define( 'SECURE_AUTH_KEY',  '<q92/g!*/xM:Hr[=3B-t5rbfC]G>$hf1&lIXG}4Zna&t%(ZI6KLJSQ3W>aWzsOX;' );
define( 'LOGGED_IN_KEY',    '9,$wsnuglZrmoU6=Bhk8p]kda?O%3z+z)f*pjxzRgc:D7a1$Tem+Z,^v#UOb~@Ft' );
define( 'NONCE_KEY',        'fn}uylOHB&f`_ yRPmr`Li=YdLXU&A&$JX6<Y8x@IQ/^c}d/JQ~/Z)1%aftz{dK?' );
define( 'AUTH_SALT',        'wDUHz8FA-~vTJu~uO5}u+jjBT+&~_Roehb(Ec@wh.<]O_hxgu,nB}?g{kGd/)@4Y' );
define( 'SECURE_AUTH_SALT', '%5c@)s?2MJ2peFJRf7Mn u9:Y-GTMg}(M&1PQwLzvXsDllg[cOZ4iE1Sykh+,O|7' );
define( 'LOGGED_IN_SALT',   'wy{p{:.z`l;4|obkj:)}Vb]o*ZmDzSFNR<h6Li(H.tv tI&txg2GMm~9b4</1 [z' );
define( 'NONCE_SALT',       'WG+^6^#:?z{`&RhB`f,*i4cV$AlMhs|]G?/Qs^5n.tkq7>8wg3S5|`w=cIQ&k|,$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pb_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
