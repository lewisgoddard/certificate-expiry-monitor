<?php

$id = $key;
$cert_cn = cert_cn($raw_cert);
$cert_subject = cert_subject($raw_cert);
$cert_serial = cert_serial($raw_cert);
$cert_expiry_date = cert_expiry_date($raw_cert);
$cert_validfrom_date = cert_valid_from($raw_cert);

$now = time();
$datefromdiff = $now - $cert_validfrom_date;
$datetodiff = $cert_expiry_date - $now;
$cert_valid_days_ago = floor($datefromdiff/(60*60*24));
$cert_valid_days_ahead = floor($datetodiff/(60*60*24));

$unsublink = "https://" . $current_domain . "/unsubscribe.php?id=" . $id;

$to      = $email;
$subject = "A certificate for " . htmlspecialchars($domain) . " expires in " . htmlspecialchars($days) . " days";
$message = "Hello,\r\n\r\nYou have a subscription to monitor the certificate of " . htmlspecialchars($domain) . " with the the Certificate Expiry Monitor. This is a service which monitors an SSL certificate on a website, and notifies you when it is about to expire. This extra notification helps you remember to renew your certificate on time.\r\n\r\nWe've noticed that the following domain has a certificate in it's chain that will expire in " . htmlspecialchars($days) . " days:\r\n\r\nDomain: " . htmlspecialchars($domain) . "\r\nCertificate Common Name: " . htmlspecialchars($cert_cn) . "\r\nCertificate Subject: " . htmlspecialchars($cert_subject) . "\r\nCertificate Serial: " . htmlspecialchars($cert_serial) . "\r\nCertificate Valid From: " . htmlspecialchars(date("Y-m-d  H:i:s T", $cert_validfrom_date)) . " (" . $cert_valid_days_ago . " days ago)\r\nCertificate Valid Until: " . htmlspecialchars(date("Y-m-d  H:i:s T", $cert_expiry_date)) . " (" . $cert_valid_days_ahead . " days left)\r\n\r\nYou should renew and replace your certificate before it expires. If you haven't set up the certificate yourself, please forward this email to the person/company that did this for you.\r\n\r\nNot replacing your certificate before the expiry date will result in a non-functional website with errors.\r\n\r\nTo unsubscribe from notifications for this domain please click or copy and paste the below link in your browser:\r\n\r\n" . $unsublink . "\r\n\r\n\r\n Have a nice day,\r\nThe Certificate Expiry Monitor Service.\r\nhttps://" . $current_domain . "";
$message = wordwrap($message, 70, "\r\n");
$headers = 'From: noreply@' . $current_domain . "\r\n" .
	'Reply-To: noreply@' . $current_domain . "\r\n" .
	'Return-Path: noreply@' . $current_domain . "\r\n" .
	'X-Visitor-IP: ' . $visitor_ip . "\r\n" .
	'X-Coffee: Black' . "\r\n" .
	'List-Unsubscribe: <https://' . $current_domain . "/unsubscribe.php?id=" . $id . ">" . "\r\n" .
	'X-Mailer: PHP/4.1.1';

if (mail($to, $subject, $message, $headers) === true) {
	echo "\t\tEmail sent to $to.\n";
	return true;
} else {
	echo "\t\tCan't send email.\n";
	return false;
}
