<?php
require_once __DIR__.'/../../_puff/sitewide.php';
$Page['Type']  = 'Test';

$Domain_List = array(
	'www.google.com' => true,
 	'google.com' => true,
 	'mkyong123.com' => true,
 	'mkyong-info.com' => true,
 	'sub.mkyong.com' => true,
	'sub.mkyong-info.com' => true,
	'mkyong.com.au' => true,
	'sub.mkyong.com' => true,
	'sub.sub.mkyong.com' => true,
	'g.co' => true,
	'mkyong.t.t.co' => true,
	'mkyong.t.t.c' => false,      // Tld must at between 2 and 6 long
	'mkyong =>com' => false,     // comma not allowed
	'mkyong' => false,           // no tld
	'mkyong.123' => false,       // digit not allowed in tld
	'.com' => false,             // must start with [A-Za-z0-9]
	'mkyong.a' => false,         // last tld need at least two characters
	'mkyong.com/users' => false, // no tld
	'-mkyong.com' => false,      // Cannot begin with a hyphen -
	'mkyong-.com' => false,      // Cannot end with a hyphen -
	'sub.-mkyong.com' => false,  // Cannot begin with a hyphen -
	'sub.mkyong-.com' => false,  // Cannot end with a hyphen -
);

foreach ( $Domain_List as $Domain => $ExpectedResult ) {
	echo $Domain.PHP_EOL;
	$Result[$Domain] = Certificate_Domain_Validate($Domain);
	echo 'Result'.PHP_EOL;
	var_dump($Result[$Domain]);
	$Result[$Domain] = ( $Result[$Domain] == $ExpectedResult );
	echo 'Pass'.PHP_EOL;
	var_dump($Result[$Domain]);
	echo PHP_EOL;
}

if ( in_array(false, $Result, true) ) {
	echo 'TEST FAILED'.PHP_EOL;
	exit(1);
} else {
	echo 'TEST PASSED'.PHP_EOL;
}
