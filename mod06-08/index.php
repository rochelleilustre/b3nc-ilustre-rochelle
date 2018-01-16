<?php
require_once 'assets/lib/twelve_days.php';
?>



<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<meta http-equiv="X-UA-compatible" content="IE=edge">

	<title><?php echo getTitle(); ?> Lyrics</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>


	<div class="top">
	<h1><?php echo getTitle(); ?></h1>

	<div class="btn">

	<button type="button" onclick="hideShow()">Hide or Show</button>	
		
	<!-- <button type="button" onclick="hideMe()">Hide Lyrics</button>

	<button type="button" onclick="showMe()">Show Lyrics</button> -->

	<button type="button" onclick="singIt()">Sing it</button>
	</div>


	</div>

	<hr>

	<div id="day">

	<?php 

		echo getLyrics(0); 

	?>

	</div>



	
		
	

	<script type="text/javascript" src="assets/js/script.js"></script>

</body>
</html>