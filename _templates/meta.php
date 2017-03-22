<!-- Meta Info -->
<title><?php echo $Page['Title']; ?></title>
<meta name="description"                content="<?php echo $Page['Description']; ?>">
<meta name="author"                     content="<?php echo $Page['Author']; ?>">
<meta name="theme-color"                content="<?php echo $Page['Theme Color']; ?>">
<!-- Optimizations for Google -->
<meta itemprop="name"                   content="<?php echo $Page['Title']; ?>" />
<meta itemprop="description"            content="<?php echo $Page['Description']; ?>" />
<meta itemprop="image"                  content="<?php echo $Page['Image']; ?>" />
<!-- Optimizations for Facebook -->
<meta property="og:title"               content="<?php echo $Page['Title']; ?>" />
<meta property="og:description"         content="<?php echo $Page['Description']; ?>" />
<meta property="og:image"               content="<?php echo $Page['Image']; ?>" />
<!-- Optimizations for Twitter -->
<meta name="twitter:title"              content="<?php echo $Page['Title']; ?>">
<meta name="twitter:description"        content="<?php echo $Page['Description']; ?>">
<meta name="twitter:image"              content="<?php echo $Page['Image']; ?>" />
<meta name="twitter:site"               content="<?php echo $Page['Twitter Site']; ?>">
<meta name="twitter:creator"            content="<?php echo $Page['Twitter Author']; ?>">
<?php
	if ( !empty($Page['Image']) ) {
		echo '<meta name="twitter:card"               content="summary_large_image">';
	} else {
		echo '<meta name="twitter:card"               content="summary">';
	}
	echo "\n";
?>
<!-- iPinning -->
<meta name="apple-mobile-web-app-title" content="<?php echo $Sitewide['Settings']['Site Title']; ?>">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon-precomposed" href="/assets/images/ios-desktop.png">
<!-- Android Pinning -->
<link rel="manifest"                    href="/assets/manifest.json">
<meta name="mobile-web-app-capable"     content="yes">
<link rel="icon" sizes="192x192"        href="/assets/images/android-desktop.png">
<!-- Tile icon for Win8 (144x144 + tile color) -->
<meta name="msapplication-TileImage"    content="/assets/images/touch/ms-touch-icon-144x144-precomposed.png">
<meta name="msapplication-TileColor"    content="#3372df">
<!-- Favicon -->
<link rel="shortcut icon"               href="<?php echo $Sitewide['Page']['Favicon']; ?>">
<link rel="icon" type="image/png"       href="/assets/icons/favicon.png" sizes="256x256">
<!-- Authorship -->
<link rel="author"                      href="<?php echo $Page['Google+ Author']; ?>" title="<?php echo $Page['Author Name']; ?>"/>
