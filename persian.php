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
			<center>
			<br /> <br /><br /> <br /><br />
			<img src="/img/parsa29801_text.png" class="heading"/>
			<p>Small persian that loves to annoy us all. He is great at PVP and gets the important things done first!</p>
			<br /> <br />
			<?php
				// $playlist='UCNiDwRbFSbOdmVbLbrl4Evw';
				// include ('includes/videos.php');
			?>
			<br /><br />
				<?php 
					include $root.'menu.php';
				?>
				<br /><br /><br /><br /><br /><br /><br /><br />
			</center>
		</div><!-- Content Div Closed -->
		
				<?php 
					include $root.'includes/footer.php';
				?>

	</div> <!-- wrapper div closed -->
</body>
</html>