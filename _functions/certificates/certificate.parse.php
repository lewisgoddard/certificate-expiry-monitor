<?php

function Certificate_Parse($raw_cert_data) {
	$cert_data = openssl_x509_parse($raw_cert_data);
	return $cert_data;
}
