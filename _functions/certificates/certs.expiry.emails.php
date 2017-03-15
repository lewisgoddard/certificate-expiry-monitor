<?php

function cert_expiry_emails($domain, $email, $cert_expiry, $raw_cert) {
	if ($cert_expiry['cert_expired'] === true) {
		switch ($cert_expiry['cert_time_expired']) {
			case '0':
				# 0 days...
				send_cert_expired_email(1, $domain, $email, $raw_cert);
				break;
			case '84600':
				# 1 days...
				send_cert_expired_email(1, $domain, $email, $raw_cert);
				break;
			case '172800':
				# 2 days...
				send_cert_expired_email(2, $domain, $email, $raw_cert);
				break;
			case '604800':
				# 7 days...
				send_cert_expired_email(7, $domain, $email, $raw_cert);
				break;
			// default:
			//	 send_cert_expired_email($cert_expiry['cert_time_expired']/24/60/60, $domain, $email, $raw_cert);
			//	 break;
			}

	} else {
		switch ($cert_expiry['cert_time_to_expiry']) {
			case '7776000':
				# 90 days...
				send_expires_in_email(90, $domain, $email, $raw_cert);
				break;
			case '5184000':
				# 60 days...
				send_expires_in_email(60, $domain, $email, $raw_cert);
				break;
			case '2592000':
				# 30 days...
				send_expires_in_email(30, $domain, $email, $raw_cert);
				break;
			case '1209600':
				# 14 days...
				send_expires_in_email(14, $domain, $email, $raw_cert);
				break;
			case '604800':
				# 7 days...
				send_expires_in_email(7, $domain, $email, $raw_cert);
				break;
			case '432000':
				# 5 days...
				send_expires_in_email(5, $domain, $email, $raw_cert);
				break;
			case '259200':
				# 3 days...
				send_expires_in_email(3, $domain, $email, $raw_cert);
				break;
			case '172800':
				# 2 days...
				send_expires_in_email(2, $domain, $email, $raw_cert);
				break;
			case '86400':
				# 1 days...
				send_expires_in_email(1, $domain, $email, $raw_cert);
				break;
			case '0':
				# 0 days...
				send_expires_in_email(0, $domain, $email, $raw_cert);
				break;
		}
	}
}
