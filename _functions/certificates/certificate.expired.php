<?php

function cert_expired($raw_cert_data) {
	$result = array();
	$today = strtotime(date('Y-m-d'));
	$cert_parsed = Certificate_Parse($raw_cert_data);
	$cert_valid_to = cert_expiry_date($cert_parsed);
	$cert_valid_to = strtotime(date('Y-m-d',$cert_valid_to));
	// expired
	if ($today < $cert_valid_to) {
		$result['cert_expired'] = false;
	} else {
		$result['cert_expired'] = true;
		$result['cert_time_expired'] = $today - $cert_valid_to;
	}
	if ( $result['cert_expired'] == false ) {
		$cert_expiry_diff = $cert_valid_to - $today;
		$result['cert_time_to_expiry'] = $cert_expiry_diff;
	}
	return $result;
}
