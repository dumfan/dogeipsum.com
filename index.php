<?php

/*
¦¦¦¦¦¦¦¦¦_¦¦¦¦¦¦¦¦¦¦¦¦¦¦_¦¦¦¦
¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦_¯¦¦¦¦¦
¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦_¯¦¦¦¦¦¦¦
¦¦¦¦¦¦¦¦_¯¦¦¯¯¯¯___¯¦¦¦¦¦¦¦¦¦
¦¦¦¦¦__¯¦¦¦¦¦¦¦¦¦¦¦¦¦¦_¦¦¦¦¦¦
¦¦¦_¯¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¯¦¦¯¦¦¦¦¦ 
¦¦¦¦¦¦__¦¦¦¦¦¦¦¦¦¦¦¦¦¦¯_¦¦¦¦¦
¦¦¦¦¦¦¦¯¦¦¦¦¦_¯¦_¦¦¦¦¦¦¦¦¦¦¦¦
¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¯¦¦¦¦¦¦¦¦¯_¦¦
¦¦¦¦_¦¦_¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦
¯¦¯¦_¦_¦¦_¦¯¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦
¦¦¦¦¯¦¯¦¦__¦_¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦
¦¦¦¦¯¯__¦¦¦_¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦
¦¦¦¦¦¦¦¦¯¯¯¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦
¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦_¦¦¦¦¦
¦¦¯_¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦_¦¦¦¦¦¦¦
¦¦¦¦¯_¦¦¦¦¦¦¦¦¦¦___¯¦¦¦¦_¯¦¦¦
¦¦¦¦¦¦¯______¯¯¯¦¦¦¦¦__¯¦¦¦¦¦
¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¦¯¯¦¦¦¦¦¦¦¦
*/

$first = array(
	'so',
	'such',
	'many',
	'lorem',
	'much',
	'very',
);

$second = array(
	'text',
	'ipsum',
	'filler',
	'doge',
	'generator',
	'github',
	'placeholder',
	'typography',
	'layout',
	'graphic',
	'HTML',
	'CSS',
	'javascript',
	'dogescript'
)

?><!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Doge Ipsum - DaaS - Doge as a Service</title>
		<meta name="description" content="Doge Ipsum by dumfan">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		body, pre, input { font-family: 'comic sans ms'; font-size: 24px;}
		</style>
	</head>
	<body>
		<h1>Doge Ipsum</h1>
		<p>
			<form action="" method="post">
				<input type="text" name="rows"> rows
				<input type="submit" value="wuff">
			</form>
		</p>
<?php
	if(isset($_POST['rows'])) {
		$rows = intval($_POST['rows']);
		if($rows > 0) {
			if($rows > 100) { $rows = 100; }
			echo "<pre>";
			echo str_repeat(" ", rand(1,10)) . "wow.\n";
			for ($i = 1; $i <= $rows; $i++) {
				shuffle($first); shuffle($second);
				echo str_repeat(" ", rand(1,12)) . " " . $first[0] . " " .$second[0] . ".";
				if($i&1) { echo "\n"; }
			}
			echo "</pre>";
			echo '<img src="http://i.imgur.com/vaa4by0.png">';
		}
		else {
			echo "<pre>         wow.         such few rows.</pre>";
			echo '<img src="http://i.imgur.com/vaa4by0.png">';
		}
	} else {
		echo '<img src="http://i.imgur.com/vaa4by0.png">';
	}
?>
		<p>
			<div class="fb-like" data-href="http://dogeipsum.com/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
			What's up <a href="http://dumfan.net">dumfan</a>?
		</p>
		<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-16656646-2']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

		</script>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=122563631111138";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	</body>
</html>