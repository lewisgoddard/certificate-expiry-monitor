<?php

function Certificates_Domain_Validate($Domain) {

	if (
		!preg_match("/^([a-z\d](-*[a-z\d])*)(\.([a-z\d](-*[a-z\d])*))*$/i", $Domain) ||
		!preg_match("/^.{1,253}$/", $Domain) ||
		!preg_match("/^[^\.]{1,63}(\.[^\.]{1,63})*$/", $Domain)
	) {
		return false;
	}

	return true;

}
