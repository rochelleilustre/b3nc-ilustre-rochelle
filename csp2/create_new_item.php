<?php

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

<<<<<<< HEAD
	<main class="wrapper container">
	<div class="container">	
	<h1>CREATE NEW ITEM PAGE</h1>
	</div>

	<div class="insert-product container">
		<form action="assets/createnewitem.php" method="POST">
			
			<table align="center">

			  	<tr>
			    	<td>Product Name: </td>
					<td><input type="text" name="product_name"></td>
=======
	<main class="wrapper">
	
	<div class="insert-product container">
		<h4>Create New Item</h4>

		<hr>

		<form action="assets/createnewitem.php" method="POST">
			
			<table>

			  	<tr>
			    	<td>Product Name: </td>
					<td><input type="text" name="product_name" class="form-control"></td>
>>>>>>> 5832edcba97e03d66799077ed27c2db798ec8d1d
			  	</tr>

				<tr>
					<td>Product Price: </td>
<<<<<<< HEAD
					<td><input type="text" name="product_price"></td>
=======
					<td><input type="text" name="product_price" class="form-control"></td>
>>>>>>> 5832edcba97e03d66799077ed27c2db798ec8d1d
				</tr>

				<tr>
					<td>Product Volume: </td>
					<td>
						<select name="product_volume">
							<option>Select Volume</option>
							<?php

								$get_volume = "select * from volume";
								$run_volume = mysqli_query($conn, $get_volume);

								while ($row_volume = mysqli_fetch_array($run_volume)) {
									$volume_id = $row_volume['id'];
									$volume_name = $row_volume['name'];

<<<<<<< HEAD
									echo "<option>$volume_name</option>";
=======
									echo '<option value="'.$volume_id.'">'.$volume_name.'</option>';
>>>>>>> 5832edcba97e03d66799077ed27c2db798ec8d1d
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
									$run_cats = mysqli_query($conn, $get_cats);

									while ($row_cats = mysqli_fetch_array($run_cats)) {
									$cat_id = $row_cats['cat_id'];
									$cat_title = $row_cats['cat_title'];

<<<<<<< HEAD
									echo "<option>$cat_title</option>";
=======
									echo '<option value=" ' . $cat_id. '">'. $cat_title .'</option>';
>>>>>>> 5832edcba97e03d66799077ed27c2db798ec8d1d
									}	
								?>
						</select>
					</td>
			  	</tr>

			  	<tr>
					<td>Product Brand</td>
					<td>
						<select name="product_brand">
							<option>Select Brand</option>
								<?php

									$get_brands = "select * from brands";
									$run_brands = mysqli_query($conn, $get_brands);

									while ($row_brands = mysqli_fetch_array($run_brands)) {
									$brands_id = $row_brands['id'];
									$name = $row_brands['name'];

<<<<<<< HEAD
									echo "<option>$name</option>";
=======
									echo '<option value=" ' . $brands_id. '">'. $name .'</option>';
>>>>>>> 5832edcba97e03d66799077ed27c2db798ec8d1d
									}
								?>
						</select>
					</td>
				</tr>

				<tr>
					<td>Product Availability</td>
					<td>
						<select name="product_availability">
							<option>Select Availability</option>
								<?php
									$get_stocks = "select * from stocks";
									$run_stocks = mysqli_query($conn, $get_stocks);

									while ($row_stocks = mysqli_fetch_array($run_stocks)) {
										$stocks_id = $row_stocks['id'];
										$stocks_name = $row_stocks['name'];

<<<<<<< HEAD
										echo "<option>$stocks_name</option>";
=======
										echo '<option value=" ' . $stocks_id. '">'. $stocks_name .'</option>';
>>>>>>> 5832edcba97e03d66799077ed27c2db798ec8d1d
									}
								?>
						</select>
					</td>
				</tr>

				<tr>
					<td>Product Packaging</td>	
					<td>
						<select name="product_packaging">
							<option>Select Packaging</option>
							<?php
								$get_packaging = "select * from packaging";
								$run_packaging = mysqli_query($conn, $get_packaging);

								while ($row_packaging = mysqli_fetch_array($run_packaging)) {
									$packaging_id = $row_packaging['id'];
									$packaging_name = $row_packaging['name'];

<<<<<<< HEAD
									echo "<option>$packaging_name</option>";
=======
									echo '<option value=" ' . $packaging_id. '">'. $packaging_name .'</option>';
>>>>>>> 5832edcba97e03d66799077ed27c2db798ec8d1d
								}


							?>

						</select>
					</td>
				</tr>

				<tr>
					<td>Product Image: </td>
					<td><input type="file" class="form-control" name="product_image"></td>
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
