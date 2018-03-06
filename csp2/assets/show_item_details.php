<?php

require '../connect.php';

$id = $_GET['item_id'];
$sql = "SELECT p.id, s.name sname, p.image, p.product_name, b.name bname, p.description, p.price, pkg.name pkgname 
FROM products p 
JOIN brands b ON (p.brand_id = b.id) 
JOIN packaging pkg ON (p.packaging_id = pkg.id) 
JOIN stocks s ON (p.stocks_id = s.id) 
WHERE p.id = '$id'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

extract($row);



echo '
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<div class="center-block">
					<img src="assets/images/'.$image.'" alt="'.$product_name.'" class="details img-responsive">	
				</div><!-- center-block -->
			</div><!-- col-sm-6 -->

			<div class="col-sm-6">
				<h3>'.$product_name.'</h3>
				
				<p><b>Brand:</b> '.$bname.'</p>
				<p>'.$description.'</p>
				<hr>

				<p><b>Price: PHP</b> '.$price.'</p>
				<label>Quantity </label>
				<input id="itemQuantity'.$id.'" type="number" value="1" min="0">
				<p><b>Packaging:</b> '.$pkgname.'</p>
				<p><b>'.$sname.'</b></p>
				<form action="add_to_cart.php" method="POST">
					<div class="form-group">
						<label></label>
					</div>
				</form>
			</div><!-- col-sm-6 -->
		</div><!-- row -->
	</div><!-- container-fluid -->
	';