<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

# Database Configuration
define( 'DB_NAME', 'wp_palmbeachtech5' );
define( 'DB_USER', 'palmbeachtech5' );
define( 'DB_PASSWORD', 'nkMzm5eLx1Ntut71gauD' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wordp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'p9+O*P{b;SP}|`>x!rk=_H$gHlvEP6O:!k-g%7j%|$/dG&C^Io9~kA1!ALm^ICZ<');
define('SECURE_AUTH_KEY',  'KAb|e@XGSAJ$f|Y/lg|?P,-mm1o**w$]A2zjC`%z3`HB#e)6DHh/;=s-$m0</h*1');
define('LOGGED_IN_KEY',    'K].KX8qpJI c;n!P8Sa5wze%jD-m eyk@l7EmJ-u,Z,Hw[IYA/!Zy?3C>.B EP0>');
define('NONCE_KEY',        '([[f<8c! /Us_0,5[J nL]+0V-CF^DH9UtQpc9QNM}TjX}T}iYi4-_xa[;(r*UmU');
define('AUTH_SALT',        'f*:PMn>-}x&@|ThXyDF@S v&4G/!SL9t-*e#]#q]4rUJM$=HBa&QBdn^,0yQ{,8q');
define('SECURE_AUTH_SALT', 'B5Uk:IEPm|@![la o{$7.|H2o`clLT@g?^HW%ThFRCi|^3utmkpZ2pz/eLj>neT>');
define('LOGGED_IN_SALT',   '!C>H(uT]|89pvJztMt?x}Qy+27{+C|]?Lj#+2;{=^9@qpReQ`ZqxC)MzH>g(bcEj');
define('NONCE_SALT',       'B!9d^6+[;SH*@z+l[)vk*A|$*M8.`/CKxfv7s.;PcpW-+XI->3~l$Mw|lDxg/OKF');


# Localized Language Stuff


define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'palmbeachtech5' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'c8a903cf33431f4efe36656f319958a5a5ae64af' );

define( 'WPE_CLUSTER_ID', '100224' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', true );

define( 'FORCE_SSL_LOGIN', true );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'palmbeachtech.org', 1 => 'palmbeachtech.space', 2 => 'www.madeinpbc.org', 3 => 'www.madeinpbc.com', 4 => 'madeinpbc.org', 5 => 'madeinpbc.com', 6 => 'www.startuppalmbeach.org', 7 => 'startuppalmbeach.org', 8 => 'www.palmbeachtech.org', 9 => 'www.palmbeachtech.com', 10 => 'palmbeachtech5.wpengine.com', 11 => 'palmbeachtech.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100224', );

$wpe_special_ips=array ( 0 => '104.198.4.31', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );


# WP Engine ID


# WP Engine Settings






define('WP_DEBUG', false);
define('WP_MEMORY_LIMIT', '256M');
define('AUTOMATIC_UPDATER_DISABLED', true);

# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}

define( 'WP_CACHE', TRUE );
