<?php

function Certificate_Domain_Sanitize($Domain) {

	$Domain = htmlentities($Domain, ENT_QUOTES, 'UTF-8');
	$Domain = strtolower($Domain);
	$Domain = trim($Domain);

	return $Domain;

}
