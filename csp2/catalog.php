<?php

require 'connect.php';

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


	<div class="container-fluid product">
		<div class="col-md-2 left-side-bar">

			<div id="sidebar-title">FILTER BY</div>
				<select id="filter">
					<option>Select Filter</option>
					<option>Price | low to high</option>
					<option>Price | high to low</option>
					<option>Alphabetically | A-Z</option>
					<option>Alphabetically | Z-A</option>
				</select>

			<div id="sidebar-title">CATEGORIES</div>

				<ul id="cats">
					<!-- <li><a href="#">For Men</a></li>
					<li><a href="#">For Women</a></li>
					<li><a href="#">Unisex</a></li> -->

					<?php getCats(); ?>

				</ul>

			<div id="sidebar-title">BRANDS</div>
				<ul id="brands" class="bscrollbar">
						<!-- <li><a href="#">Brand 1</a></li>
						<li><a href="#">Brand 2</a></li>
						<li><a href="#">Brand 3</a></li> -->

					<?php getBrands(); ?>	

				</ul>	

			<div><a class="btn btn-primary btn-lg" href="create_new_item.php" role="button">ADD ITEMS</a></div>

		</div><!-- col-md-2 left-side-bar -->
			

		<!-- main content -->	
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
			</div>

			

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
			</div>

		</div>
		
		<!-- Right Side Bar -->
		<div class="col-md-2"></div>

		</div>

		<!-- details modal -->
		<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title text-center">HUGO BOSS</h4>
					</div><!-- end of modal header -->

					<div class="modal-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-6">
									<div class="center-block">
										<img src="assets/images/hugojustdiff.jpg" alt="hugojustdiff" class="details img-responsive">	
									</div><!-- center-block -->
								</div><!-- col-sm-6 -->

								<div class="col-sm-6">
									<h4>Details</h4>
									<p>Product Decription here. Product Decription here. Product Decription here. Product Decription here. </p>
									<hr>
									<p>Price: php 54.99</p>
									<p>Brand: Hugo Boss</p>
									<form action="add_to_cart.php" method="POST">
										<div class="form-group">
											<label></label>
										</div>
									</form>
								</div><!-- col-sm-6 -->
							</div><!-- row -->
						</div><!-- container-fluid -->
					</div><!-- modal-body -->

					<div class="modal-footer">
						<button class="btn btn-default" data-dismiss="modal">Close</button>
						<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>
					</div>
				</div><!-- modal-content -->
			</div><!-- modal-dialog modal-lg -->
		</div><!-- modal fade details-1 -->

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