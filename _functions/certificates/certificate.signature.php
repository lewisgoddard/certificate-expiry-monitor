<?php

function cert_sig($cert_data) {
	if (!empty($cert_data['signatureTypeSN'])) {
		return $cert_data['signatureTypeSN'];
	} else {
		return false;
	}
}
