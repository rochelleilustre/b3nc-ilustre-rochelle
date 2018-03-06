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
			<div class="col-md-10 items-wrapper">
				<h2>CATALOG SCENTS 2018</h2>
				<br>
				<div class="items container" id="items">
					<?php getProducts(); ?>
				</div><!-- items container -->
			</div><!-- col-md-10 items-wrapper -->
							
			<!--<div class="col-md-2"> Right Side Bar</div>-->

		</div><!-- end of container-fluid -->
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>


	<!-- foot -->
	<?php include 'partials/foot.php'; ?>

	<!-- show-item-details-modal -->
	<div id="show-item-details-modal" class="modal fade" role="dialog">
	 	<div class="modal-dialog modal-lg">

		    <!-- Modal content-->
		    <div class="modal-content">
		      
			    <div class="modal-header">
			    	<button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Item Details</h4>
			    </div>
			      
			    <div id="show-item-details-modal-body" class="modal-body">
			    	
			    </div><!-- show-item-details-modal-body -->

			    <div class="modal-footer">
			      	<button class='btn btn-default' data-dismiss='modal'>Close</button>
					<button class='btn btn-warning' type='submit'><span class='glyphicon glyphicon-shopping-cart'></span>Add to Cart</button>
			    </div><!-- modal-footer -->
		    </div><!-- modal-content -->

	  	</div><!-- modal-dialog modal-lg -->
	</div><!-- show-item-details-moda -->

	<script type="text/javascript">
		
		$(document).on('click', '.show-item-details', function () {
			var id = $(this).data('index');
			// console.log(id);

			$.get('assets/show_item_details.php',
				{
					item_id: id
				},
				function (data) {
					$('#show-item-details-modal-body').html(data);
				}
			);
		});
	</script>
</body>
</html>