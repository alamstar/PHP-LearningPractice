<?php

	// Creating Class
	class Superman
	{
		function abilities()
		{
			$this -> power1 = "Flight";
			$this -> power2 = "Super strength";
			$this -> power3 = "Invulnerability";
			$this -> power4 = "X-ray vision";
			$this -> power5 = "Freezing breath";
		}
	}
	
	// Creating Object
	$Powers = new Superman();
	echo "Superman's strengths and abilities are follows:-";
	echo "<br/>";
	$Powers -> abilities(); // To call the specific members(variables or properties) of a particular function(or methods)
	echo "<br/>";				 // of a class, the method should be called first and then the properties (or variables)
	echo $Powers -> power1;
	echo "<br/>";
	echo $Powers -> power2;
	echo "<br/>";
	echo $Powers -> power3;
	echo "<br/>";
	echo $Powers -> power4;
	echo "<br/>";
	echo $Powers -> power5;
	echo "<br/>";
	
?>