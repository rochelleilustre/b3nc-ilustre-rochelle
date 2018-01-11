<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maxiumum-scale=1.0">
	<meta http-equiv="X-UA-compatible" content="IE=edge">

	<title>Activities</title>

	<style type="text/css">
		.box {
			border: 1px solid black;
			padding: 10px;
			display: inline-block;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
		}
	</style>

</head>
<body>

	<?php
		

	<!-- // Activity 1 
	for ($counter = 1; $counter <= 10; $counter ++) {
	
		if ($counter == 10)
		 	echo $counter;
		else
			echo $counter. '-';
	} -->
	
	

	

	<!-- // Activity 2  -->


	<!-- for ($row = 1; $row <=10; $row++) { //row
			for ($col = 1; $col <= 10; $col++) { //col
				echo ' * ' ;
		}

			echo '<br>';
	} -->

	

	<!-- // Activity 3  -->
		
		for ($row = 1; $row <=10; $row++) { //row
			for ($col = 1; $col <= 10; $col++) { //column
				echo '<span class="box">' . $row * $col . '</span>';
			}
			
			echo "<br>";
		}

		// Activity 4

		for ($row = 1; $row <=10; $row++) { //row
			for ($col = 1; $col <= $row; $col++) { //col
				echo ' * ' ;
			}

			echo '<br>';
		}


// Activity 5

		for ($row = 10; $row >=1; $row--) { //row
			for ($col = 1; $col <= $row; $col++) { //col
				echo ' * ' ;
			}

			echo '<br>';
		}


divisible 3 fixx
divisible by 5 buzz






for ($counter = 1; $counter <= 50; $counter++){
			echo $counter;
			echo '<br>';
	}

		// Activity 6

		for ($counter = 1; $counter <= 50; $counter++){

			//divisible by 3
			if ($counter % 3 == 0)
				echo $counter;

			//divisible by 5
			if ($counter % 5 == 0)
				echo $counter;

			//divisible by 3 and 5
			if (($counter % 3 == 0) and ($counter % 5 ==)
				echo $counter;

			
			echo '<br>';
	}

	?>

</body>
</html>