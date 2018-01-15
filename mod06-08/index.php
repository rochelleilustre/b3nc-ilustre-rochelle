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

	<link rel="stylesheet" type="text/css" href="assets/lib/css/style.css">

</head>
<body>

	<h1><?php echo getTitle(); ?></h1>

	<?php 

		echo getLyrics(0,0); 



	?>

	<script type="text/javascript"></script>

</body>
</html>