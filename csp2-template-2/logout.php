<?php

session_start();

session_destroy();

function getTitle(){
	echo 'Log Out';
}

include 'partials/head.php';
?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Log Out Page</h1>

		<h3>User was successfully logged out.</h3>
		
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php
include 'partials/foot.php';
?>


</body>
</html>