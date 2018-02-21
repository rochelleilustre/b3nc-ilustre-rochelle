<?php

include 'partials/head.php';

function getTitle(){
	echo 'CSP2 E-COMMERCE WEBSITE | LOG IN';
}

include 'partials/head.php'

?>


</head>
<body>

	

	<!-- main header -->
	<?php include 'partials/main_header.php' ?>

	<main class="wrapper container">
		
	<h1>LOG IN PAGE</h1>

		<div class="login-section">
			<form id="loginForm" class="form-group" method="POST" action="">
				<div class="form-group">
			    	<input type="email" class="form-control" id="email" placeholder="EMAIL">
			  	</div>

			  	<div class="form-group">
			    	<input type="password" class="form-control" id="pwd" placeholder="PASSWORD">
			  	</div>

			  	<div class="checkbox">
			    	<label><input type="checkbox"> Remember me</label>
			  	</div>
			  
			  	<button type="submit" class="btn btn-info">Submit</button>
			</form>
		</div><!-- end of login-section -->
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>


	<!-- foot -->
	<?php include 'partials/foot.php'; ?>

</body>
</html>