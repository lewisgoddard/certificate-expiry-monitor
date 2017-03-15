<?php

function cert_cn($cert_data) {
	if (!empty($cert_data['subject']['CN'])) {
		return($cert_data['subject']['CN']);
	} else {
		return false;
	}
}
