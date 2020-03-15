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
define( 'DB_NAME', 'Jh68h3HEUU' );

/** MySQL database username */
define( 'DB_USER', 'Jh68h3HEUU' );

/** MySQL database password */
define( 'DB_PASSWORD', 'uknCdktcD4' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         '`Sh&%x&QNX_ta6*ignEg~B(+PtkJ:~Uk#YwdvHE6VD`Dz~~Og|bqB9+ Jnb`;[Sh' );
define( 'SECURE_AUTH_KEY',  'Vf/$fv||2)Io3#MH|8p93e>Vt`B$;OjUJu04k:z{{[#s5r/hFOf;-[-Iv,sUh#[~' );
define( 'LOGGED_IN_KEY',    ':=-`Ouk54OVg+iv5E.S~Nz2TJ7j{H)UDBzZ5R%uS|^-GUeM#)o+9BTsD!*4C/tWk' );
define( 'NONCE_KEY',        'YE(fX>|()BC70pkv9oXfd&ph/@rk!6s6_8Y|p}gd>(nK}eg?1SQ(rYjw~`.&dPN4' );
define( 'AUTH_SALT',        '(S0{XTXa!sQ A}jjQ9^3&18cFLcgF7U5,1lEHliy;vk|J27f`?@XU#81vY >p1RS' );
define( 'SECURE_AUTH_SALT', 'O&rb5Sj012M!ses*x*IOJuaxb!=4T:zc5|v(X*$m1;]ef]FR>6[6ln>KX55%DHkm' );
define( 'LOGGED_IN_SALT',   'LktupB.~e)c *96~ ZpWN)GZk<+.JACF@OS%-/g1dz}@KL/D9$+St!tOd_/sV`~b' );
define( 'NONCE_SALT',       'a3g|J>s]ub>^omKV;AQc~I&Mbv_`TlS?5y<cZ]U5F(L[D1qur2c7ytMZ9w%W;#,&' );

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
