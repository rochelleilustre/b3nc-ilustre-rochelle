<?php

//session_start();

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
		

		<!-- user feedback -->

		<?php

		if (isset($_SESSION['current_user'])) {
			echo "<p>" . $_SESSION['message'] . "</p>";
		} else {
			echo  "<p>" . "No user is logged in" . "</p>";
		}	

		?>

		<h1>Log In</h1>

		<form method="POST" action="authenticate.php">
		<label>Username</label>
		<input type="text" name="username" id="username" placeholder="Username"><br>
		
		<label>Password</label>
		<input type="password" name="password" id="password" placeholder="Password"><br>
		
		<input type="submit" name="submit" value="Log In">
		
	</form>


	</main><!-- end of wrapper -->




	<footer>
	<?php
	include 'partials/footer.php';
	?>
	</footer>


<?php
include 'partials/foot.php';
?>



