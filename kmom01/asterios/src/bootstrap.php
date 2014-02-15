<?php
/**
 * Bootstrapping functions, essential and needed for Asterios to work together with some common helpers. 
 *
 */

/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception) {
  echo "Asterios: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');


/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
  $path = ASTERIOS_INSTALL_PATH . "/src/{$class}/{$class}.php";
  if(is_file($path)) {
    include($path);
  }
  else {
    throw new Exception("Classfile '{$class}' does not exists.");
  }
}
spl_autoload_register('myAutoloader');

/**
 * En funktion f�r dumpa ut inneh�llet i en array och debugga
 * "skriver funktionens namn och skickar med den array jag vill skriva ut"
 * "En funktion skall vara kort och g�ra en sak, blir den f�r l�ng s� blir koden o�versk�dlig och d� b�r du bryta ned
 * funktionen i mindre delar. Ett riktv�rde kan vara max 30 rader kod per funktion, helst mindre. Men det beror alltid p�
 * vad man g�r. Mina egna funktioner �r ofta mindre �n tio rader kod."
 *
 */
function dump($array) {
  echo "<pre>" . htmlentities(print_r($array, 1)) . "</pre>";
}
