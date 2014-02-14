<?php 
/**
 * This is a Asterios pagecontroller.
 *
 */
// Include the essential config-file which also creates the $asterios variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the Asterios container.
$asterios['title'] = "Om mig.";

$asterios['header'] = <<<EOD
<img class='sitelogo' src='img/asterias.png' alt='Asterios Logo'/>
<span class='sitetitle'>Asterios webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$asterios['main'] = <<<EOD
<h1>Om mig</h1>
<p>Jag heter Jakob Zevgren och bor i Göteborg. Jag är född och uppvuxen i Köping.</p>

<p>Jag pluggar programmeringskurser på distans och försöker knyta ihop en examen.</p>
EOD;

/* Look in config.php
$asterios['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/jaze/Asterios'>Asterios på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;*/


// Finally, leave it all to the rendering phase of Asterios.
include(ASTERIOS_THEME_PATH);
