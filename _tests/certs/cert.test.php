<?php

require_once __DIR__.'/../../_puff/sitewide.php';
$Page['Type']  = 'Test';

$Domain = 'this-is-not-a-real-domain-name.com';

$raw_chain = Certificate_Get_Raw_Chain($Domain);

if (!$raw_chain) {
	$Errors[] = 'Domain has invalid or no certificate: ' . htmlspecialchars($Domain);
} else {
	foreach ($raw_chain['chain'] as $raw_key => $raw_value) {

		$cert_parsed = Certificate_Parse($raw_value);

		echo 'Common Name'.PHP_EOL;
		$cert_cn = cert_cn($cert_parsed);
		var_dump($cert_cn);
		echo PHP_EOL;

		echo 'Serial Number'.PHP_EOL;
		$cert_serial = cert_serial($cert_parsed);
		var_dump($cert_serial);
		echo PHP_EOL;

		echo 'Subject'.PHP_EOL;
		$cert_subject = cert_subject($cert_parsed);
		var_dump($cert_subject);
		echo PHP_EOL;

		echo 'Valid From'.PHP_EOL;
		$cert_valid_from = cert_valid_from($cert_parsed);
		var_dump(date(DATE_ATOM, $cert_valid_from));
		echo PHP_EOL;

		echo 'Expiry Date'.PHP_EOL;
		$cert_expiry_date = cert_expiry_date($cert_parsed);
		var_dump(date(DATE_ATOM, $cert_expiry_date));
		echo PHP_EOL;

		$cert_expiry = cert_expired($raw_value);
		var_dump($cert_expiry);
		echo PHP_EOL.PHP_EOL.PHP_EOL;

	}
}

if ( !empty($Errors) ) {
	var_dump($Errors);
}
