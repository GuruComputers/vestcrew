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
	<?php
		include "./includes/header.php";
	?>
		<div id="content">
			<br /> <br /><br /> <br /><br />
			<center>
			<p>We are a Group of Gamers who make YouTube Videos and Stream on Twitch.</p>
			<P>We upload content which contains a large variety of games including Minecraft, Garry’s Mod and PS4 games.</P>
			<p>The main goal of the VestCrew is to bring funny and entertaining videos and great channels for you to watch.</p>
			<br /> <br />
			<img src="/img/mcwtvc.png" class="heading"/>
			<p>MCWTVC is the survival Minecraft server that the vest crew play on, here we will fight to survive and try to beat other members of the vest crew in this server. Our next season will be hardcore modded!</p>
			<br />
			<img src="img/1.png" alt="Picture from Mincecraft" title="http://www.enjin.com/profile/9519972" class="decoration" align="center" />
			<br /><br />
			<a href="downloads/MWTVC-Modpack.rar" target="_blank">Download our Modpack!</a>
			<br /> <br />
				<?php 
					include $root.'menu.php';
				?>
			</center>
					<br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br />
		</div><!-- Content Div Closed -->
		<?php
			include "./includes/footer.php";
		?>

	</div> <!-- wrapper div closed -->
</body>
</html>