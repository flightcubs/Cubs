<?php
/**
 * Config-file for Cubs. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Cubs paths.
 *
 */
define('CUBS_INSTALL_PATH', __DIR__ . '/../cubs');
define('CUBS_THEME_PATH', CUBS_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(CUBS_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Cubs variable.
 *
 */
$cubs = array();
 
 
/**
 * Site wide settings.
 *
 */
$cubs['lang']         = 'sv';
$cubs['title_append'] = ' | oophp';

$cubs['header'] = <<<EOD
<img class='sitelogo' src='img/cubs.png' alt='Cubs Logo'/>
<span class='sitetitle'>Me oophp</span>
<span class='siteslogan'>Filips Me-sida i kursen Databaser och Objektorienterad PHP-programmering</span>
EOD;

$cubs['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Filip Hedberg (flightcubs [at] gmail.com) | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

$cubs['byline'] = <<<EOD
<footer class="byline">
<figure class="right top"><img src="img/closeup_filip.jpg" alt="Closeup Filip" height="50"></figure>
<p>Filip Hedberg är en nyfiken ingenjör som länge nosat runt kring programmering och webdesign. 
Det du avnjuter nu är hans första stapplande steg i rätt riktning. </p>
</footer>
EOD;


/**
 * The navbar
	*
 */
//$cubs['navbar'] = null; // To skip the navbar
$cubs['navbar'] = array(
'class' => 'nb-plain',
'items' => array(
'hem'         => array('text'=>'Hem',         'url'=>'me.php',          'title' => 'Min presentation om mig själv'),
'redovisning' => array('text'=>'Redovisning', 'url'=>'redovisning.php', 'title' => 'Redovisningar för kursmomenten'),
'kallkod'     => array('text'=>'Källkod',     'url'=>'source.php',      'title' => 'Se källkoden'),
),
'callback_selected' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
		return true;
    }
}
);



/**
 * Theme related settings.
 *
 */
$cubs['stylesheets'] = array('css/style.css');
$cubs['favicon']    = 'favicon.ico';

/**
 * Settings for JavaScript.
 *
 */
$cubs['modernizr'] = 'js/modernizr.js';

$cubs['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$cubs['jquery'] = null; // To disable jQuery

$cubs['javascript_include'] = array();
//$cubs['javascript_include'] = array('js/main.js'); // To add extra javascript files

/**
 * Google analytics.
 *
 */
$cubs['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics