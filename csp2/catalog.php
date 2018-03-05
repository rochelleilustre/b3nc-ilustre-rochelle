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
			</div>

		</div>
		
		<!-- Right Side Bar 
		<div class="col-md-2"></div>

		</div>-->

		<!-- details modal -->
		<!-- <div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true"> -->
			<?php
			// getModal();
			?>
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

	<!-- delete modal -->
	<div id="show-item-details-modal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Item Details</h4>
	      </div>
	      <div id="show-item-details-modal-body" class="modal-body">
	      </div>
	      <div class="modal-footer">
	      </div>
	    </div>

	  </div>
	</div>

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