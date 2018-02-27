<?php



function getTitle(){
	echo 'LOGIN | CSP2 E-COMMERCE WEBSITE';
}

include 'partials/head.php'

?>


</head>
<body>

	

	<!-- main header -->
	<?php include 'partials/main_header.php' ?>

	<main class="wrapper ">
		
	<div class="container">	
	<h1>LOG IN PAGE</h1>






	<form id="loginForm" class="form-group" method="POST" action="assets/authenticate.php">

	<div id="login-sec">
				
		<div id="form-header">
			<h4>Login to your account</h4>
		</div>

		<hr>
				<div class="form-group">
			    	<input type="username" class="form-control" id="username" placeholder="USERNAME">
			  	</div>

			  	<div class="form-group">
			    	<input type="password" class="form-control" id="pwd" placeholder="PASSWORD">
			  	</div>

			  	<div class="checkbox">
			    	<label><input type="checkbox"> Remember me</label>
			  	</div>
			  
			  	<button type="submit" class="btn btn-info">LOGIN</button>
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