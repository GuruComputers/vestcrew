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
			<img src="/img/heading.png" class="heading"/>
			<p>We are a Group of Gamers who make YouTube Videos and Stream on Twitch.</p>
			<P>We upload content which contains a large variety of games including Minecraft, Garry’s Mod and PS4 games.</P>
			<p>We also own a Minecraft server called killemallpvp. This ranges with games from mob arena to pvp.</p>
			<p>The main goal of the VestCrew is to bring funny and entertaining videos and a great server that you will enjoy playing on.</p>
			<br /> <br />
			<?php
				$playlist='gurucomputersuk';
				include ('includes/videos.php');
			?>
			<br /><br />
				<?php 
					include $root.'menu.php';
				?>
			</center>
		</div><!-- Content Div Closed -->
		
		<footer>
			<center>
				<a href="https://www.youtube.com/user/IzRoderrz" alt="youtube link to IzRoderrz"><img src="./img/youtube.png" alt="youtube icon" class="youtube">IzRoderrz</a>
				<a href="https://www.youtube.com/user/PeterTimeVideos" alt="youtube link to PeterTimeVideos"><img src="./img/youtube.png" alt="youtube icon" class="youtube">PeterTimeVideos</a>
				<a href="https://www.youtube.com/channel/UCs2f28VuqTUA6wXhfki6nWA" alt="youtube link to BorisTime"><img src="./img/youtube.png" alt="youtube icon" class="youtube">BorisTime</a>
				<a href="https://www.youtube.com/channel/UCNiDwRbFSbOdmVbLbrl4Evw" alt="youtube link to ThePersianGamer"><img src="./img/youtube.png" alt="youtube icon" class="youtube">ThePersianGamer</a>
				<a href="http://www.twitch.tv/izroderrzontwitch" alt="twitch link to IzRoderrz"><img src="./img/twitch.png" alt="twitch icon" class="twitch" title="IzRoderrz"></a>
				<br />
				<br />
				<?php
					$start=2014;
					$current=date("Y");
					$cy="";
					if ($current=$start) {
						$cy=$start;
					}
					if ($current>$start) {
						$cy=$start."-".$current;
					}
					echo "&copy"." ".$cy." Guru Computers Ltd."."\n";
					echo "This is a Free Website provided by <a href=\"http://www.gurucomputers.co.uk\" target=\"_blank\">Guru Computers Ltd</a>";
				?>
			</center>
		</footer>
		<!-- footer div closed -->

	</div> <!-- wrapper div closed -->
</body>
</html>