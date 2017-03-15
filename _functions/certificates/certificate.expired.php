<?php

function cert_expired($raw_cert_data) {
	$result = array();
	$today = strtotime(date('Y-m-d'));
	$cert_parsed = Certificate_Parse($raw_cert_data);
	$cert_expiry_date = cert_expiry_date($cert_parsed);
	$cert_expiry_date = strtotime(date('Y-m-d',$cert_expiry_date));
	// expired
	if ($today < $cert_expiry_date) {
		$result['cert_expired'] = false;
	} else {
		$result['cert_expired'] = true;
		$result['cert_time_expired'] = $today - $cert_expiry_date;
	}
	if ( $result['cert_expired'] == false ) {
		$cert_expiry_diff = $cert_expiry_date - $today;
		$result['cert_time_to_expiry'] = $cert_expiry_diff;
	}
	return $result;
}
