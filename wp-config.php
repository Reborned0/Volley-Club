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
define('FS_METHOD', 'direct');
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'base_volley_club');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', '127.0.0.1');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Jket0mAMVn:T;ej,:vQ>^<<M/^E4:~h!v,w&#zLh)761Sp!e<Fi3T)mH>-7,(Jn3');
define('SECURE_AUTH_KEY',  '7J~D$dOaUc 0MF/0c0pOD(~~#348tAP<xWx2XL3atW^Z!l@fyeK1s9#5KgTz>vB3');
define('LOGGED_IN_KEY',    'j^rmwD}}4_ (:{p,H0ogctp~D.;O>M{6;+.xxs8%/P&*Z^@w!yh}oE6%qgcBcQzI');
define('NONCE_KEY',        '|4fm!?{]p U,?(WeL#6dc$qK1#r@.J9W76GniKcafBd}6NC9hBb}c+,4[s*rDzZ-');
define('AUTH_SALT',        'ELA ha4UuG]oKM}7WepL]%+7{1sq*RljPUGVOtZ# sr&?Nhy>-|ilc$|_>&AWdg*');
define('SECURE_AUTH_SALT', '<KD,TVr:DVWf sj>30icydLZ/Ecz$Rrb$;}+dY(L78=?|WT`+(0=}z}=rxSibG=<');
define('LOGGED_IN_SALT',   'ZF;XE2|8N[j$)Fo7?AU~}NI|JNCdV^&Cev:y$9=!MrN@HGkmZK/=<>d,mias<1Q>');
define('NONCE_SALT',       'CS62WACOx!ez449$196TsF,*T=2Q.~Le&0Cvx(Cd#`&AFb{7)?ygLkp|~tlu+q|F');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
