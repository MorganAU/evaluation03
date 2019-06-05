<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'evaluation03' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'evaluation03' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'evaluation03' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6N!`puW}Ok<x!=p6}a7u*-ZK]V;$HZZxbR<89(OI;v0{~9$Q!Rsp~)CBUP~Dh?-*' );
define( 'SECURE_AUTH_KEY',  'oGMpk;$l~G/?l&tr*RF^+~`)1ElhL&bz<?JwtNH#a!R~v.(%o7hhZb:4H_tf-0{+' );
define( 'LOGGED_IN_KEY',    'TAB7z66.tQgcI:kV-;L<%3^0Tw+$d+JiPeIuH0K(4TT^Y; %pGIQ)Tri0e,BbX%}' );
define( 'NONCE_KEY',        '.{aPVmR!Gq]2cQjS*^&#HrsBa,VX9n6i`Rnl4%3Jw($9THPfw?B7?)e,u@dZWSe>' );
define( 'AUTH_SALT',        'fwOs^L` ?L4u|7q[>}wzh pu)cjd:eL-^xj8*f&n&ph#$`cY=OJOlwPvB(x&xR]a' );
define( 'SECURE_AUTH_SALT', 'V$Wm:^GMZEHtAtrhAxS N^6U}^n2[9?Hz3y2Y0FB*MhM3s*y6-V+$qh9*[EM0cGT' );
define( 'LOGGED_IN_SALT',   '4~kdgKknri_R:uCcbN[9U[s&3=gS2IixdCY_G@T]5BQeb+BwGLnKY(ur_~N9)@.1' );
define( 'NONCE_SALT',       'G|1cZ[JS.]7a[LeMdH@/x bt0oR6H(;Os94KTi5PA1=PU<xJd`s^JvVUYpWzWX0w' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'eval03_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
