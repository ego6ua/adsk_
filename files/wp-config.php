<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '{{DB_NAME}}' );

/** MySQL database username */
define( 'DB_USER', '{{DB_USER}}' );

/** MySQL database password */
define( 'DB_PASSWORD', '{{DB_PW}}' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gWC7/ye@&6owi^W;ki (=E8<4,1pfl;1h^S(O@i7)I3M;nW$8Z+>]?wq]`PB>Ioj' );
define( 'SECURE_AUTH_KEY',  'Hw#~Lbe}!/~f*k8^Aw>R9l4R(97zzOd7+$k5&@7#qO$xGE(TD~r]J/Bg!wwWiYyd' );
define( 'LOGGED_IN_KEY',    'Y:o~!3<LOvn^K[Kiu./y&>].g#.TR3^pG&4M:i{F2P5HI0)9*PwwD}JP@a34(!*l' );
define( 'NONCE_KEY',        'Gz,<[8PZ_$G%HDuJ_gMN1VWClwCRs;BR+T#|0Cu.-vHuf956[p J,8d@SdiqcSPO' );
define( 'AUTH_SALT',        'g;q|KZ&~h[?@7UJ$@!iD3kxP`whJW$iJUy0WQQC%pRRR+9%$[Mt[[ck~u{w*}9M-' );
define( 'SECURE_AUTH_SALT', 'lID@+B]*J@B?G;U`#aC32MS MKq&*.9@Q`>d)9ajpecp8`,/m9d}foR12p0n>L@(' );
define( 'LOGGED_IN_SALT',   'EWO 1w.7] }nD}|1ei,nc|^wPa-cHRt 2 {w(OHwnDJXQ/=);pziU)9);H1P`aQw' );
define( 'NONCE_SALT',       '+3~Kjx2w:*G nvnqA3U+j#E6CWu[BHw[aWSlUsYr<9n xG,-jK0wp&7C`GwUt]5]' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
