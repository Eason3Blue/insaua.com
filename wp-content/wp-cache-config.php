<?php
/*
WP-Cache Config Sample File

See wp-cache.php for author details.
*/

$wpsc_ignore_tracking_parameters = 1;
$wpsc_tracking_parameters = array ( 0 => 'fbclid', 1 => 'ref', 2 => 'gclid', 3 => 'fb_source', 4 => 'mc_cid', 5 => 'mc_eid', 6 => 'utm_source', 7 => 'utm_medium', 8 => 'utm_campaign', 9 => 'utm_term', 10 => 'utm_content', 11 => 'utm_expid', 12 => 'mtm_source', 13 => 'mtm_medium', 14 => 'mtm_campaign', 15 => 'mtm_keyword', 16 => 'mtm_content', 17 => 'mtm_cid', 18 => 'mtm_group', 19 => 'mtm_placement', );
$wp_cache_debug_username = 'a31ca348467e978de974ded04a514708';
$wp_cache_mobile_groups = '';
$wp_cache_home_path = '/';
$wp_cache_slash_check = 0;
$cache_page_secret = '98eb24863381fc2e34e89f33227ff186';
$cache_time_interval = '600';
if ( ! defined('WPCACHEHOME') )
	define( 'WPCACHEHOME', WP_CONTENT_DIR . "/plugins/wp-super-cache/" );

$cache_compression = 1;
$cache_enabled = true;
$super_cache_enabled = true;
$cache_max_time = 0;
//$use_flock = true; // Set it true or false if you know what to use
$cache_path = WP_CONTENT_DIR . '/cache/';
$file_prefix = 'wp-cache-';
$ossdlcdn = 0;

// Array of files that have 'wp-' but should still be cached
$cache_acceptable_files = array( 'wp-comments-popup.php', 'wp-links-opml.php', 'wp-locations.php' );

$cache_rejected_uri = array('wp-.*\\.php', 'index\\.php');
$cache_rejected_user_agent = array();

$cache_rebuild_files = 1;

// Disable the file locking system.
// If you are experiencing problems with clearing or creating cache files
// uncommenting this may help.
$wp_cache_mutex_disabled = 1;

// Just modify it if you have conflicts with semaphores
$sem_id = 1346251681;

if ( '/' != substr($cache_path, -1)) {
	$cache_path .= '/';
}

$wp_cache_mobile = 0;
$wp_cache_mobile_whitelist = 'Stand Alone/QNws';
$wp_cache_mobile_browsers = '2.0 MMP, 240x320, 400X240, AvantGo, BlackBerry, Blazer, Cellphone, Danger, DoCoMo, Elaine/3.0, EudoraWeb, Googlebot-Mobile, hiptop, IEMobile, KYOCERA/WX310K, LG/U990, MIDP-2., MMEF20, MOT-V, NetFront, Newt, Nintendo Wii, Nitro, Nokia, Opera Mini, Palm, PlayStation Portable, portalmmm, Proxinet, ProxiNet, SHARP-TQ-GX10, SHG-i900, Small, SonyEricsson, Symbian OS, SymbianOS, TS21i-10, UP.Browser, UP.Link, webOS, Windows CE, WinWAP, YahooSeeker/M1A1-R2D2, iPhone, iPod, iPad, Android, BlackBerry9530, LG-TU915 Obigo, LGE VX, webOS, Nokia5800';

// change to relocate the supercache plugins directory
$wp_cache_plugins_dir = WPCACHEHOME . 'plugins';
// set to 1 to do garbage collection during normal process shutdown instead of wp-cron
$wp_cache_shutdown_gc = 0;
$wp_super_cache_late_init = 0;

// uncomment the next line to enable advanced debugging features
$wp_super_cache_advanced_debug = 0;
$wp_super_cache_front_page_text = '';
$wp_super_cache_front_page_clear = 1;
$wp_super_cache_front_page_check = 1;
$wp_super_cache_front_page_notification = 0;

$wp_cache_anon_only = 0;
$wp_supercache_cache_list = 0;
$wp_cache_debug_to_file = 0;
$wp_super_cache_debug = 0;
$wp_cache_debug_level = 5;
$wp_cache_debug_ip = '';
$wp_cache_debug_log = '7da4bb0763b2f1cdda8d300fe4993e3e.php';
$wp_cache_debug_email = '';
$wp_cache_pages[ "search" ] = 0;
$wp_cache_pages[ "feed" ] = 0;
$wp_cache_pages[ "category" ] = 0;
$wp_cache_pages[ "home" ] = 0;
$wp_cache_pages[ "frontpage" ] = 0;
$wp_cache_pages[ "tag" ] = 0;
$wp_cache_pages[ "archives" ] = 0;
$wp_cache_pages[ "pages" ] = 0;
$wp_cache_pages[ "single" ] = 0;
$wp_cache_pages[ "author" ] = 0;
$wp_cache_hide_donation = 0;
$wp_cache_not_logged_in = 0;
$wp_cache_clear_on_post_edit = 1;
$wp_cache_hello_world = 0;
$wp_cache_mobile_enabled = 0;
$wp_cache_cron_check = 1;
$wp_cache_mfunc_enabled = 0;
$wp_cache_make_known_anon = 0;
$wp_cache_refresh_single_only = 1;
$wp_cache_mod_rewrite = 1;
$wp_supercache_304 = 1;
$wp_cache_front_page_checks = 0;
$wp_cache_disable_utf8 = 0;
$wp_cache_no_cache_for_get = 0;
$cache_scheduled_time = "00:00";
$wp_cache_preload_interval = 1440;
$cache_schedule_type = 'interval';
$wp_cache_preload_posts = 17;
$wp_cache_preload_on = 1;
$wp_cache_preload_taxonomies = 1;
$wp_cache_preload_email_me = 0;
$wp_cache_preload_email_volume = 'none';
$wp_cache_mobile_prefixes = 'w3c , w3c-, acs-, alav, alca, amoi, audi, avan, benq, bird, blac, blaz, brew, cell, cldc, cmd-, dang, doco, eric, hipt, htc_, inno, ipaq, ipod, jigs, kddi, keji, leno, lg-c, lg-d, lg-g, lge-, lg/u, maui, maxo, midp, mits, mmef, mobi, mot-, moto, mwbp, nec-, newt, noki, palm, pana, pant, phil, play, port, prox, qwap, sage, sams, sany, sch-, sec-, send, seri, sgh-, shar, sie-, siem, smal, smar, sony, sph-, symb, t-mo, teli, tim-, tosh, tsm-, upg1, upsi, vk-v, voda, wap-, wapa, wapi, wapp, wapr, webc, winw, winw, xda , xda-';
$cached_direct_pages = array(  );
$wpsc_served_header = false;
$cache_gc_email_me = 0;
$wpsc_save_headers = 0;
$cache_schedule_interval = 'hourly';
$wp_super_cache_comments = 1;
$wpsc_version = 169;
?>
