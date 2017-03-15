<?php

$to      = $deleted_json_a[$id]['email'];
$subject = "Certificate Expiry Monitor subscription removed for " . htmlspecialchars($deleted_json_a[$id]['domain']) . ".";
$message = "Hello,\r\n\r\nYou have removed the subscription of a  website to the Certificate Expiry Monitor.\r\n\r\nDomain: " . trim(htmlspecialchars($deleted_json_a[$id]['domain'])) . "\r\nEmail: " . trim(htmlspecialchars($deleted_json_a[$id]['email'])) . "\r\nIP subscription removed from: " . htmlspecialchars($visitor_ip) . "\r\nDate subscribed removed: " . date("Y-m-d H:i:s") . "\r\n\r\nWe will not monitor this website any longer and you will not receive any emails whatsoever from us again for this domain. Do note that you might miss an expiring certificate.\r\n\r\nTo re-subscribe this domain please add it again on the Certificate Expiry Monitor website: \r\n\r\n  " . $link . "\r\n\r\nHave a nice day,\r\nThe Certificate Expiry Monitor Service.\r\nhttps://" . $current_domain . "";
$message = wordwrap($message, 70, "\r\n");
$headers = 'From: noreply@' . $current_domain . "\r\n" .
	'Reply-To: noreply@' . $current_domain . "\r\n" .
	'Return-Path: noreply@' . $current_domain . "\r\n" .
	'X-Visitor-IP: ' . $visitor_ip . "\r\n" .
	'X-Coffee: Black' . "\r\n" .
	'List-Unsubscribe: <https://' . $current_domain . "/unsubscribe.php?id=" . $id . ">" . "\r\n" .
	'X-Mailer: PHP/4.1.1';
