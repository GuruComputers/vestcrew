<!doctype html>
<html lang="en">
	<head>
		<title>YouTube TV</title>
		<link href="../src/ytv.css" type="text/css" rel="stylesheet" />
		<link href="assets/demo.css" type="text/css" rel="stylesheet" />
		<style type="text/css">
			body{
				margin: 0;
				padding: 0;
			}
		</style>
	</head>
	<body>
		<div id="frame"></div>
		
		<div class="description">
			<p>This demo is done with a very minimal amount of options used.</p>
			<p>The <code>#frame</code> element has dimensions of <code>400x800</code> before applying Youtube TV</p>
		</div>
		
		<script type="text/javascript" src="../src/ytv.js"></script>
		<script>
			window.onload = function(){
				
				
				window.controller = new YTV('frame', {
					user: 'TreeJTV',
					accent: 'yellow'
				});
		
			};
		</script>
	</body>
</html>