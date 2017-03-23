<?php

require_once __DIR__.'/../../_puff/sitewide.php';
$Page['Type']  = 'Cron';

$Domain_List = mysqli_fetch_once(
	$Sitewide['Database']['Connection'],
	'SELECT * FROM `Domains` ORDER BY `Checked` DESC;'
);
var_dump($Domain_List);

$Username = $Domain_List['Username'];
$Domain = $Domain_List['Domain'];

$raw_chain = Certificate_Get_Raw_Chain($Domain);

if ( !$raw_chain ) {
	$Errors[] = 'Domain has invalid or no certificate: ' . htmlspecialchars($Domain);
	// TODO Log Error & Queue EMail
} else {
	$Cert_Num = 0;
	foreach ($raw_chain['chain'] as $raw_key => $raw_value) {
		$Cert_Num++;

		#echo 'Full Data'.PHP_EOL;
		$cert_parsed = Certificate_Parse($raw_value);
		#var_dump($cert_parsed);
		#echo PHP_EOL;

		echo 'Common Name'.PHP_EOL;
		$cert_cn = cert_cn($cert_parsed);
		var_dump($cert_cn);
		echo PHP_EOL;

		echo 'Signature'.PHP_EOL;
		$cert_sig = cert_sig($cert_parsed);
		var_dump($cert_sig);
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
		$cert_valid_from = date(DATE_ATOM, $cert_valid_from);
		var_dump($cert_valid_from);
		echo PHP_EOL;

		echo 'Valid To'.PHP_EOL;
		$cert_valid_to = cert_expiry_date($cert_parsed);
		$cert_valid_to = date(DATE_ATOM, $cert_valid_to);
		var_dump($cert_valid_to);
		echo PHP_EOL;

		$cert_expiry = cert_expired($raw_value);
		var_dump($cert_expiry);
		echo PHP_EOL;

		// Log Certificates under Domain
		echo 'Update Certificate'.PHP_EOL;
		$Result = Certificate_Update($Sitewide['Database']['Connection'], $Username, $Domain, $Cert_Num, $cert_cn, $cert_sig, $cert_serial, $cert_subject, $cert_valid_from, $cert_valid_to);
		var_dump($Result);
		echo PHP_EOL.PHP_EOL.PHP_EOL;

	}
}

// TODO Check Status

echo 'Update Domain Checked Time'.PHP_EOL;
$Time_ATOM = date(DATE_ATOM, $Time);
$Domain_Checked = 'UPDATE `Domains` SET `Checked`=\''.$Time_ATOM.'\' WHERE `Domain`=\''.$Domain.'\';';
$Domain_Checked = mysqli_query(
	$Sitewide['Database']['Connection'],
	$Domain_Checked
);
var_dump($Domain_Checked);

if ( !empty($Errors) ) {
	var_dump($Errors);
}
