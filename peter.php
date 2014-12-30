<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vest Crew</title>
	<?php
		$page = "home";
		$root = "./";
		echo '<link rel="stylesheet" href="'.$root.'css/normalize.css">'."\n";
		echo '<link rel="stylesheet" href="'.$root.'css/main.css">'."\n";
		if (date('m') == '12') {
 			echo '<link rel="stylesheet" href="'.$root.'css/snow.css">'."\n";
		}
	?>
	
	<link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster|Indie+Flower|Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="wrapper">
			<header>
				<?php
					echo '<a href="'.$root.'" id="logo"><img src="'.$root.'img/logo.png" class="logo"></a>'."\n";
				?>
				<nav>
						
				</nav>
			</header>
		<div id="content">
			<center>
			<img src="/img/petertimevideos_text.png" class="heading"/>
			<p>Small, good at hardcore parkour and hacks.</p>
			<br /> <br />
			<?php
				$playlist='PeterTimeVideos';
				include ('includes/videos.php');
			?>
			<br /><br />
				<?php 
					include $root.'menu.php';
				?>
				<br /><br /><br /><br /><br /><br /><br /><br />
			</center>
		</div><!-- Content Div Closed -->
		
				<?php 
					include $root.'menu.php';
				?>

	</div> <!-- wrapper div closed -->
</body>
</html>