<?php

$sublink = "https://" . $current_domain . "/confirm.php?id=" . $uuid;

$to			= $email;
$subject = "Confirm your Certificate Expiry Monitor subscription for " . htmlspecialchars($domain) . ".";
$message = "Hello,\r\n\r\nSomeone, hopefully you, has added his website to the Certificate Expiry Monitor. This is a service which monitors an SSL certificate on a website, and notifies you when it is about to expire. This extra notification helps you remember to renew your certificate on time.\r\n\r\nIf you have subscribed to this check, please click the link below to confirm this subscription. If you haven't subscribed to the Certificate Expiry Monitor service, please consider this message as not sent.\r\n\r\n\r\nDomain: " . trim(htmlspecialchars($domain)) . "\r\nEmail: " . trim(htmlspecialchars($email)) . "\r\nIP subscribed from: " . htmlspecialchars($visitor_ip) . "\r\nDate subscribed: " . date("Y-m-d H:i:s T") . "\r\n\r\nPlease click or copy and paste the below link in your browser to subscribe: \r\n\r\n" . $sublink . "\r\n\r\n\r\nHave a nice day,\r\nThe Certificate Expiry Monitor Service.";
$message = wordwrap($message, 70, "\r\n");
$headers = 'From: noreply@' . $current_domain . "\r\n" .
		'Reply-To: noreply@' . $current_domain . "\r\n" .
		'Return-Path: noreply@' . $current_domain . "\r\n" .
		'X-Visitor-IP: ' . $visitor_ip . "\r\n" .
		'X-Coffee: Black' . "\r\n" .
		'List-Unsubscribe: <https://' . $current_domain . "/unsubscribe.php?id=" . $uuid . ">" . "\r\n" .
		'X-Mailer: PHP/4.1.1';
