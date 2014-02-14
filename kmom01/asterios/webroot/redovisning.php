<?php 
/**
 * This is a Asterios pagecontroller.
 *
 */
// Include the essential config-file which also creates the $asterios variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the Asterios container.
$asterios['title'] = "Redovisning";

$asterios['header'] = <<<EOD
<img class='sitelogo' src='img/asterias.png' alt='Asterios Logo'/>
<span class='sitetitle'>Asterios webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$asterios['main'] = <<<EOD
<h1>Redovisning av kursmomenten</h1>
<h3>Kmom01: Kom igång med Objektorienterad PHP</h3> 

<p>Till en början gick allting bra och jag upplevde föreläsningsmaterialet som mycket bra. Men ju längre jag kom i 
uppgiften desto värre upplevde jag materialet. "Dynamic navigation bar" är horibel. </p>

<p>Jag utvecklar på Windows 7 med Notepad++ och webbläsaren Firefox men har även IE, Google Chrome och Opera av referensskäl. För filöverföringar använder jag mest WinSCP och för revisionshantering Github för Windows.</p>
EOD;

/* Look in config.php
$asterios['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/jaze/Asterios'>Asterios på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;*/


// Finally, leave it all to the rendering phase of asterios.
include(ASTERIOS_THEME_PATH);
