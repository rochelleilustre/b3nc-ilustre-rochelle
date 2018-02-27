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
			<form id="loginForm" class="form-group" method="POST" action="">

				<div id="form-header">
					<h4>Register new account</h4>
				</div>

				<hr>

				<div class="form-group">
					<label>Username</label>
			    	<input type="email" class="form-control" id="email" placeholder="Enter new username">
			  	</div>

			  	<div class="form-group">
			  		<label>Password</label>
			    	<input type="password" class="form-control" id="pwd" placeholder="Enter new password">
			  	</div>

			  	<div class="form-group">
			  		<label>Confirm Password</label>
			    	<input type="email" class="form-control" id="email" placeholder="Enter password again">
			  	</div>

			  	<div class="form-group">
			  		<label>Email</label>
			    	<input type="password" class="form-control" id="pwd" placeholder="email@domain.com">
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