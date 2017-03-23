<?php
	require_once __DIR__.'/_puff/sitewide.php';
	$Page['Type']           = 'Page';
	$Page['Title']          = 'Domains';
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
			<main class="mdl-layout__content mdl-color--grey-100">
				<div class="mdl-grid demo-content">
					<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp mdl-cell mdl-cell--8-col">
						<thead>
							<tr>
								<th class="mdl-data-table__cell--non-numeric">Domain</th>
								<th>Last Checked</th>
								<th class="mdl-data-table__cell--non-numeric">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="mdl-data-table__cell--non-numeric">eustasy.org
									<i id="verified-1" class="mdl-color-text--blue-500 material-icons" style="font-size: 1.2em; vertical-align: inherit;">check_circle</i></td>
									<div class="mdl-tooltip mdl-tooltip--large" for="verified-1">eustasy.org is verified</div>
								<td>2017-03-22 21:43:32</td>
								<td class="mdl-data-table__cell--non-numeric">Okay</td>
							</tr>
							<tr>
								<td class="mdl-data-table__cell--non-numeric">example.com
									<i id="verified-2" class="mdl-color-text--blue-500 material-icons" style="font-size: 1.2em; vertical-align: inherit;">check_circle</i></td>
									<div class="mdl-tooltip mdl-tooltip--large" for="verified-2">example.com is verified</div>
								<td>2017-03-22 21:43:32</td>
								<td class="mdl-data-table__cell--non-numeric">Okay</td>
							</tr>
							<tr>
								<td class="mdl-data-table__cell--non-numeric">google.com
									<i id="verified-3" class="mdl-color-text--orange-500 material-icons" style="font-size: 1.2em; vertical-align: inherit;">warning</i></td>
									<div class="mdl-tooltip mdl-tooltip--large" for="verified-3">google.com is not verified</div>
								<td class="mdl-color-text--grey-500">-</td>
								<td class="mdl-data-table__cell--non-numeric">Unverified</td>
							</tr>
						</tbody>
					</table>
					<div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
						<div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-cell--12-col-desktop">
							<div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
								<h2 class="mdl-card__title-text">Alerts</h2>
							</div>
							<div class="mdl-card__supporting-text mdl-color-text--grey-600">
								There are no active alerts at this time.
							</div>
							<div class="mdl-card__actions mdl-card--border">
								<a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent">View history</a>
								<div class="mdl-layout-spacer"></div>
								<i class="material-icons mdl-color-text--grey-500">history</i>
							</div>
						</div>
					</div>
				</div>
			</main>
<?php
	require_once $Sitewide['Templates']['Footer'];
