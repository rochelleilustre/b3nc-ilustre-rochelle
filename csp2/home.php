<?php

session_start();

if (!isset($_SESSION['current_user']))
	header('location: login.php');


function getTitle(){
	echo 'HOME | CSP2 E-COMMERCE WEBSITE';
}

include 'partials/head.php'

?>


</head>
<body>

	

	<!-- main header -->
	<?php include 'partials/main_header.php' ?>

	<main class="wrapper container">
	<div class="container">	
	<h1>HOME PAGE</h1>

	<?php

	if (isset($_SESSION['current_user'])) {
		echo '<h3>Welcome ' . $_SESSION['current_user'] . ' !</h3>';
	}

	?>

	</div>
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>


	<!-- foot -->
	<?php include 'partials/foot.php'; ?>

</body>
</html>