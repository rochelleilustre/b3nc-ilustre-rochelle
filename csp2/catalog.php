<?php

include 'partials/head.php';

function getTitle(){
	echo 'CATALOG | CSP2 E-COMMERCE WEBSITE';
}

include 'partials/head.php'

?>


</head>
<body>

	

	<!-- main header -->
	<?php include 'partials/main_header.php' ?>

	<main class="wrapper container">
	<div class="page container-fluid">	
		<h1>CATALOG PAGE</h1>
	</div>

	<div class="container-fluid product">
		<div class="col-md-2">Left Side Bar</div>
			
		<div class="col-md-8 feature">
			<h2>CATALOG SCENTS 2018</h2>
			<br><br>
			<div class="row" id="feature-1stcol">
			<div class="col-md-3">
				
				<img src="assets/images/hugojustdiff.jpg" width="250" alt="hugojustdiff">
				<h4>HUGO BOSS</h4>
				<p class="list-price text-danger">List price <s>php54.99</s></p>
				<p>Our price: php40.00</p>
				<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
			</div>

					<div class="col-md-3">
						<img src="assets/images/bvlgari-omnia-amethyste.jpg" width="250" alt="bvlgari-omnia-amethyste">
						<h4>BVLGARI</h4>
						<p class="list-price text-danger">List price <s>php54.99</s></p>
						<p>Our price: php40.00</p>
						<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
					</div>

					<div class="col-md-3">
						<img src="assets/images/cliniquehappy.jpg" width="250" alt="cliniquehappy">
						<h4>CLINIQUE HAPPY</h4>
						<p class="list-price text-danger">List price <s>php54.99</s></p>
						<p>Our price: php40.00</p>
						<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
					</div>

					<div class="col-md-3">
						<img src="assets/images/DGlightblue.jpg" width="250" alt="DGlightblue">
						<h4>D & G</h4>
						<p class="list-price text-danger">List price <s>php54.99</s></p>
						<p>Our price: php40.00</p>
						<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
					</div>
				</div><!-- end of .row #feature-1stcol -->

				

				<div class="row" id="feature-2ndcol">
					<div class="col-md-3">
						<img src="assets/images/tommygirl.jpg" width="250" alt="tommygirl">
						<h4>TOMMY</h4>
						<p class="list-price text-danger">List price <s>php54.99</s></p>
						<p>Our price: php40.00</p>
						<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
					</div>

					<div class="col-md-3">
						<img src="assets/images/212men.png" width="250" alt="212men">
						<h4>212</h4>
						<p class="list-price text-danger">List price <s>php54.99</s></p>
						<p>Our price: php40.00</p>
						<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
					</div>

					<div class="col-md-3">
						<img src="assets/images/bvlgariblv.jpg" width="250" alt="bvlgariblv">
						<h4>BVLGARI</h4>
						<p class="list-price text-danger">List price <s>php54.99</s></p>
						<p>Our price: php40.00</p>
						<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
					</div>

					<div class="col-md-3">
						<img src="assets/images/ck-eternity-for-men.jpg" width="250" alt="ck-eternity-for-men">
						<h4>Calvin Klein</h4>
						<p class="list-price text-danger">List price <s>php54.99</s></p>
						<p>Our price: php40.00</p>
						<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
					</div>
				</div><!-- end of .row #feature-2ndcol -->

		</div> <!-- end of col-md-8 feature -->
			
		<div class="col-md-2"><!-- Right Side Bar --></div>


		</div>



		</div><!-- end of container-fluid -->
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>


	<!-- foot -->
	<?php include 'partials/foot.php'; ?>

</body>
</html>