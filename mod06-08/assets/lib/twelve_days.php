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

		$arrlength = count ($days);

		for ($x = 0; $x < $arrlength; $x++) {
			echo "On the " . $days[$x] . " day of Christmas my true love gave to me, ". " <br> " . $gifts[$x];
			echo "<br><br>";
		}

			if ($ = 11; $x > 0)	{
				
			}
} 