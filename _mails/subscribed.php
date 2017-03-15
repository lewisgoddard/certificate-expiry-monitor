<?php

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
