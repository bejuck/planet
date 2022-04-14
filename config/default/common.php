<?php defined('developers') ? : die("akses langsung ke file ini ditangguhkan");

return [
  'site_name' => 'Planet Lagu',/*'Mp3Indexing',*/
  'site_tagline' => 'Download Mp3 Gratis',

  // Tag yang bisa digunakan untuk home_description: %site_name%, %domain%
  'home_description' => 'Download Mp3 Secara Gratis di Planet Lagu',
  // Tag yang bisa digunakan untuk search_title: %query%, %domain%
  'search_title' => 'Download %query% Gretongan',
  // Tag yang bisa digunakan untuk search_description: %query%, %domain%
  'search_description' => 'Deskripsi halaman pencarian disini',
  // Search Fafifu : %query%, %site_name%
  'fafifu_search' => 'Bellow Result for %query%  in this blog %site_name%.',

  'search_robots' => 'index,follow',
  // Tag yang bisa digunakan untuk download_title:  %title%, %duration%, %domain%, %size%
  'download_title' => '[%size%] Download Free Mp3 And Video %title%',
  // Tag yang bisa digunakan untuk download_description: %title%, %duration%, %domain%, %size%
  'download_description' => 'Download %title% %size% [%duration%] 128 Kbps,160 Kbps,192 Kbps,224 Kbps,256 Kbps,320 Kbps free mp3 mp4 flv 3gp and othe only at %domain% ',
  'download_robots' => 'index,follow',

  // 'play_title' => '[%size%] Playing and Download %title% ',
  // // Tag yang bisa digunakan untuk download_description: %title%, %duration%, %domain%, %size%
  // 'play_description' => 'Free Download Play Watch Video Mp4, FLV, 3GP %title% %size% [%duration%] and mp3 hight quality 128 Kbps,160 Kbps,192 Kbps,224 Kbps,256 Kbps,320 Kbps',

  // 'play_robots' => 'index,follow',
  // Download Fafifu : %query%, %site_name%
  // 'fafifu_play' => '%query% is just for review only. lorem ipsum dolor amet ',

  'fafifu_download' => 'Music Fafifu fufafi %query%review only.',
  // The song of Bruno Mars - Finesse (Remix) [Feat. Cardi B] [Official Video] is just for review only. If you really love this song "Bruno Mars - Finesse (Remix) [Feat. Cardi B] [Official Video]", please buy the original song to support author or singer of this song. 
  // Tag yang bisa digunakan untuk search_page_title: %query%
  'search_page_title' => '%query%',
  // Tag yang bisa digunakan untuk download_page_title: %title%
  'download_page_title' => '%title%',

  /**************************************************************/

  'search_permalink' => 'music/%query%',
  'download_permalink' => 'download/%slug%-%id%',
  // 'play_permalink' => 'play/%slug%-%id%', #Pro Version
  'file_permalink' => 'file',

  'sitemap_searches_permalink' => 'sitemap/searches.xml',
  // 'sitemap_downloads_permalink' => 'sitemap/downloads.xml',
  // 'sitemap_download_permalink' => 'sitemap/download-%num%.xml',#Pro Version
  // 'sitemap_plays_permalink' => 'sitemap/plays.xml',#Pro Version
  // 'sitemap_play_permalink' => 'sitemap/play-%num%.xml',#Pro Version
  'sitemap_keywords_permalink' => 'keyword-%num%.xml',
  // 'sitemap_keyword_permalink' => 'keyword-%num%.xml',#Pro Version

  'sitemap_index_permalink' => 'sitemap.xml',

  /*TOS & DISCLAIMER PERMALINK*/
  'tos_permalink' => 'p/term-of-services',
  'disclaimer_permalink' => 'p/disclaimer',

  // /*Safelink / link download*/
  // 'phone_permalink' => 'phone/%query%',
  // /*Billboard Top 100 */
  // 'billboard_permalink' => 'top-100',
  // //Itunes Top SOng
  // 'itunes_top_songs_permalink' => 'itunes-top-song',

  /**************************************************************/

  /**
   * Untuk melihat kode negara yang tersedia, silahkan cek link dibawah:
   * https://rss.itunes.apple.com/
   */

  'itunes_country' => 'us',
  'itunes_count' => 12,

  /**************************************************************/

  'youtube_top_videos_count' => 10,
  'youtube_top_videos_country' => 'US',
  'youtube_search_count' => 5,
  // Pisahkan dengan koma untuk menggunakan banyak API
  'youtube_api_keys' => 'apisatu,dua,tiga',

  'soundcloud_search_count' => 5,
  // Pisahkan dengan koma untuk menggunakan banyak API / Client ID
  'soundcloud_client_ids' => 'API_Satu,API_Dua, DST',

  // Maksimal sitemap perhalaman adalah 50000,
  'sitemap_limit' => 1000,

  /**************************************************************/
  #DEPRECATED
  /**
   * Jika agan menggunakan konfigurasi multisite,
   * maka otomatis akan tergenerate direktori sesuai nama domain di direktori /store.
   * Direktori ini berfungsi untuk tempat penyimpanan data seperti cache, pencarian terbaru
   * dan file untuk inject keyword
   * Gunakan nilai 'true' (tanpa tanda petik) jika agan ingin menggunakan direktori berdasarkan domain
   * Tapi gunakan nilai 'false' (tanpa tanda petik) jika agan ingin menggunakan direktori default
   */

  //'use_default_store' => true,
  #DEPRECATED
  /*
  * Support multisite.
  * Setting folder /config/domain/.... untuk customize. 
  * Nama File harus diawali dengan nama domain ($_SERVER['HTTP_HOST'];)
  * Ex: 
  * -> cnn.com.common.php 
  * -> cnn.com.routes.php
  */


  /**************************************************************/

  'enable_cache' => true,

  'save_recent_searches' => true,
  'recent_searches_limit' => 25000,
  'recent_searches_count' => 15,

  /**************************************************************/

  /**
   * Option ini berfungsi memeriksa apakah anda ingin menggunakan direktori keyword dari direktori default
   * atau dari direktori domain (jika 'use_default_store' = true)
   */

  // 'use_default_keyword_files' => false,

  /**************************************************************/
  
  /*
  * Opsi ini untuk menentukan lokasi keyword file / folder keyword jika use_default_keyword_files bernilai 'false' tanpa petik
  * Lokasi folder di dalam folder /store/namafoldermu 
  */
  'keyword_dir' =>'mykw', //string

  /**************************************************************/
  /**
  * Language 
  * Default => en
  * Opsi yang ada: id,en, bisa ditambah di folder /libraries/lang
  */
  'language' => 'en',

  /*
  * OPsi ini untuk keperluan subdomain dan bahasa. 1 subdomain satu bahasa
  * contoh : 
  */
/*<link href="https://gb.url.com/" rel="alternate" hreflang="en-gb">
<link href="https://ca.url.com/" rel="alternate" hreflang="en-ca">
<link href="https://au.url.com/" rel="alternate" hreflang="en-au">
<link href="https://nz.url.com/" rel="alternate" hreflang="en-nz">
<link href="https://uk.url.com/" rel="alternate" hreflang="uk">
<link href="https://ru.url.com/" rel="alternate" hreflang="ru">
<link href="https://he.url.com/" rel="alternate" hreflang="he">
<link href="https://ar.url.com/" rel="alternate" hreflang="ar">
<link href="https://id.url.com/" rel="alternate" hreflang="id">
<link href="https://tr.url.com/" rel="alternate" hreflang="tr">
<link href="https://es.url.com/" rel="alternate" hreflang="es">
<link href="https://th.url.com/" rel="alternate" hreflang="th">
<link href="https://fr.url.com/" rel="alternate" hreflang="fr">
<link href="https://vi.url.com/" rel="alternate" hreflang="vi">
<link href="https://pl.url.com/" rel="alternate" hreflang="pl">
<link href="https://pt.url.com/" rel="alternate" hreflang="pt">
<link href="https://de.url.com/" rel="alternate" hreflang="de">
<link href="https://it.url.com/" rel="alternate" hreflang="it">
<link href="https://el.url.com/" rel="alternate" hreflang="el">
<link href="https://ja.url.com/" rel="alternate" hreflang="ja">
<link href="https://hu.url.com/" rel="alternate" hreflang="hu">
<link href="https://ro.url.com/" rel="alternate" hreflang="ro">
<link href="https://bg.url.com/" rel="alternate" hreflang="bg">
<link href="https://cs.url.com/" rel="alternate" hreflang="cs">
<link href="https://zh.url.com/" rel="alternate" hreflang="zh">
<link href="https://sr.url.com/" rel="alternate" hreflang="sr">
<link href="https://ko.url.com/" rel="alternate" hreflang="ko">
<link href="https://sk.url.com/" rel="alternate" hreflang="sk">
<link href="https://hr.url.com/" rel="alternate" hreflang="hr">
<link href="https://nl.url.com/" rel="alternate" hreflang="nl">
<link href="https://lt.url.com/" rel="alternate" hreflang="lt">
<link href="https://sv.url.com/" rel="alternate" hreflang="sv">
<link href="https://fi.url.com/" rel="alternate" hreflang="fi">
<link href="https://da.url.com/" rel="alternate" hreflang="da">
<link href="https://url.com/" rel="alternate" hreflang="en">
* Jangan lupa buat subdomainnya!
*/


// 'available_lang' => [
//   'subdomain' => false, //set true untuk aktifkan, false untuk non aktifkan
//   'language' => ['gb'=>'en-gb','ca'=>'en-ca','au'=>'en-au','nz'=>'en-nz','uk'=>'uk','ru'=>'ru','he'=>'he','ar'=>'ar','id'=>'id','tr'=>'tr','es'=>'es','th'=>'th','fr'=>'fr','vi'=>'vi','pl'=>'pl','pt'=>'pt','de'=>'de','it'=>'it','el'=>'el','ja'=>'ja','hu'=>'hu','ro'=>'ro','bg'=>'bg','cs'=>'cs','zh'=>'zh','sr'=>'sr','ko'=>'ko','sk'=>'sk','hr'=>'hr','nl'=>'nl','lt'=>'lt','sv'=>'sv','fi'=>'fi','da'=>'da', ] //subdomain => hreflang
// ], #Pro Version

  /**************************************************************/
  /**
  * Photon CDN 
  * TRUE untuk aktifkan https://i0.wp.com/imageurl.com/path/to/image.jpg 
  * FALSE Untuk Non Aktifkan http://imageurl.com/path/to/image.jpg 
  */
  'photon_cdn' => true,
  
  /**************************************************************/
  /**
  * Themes
  * Theme Available => #Pro Version
  */
  'theme' => 'dugmp3',
  //https://dugagece.blogspot.com/2018/02/agc-mp3-gratis-2018.html
  /**************************************************************/
  /**
  * histats id
  * Hitstat id = 999999
  */
  'histats' => '',
  // 'autocomplete' => true,#Pro Version
  /**************************************************************/
  /**
  * Footer
  * %year%, %site_name%, %tos_permalink%, %disclaimer_permalink%
  */
  'footer_copyright' => '&copy; %year% %site_name%. All rights reserved. </br><a href="%tos_permalink%" title="TOS" />TOS</a>|<a href="%disclaimer_permalink%" title="TOS" />Disclaimer</a>'
  /**************************************************************/
];
