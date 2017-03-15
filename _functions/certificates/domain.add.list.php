<?php
// Copyright (C) 2015 Remy van Elst

// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.	See the
// GNU Affero General Public License for more details.

// You should have received a copy of the GNU Affero General Public License
// along with this program.	If not, see <http://www.gnu.org/licenses/>.

function Certificates_Domain_Add_List($Connection, $Username, $Domain_List, $ValidationKey) {

	global $Time;

	$Errors = array();

	$Domain_List = explode("\n", $Domain_List);
	$Domain_List = array_unique($Domain_List);

	foreach ($Domain_List as $Key => $Domain) {

		$Domain = Certificates_Domain_Sanitize($Domain);

		if ( !Certificates_Domain_Validate($Domain) ) {
			$Errors[] = "Invalid domain name: " . htmlspecialchars($Domain) . ".";
		}

		// TODO Check for Duplicates

		$Resolved = Certificates_Domain_Resolve($Domain);
		if ( !$Resolved['Success'] ) {
			$Errors[] = $Resolved['Error'];
		} else {
			$IP = $Resolved['IP'];
		}

	}

	// TODO Below here
	if ( is_array($Errors) && count($Errors) == 0 ) {
		foreach ($Domain_List as $Key => $Domain) {
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
		}
	}

	if (is_array($Errors) && count($Errors) >= 1) {
		$result = array();
		foreach ($Errors as $Key => $Domain) {
			$result['errors'][] = $Domain;
		}
		return $result;
	} else {
		$result = array();
		foreach ($Domain_List as $Key => $Domain) {
			$result['domains'][] = $Domain;
		}
		return $result;
	}
}
