<?php

include 'partials/head.php';

function getTitle(){
	echo 'INDEX of CSP2 E-COMMERCE WEBSITE';
}

include 'partials/head.php'

?>


</head>
<body>

	

	<!-- main header -->
	<?php include 'partials/main_header.php' ?>

	<div class="jumbotron">
  <h1 class="animated pulse">Just because<br>your SCENT<br>
  matters..</h1>
  
  <p><a class="btn btn-primary btn-lg" href="catalog.php" role="button">SHOP NOW</a></p>
</div> 

	<main class="wrapper">
	<div class="page container-fluid">	
	<h1>INDEX PAGE</h1>
	</div>

	<div class="container-fluid">
		
		<div class="col-md-2"><!-- Left Side Bar --></div>
		
		<div class="col-md-8 feature">
			<h2>Feature Products</h2>
			<br><br>
			<div class="row" id="feature-1stcol">
				<div class="col-md-3">
					<h4>HUGO BOSS</h4>
					<img src="assets/images/hugojustdiff.jpg" width="250" alt="hugojustdiff">
					<p class="list-price text-danger">List price <s>php54.99</s></p>
					<p>Our price: php40.00</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>BVLGARI</h4>
					<img src="assets/images/bvlgari-omnia-amethyste.jpg" width="250" alt="bvlgari-omnia-amethyste">
					<p class="list-price text-danger">List price <s>php54.99</s></p>
					<p>Our price: php40.00</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>CLINIQUE HAPPY</h4>
					<img src="assets/images/cliniquehappy.jpg" width="250" alt="cliniquehappy">
					<p class="list-price text-danger">List price <s>php54.99</s></p>
					<p>Our price: php40.00</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>D & G</h4>
					<img src="assets/images/DGlightblue.jpg" width="250" alt="DGlightblue">
					<p class="list-price text-danger">List price <s>php54.99</s></p>
					<p>Our price: php40.00</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>
			</div>

			

			<div class="row" id="feature-2ndcol">
				<div class="col-md-3">
					<h4>TOMMY</h4>
					<img src="assets/images/tommygirl.jpg" width="250" alt="tommygirl">
					<p class="list-price text-danger">List price <s>php54.99</s></p>
					<p>Our price: php40.00</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>212</h4>
					<img src="assets/images/212men.png" width="250" alt="212men">
					<p class="list-price text-danger">List price <s>php54.99</s></p>
					<p>Our price: php40.00</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>BVLGARI</h4>
					<img src="assets/images/bvlgariblv.jpg" width="250" alt="bvlgariblv">
					<p class="list-price text-danger">List price <s>php54.99</s></p>
					<p>Our price: php40.00</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>Calvin Klein</h4>
					<img src="assets/images/ck-eternity-for-men.jpg" width="250" alt="ck-eternity-for-men">
					<p class="list-price text-danger">List price <s>php54.99</s></p>
					<p>Our price: php40.00</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>
			</div>

		</div>
		
		<div class="col-md-2"><!-- Right Side Bar --></div>

		</div>

		<!-- details modal -->
		<div class="modal fade details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title text-center">HUGO BOSS</h4>
				</div>

				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-6">
								<div class="center-block">
									<img src="assets/images/hugojustdiff.jpg" alt="hugojustdiff" class="details img-responsive">	
								</div>
							</div>

							<div class="col-sm-6"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>


	<!-- foot -->
	<?php include 'partials/foot.php'; ?>

</body>
</html>