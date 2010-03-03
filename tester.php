<?php
// Options
$render = false;
$icon = 'fever.png';

// Convenience
$icon_path = $icon . '?' . time();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Icon Tester</title>
		<meta name="viewport" id="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="apple-touch-icon<?php if (!$render) echo '-precomposed'; ?>" href="<?php echo $icon_path; ?>" />
		<style type="text/css">
body { font-family: Helvetica; padding: 10px; }
body div { text-align: center; }
body h1 { font-size: 20px; text-align: center; }
body p { font-size: 18px; text-align: justify; line-height: 140%; }
		</style>
	</head>
	<body>
		<div><img src="<?php echo $icon_path; ?>" width="57" height="57" /></div>
		<h1>Your icon is reloading.</h1>
		<p>Wait for the network activity indicator in the status bar to disappear, then return to the home&nbsp;screen.</p>
	</body>
</html>
