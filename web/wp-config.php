<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'lamudmundo');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', '');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qGwVw=&I{bHfb@:Pm[Q[<}6k{_!+?SQGy$M-sq~U$;+}`jfuX+&!umIHHgdUA!f%');
define('SECURE_AUTH_KEY',  '26J#)Dm/b?baTPbi~;x=TR%?-#JW9 vW$Jj_m=`7LTtD0glPm`%$7%f?`<AjMewK');
define('LOGGED_IN_KEY',    'Wo~`CztWn[e!9!%Yz X YC+o(^/Ot1[<8YX83MzFBu)}+_-o,ifQ/%Nw%kNJbIZ_');
define('NONCE_KEY',        '2S?_-c4Zz~Fe>i%.#D&%Bm0hdo|y(l@+qY~{x,3pG&`w_;^)9r z:1i^XcjQ]_ce');
define('AUTH_SALT',        '$jtlD@phQrEQP/R=Ktr!iE<Z.e0I[e$#e/^OT<d-qYf%<p)Nx{.*s2Jy+&DMY2[Y');
define('SECURE_AUTH_SALT', 'ksk]Y-?B!Z)5f:OC=q:l}ak3UOY2JLP0*/)yS-4]`*2suLyI()--O`-z%?989}Bp');
define('LOGGED_IN_SALT',   'u&_4};@aB7~d0e$6,Ptk,#x-R*Rz^[1#ekkS2IRwsp;/]g`Y;?r]z;627Z[[OYk>');
define('NONCE_SALT',       'ntelm7pX$Lj`xn.7A=;^AM^x=MEvXz)o8<WWs1z`wz$@Hzn ^4CMGNlm.C[^^FHF');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración,
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
