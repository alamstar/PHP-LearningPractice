<?php

	$string = "Hello! In this page we will be learning more about strings. <br/> We will be learning new functions 
				which we will be needing while working on PHP.";
	
	echo $string;
	echo "<br/><br/>";
	
	echo "Length of the above string :- " . strlen($string);
	
	echo "<br/><br/>";
	echo "Number of words in the above string :-" . str_word_count($string);
	echo "<br/><br/>";
	echo "Reverse of the above string :- <br/>";
	echo strrev($string);
	
	echo "<br/><br/>";
	
	echo "Position of a given text (PHP for example) in the above string:- <br/>";
	echo strpos($string, "PHP");
	
	echo "<br/><br/>";
	
	echo "Replacing a text(for example: 'needing' with 'using') in the above string :- <br/>";
	echo str_replace("needing", "using", $string);

?>