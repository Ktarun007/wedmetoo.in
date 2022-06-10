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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'akash' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'rrs^,s|1CW[{70B1u_YCGoHVKp7ZG.]RNB+8PGv,|mZoXZfT48TkYe<c56qh5fDY' );
define( 'SECURE_AUTH_KEY',  'uJDvd4q]-`1zRBaflP${h=nxN0cT)2+6G=5z|+j])$)=?gP.JooGYv_XgW>D+-j+' );
define( 'LOGGED_IN_KEY',    '~H(v7k]&Y}>IUDOEPS7r!4!-_lH(sp(2!fJ~`1-yJl:>dm.U{a>c+lX&F#0Ah9RU' );
define( 'NONCE_KEY',        'r6k=f@q@)5!5Qr2,v(a[LQ36Z;`B*+D2.`[AMW35,0wOA?Wy]R!XEZ>3i_[Le%Zj' );
define( 'AUTH_SALT',        'VwIfI^nku~]>Ie2-K_k6&*W:ah8TC49 .JeALvkt I=k]9P.cyp_fFN]oe^+}?[(' );
define( 'SECURE_AUTH_SALT', '}0/T~mZTpc])fY9Bb(p&@v[Y;V :Vjdu/nK]]9*O4<jh+?2=0O%+0)K}FfbNq6[p' );
define( 'LOGGED_IN_SALT',   ' 8TqG3qz%jiTN,Wk8gCG^Gr;F/<fN7Zy{}LqJG6x1e6Ewx3#-Rdi}KA(]TwTJ9y_' );
define( 'NONCE_SALT',       '*}R8BD14TC)Eame61jIJA;nm$m#GPTl4{*,Ya]zo5CE[#M:k7XLE@V7ma.Hd8A#~' );

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
