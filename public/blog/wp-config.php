<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'macropor_blog');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ';7D@<KmkH)fKxP[cLdoXD1Xu1Si4g^&rkAg&`Fef=Z!qY_VHgFAgm9@UUt>x<>L3');
define('SECURE_AUTH_KEY', '[jr e`(ny3W6V`+<kDKw?vkq;5Azy5E;U*B~R~dM8 d;hd.aaKzl;L>@7WgzX)KS');
define('LOGGED_IN_KEY', 'gwUHaUy=[630~o:C<{+^lzW5_bkC)dP1YcOIC89WQpKGe9u=;fm[g7S>BGOYu/)(');
define('NONCE_KEY', 'c4]<5wNf+77fx?I$sRO5Uc)ygTKA8lEqC!kd*k6R8oG|vtv0Ew7:kXDJZPUhnZ(!');
define('AUTH_SALT', '0mkSut+67M(K[U*j]H~x/7;%/`|0kuS/Y{h8?VGPZNe:nZGWZX?IcOb~:r+CU.On');
define('SECURE_AUTH_SALT', 'RTK_HT[QO%^/w3c(r;s9:n :#mj|t[ssAnKQF$`Q}PrKs_zVvd}?x!D^^05/~e5+');
define('LOGGED_IN_SALT', '= qGUat,tz(!H/RK8/&#MI%>E@}Y}_s.7Ho=dmG{On>r#+xyAL?.t-d6!^6Oow@(');
define('NONCE_SALT', 'O?773K8Gf|g`~6l(l_Dyl2sZ4Cyu5KV.2[uwmdG =/r2=@lM!h1c5oed99<M#pco');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'mc_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

