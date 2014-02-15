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

// http://html5doctor.com/the-article-element/
$asterios['main'] = <<<EOD
<div style="width: 640px;">
<h1>Om mig</h1>
<article>
<p>Jag heter Jakob och bor i Göteborg, men är född och uppvuxen i Köping. Till vardags jobbar jag deltid på ett industribageri som heter <a href='http://www.fria.se/om-fria.aspx' target="_blank">Fria bröd</a> där jag paketerar brödfryspåsar. All annan tid försöker jag lägg på att plugga programmeringskurser på distans, så att jag kan knyta ihop en examen. Tränar en del också och försöker få till fysiken att klara ett <a href='http://www.youtube.com/watch?v=eRiIBniN4oY' target="_blank">triathlon</a> och kanske ett <a href='http://www.youtube.com/watch?v=LohiNobXNs0' target="_blank">Vasalopp</a> :)</p>
<p>Inom en snar framtid hoppas jag att jag jobbar med webbutveckling på heltid och kan simma en kilometer i öppet vatten :) </p>
<article>
</div>
EOD;

/* Look in config.php
$asterios['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/jaze/Asterios'>Asterios på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;*/


// Finally, leave it all to the rendering phase of Asterios.
include(ASTERIOS_THEME_PATH);
