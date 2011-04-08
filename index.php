<?php
// Options
$render = true;
$icons = array('57' => 'Icon.png',//iPhone/iPod
               '114' => 'Icon@2x.png',//iPhone/iPod Retina
               '72' => 'Icon-72.png',//iPad
               '28' => 'Icon-Small.png',//search iPhone/iPod
               '56' => 'Icon-Small@2x.png',//search iPhone/iPod Retina
               '50' => 'Icon-Small-50.png');//search iPad

// Convenience
foreach ($icons as $size => $icon) {
	$icons[$size] = $icon . '?' . time();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Icon Tester</title>
		<meta name="viewport" id="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		
		<?php
		foreach ($icons as $size => $icon) {
			$size_string = $size.'x'.$size;
			$rel = "apple-touch-icon" . (!$render ? '-precomposed' : '');
			echo "<link rel=\"$rel\" href=\"$icon\" sizes=\"$size_string\"/>\n";
		}
		?>
		
		<style type="text/css">
body { font-family: Helvetica; padding: 10px; }
body div { text-align: center; }
body h1 { font-size: 20px; text-align: center; }
body p { font-size: 18px; text-align: justify; line-height: 140%; }
		</style>
	</head>
	<body>
		<div><img src="<?php echo $icons['57']; ?>" width="57" height="57" /></div>
		<h1>Your icon is reloading.</h1>
		<p>Wait for the network activity indicator in the status bar to disappear, then return to the home&nbsp;screen.</p>
	</body>
</html>
