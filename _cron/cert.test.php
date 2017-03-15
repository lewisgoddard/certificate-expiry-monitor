<?php

$raw_chain = get_raw_chain(trim($Domain));
if (!$raw_chain) {
	$Errors[] = "Domain has invalid or no certificate: " . htmlspecialchars($Domain) . ".";
} else {
	foreach ($raw_chain['chain'] as $raw_key => $raw_value) {
		$cert_expiry = cert_expiry($raw_value);
		$cert_subject = cert_subject($raw_value);
		if ($cert_expiry['cert_expired']) {
			$Errors[] = "Domain has expired certificate in chain: " . htmlspecialchars($Domain) . ". Cert Subject: " . htmlspecialchars($cert_subject) . ".";
		}
	}
}
