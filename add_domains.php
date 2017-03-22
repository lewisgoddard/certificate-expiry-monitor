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

<?php
	require_once $Sitewide['Templates']['Footer'];
