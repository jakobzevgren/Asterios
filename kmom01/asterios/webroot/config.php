<?php
/**
 * Config-file for Asterios. Change settings here to affect installation.
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
 * Define asteriossterios paths.
 *
 */
define('ASTERIOS_INSTALL_PATH', __DIR__ . '/..');
define('ASTERIOS_THEME_PATH', ASTERIOS_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(ASTERIOS_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Create the Asterios variable.
 *
 */
$asterios = array();


/**
 * Site wide settings.
 *
 */
$asterios['lang']         = 'sv';
$asterios['title_append'] = ' | Asterios en webbtemplate';

$asterios['header'] = <<<EOD
<img class='sitelogo' src='img/asterias.png' alt='Asterios Logo'/>
<span class='sitetitle'>Asterios webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$asterios['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Jakob (jakobzevgren[@]gmail.com) | <a href='https://github.com/jakobzevgren/Asterios'>Asterios på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;



/**
 * Theme related settings.
 *
 */
//$asterios['stylesheet'] = 'css/style.css';
$asterios['stylesheets'] = array('css/style.css');
$asterios['favicon']    = 'favicon.ico';



/**
 * Settings for JavaScript.
 *
 */
$asterios['modernizr'] = 'js/modernizr.js';
$asterios['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$asterios['jquery'] = null; // To disable jQuery
$asterios['javascript_include'] = array();
//$asterios['javascript_include'] = array('js/main.js'); // To add extra javascript files



/**
 * Google analytics.
 *
 */
$asterios['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics

/**
 * Test av Byline footer.
 * Ligger inline i hello.php, rad 22 {$asterios['byline']}
 */
/*$asterios['byline'] = <<<EOD
<footer class="byline">
  <p>Test av Byline footer.</p>
</footer>
EOD;*/

/**
 * Test av utskrift.
 * in index.tpl.php in asterios/theme put <div id='test'><?=$test?></div> in for example <body>
 */
/*$asterios['test'] = <<<EOD
<p>Test av utskrift...</p>
EOD;*/

/**
 * Define the menu as an array
 */
$asterios['menu'] = array( // also test 'class' => 'nb-plain'
  'class' => 'nb-black', // css-class för styleing, see webroot/css/style.css
  'items' => array(
    'hem'         => array('text'=>'Hem',         'url'=>'me.php',          'title' => 'Min presentation om mig själv'),
    'redovisning' => array('text'=>'Redovisning', 'url'=>'redovisning.php', 'title' => 'Redovisningar för kursmomenten'),
    'kallkod'     => array('text'=>'Källkod',     'url'=>'viewsource.php',      'title' => 'Se källkoden'),
	'slideshow'     => array('text'=>'Javascript',     'url'=>'slideshow.php',      'title' => 'Javascript slideshow'),
	'dice'     => array('text'=>'Dice med dump()',     'url'=>'dice.php',      'title' => 'Dice med dump()'),
  ),
  'callback_selected' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {           
      return $url;
    }
  }
);