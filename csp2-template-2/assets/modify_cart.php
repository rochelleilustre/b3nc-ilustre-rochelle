<?php

session_start();


$id = $_POST['item_id'];
$quantity = $_POST['item_quantity'];

//update the items for session cart variable
$_SESSION['cart'][$id] = $quantity;
// var_export($_SESSION['cart']);

/* SIMULATE DOM MANIPULATION */
$file = file_get_contents('items.json');
$items = json_decode($file, true);
$ids = $_SESSION['cart'];
$total = 0;
$result1 = '';

foreach ($ids as $productId => $quantity) {
	if ($quantity != 0) {
		$result1 .= '
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
	} else{
		unset($_SESSION['cart'][$id]); 
		$_SESSION['item_count'] = array_sum($_SESSION['cart']);
	}
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
	</tr>
';


$_SESSION['item_count'] = array_sum($_SESSION['cart']);

$result2 = '<strong style="color:red;">('.$_SESSION['item_count'].')</strong>';

$result3 = $_SESSION['cart'];

$result = [$result1,$result2,$result3];

echo json_encode($result);
