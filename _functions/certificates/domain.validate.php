<?php

function Certificate_Domain_Validate($Domain) {

	if (
		!preg_match("/^([a-z\d](-*[a-z\d])*)(\.([a-z\d](-*[a-z\d])*))*$/i", $Domain) ||
		!preg_match("/^.{1,253}$/", $Domain) ||
		!preg_match("/^[^\.]{1,63}(\.[^\.]{1,63})*$/", $Domain) ||
		!preg_match("/^((?!-)[A-Za-z0-9-]{1,63}(?<!-)\\.)+[A-Za-z]{2,6}$/", $Domain)
	) {
		return false;
	}

	return true;

}
