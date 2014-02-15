<?php
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly

include(__DIR__.'/config.php'); // i config.php inkluderas src/bootstrap.php där "function dump($array)" ligger

?>

<!doctype html>
<html lang="sv"> 
<head>
<meta charset="utf-8"/>
<title>Funktionen dump() för att skriva ut innehåll i array</title>
</head>
<body>
<h1>Funktionen dump() för att skriva ut innehåll i array</h1>

<p>Allt innehåll i arrayen $_SERVER:</p>
<?=dump($_SERVER)?>

<hr>
<a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
<a href="viewsource.php?path=webroot/dump.php">Källkod</a>
</body>
</html>