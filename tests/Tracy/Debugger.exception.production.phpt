<?php

/**
 * Test: Tracy\Debugger exception in production mode.
 *
 * @author     David Grudl
 * @package    Tracy
 * @assertCode 500
 */

use Tracy\Debugger;



require __DIR__ . '/../bootstrap.php';



Debugger::$productionMode = TRUE;
header('Content-Type: text/html');

Debugger::enable();

register_shutdown_function(function(){
	Assert::match('%A%<h1>Server Error</h1>%A%', ob_get_clean());
	die(0);
});
ob_start();


throw new Exception('The my exception', 123);
