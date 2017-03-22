<!DocType html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<?php
	require __DIR__.'/meta.php';
	require __DIR__.'/css.php';
	require __DIR__.'/js.php';
	require __DIR__.'/schema.php';
	puff_hook('head');
?>
</head>
<body class="page-<?php echo $Sitewide['Request']['AutoLink']; ?>">
<?php
	puff_hook('header');
	puff_hook('navigation');
	puff_hook('pre-content');
