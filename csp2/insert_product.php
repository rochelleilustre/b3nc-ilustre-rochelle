<?php

session_start();

require 'connect.php';

include 'partials/head.php';

function getTitle(){
	echo '`INSERT` NEW PRODUCT | CSP2 E-COMMERCE WEBSITE';
}

include 'partials/head.php'

?>


</head>
<body>

	

	<!-- main header -->
	<?php include 'partials/main_header.php' ?>

	<main class="wrapper container">
	<div class="container">	
	<h1>`INSERT` NEW PRODUCT PAGE</h1>
	</div>

	<div class="insert-product container">
		<form action="insert_product.php" method="POST" enctype="multipart/form-data">
			
			<table align="center">
				<tr>
			    	<th colspan="7"><h2>Insert New Product</h2></th>
			  	</tr>

			  	<tr>
			    	<td>Product Name: </td>
					<td><input type="text" name="product_title"></td>
			  	</tr>

				<tr>
					<td>Product Price: </td>
					<td><input type="text" name="product_title"></td>
				</tr>

				<tr>
					<td>Product Volume: </td>
					<td>
						<select>
							<option>Select Volume</option>
							<?php

								$get_volume = "select * from volume";
								$run_volume = mysqli_query($con, $get_volume);

								while ($row_volume = mysqli_fetch_array($run_volume)) {
									$volume_id = $row_volume['id'];
									$volume_name = $row_volume['name'];

									echo "<option>$volume_name</option>";
								}

							?>

						</select>
					</td>
				</tr>

			  	<tr>
			    	<td>Product Category: </td>
					<td>
						<select name="product_cat">
							<option>Select Category</option>
								<?php 
									$get_cats = "select * from categories";
									$run_cats = mysqli_query($con, $get_cats);

									while ($row_cats = mysqli_fetch_array($run_cats)) {
									$cat_id = $row_cats['cat_id'];
									$cat_title = $row_cats['cat_title'];

									echo "<option>$cat_title</option>";
									}	
								?>
						</select>
					</td>
			  	</tr>

			  	<tr>
					<td>Product Brand</td>
					<td>
						<select>
							<option>Select Brand</option>
								<?php

									$get_brands = "select * from brands";
									$run_brands = mysqli_query($con, $get_brands);

									while ($row_brands = mysqli_fetch_array($run_brands)) {
									$brands_id = $row_brands['id'];
									$name = $row_brands['name'];

									echo "<option>$name</option>";
									}
								?>
						</select>
					</td>
				</tr>

				<tr>
					<td>Product Availability</td>
					<td>
						<select>
							<option>Select Availability</option>
								<?php
									$get_stocks = "select * from stocks";
									$run_stocks = mysqli_query($con, $get_stocks);

									while ($row_stocks = mysqli_fetch_array($run_stocks)) {
										$stocks_id = $row_stocks['id'];
										$stocks_name = $row_stocks['name'];

										echo "<option>$stocks_name</option>";
									}
								?>
						</select>
					</td>
				</tr>

				<tr>
					<td>Product Packaging</td>	
					<td>
						<select>
							<option>Select Packaging</option>
							<?php
								$get_packaging = "select * from packaging";
								$run_packaging = mysqli_query($con, $get_packaging);

								while ($row_packaging = mysqli_fetch_array($run_packaging)) {
									$packaging_id = $row_packaging['id'];
									$packaging_name = $row_packaging['name'];

									echo "<option>$packaging_name</option>";
								}


							?>

						</select>
					</td>
				</tr>

				<tr>
					<td>Product Image: </td>
					<td><input type="file" class="form-control" name="image"></td>
				</tr>

				

				

				<tr>
					<td colspan="8"><input type="submit" name="insert_post" value="Insert New Product"></td>
				</tr>
			</table>

		</form>
	</div>

	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>


	<!-- foot -->
	<?php include 'partials/foot.php'; ?>

</body>
</html>