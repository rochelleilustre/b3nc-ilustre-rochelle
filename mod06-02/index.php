<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-compatible" content="IE=edge">

	<title>PHP activities</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>
<!-- 
	<ul>
		<li>stars</li>
		<li>shine</li>
		<li>yellow</li>
	</ul> -->

	<?php

	// Activity 1--------------------

		//$items = array ('STARS', 'SHINE', 'YELLOW');

		//echo "Look at the $items[0], Look how they $items[1] for you , and everything you do. Yeah, they were all $items[2].";

	// Activity 2--------------------

		//$items = array ('STARS', 'SHINE', 'YELLOW');

		//echo "
			//<ul>
				//<li>$items[0]</li>
				//<li>$items[1]</li>
				//<li>$items[2]</li>
			//</ul>";

		//or

		//echo "<ul>";
		//echo "<li>$items[0]</li>";
		//echo "<li>$items[1]</li>";
		//echo "<li>$items[2]</li>";
		//echo "</ul>";
	

	// Activity 3--------------------		

		// $firstName = array ('Steph', 'Russell', 'LeBron');
		// $lastName = array ('Curry', 'Westbrook', 'James');
		// $team = array ('Warriors', 'Thunders', 'Cavalier');
		// $number = array (30, 0, 23);

		// echo "Player: $firstName[0] $lastName[0]<br> ";
		// echo "Team: $team[0]<br>";
		// echo "Jersey: $number[0]<br><br>";
		
		// echo "Player: $firstName[1] $lastName[1]<br> ";
		// echo "Team: $team[1]<br>";
		// echo "Jersey: $number[1]<br><br>";
		
		// echo "Player: $firstName[2] $lastName[2]<br> ";
		// echo "Team: $team[2]<br>";
		// echo "Jersey: $number[2]<br><br>";
		
	// Activity 4--------------------		

		$firstName = array ('Steph', 'Russell', 'LeBron');
		$lastName = array ('Curry', 'Westbrook', 'James');
		$team = array ('Warriors', 'Thunders', 'Cavalier');
		$number = array (30, 0, 23);	
		
		echo "<table>";
			echo "<tr>";
				echo "<th>Player</th>";
				echo "<th>Team</th>";
				echo "<th>Jersey</th>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>$firstName[0] $lastName[0]</td>";
				echo "<td>$team[0]</td>";
				echo "<td>$number[0]</td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>$firstName[1] $lastName[1]</td>";
				echo "<td>$team[1]</td>";
				echo "<td>$number[1]</td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>$firstName[2] $lastName[2]</td>";
				echo "<td>$team[2]</td>";
				echo "<td>$number[2]</td>";
			echo "</tr>";


		echo "</table>";


	?>
	

</body>
</html>