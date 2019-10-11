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
define( 'DB_NAME', 'wordpressportfolio_db' );

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
define( 'AUTH_KEY',         '?-py-~ys:~<].k#N-0A82NE`sl5Z=4j#j90ZIR9Ot$574_W@r>>:H^m`s4 0dK9*' );
define( 'SECURE_AUTH_KEY',  '&]N3O$cQ@!_!QzR`/?jt.NVa/W(JJuR#]3XVu|n7D^%Zn,0W-av.rR#3QVkrN(#h' );
define( 'LOGGED_IN_KEY',    '{KcVPL/BX[:=jEMaXjMqOXFR*D,&_b(yO,O$okwiv80|M%G3i 5sB!Zy!>P1:{)5' );
define( 'NONCE_KEY',        'Tk1%_RsA%W5_y^F}c}.k&Gqd48?tzFs?cVHl ?x]$G#N4|}B 5pD`vk%B?fTpOs;' );
define( 'AUTH_SALT',        '.(i[SzIspW{I90d1;3!L-fYi*p_M{nuT$)`w[-o`F8kPfiN<NiJ36sNjlsEdukMS' );
define( 'SECURE_AUTH_SALT', 'XkU|Y(@7Jn_${fGnn:37DB-*A_Eo*&3jt$p$cQy3K]j.Stf$P0ShgnDd|$<rHeI<' );
define( 'LOGGED_IN_SALT',   '|eeOX@%&C[X8?,>]n7YSZMs$}) MT+0+DHoFNE#{9H[DmM$TV/0h~=$^vn=BHRw]' );
define( 'NONCE_SALT',       '&B5HHDTAVN)Zz&?krKV!wp!riuKPsV?LN-SV%wXbaWkpPaoa~EYTCrB ;_42S/e|' );

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
