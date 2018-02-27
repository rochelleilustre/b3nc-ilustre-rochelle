<?php

include 'partials/head.php';

function getTitle(){
	echo 'REGISTER | CSP2 E-COMMERCE WEBSITE';
}

include 'partials/head.php'

?>


</head>
<body>

	

	<!-- main header -->
	<?php include 'partials/main_header.php' ?>

	<main class="wrapper">
		
	<div class="container">
	<h1>REGISTER PAGE</h1>

		
		<div id="login-sec">
<<<<<<< HEAD
			<form id="loginForm" class="form-group" method="POST" action="">
=======
			<form id="loginForm" class="form-group" method="POST" action="assets/registration.php">
>>>>>>> 3e281fa01a64e6fc342d57e445e315fc75978c56

				<div id="form-header">
					<h4>Register new account</h4>
				</div>

				<hr>

				<div class="form-group">
					<label>Username</label>
<<<<<<< HEAD
			    	<input type="email" class="form-control" id="email" placeholder="Enter new username">
=======
			    	<input type="text" name="username" class="form-control" id="username" placeholder="Enter new username">
>>>>>>> 3e281fa01a64e6fc342d57e445e315fc75978c56
			  	</div>

			  	<div class="form-group">
			  		<label>Password</label>
<<<<<<< HEAD
			    	<input type="password" class="form-control" id="pwd" placeholder="Enter new password">
=======
			    	<input type="password" name="password" class="form-control" id="password" placeholder="Enter new password">
>>>>>>> 3e281fa01a64e6fc342d57e445e315fc75978c56
			  	</div>

			  	<div class="form-group">
			  		<label>Confirm Password</label>
<<<<<<< HEAD
			    	<input type="email" class="form-control" id="email" placeholder="Enter password again">
=======
			    	<input type="email" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Enter password again">
>>>>>>> 3e281fa01a64e6fc342d57e445e315fc75978c56
			  	</div>

			  	<div class="form-group">
			  		<label>Email</label>
<<<<<<< HEAD
			    	<input type="password" class="form-control" id="pwd" placeholder="email@domain.com">
=======
			    	<input type="email" name="email" class="form-control" id="email" placeholder="email@domain.com">
>>>>>>> 3e281fa01a64e6fc342d57e445e315fc75978c56
			  	</div>

			 	
			  
			  	<button type="submit" class="btn btn-info">REGISTER</button>
			</form>
			</div> 
		</div>
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>


	<!-- foot -->
	<?php include 'partials/foot.php'; ?>

	<script type="text/javascript">
		
		$('#username').on('input', function() {
			var usernameText = $(this).val();
			
		});

	</script>

</body>
</html>