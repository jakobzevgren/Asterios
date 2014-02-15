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
<div style="width: 640px;">
<h1>Redovisning av kursmomenten</h1>
<h3>Kmom01: Kom igång med Objektorienterad PHP</h3>
<article>
<p>Min erfarenhet av webbramverk är/var ganska begränsad så det tog en hel del tid att få känsla för Anax. Php och själva programmeringsdelen kändes överkomlig, men att förstå hur koden är uppdelad och hur koppling mellan de olika filerna sker var lite krånlig att lista ut och jag tycker inte att kursmaterialet har förklarat det på ett bra sätt. Till exempel tycker jag att övning 3 "Jobba igenom tutorialen <a href='http://dbwebb.se/kod-exempel/dynamic_php_menu/' target="_blank">“Create a dynamic menu / navigation bar with PHP”</a> " var näst intill katastrofal. Jag hade inga problem att förstå eller följa tutorialen, men den leder inte (i alla fall inte för mig) till en integrerad fungerande menu i Anax/Asterios (däremot får jag den fungerande på en <a href='test_menu.php' target="_blank">egen sida</a>. Men när jag av en slump hittade 
<a href='http://dbwebb.se/coachen/skapa-en-dynamisk-navbar-meny-med-php' target="_blank">"Skapa en dynamisk navbar / meny med PHP"</a> så var det ju helt plötsligt inga problem att få till lösningen i ramverket. Så jag tycker att övning 3 kan förbättras så att man får mer hjälp-instruktioner direkt i tutorialen. Men jag tycker det har varit väldigt roligt och spännande att lösa övningarna, bara det att det har tagit längre tid än det hade behövt ta om instruktionerna hade varit upplagda på ett annat sätt. Övning 4 med CSource var superkul och intressant, och den tutorialen är jättebra gjord!
Sen märkte jag att jag saknar lite CSS-kunskaper och fick göra en liten crashcourse i det, det kanske det skulle kunna länkas till i nån av texterna så man, som jag slipper spendera ett par dagar med att googla :) <br>
Har lagt till <code>dump(&#36;_SERVER)</code> i <a href='dice.php' target="_blank">dice.php</a>. Lite osäker på bästa sättet att göra dump-utskrift på. Har gjort en if-isset-sats i index.tpl.php som är kopplad till om <code>&#36;asterios['dump']</code> är null eller inte.
</p>

<p>
<i><b>Vilken utvecklingsmiljö använder du?</b></i><br>
Windows 7, Firefox, Notepad++ och WinSCP<br>
<i><b>Berätta hur det gick att jobba igenom guiden “20 steg för att komma igång PHP”, var något nytt eller kan du det?</b></i><br>
De "20 stegen" kunde jag hyfsat och det nya var hyfsat enkelt att förstå.<br>
<i><b>Vad döpte du din webbmall Anax till?</b></i><br>
Asterios, <a href='http://www.theoi.com/Gigante/GiganteAnaxAsterios.html' target="_blank">son of Anax</a> :) Och loggan är asterias-sjöstjärnan...<br>
<i><b>Vad anser du om strukturen i Anax, gjorde du några egna förbättringar eller något du hoppade över?</b></i><br>
Har alldeles för lite erfarenhet av webbramverk för att kunna göra annat än att följa anvisningarna...<br>
<i><b>Gick det bra att inkludera source.php? Gjorde du det som en modul i ditt Anax?</b></i><br>
Gick mycket bra tack vare den grymma tutorialen, och jag gjorde det som en modul.<br>
<i><b>Gjorde du extrauppgiften med GitHub?</b></i><br>
Well, lite. Är nyfiken på versionshantering och GitHUb. Men pga tidsbrist så installerade jag GitHub for Windows och körde via den. </p>
<article>
</div>
EOD;

/* Look in config.php
$asterios['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/jaze/Asterios'>Asterios på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;*/


// Finally, leave it all to the rendering phase of asterios.
include(ASTERIOS_THEME_PATH);
