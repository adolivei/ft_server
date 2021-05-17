<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
 define('AUTH_KEY',         '}T5Dy@i3MCZ>FWf`z;hcPB#%#Ggh`v`a*?EYnoW7<Wp6Tyb;^nsN!BDPenzJcruA');
 define('SECURE_AUTH_KEY',  '7Y}d_!L^F(4@]O9msn %wMd7$-*F%]R%3#5`:|D,|`>8]#qLg~nRQH7=QA@8I.Gs');
 define('LOGGED_IN_KEY',    '3dy>H|l|Q:Ee+<|k&em,Vp%,+rZ[ AJeRsm{SJ)TnZZH*aP9>KSm!:0<g&-|WNPj');
 define('NONCE_KEY',        '0JpWruW-+h9 NU7:,@yy+-_YA}NN>-KXMqv-BE?3cU:iG7oM}9?xxuawG]R!ADo&');
 define('AUTH_SALT',        '=EP:2i+;{Zf%vQ{4+Sli|U~+&NbXJ0EW]][](d>[_SD+Vkp[0Iz]0F9R4%oL*c3m');
 define('SECURE_AUTH_SALT', 'AJCY9J` y=PMw&0@pAI|!$MU,=3G3*)k37YJ[e)Al_q}fv*:<Fzkh+H00J~PMfX|');
 define('LOGGED_IN_SALT',   '4P?7Blt,{ &}lFY#8ts&8rm87/][*(r],i3eEM<6#lVLmUjgTnW`kJJ|gKR|$|T=');
 define('NONCE_SALT',       'cXLslG0gJ@/ uw[`M,~t]g|n <0%J(NsA5ubX}aF%#-iTR/G4vBO8T>LY|;2cU}>');
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
