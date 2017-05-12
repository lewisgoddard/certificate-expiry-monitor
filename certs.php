<?php
	require_once __DIR__.'/_puff/sitewide.php';
	$Page['Type']           = 'Page';
	$Page['Title']          = 'Certificates for eustasy.org';
	$Page['Description']    = '';
	$Page['Tagline']        = '';
	$Page['Image']          = $Sitewide['Assets']['External']['Image'].'image.png';
	$Page['Theme Color']    = '#3892e0';
	$Page['Author']         = 'Lewis Goddard';
	$Page['Author Name']    = 'Lewis Goddard';
	$Page['Google+ Author'] = 'https://plus.google.com/+LewisGoddard';
	$Page['Twitter Author'] = 'https://twitter.com/goddardlewis';
	$Page['CSS'][]          = '/assets/css/tree.css';
	require_once $Sitewide['Templates']['Header'];
?>
			<main class="mdl-layout__content mdl-color--grey-100">
				<div class="mdl-grid demo-content">
					<div class="demo-cards mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">
						<div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-cell--12-col-desktop">
							<div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
								<h2 class="mdl-card__title-text">Certificates for eustasy.org</h2>
							</div>
							<div class="mdl-card__supporting-text">
								<p>eustasy.org</p>
								<ul class="tree">
									<li>eustasy.org
										<ul>
											<li><span class="mdl-color-text--green-500">Valid</span>
											<li><span class="mdl-color-text--orange-500">Warning</span>
											<li><span class="mdl-color-text--red-500">Invalid</span>
											<li>Signature: "RSA-SHA256"
											<li>Serial Number: "35:4C:90:D8:1E:08:B9:5B:CE:10:FC:ED:A1:CB:AC:2E:9F:7"
											<li>Subject: "/CN=eustasy.org"
											<li>Valid From: "2017-03-26T02:15:00+00:00"
											<li>Valid To: "2017-06-24T02:15:00+00:00"
										</ul>
									</li>
									<li>Let's Encrypt Authority X3
										<ul>
											<li><span class="mdl-color-text--green-500">Valid</span>
											<li>Signature: "RSA-SHA256"
											<li>Serial Number: "A0:14:14:20:00:00:15:38:57:36:A0:B8:5E:CA:70:8"
											<li>Subject: "/C=US/O=Let's Encrypt/CN=Let's Encrypt Authority X3"
											<li>Valid From: "2016-03-17T16:40:46+00:00"
											<li>Valid To: "2021-03-17T16:40:46+00:00"
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</main>
<?php
	require_once $Sitewide['Templates']['Footer'];
