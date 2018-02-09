<?php

session_start();

if (!isset($_SESSION['current_user'])) {
	header('location: login.php');
}

function getTitle() {
	echo 'My Cart Page';
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>My Cart Page</h1>

		<?php
		$file = file_get_contents('assets/items.json');
		$items = json_decode($file, true);
		$ids = $_SESSION['cart'];

		$total = 0;
		echo '<table>';
		echo '
			<thead>
				<th>Action</th>
				<th>Name</th>
				<th>Image</th>
				<th>Description</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Subtotal</th>
			</thead>
			<tbody>';
		foreach ($ids as $productId => $quantity) {
					echo '
						<tr>
							<td><button id="'.$productId.'" class="btn btn-primary form-control" onclick="removeItem('.$productId.')">Remove</button></td>
							<td>'.$items[$productId]['name'].'</td>
							<td><img src="'.$items[$productId]['image'].'" style="height:100px;width:100px;"></td>
							<td>'.$items[$productId]['description'].'</td>
							<td>'.$items[$productId]['price'].'</td>
							<td>
								<form>
									<input id="itemQuantity'.$productId.'" type="number" value="'.$quantity.'" onchange="modifyQuantity('.$productId.')">
								</form>

							</td>
							<td>'.$quantity * $items[$productId]['price'].'</td>
						</tr>
					';

					$total += $quantity * $items[$productId]['price'];
		}
				
		echo '
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<th>Total</th>
				<th>'.$total.'</th>
			</tr>
		</tbody>
		</table>';

		?>	
	<h2></h2>
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

	<script type="text/javascript">
		function removeItem(productId){
			var id = productId;

			$.post('assets/remove_from_cart.php',
			{
				item_id: id
			},
			function(data,status) {
				data =JSON.parse(data);
				$("tbody").html(data[0]);
				$('a[href="cart.php"]').html('My Cart ' + data[1]);
			});
		}

		function modifyQuantity(productIdToChange){
			var id = productIdToChange;
			var quantity = $('#itemQuantity' + id).val();

			$.post('assets/modify_cart.php',
			{
				item_id: id,
				item_quantity: quantity
			},
			function(data,status){
				data =JSON.parse(data);
				$("tbody").html(data[0]);
				$('a[href="cart.php"]').html('My Cart ' + data[1]);
			});

		}

	</script>

</body>
</html>