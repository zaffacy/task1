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
define( 'DB_NAME', 'web_test1' );

/** MySQL database username */
define( 'DB_USER', 'web_test1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Qwerty45!' );

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
define( 'AUTH_KEY',         '5<-G.A)gm{@cny*RO7;XtbMh8paX;mrg1wJ!NS/n208O%7K}APGk:>.3gN*7;3ql' );
define( 'SECURE_AUTH_KEY',  'G4tajLNAG8T^c[BEg7Rtp^nj4NgB=b`=$^`*+-b Akouj>|[]d.<Hhr; k`7EO2(' );
define( 'LOGGED_IN_KEY',    'GWp2` !`z{hXh}:j@sQ_a}M/Y$<.^#2DR/9}WFgaUux^)#xOy~|VaUc(4&y 2!%K' );
define( 'NONCE_KEY',        '7+yr)Qi/O3(_JjQPPHC2;xRdswlp+mB:fF{|WUzs&}UFzgo)|yCD t[[B1-NX?mK' );
define( 'AUTH_SALT',        '>]l~G1}u)D0cOcJoiUYqSN1_ZC?2bsO9a m4,]nIM&czyRzAQuiJJyzzV|5N_+{C' );
define( 'SECURE_AUTH_SALT', 'T$G~w~B_^ztx-JON}FUN5fcAR&*5ECosbu(}$9lB9u/*torSvn[,@1;{sSV.T@yz' );
define( 'LOGGED_IN_SALT',   'QnTPm@;%<}<BZ2ybp`6M*.tLg(5@PL`BF@Gee09 |1/x7jN4QhKqK[o>q~o^35tD' );
define( 'NONCE_SALT',       'N1v;&2K2W{ DMJcMC<486I`.W(LTG,q>J-HagnkT(K(Mm #a=kfCb!ML}wX~R2BD' );

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
