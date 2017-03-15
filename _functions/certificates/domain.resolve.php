<?php

function Certificates_Domain_Resolve($Domain) {

	$IP_List = dns_get_record($Domain, DNS_A + DNS_AAAA);

	sort($IP_List);

	if ( count($IP_List) == 0 ) {
		return array(
			'Success' => false,
			'Error' => 'Error resolving domain: '.$Domain.'.',
		);
	} else {

		// TODO Allow for the first value to not be A or AAAA
		if ( empty($IP_List[0]['type']) ) {
			return array(
				'Success' => false,
				'Error' => 'No DNS A/AAAA records for: '.$Domain.'.',
			);
		} else {

			if ($IP_List[0]['type'] === "AAAA") {
				if( !filter_var($IP, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6 ) ) {
					return array(
						'Success' => false,
						'Error' => 'Invalid domain AAAA record for: '.$Domain.'.',
					);
				}
				$IP = $IP_List[0]['ipv6'];

			} else if ($IP_List[0]['type'] === "A") {
				if( !filter_var($IP, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) ) {
					return array(
						'Success' => false,
						'Error' => 'Invalid domain A record for: '.$Domain.'.',
					);
				}
				$IP = $IP_List[0]['ip'];
			}

		}

	}

	return array(
		'Success' => true,
		'Error' => false,
		'IP' => $IP,
	);

}
