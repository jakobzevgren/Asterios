<?php 
/**
 * This is a Asterios pagecontroller.
 *
 */
// Include the essential config-file which also creates the $asterios variable with its defaults.
include(__DIR__.'/config.php'); 



// Demonstration of module CDice
$dice = new CDice();

$roll = isset($_GET['roll']) && is_numeric($_GET['roll']) ? $_GET['roll'] : 0;

if($roll > 100) {
  throw new Exception("To many rolls on the dice. Not allowed.");
}

$html = null;
if($roll) {
  $dice->Roll($roll);

  $html = "<p>Du gjorde {$roll} kast och fick följande resultat.</p>\n<ul>";
  foreach($dice->GetResults() as $val) {
    $html .= "\n<li>{$val}</li>";
  }
  $html .= "\n</ul>\n";

  $html .= "<p>Totalt fick du " . $dice->GetTotal() . " poäng på dina kast.</p>";
}

// Do it and store it all in variables in the Asterios container.
$asterios['title'] = "Kasta tärning";

$asterios['main'] = <<<EOD
<h1>Kasta tärning</h1>
<p>Detta är en exempelsida som visar hur Asterios fungerar tillsammans med återanvändbara moduler.</p>
<p>Hur många kast vill du göra, <a href='?roll=1'>1 kast</a>, <a href='?roll=3'>3 kast</a> eller <a href='?roll=6'>6 kast</a>? </p>
{$html}
EOD;

/**
 * Activates dumping
 * i config.php inkluderas src/bootstrap.php där "function dump($array)" ligger.
 * ['dump'] är kopplad till isset i theme/index.tpl.php
 */
$asterios['dump'] = "Dumpa";
// $asterios['dump'] = null; // sätt till null ger ingen dump-utskrift




// Finally, leave it all to the rendering phase of Asterios.
include(ASTERIOS_THEME_PATH);
