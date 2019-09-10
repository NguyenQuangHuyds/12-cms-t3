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
define( 'DB_NAME', 'cms' );

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
define( 'AUTH_KEY',         '>bIZ#|0a[,W%~%YM{ZqnDH{[<[o{rnl.&WQj?t?jmC{p}eQ%CJvYzkB<_qkr`Av=' );
define( 'SECURE_AUTH_KEY',  'fGwk}rwj/?glV]c.nz9=C,WNLf^>%#WpN@6he`73|^a.%R2BfVaO{X6k7%yQ#@<H' );
define( 'LOGGED_IN_KEY',    'dM{EQelnY@=Cvw8h9Uv:.sO3=kf5]}mfe#dpCKjF;N1(=G.7EAE(]L#,MT8M<A,F' );
define( 'NONCE_KEY',        'IIjI;cjykZhMJ~f?eoE=&`JagAON&7wIg^C9.i/pR<9v os?;~UR|YzPow8:{XDh' );
define( 'AUTH_SALT',        'L$4Ub/AgP@nSg2wp!*2@#1f^S R%>-E@-SvF[1!47 &L4P7[a(6VB-m{.B-Le $P' );
define( 'SECURE_AUTH_SALT', 'N+cm{(`mk!9_0Yz6@#18S5,n#*5D>.jR-X;`hjC)y6gG|(5}PM+-]c<%;F`%`V9^' );
define( 'LOGGED_IN_SALT',   'PRq2<&e@HVQ:C={I 8vPW]Z!_`k9yS^qM:J_E1Cgx*wEc&X` $,u{6H|~Z,/|L|(' );
define( 'NONCE_SALT',       'aFE*k<+_O?)](d7oLr/>o4*=v(lOvZa4;s@L/@YdC>c_.F.R2L+&`7=niKq j!es' );

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
