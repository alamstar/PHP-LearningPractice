<?php
	
	$x = 15; //global
	
	function playerOne()
	{
		$x = 10; //local
		echo "<p> Value of life of Player 1 is: " . $x . "</p>";
	}
	
	playerOne();
	
	function playerTwo()
	{
		global $x; // to access the global variable into a funtion.
		echo "<p> Value of life of the Player 2 is: " . $x . "</p>";
	}
	playerTwo();
	
	function playerThree()
	{
		$x = 5;
		static $y = 5;
		echo $x;
		$x++;
		echo "<br/>";
		echo $y;
		$y++;
		echo "<br/><br/>";
		
		// Only the value of y is increased. It has a static keyword mentioned with it.
		/* Static keyword with a variable enables the compiler to retain the value of that variable from the last funtion
		 call.*/
	}
	playerThree();
	playerThree();
	playerThree();
	
?>

