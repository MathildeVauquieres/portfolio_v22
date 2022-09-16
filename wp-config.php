<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&#!.C4jt[hcVi0N]+_ihUYJKX=!JxB}j#WJ6x:k:|p_f(#m!Db3@`)&GO)MF(ez ' );
define( 'SECURE_AUTH_KEY',  '+9Gp:PoH9|xAy>:D=fvii6)U>j+!;}B<mt}9YV>1c1H|ykZY$.t&VSKVvRy/?_g`' );
define( 'LOGGED_IN_KEY',    '(-n,xfZ|sY-v5Pfn3V~PQtwd_ZA}em=ZHO/*L.WF)k%kLsFDbH=,&*2:eWuS!tvv' );
define( 'NONCE_KEY',        '@cYnf8J0y_lcs:}t4:OS{G6FcwT`W,CpGi:[1j>8@fUiyF*;Jjj!RsR%hQ,b./oO' );
define( 'AUTH_SALT',        '~%>,dD|-2Og<$nkEzQ8s4X|l}M/gF;~Aup26Iq?%.x?4v.&7VkCciDo95EZMxYdy' );
define( 'SECURE_AUTH_SALT', ':2g[H]TnA%BV!/MZ*@2RwM0<-ja.!s6u.T4nVstyP{9)ipq2`l-,n/L v9ff?&py' );
define( 'LOGGED_IN_SALT',   'wz)BM<;JpA*Z7C/EdRi&@sv]<T?ifzqMP#E3Ro+R8<^@SWevHGjugRo2Ko}q`*fV' );
define( 'NONCE_SALT',       '}99Ce1WEgvuQt:3OrjV8(^[-KZ#y:>sX9$}51ZIF1[JLLYdedEh4Lw`i1B)MlQ05' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
