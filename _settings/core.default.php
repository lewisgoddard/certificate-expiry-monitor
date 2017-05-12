<?php

////	Puff Core Settings
//
// The root URL of your site (with trailing slash)
$Sitewide['Settings']['Site Root']                      = 'http://certs.localtest.me/';
// A title for your site.
$Sitewide['Settings']['Site Title']                     = 'Certificate Checker';
// Something much longer or much shorter.
$Sitewide['Settings']['Alternative Site Title']         = '';
// Stripping the .php from URLs requires server-side configuration.
// Check it works before enabling it.
$Sitewide['Settings']['Strip PHP from URLs']            = true;
// Stop the loading of asset from external domains.
$Sitewide['Settings']['Content Security Policy Header'] = false;
// Honor Do Not Track Headers
$Sitewide['Settings']['Honor DNT Headers']              = true;
// Change to your tracking id like 'UA-1234567-89' for tracking.
$Sitewide['Settings']['Google Analytics']               = false;
// Use a secure connection in future if it's available.
$Sitewide['Settings']['Try to Secure']                  = false;
// Load all the functions to be ready.
$Sitewide['Settings']['AutoLoad']['Functions']          = true;
// When to paginate the sitemap, Google recommends 10 MB or 50k entries.
$Sitewide['Sitemap']['Pagination']                      = 10000;


// Some social settings for your site.
$Sitewide['Social']['Facebook'] = 'https://www.facebook.com/you';
$Sitewide['Social']['Google+']  = 'https://plus.google.com/you';
$Sitewide['Social']['Twitter']  = 'https://twitter.com/you';

// Default Page Settings
$Sitewide['Page']['Title']          = 'Puff';
$Sitewide['Page']['Author']         = 'eustasy';
$Sitewide['Page']['Description']    = 'A website.';
$Sitewide['Page']['Tagline']        = 'A website.';
$Sitewide['Page']['Image']          = '';
$Sitewide['Page']['Published']      = '';
$Sitewide['Page']['Theme Color']    = '#3892E0';
$Sitewide['Page']['Author Name']    = 'John Smith';
$Sitewide['Page']['Google+ Author'] = $Sitewide['Social']['Google+'];
$Sitewide['Page']['Twitter Author'] = $Sitewide['Social']['Twitter'];
$Sitewide['Page']['Twitter Site']   = $Sitewide['Social']['Twitter'];
$Sitewide['Page']['CSS'][]          = 'https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en';
$Sitewide['Page']['CSS'][]          = 'https://fonts.googleapis.com/icon?family=Material+Icons';
$Sitewide['Page']['CSS'][]          = 'https://cdn.jsdelivr.net/g/normalize';
$Sitewide['Page']['CSS'][]          = 'https://code.getmdl.io/1.3.0/material.blue-red.min.css';
$Sitewide['Page']['CSS'][]          = '/assets/css/material.css';
$Sitewide['Page']['JS'][]           = 'https://code.getmdl.io/1.3.0/material.min.js';
//$Sitewide['Page']['JQ']             = 'https://cdn.jsdelivr.net/g/jquery';
$Sitewide['Page']['Favicon']        = '/assets/images/favicon.png';

// Version
$Sitewide['Version']['Core'] = '0.4';
