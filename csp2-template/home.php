<?php

session_start();

function getTitle(){
	echo 'Home | Beeer Web App';
}

include 'partials/head.php';
?>

</head>
<body>

	<header>
	<?php
	require 'partials/main_navigation.php';
	?>
	</header>

	<main class="wrapper">

		<h3>Welcome <?php echo $_SESSION['current_user']; ?></h3>
		
		<h1>Home</h1>

		<h5><?php echo $_SESSION['message']; ?></h5>

	</main><!-- end of wrapper -->

	<footer>
	<?php
	include 'partials/footer.php';
	?>
	</footer>

<?php
	include 'partials/foot.php';
?>	

