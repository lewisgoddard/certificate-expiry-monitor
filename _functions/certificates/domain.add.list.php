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

function Certificate_Domain_Add_List($Connection, $Username, $Domain_List, $ValidationKey) {

	global $Time;

	$Errors = array();

	// TODO Check Username Exists

	$Domain_List = explode("\n", $Domain_List);
	$Domain_List = array_unique($Domain_List);

	foreach ($Domain_List as $Key => $Domain) {

		$Domain = Certificate_Domain_Sanitize($Domain);

		if ( !Certificate_Domain_Validate($Domain) ) {
			$Errors[] = "Invalid domain name: " . htmlspecialchars($Domain) . ".";
		}

		// TODO Check for Duplicates

		$Resolved = Certificate_Domain_Resolve($Domain);
		if ( !$Resolved['Success'] ) {
			$Errors[] = $Resolved['Error'];
		}

		Certificate_Domain_Add($Connection, $Username, $Domain, $ValidationKey);

	}

	// TODO Handle Errors better
	if ( count($Errors) >= 1 ) {
		return $Errors;
	}

}
