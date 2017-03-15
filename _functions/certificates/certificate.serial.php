<?php

function cert_serial($cert_data) {
	if ( isset($cert_data['serialNumber']) ) {
		$serial = [];
		$sn = str_split(strtoupper(bcdechex($cert_data['serialNumber'])), 2);
		$sn_len = count($sn);
		foreach ($sn as $key => $s) {
			$serial[] = htmlspecialchars($s);
			if ( $key != $sn_len - 1) {
				$serial[] = ':';
			}
		}
		$result = implode('', $serial);
		return $result;
	}
}
