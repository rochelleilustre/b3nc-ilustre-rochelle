<?php

function getTitle(){
	echo 'Index | Welcome to Beeer Web App';
}

include 'partials/head.php';

?>

</head>
<body>

	<header>
	<?php
	require 'partials/main_navigation.php'
	?>

	</header>
	<main class="wrapper">
		<h1>Contact</h1>
	</main><!-- end of wrapper -->


	<footer>
	<?php
	include 'partials/footer.php';
	?>
	</footer>


<?php
include 'partials/foot.php';
?>



