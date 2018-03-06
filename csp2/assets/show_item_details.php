<?php

require '../connect.php';

$id = $_GET['item_id'];

$sql = "SELECT * FROM product WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
extract($row);

echo '
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<div class="center-block">
					<img src="'.$image.'" alt="'.$product_name.'" class="details img-responsive">	
				</div><!-- center-block -->
			</div><!-- col-sm-6 -->

			<div class="col-sm-6">
				<h4>'.$product_name.'</h4>
				
				<hr>
				<p>Price: '.$price.'</p>
				<p>Brand: '.$brand_id.'</p>
				<form action="add_to_cart.php" method="POST">
					<div class="form-group">
						<label></label>
					</div>
				</form>
			</div><!-- col-sm-6 -->
		</div><!-- row -->
	</div><!-- container-fluid -->
	';