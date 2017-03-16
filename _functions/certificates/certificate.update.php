<?php

function Certificate_Update($Connection, $Username, $Domain, $cert_cn, $cert_sig, $cert_serial, $cert_subject, $cert_valid_from, $cert_valid_to) {

	$Username = htmlentities($Username, ENT_QUOTES, 'UTF-8');
	$Domain = htmlentities($Domain, ENT_QUOTES, 'UTF-8');
	$cert_cn = htmlentities($cert_cn, ENT_QUOTES, 'UTF-8');
	$cert_sig = htmlentities($cert_sig, ENT_QUOTES, 'UTF-8');
	$cert_serial = htmlentities($cert_serial, ENT_QUOTES, 'UTF-8');
	$cert_subject = htmlentities($cert_subject, ENT_QUOTES, 'UTF-8');
	$cert_valid_from = htmlentities($cert_valid_from, ENT_QUOTES, 'UTF-8');
	$cert_valid_to = htmlentities($cert_valid_to, ENT_QUOTES, 'UTF-8');

	$Query = 'REPLACE INTO `Certificates`
		(`Username`, `Domain`, `Certificate`, `Signature`, `Serial Number`, `Subject`, `Valid From`, `Valid To`)
	VALUES
		(\''.$Username.'\', \''.$Domain.'\', \''.$cert_cn.'\', \''.$cert_sig.'\', \''.$cert_serial.'\', \''.$cert_subject.'\', \''.$cert_valid_from.'\', \''.$cert_valid_to.'\');';

	$Result = mysqli_query(
		$Connection,
		$Query
	);

	return $Result;

}
