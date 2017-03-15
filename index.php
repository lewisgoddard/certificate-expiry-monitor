<?php
	require_once __DIR__.'/_puff/sitewide.php';
	$Page['Type']           = 'Page';
	$Page['Title']          = 'Certificate Checker';
	$Page['Description']    = '';
	$Page['Tagline']        = '';
	$Page['Image']          = $Sitewide['Assets']['External']['Image'].'image.png';
	$Page['Theme Color']    = '#3892e0';
	$Page['Author']         = 'Lewis Goddard';
	$Page['Author Name']    = 'Lewis Goddard';
	$Page['Google+ Author'] = 'https://plus.google.com/+LewisGoddard';
	$Page['Twitter Author'] = 'https://twitter.com/goddardlewis';
	require_once $Sitewide['Templates']['Header'];
?>

<textarea class="form-control" required="true" rows=6 id="domains" name="domains" placeholder="example.org" style="resize:vertical;"></textarea>

$unsublink = "https://" . $Sitewide['Settings']['Site Root'] . "/unsubscribe.php?id=" . $id;

$to      = $json_a[$id]['email'];
$subject = "Certificate Expiry Monitor subscription confirmed for " . htmlspecialchars($json_a[$id]['domain']) . ".";
$message = "Hello,

Someone, hopefully you, has confirmed the subscription of their website to the Certificate Expiry Monitor. This is a service which monitors an SSL certificate on a website, and notifies you when it is about to expire. This extra notification helps you remember to renew your certificate on time.

Domain : " . trim(htmlspecialchars($json_a[$id]['domain'])) . "
Email  : " . trim(htmlspecialchars($json_a[$id]['email'])) . "
IP subscription confirmed from: " . htmlspecialchars($visitor_ip) . "
Date subscribed confirmed: " . date("Y-m-d H:i:s T") . "

We will monitor the certificates for this website. You will receive emails when it is about to expire as described in the FAQ on our website. You can view the FAQ here: https://" . $Sitewide['Settings']['Site Root'] . ".

To unsubscribe from notifications for this domain please click or copy and paste the below link in your browser:

" . $unsublink . "

Have a nice day,
The Certificate Expiry Monitor Service.
https://" . $Sitewide['Settings']['Site Root'] . "";
Browning($_POST['dear'], $_POST['subject'], $_POST['message'], $_POST['regards'], $_POST['regards']);

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
<?php
	require_once $Sitewide['Templates']['Footer'];
