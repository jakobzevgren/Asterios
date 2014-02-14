<?php 
/**
 * This is a Asterios pagecontroller.
 *
 */
// Include the essential config-file which also creates the $asterios variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the Asterios container.
$asterios['title'] = "Asterios was a gigant. Asterias is a starfish.";

$asterios['header'] = <<<EOD
<img class='sitelogo' src='img/asterias.png' alt='Asterios Logo'/>
<span class='sitetitle'>Asterios webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$asterios['main'] = <<<EOD
<h1>Hej! Se på mig, jag är en stjärn, en sjöstjärna!</h1>
<p>Detta är en exempelsida som visar hur Asterios ser ut och fungerar.</p>
EOD;

$asterios['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/jaze/Asterios'>Asterios på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


// Finally, leave it all to the rendering phase of asterios.
include(ASTERIOS_THEME_PATH);
