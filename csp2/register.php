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
	<!-- <h1>REGISTER PAGE</h1> -->

		
		<div id="login-sec">
			<form class="form-group" id="loginForm"  method="POST" action="assets/registration.php">

				<div id="form-header">
					<h4>Register new account</h4>
				</div>

				<hr>


				
				<div class="form-group">
					<label>Username</label>
			    	<input type="text" class="form-control" id="username" name="username"  placeholder="Enter new username" required>
			  	</div>

			  	<div class="form-group">
			  		<label>Password</label>
			    	<input type="password" class="form-control" id="password" name="password" placeholder="Enter new password" required>
			  	</div>

			  	<div class="form-group">
			  		<label>Confirm Password</label>
			    	<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Enter password again" required="">
			  	</div>

			  	<div class="form-group">
			  		<label>Email</label>
			    	<input type="email" class="form-control" id="email" name="email" placeholder="email@domain.com" required="">
			  	</div>

			  	<div class="form-group">
					<label>First Name</label>
			    	<input type="text" class="form-control" id="first_name" name="first_name"  placeholder="Enter First Name" required>
			  	</div>

			  	<div class="form-group">
					<label>Last Name</label>
			    	<input type="text" class="form-control" id="last_name" name="last_name"  placeholder="Enter Last Name" required>
			  	</div>

			  	<div class="form-group">
					<label>Address</label>
			    	<input type="text" class="form-control" id="address" name="address"  placeholder="Enter Address" required>
			  	</div>

			  	<div class="form-group">
					<label>Contact Number</label>
			    	<input type="text" class="form-control" id="contact" name="contact"  placeholder="Enter Contact Number" required>
			  	</div>

			  	<div class="form-group">
					<label>Upload Image</label>
			    	<input type="file" class="form-control" id="image" name="image" >
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

</body>
</html>