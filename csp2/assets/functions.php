<?php

	$conn = mysqli_connect("localhost", "root", "", "csp2");


	// get categories to the db
	// post it to catalog.php .left-side-bar
	function getCats() {
		global $conn;
		$get_cats = "select * from categories";
		$run_cats = mysqli_query($conn, $get_cats);

		while ($row_cats = mysqli_fetch_array($run_cats)) {
			$cat_id = $row_cats['cat_id'];
			$cat_title = $row_cats['cat_title'];

			echo "<li><a href='#'>$cat_title</a></li>";
		}
	}


	// get brands to the db
	// post it to catalog.php .left-side-bar
	// and to brands.php
	function getBrands() {
		global $conn;
		$get_brands = "select * from brands";
		$run_brands = mysqli_query($conn, $get_brands);

		while ($row_brands = mysqli_fetch_array($run_brands)) {
			$brands_id = $row_brands['id'];
			$name = $row_brands['name'];

			echo "<li><a href='#'>$name</a></li>";
		}
	}


	// get brands to the db
	// post it to catalog.php .left-side-bar
	// and to brands.php
	function getMen() {
		global $conn;
		$get_men = "SELECT product_name FROM product WHERE categories_id = '1'";
		$run_men = mysqli_query($conn, $get_men);

		while ($row_men = mysqli_fetch_array($run_men)) {
			
			$product_name = $row_men['product_name'];

			echo "<li><a href='#'>$product_name</a></li>";
		}
	}

	function getWomen() {
		global $conn;
		$get_women = "SELECT product_name FROM product WHERE categories_id = '2'";
		$run_women = mysqli_query($conn, $get_women);

		while ($row_women = mysqli_fetch_array($run_women)) {
			
			$product_name = $row_women['product_name'];

			echo "<li><a href='#'>$product_name</a></li>";
		}
	}

	function getUnisex() {
		global $conn;
		$get_unisex = "SELECT product_name FROM product WHERE categories_id = '3'";
		$run_unisex = mysqli_query($conn, $get_unisex);

		while ($row_unisex = mysqli_fetch_array($run_unisex)) {
			
			$product_name = $row_unisex['product_name'];

			echo "<li><a href='#'>$product_name</a></li>";
		}
	}


	function getStocks() {
		global $conn;
		$get_stocks = "select * from stocks";
		$run_stocks = mysqli_query($conn, $get_stocks);

		while ($row_stocks = mysqli_fetch_array($run_stocks)) {
			$stocks_id = $row_stocks['id'];
			$stocks_name = $row_stocks['name'];

			echo "<li><a href='#'>$stocks_name</a></li>";
		}
	}

	function getVolume() {
		global $conn;
		$get_volume = "select * from volume";
		$run_volume = mysqli_query($conn, $get_volume);

		while ($row_volume = mysqli_fetch_array($run_volume)) {
			$volume_id = $row_volume['id'];
			$volume_name = $row_volume['name'];

			echo "<li><a href='#'>$volume_name</a></li>";
		}
	}

	function getPackaging() {
		global $conn;
		$get_packaging = "select * from packaging";
		$run_packaging = mysqli_query($conn, $get_packaging);

		while ($row_packaging = mysqli_fetch_array($run_packaging)) {
			$packaging_id = $row_packaging['id'];
			$packaging_name = $row_packaging['name'];

			echo "<li><a href='#'>$packaging_name</a></li>";
		}
	}

	function getProducts(){
		global $conn;
		$get_product = "select * from product";
		$run_product = mysqli_query($conn, $get_product);

		while ($row_product = mysqli_fetch_array($run_product)) {
			$product_id = $row_product['id'];
			$product_image = $row_product ['image'];
			$product_name = $row_product ['product_name'];
			$product_price = $row_product ['price'];		
			
		
			echo "

				<div class='item-parent-container form-group'>
					
					<img src='assets/images/$product_image' width='200' alt='$product_name'>
					<h4>$product_name</h4>
					<p>PHP $product_price</p>
					<button type='button' class='btn btn-sm btn-success image-responsive show-item-details' data-toggle='modal' data-target='#show-item-details-modal' data-index='".$product_id."'>Details</button>
					<br><br>
					
				</div>

				


			";

		}
	}	


	

?>

<!-- 

$product_name = $row_product ['product_name'];
			$product_price = $row_product ['product_price'];
			$product_volume = $row_product ['product_volume'];
			$product_categories = $row_product ['product_categories'];
			$product_brand = $row_product ['product_brand'];
			$product_stocks = $row_product ['product_stocks'];
			$product_image = $row_product ['product_image'];

<div class='col-md-3'>
					<img src='assets/images/$product_image' width='250' alt=$product_name>
					<h4>$product_name</h4>
					<p>$product_price</p>
					<button type='button' class='btn btn-sm btn-success' data-toggle='modal' data-target='#details-1'>Details</button>
				</div>
 -->