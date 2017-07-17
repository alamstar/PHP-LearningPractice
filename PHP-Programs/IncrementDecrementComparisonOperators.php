<?php

	$a = 100;
	$b = "100";
	
	var_dump($a);
	echo "<br/>";
	var_dump($b);
	echo "<br/>";
	echo "Equal   -->   ";
	var_dump($a == $b);
	echo "<br/>";
	echo "Identical Type   -->   ";
	var_dump($a === $b);
	echo "<br/>";
	echo "Not Equal   -->   ";
	var_dump($a != $b);
	echo "<br/>";
	echo "Not Equal   -->   ";
	var_dump($a <> $b);
	echo "<br/>";
	echo "Not Identical   -->   ";
	var_dump($a !== $b);
	echo "<br/>";
	echo "Greater Than   -->   ";
	var_dump($a > $b);
	echo "<br/>";
	echo "Less than   -->   ";
	var_dump($a < $b);
	echo "<br/>";
	echo "Greater than or equal to   -->   ";
	var_dump($a >= $b);
	echo "<br/>";
	echo "Less than or eqaul to   -->   ";
	var_dump($a <= $b);
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	
	// Increment/Decrement
	
	$x = 5;
	echo $x;
	echo "<br/>";
	echo ++$x; // echo --$x;
	echo "<br/>";
	echo $x;
	echo "<br/>";
	echo "<br/>";
	
	$y = 7;
	echo $y;
	echo "<br/>";
	echo $y++; // echo $y--;
	echo "<br/>";
	echo $y;
	

?>