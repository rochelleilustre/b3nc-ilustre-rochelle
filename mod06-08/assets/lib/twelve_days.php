<?php 

function getTitle(){
	return '12 Days of Christmas';
}

function getLyrics($day){

	$days = array ('first', 'second', 'third', 'forth', 'fifth', 'sixth', 'seventh', 'eigth', 'ninth', 'tenth', 'eleventh', 'twelfth');

	$gifts = array (
		'A partridge in a pear tree',
		'Two turtle doves',
		'Three french hens',
		'Four calling birds',
		'Five golden rings',
		'Six geese a-laying',
		'Seven swans a-swimming',
		'Eigth maids a-milking',
		'Nine ladies dancing',
		'Ten lords a-leaping',
		'Eleven pipers piping',
		'Twelve drummers drumming',
	);

		

		for ($x = 0; $x < count ($days); $x++) {

			echo '<div id= "day' . $x . '">';
			echo "On the " . $days[$x] . " day of Christmas . <br> my true love gave to me, " . " <br> ";

			
			if ($x == 0)
				echo $gifts[$x] . '<br><br>';

			else 
				for ($y = $x; $y>=0; $y--){
					if($y ==0)
						echo 'And' ." ". $gifts[$y] . '<br><br>';
					else
						echo $gifts[$y] . '<br>';

			}

			echo '</div>';
		}

			
} 