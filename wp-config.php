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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'giorgi94' );

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
define( 'AUTH_KEY',         '`dJ9zjh6TPK,j.HlSwP_g0jtM*Il<C*s,d.|4F,L02F0fkn(]2pAC^cF!Zr)vYK$' );
define( 'SECURE_AUTH_KEY',  '=59q(ynW.V{a]#nQ:;[]GpScO$3bd^L )P=m=[DYh8@kURjkt^B#{0r6TqvT:}97' );
define( 'LOGGED_IN_KEY',    '5EMwehwMO~2obAv/Tgif;B:A+Og%/{G#.ELg9oR3CmK:; MC&=Ji!4=:q@Ks7/{2' );
define( 'NONCE_KEY',        '9ssqF f)LVi6whZ=1@YUQ6w$b-)2L1l:uJxTO0CcURx@Xq]_}Mo^[fstyl|0%Uw%' );
define( 'AUTH_SALT',        'j7-M>A]gG`#xwC]%aRk&[v&mJQ21ANflNXp1pYOjq[c)-d@uQvyp9UlC/+?KQ,Z|' );
define( 'SECURE_AUTH_SALT', 'z_H!yLGzY8UU4%b)rCk;Cl5rzQ{KkH4hly|-[hH3fySg.@B8E}*T$8lLDe9SPkfx' );
define( 'LOGGED_IN_SALT',   'N)4;~<`;%X$BM8Mn17O@v5HL@Y$<Z![c[8ZX(WAI;ZdQO-i7WEi]rE[wW+Od,p9A' );
define( 'NONCE_SALT',       '1sdUa8a%eG5b*E.)?F[22>eSse)B^b]~fDIG5l<0?sus7$2~vw<p}&@[HK>i+{eq' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
