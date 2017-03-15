<?php

function cert_expiry_date($cert_data) {
	if (!empty($cert_data['validTo_time_t'])) {
		return(strtotime(date(DATE_RFC2822,$cert_data['validTo_time_t'])));
	} else {
		return false;
	}
}
