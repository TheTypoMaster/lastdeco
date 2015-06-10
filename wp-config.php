<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'lastdeco');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R<lKa+}45lQ!|YEx|niDvX*xPq mBT77yrL%SV-VGl8e-_gSo|};/QQr4+e*<E{?');
define('SECURE_AUTH_KEY',  '=m|F:y#tuaJ#r!n}Sf~WCUp-j-|>XB7Q~{`[W$$.3z`OJ/hR`EWdz!]xbXiaWiw-');
define('LOGGED_IN_KEY',    'H{TIR.to|s$7!e~<8.yEHy8Se!<,QOnb@xOh3AP^_&R+N|J5+u~<F>xaQ_ogd),M');
define('NONCE_KEY',        'oGj@o>6)rck7^(+m{!vD*q}k&-qP$H!T6 dhO7]O*10hQ&r7%9?TB`0@{e4xB|p:');
define('AUTH_SALT',        '!!(x,(#n<%/SY@]e/&u5aZYqam:y[Hy*8uIr#L)/8VK~-09%*}-o ;6CetEr1`u/');
define('SECURE_AUTH_SALT', 'JSyb;Nf1;UlEM2~G?(Nw}_&(*B~P=Z0WdW^?&Ahku;iz_Ju*Xyz_12} M#F4LhkC');
define('LOGGED_IN_SALT',   'D,@~]8u9.y doDZj3*5h4<s^E:MPE0bPqq-W3wYQVc$7ecc@kZj^+u#qvm|.#%RE');
define('NONCE_SALT',       ';lJ&JgYERqfR%}u>XR`i+aSL2IG8o2oQ;zkb++Rnd :]9MV/n1r9gWf)TP^jK~rs');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');