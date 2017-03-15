<?php

function Certificates_EMail_Validate($email) {
	if ( !filter_var(strtolower($email), FILTER_VALIDATE_EMAIL) ) {
		return false;
	} else {
		return true;
	}
}
