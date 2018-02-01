<?php

session_start();

$id = $_POST['item_id'];

//update the items for session cart variable

// removing data from array
unset($_SESSION['cart'][$id]); 
$_SESSION['item_count'] = array_sum($_SESSION['cart']);

/* Simulate iteration to replace DOM */
$file = file_get_contents('items.json');
$items = json_decode($file, true);
$ids = $_SESSION['cart'];
$total = 0;
$result1 = '';
foreach ($ids as $productId => $quantity) {
	$result1 .= '
		<tr>
			<td><button id="'.$productId.'" class="btn btn-primary form-control" onclick="removeItem('.$productId.')">Remove</button></td>
			<td>'.$items[$productId]['name'].'</td>
			<td><img src="'.$items[$productId]['image'].'" style="height:100px;width:100px;"></td>
			<td>'.$items[$productId]['description'].'</td>
			<td>'.$items[$productId]['price'].'</td>
			<td>
				<form method="POST" action="remove_from_cart.php">
					<input type="number" value="'.$quantity.'" onchange="modifyQuantity()">
				</form>
			</td>
			<td>'.$quantity * $items[$productId]['price'].'</td>
		</tr>
	';

	$total += $quantity * $items[$productId]['price'];
}

$result1 .= '
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<th>Total</th>
				<th>'.$total.'</th>
			</tr>'
;

$result2 = '<strong style="color:red;">('.$_SESSION['item_count'].')</strong>';

$result = [$result1,$result2];
echo json_encode($result);

