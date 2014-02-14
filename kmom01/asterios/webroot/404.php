<?php 
/**
 * This is a Asterios pagecontroller.
 *
 */
// Include the essential config-file which also creates the $asterios variable with its defaults.
include(__DIR__.'/config.php'); 



// Do it and store it all in variables in the Asterios container.
$asterios['title'] = "404";
$asterios['header'] = "";
$asterios['main'] = "This is a Asterios 404. Document is not here.";
$asterios['footer'] = "";

// Send the 404 header 
header("HTTP/1.0 404 Not Found");


// Finally, leave it all to the rendering phase of Asterios.
include(ASTERIOS_THEME_PATH);
