		<footer>
			<center>
			<br />
				<a href="https://www.youtube.com/user/IzRoderrz" alt="youtube link to IzRoderrz"><img src="./img/youtube.png" alt="youtube icon" class="youtube">IzRoderrz</a>
				<a href="https://www.youtube.com/user/PeterTimeVideos" alt="youtube link to PeterTimeVideos"><img src="./img/youtube.png" alt="youtube icon" class="youtube">PeterTimeVideos</a>
				<a href="https://www.youtube.com/channel/UCs2f28VuqTUA6wXhfki6nWA" alt="youtube link to BorisTime"><img src="./img/youtube.png" alt="youtube icon" class="youtube">BorisTime</a>
				<a href="https://www.youtube.com/channel/UCNiDwRbFSbOdmVbLbrl4Evw" alt="youtube link to ThePersianGamer"><img src="./img/youtube.png" alt="youtube icon" class="youtube">ThePersianGamer</a>
				<br />
				<a href="http://www.twitch.tv/izroderrzontwitch" alt="twitch link to IzRoderrz"><img src="./img/twitch.png" alt="twitch icon" class="twitch">IzRoderrz</a>
				<a href="http://www.twitch.tv/petertime" alt="twitch link to PeterTimeVideos"><img src="./img/twitch.png" alt="twitch icon" class="twitch">PeterTimeVideos</a>
				<br />
				<br />
				<?php
					$start=2014;
					$current=date("Y");
					$cy="";
					if ($current==$start) {
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
