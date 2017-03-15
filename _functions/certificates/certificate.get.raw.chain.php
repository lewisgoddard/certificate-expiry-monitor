<?php

function Certificate_Get_Raw_Chain($host, $port = 443) {

	$timeout = 10;
	$max_chain_length = 10;
	$data = [];

	$stream = stream_context_create(
		array(
			'ssl' => array(
				'capture_peer_cert' => true,
				'capture_peer_cert_chain' => true,
				'verify_peer' => false,
				'peer_name' => $host,
				'verify_peer_name' => false,
				'allow_self_signed' => true,
				'sni_enabled' => true,
			),
		)
	);

	$read_stream = stream_socket_client(
		'ssl://'.$host.':'.$port,
		$errno,
		$errstr,
		$timeout,
		STREAM_CLIENT_CONNECT,
		$stream
	);

	if ( $read_stream === false ) {
		return false;
	} else {

		$context = stream_context_get_params($read_stream);
		$context_meta = stream_get_meta_data($read_stream)['crypto'];

		// Redundant Line ↓
		$cert_data = openssl_x509_parse($context['options']['ssl']['peer_certificate']);

		$chain_data = $context['options']['ssl']['peer_certificate_chain'];
		$chain_length = count($chain_data);

		if (isset($chain_data) && $chain_length < $max_chain_length) {
			foreach($chain_data as $key => $value) {
				$data['chain'][$key] = $value;
			}
		} else {
			$data['error'] = ['Chain too long.'];
			return $data;
		}
	}
	return $data;
}
