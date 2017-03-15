<?php

$id = $key;
$failures = $value['errors'];
$unsublink = "https://" . $current_domain . "/unsubscribe.php?id=" . $id;
$to      = $email;
$subject = "Certificate monitor " . htmlspecialchars($domain) . " failed.";
$message = "Hello,\r\n\r\nYou have a subscription to monitor the certificate of " . htmlspecialchars($domain) . " with the the Certificate Expiry Monitor. This is a service which monitors an SSL certificate on a website, and notifies you when it is about to expire. This extra notification helps you remember to renew your certificate on time.\r\n\r\nWe've noticed that the check for the following domain has failed: \r\n\r\nDomain: " . htmlspecialchars($domain) . "\r\nError(s): " . htmlspecialchars($errors) . "\r\n\r\nFailure(s): " . htmlspecialchars($failures) . "\r\n\r\nPlease check this website or it's certificate. If the check fails 7 times we will remove it from our monitoring. If the check succeeds again within 7 failures, the failure count will reset.\r\n\r\nTo unsubscribe from notifications for this domain please click or copy and paste the below link in your browser:\r\n\r\n" . $unsublink . "\r\n\r\n\r\n Have a nice day,\r\nThe Certificate Expiry Monitor Service.\r\nhttps://" . $current_domain . "";
$message = wordwrap($message, 70, "\r\n");
$headers = 'From: noreply@' . $current_domain . "\r\n" .
	'Reply-To: noreply@' . $current_domain . "\r\n" .
	'Return-Path: noreply@' . $current_domain . "\r\n" .
	'X-Visitor-IP: ' . $visitor_ip . "\r\n" .
	'X-Coffee: Black' . "\r\n" .
	'List-Unsubscribe: <https://' . $current_domain . "/unsubscribe.php?id=" . $id . ">" . "\r\n" .
	'X-Mailer: PHP/4.1.1';  
