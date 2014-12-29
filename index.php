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
		<div id="top">
			<header>
				<?php
					echo '<a href="'.$root.'" id="logo"><img src="'.$root.'img/logo.png" class="logo"></a>'."\n";
				?>
				<nav>
					<ul>
						<?php 
							include $root.'menu.php';
						?>
					</ul>
				</nav>
			</header>
		</div> <!-- top div closed -->
		<?php
			echo '<img src="'.$root.'img/xmashr.png" class="hr">'."\n";
		?>
		<div id="content">
			
		</div><!-- Content Div Closed -->
		<br><br>
		
		<div id="guru_footer">
			<center>
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
					echo "This is a Free Website provided by <a href=\"http://www.gurucomputers.co.uk\">Guru Computers Ltd</a>";
				?>
			</center>
		</div> <!-- footer div closed -->

	</div> <!-- wrapper div closed -->
</body>
</html>