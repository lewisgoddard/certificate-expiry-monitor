<?php

function cert_subject($cert_data) {
	if (!empty($cert_data['name'])) {
		return($cert_data['name']);
	} else {
		return false;
	}
}
