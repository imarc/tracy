<?php

/**
 * Test: Tracy\Dumper::toText() locale
 *
 * @author     David Grudl
 * @package    Tracy
 */

use Tracy\Dumper;



require __DIR__ . '/../bootstrap.php';



setLocale(LC_ALL, 'czech');

Assert::match( 'array (2)
   0 => -10.0
   1 => 10.3
', Dumper::toText(array(-10.0, 10.3)));
