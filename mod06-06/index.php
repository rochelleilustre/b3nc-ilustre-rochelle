<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-compatible" content="IE=edge">

	<title>Activities</title>

	<style type="text/css">
		.black {
			background-color: black;
		}

		.white {
			background-color: white;
		}	

		.box {
			width: 30px;
			height: 30px;
			display: inline-block;
		}

		.black-box {
			background-color: black;
		}

		.white-box {
			background-color: white;
		}

		table, th, tr, td {
			border: 1px solid black;
			padding: 10px;
			border-collapse: collapse;
		}

		th {
			color: white;
			background-color: black;
		}

	</style>

</head>
<body>

	<h2>Activity # 1 Chessboard</h2>
	<?php
		for($row =1; $row<=8; $row++){
			for ($col=0; $col<=8; $col++){
				
				$x = $row + $col;
				
				if ($x % 2 == 0)
					echo '<span class ="box black"> </span>';
				else
					echo '<span class ="box white"> </span>';
			}
			echo '<br>';
		}
	?>	

	<hr>

	<?php
		for ($row = 1; $row <=8; $row++){
			for ($col=1; $col <=8; $col++){

			$total = $row + $col;

			if ($total % 2 == 0)
				echo '<span class="box black-box"></span>';
			else
				echo '<span class="box white-box"></span>';
		}
		echo '<br>';
	}
	?>
	<hr>

	<h2>Activity # 2 SWAPPING VALUES with temporay values</h2>

	<?php
		$a = 1;
		$b = 2;
		

		echo "<b>Numbers BEFORE swap: </b> <br>" ;
		echo '$a = $a <br>';
		echo '$b = $b <br><br>';

		

		echo "<b>Numbers AFTER swap: </b><br>" ;
		echo '$a = $b <br>';
		echo '$b = $a <br>';
	?>

	<hr>

	<?php

		$a = 1;
		$b = 2;

		echo '$a = ' . $a . '<br>';
		echo '$b = ' . $b . '<br>';

		

		$temp = $a;
		$a = $b;
		$b = $temp;

		echo '$a = ' . $a . '<br>';
		echo '$b = ' . $b . '<br>';
	?>

	<hr>

	<h2>Activity # 3 SWAPPING VALUES w/o temporary values</h2>

	<?php

		$a = 2;
		$b = 3;
		

		echo "<b>Numbers BEFORE swap: </b> <br>" ;
		echo '$a = $a <br>';
		echo '$b = $b <br><br>';

		$a = $b;
		$b = $a;

		echo "<b>Numbers AFTER swap: </b><br>" ;
		echo '$a = $a <br>';
		echo '$b = $b <br>';
	?>

	<hr>

	<?php

		$a = 2;
		$b = 3;

		echo '$a = ' . $a . '<br>';
		echo '$b = ' . $b . '<br>';

		$a = $a + $b; //$a=5
		$b = $a - $b; //$b=2
		$a = $a - $b; //$a=3

		echo '$a = ' . $a . '<br>';
		echo '$b = ' . $b . '<br>';
	?>

	<hr>

	<h2>ARRAYS</h2>

	<?php
		$colors = ['red','green','blue'];
		$arrlength = count ($colors);

		for ($x = 0; $x < $arrlength; $x++) {
			echo $colors[$x];
		}

	?>

	<hr>

	<h2>FOREACH</h2>

	<?php

		$age = ["Peter" =>"35", "Ben" =>"37", "Joe" => "43"];

		foreach($age as $arr_key => $arr_value) {
			echo "Key=" . $arr_key . ", Value=" . $arr_value . '<br>';
	}

	?>

	<hr>

	<?php

		$ages = ['Ash' => 21, 'Misty' => 22, 'Brock' => 23];

		foreach ($ages as $key => $age) {
			echo 'The age of ' . $key . ' is ' . $age . '<br>';
	}

	?>

	<hr>

	<h2>MULTI-DIMENSIONAL</h2>

	<?php
		$team_ironman = ["Tony","War Machine","Vision"];
		$team_cap = ["Cap America", "Bucky", "Hawkeye", "Falcon"];
		$civil_war = [$team_ironman , $team_cap];

		echo $civil_war[0] [0] .'<br>';
		echo $civil_war[1] [0] .'<br>';
		echo $civil_war[0] [2] .'<br>';
		echo $civil_war[1] [1] .'<br>';
	?>

	<hr>

	<?php

		$items = [
		['product' => 'Lenovo laptop', 'price' => 600.00, 'quantity' => 100],
		['product' => 'Asus tablet', 'price' => 100.00, 'quantity' => 10],
		['product' => 'Acer all-in-one', 'price' => 300.00, 'quantity' => 50],
		['product' => 'HP laptop', 'price' => 400.00, 'quantity' => 1],
		['product' => 'Dell desktop', 'price' => 350.00, 'quantity' => 20],
		];
	?>

	

		<ul>
			<?php

				foreach ($items as $item) {
					echo '<li>' . $item['product'] . '</li>';
				}
			?>
		</ul>



		<ul>
			<?php
				//quantities
				foreach ($items as $item) {
					echo '<li>' . $item['price'] . '</li>';
				}

			?>
		</ul>

		<ul>
			<?php
				foreach ($items as $quantities) {
					echo '<li>' . $quantities['quantity'] . '</li>';
				}

			?>
		</ul>

		<hr>

		<table>
			<thead>
				<th>Products</th>
				<th>Prices</th>
				<th>Quantity</th>
			</thead>

			<tbody>
				<?php

				foreach ($items as $value) {
					echo '<tr>';
					echo '<td>' . $value['product'] . '</td>';
					echo '<td>' . $value['price'] . '</td>';
					echo '<td>' . $value['quantity'] . '</td>';
					echo '</tr>';
				}

				?>
			</tbody>

		</table>

		<hr>


</body>
</html>