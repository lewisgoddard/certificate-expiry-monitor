<?php

function cert_valid_from($cert_data) {
	if (!empty($cert_data['validFrom_time_t'])) {
		return(strtotime(date(DATE_RFC2822,$cert_data['validFrom_time_t'])));
	} else {
		return false;
	}
}
