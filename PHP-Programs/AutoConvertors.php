<?php

	define("Superman", "Clark Kent", false);
	
	echo Superman; // the value will be case-sensitive.
	echo "<br/>";
	
	/* define keyword is used for auto convertors. For example, you type type lol and that lol automatically gives out 
		the value hahahah!!! or anything defined in the define keyword.
		
		define keyword has 3 paramenters:-
		define(string name, mixed value, [bool case_insensitive = false]);
		string name:- it contains the constant which value is needed to be converted and it is of string type.
		mixed value:- it contains the value to which the value of the constant "name" to be converted into and it is of mixed
						type.
		bool case_insensitive:- it contains the boolean true or false for if the constant "name" is to be case-sensitive or
								not. false means the value will not be case-sensitive and if true then the value will be
								case-sensitive. By default it is false.
								
	*/
	
	define("Spiderman", "Peter Parker", false);
	define("Batman", "Bruce Wayne", false);
	define("Captain_America", "Steven Rogers", false);
	define("IronMan", "Tony Stark", false);
	
	echo Spiderman;
	echo "<br/>";
	echo Batman;
	echo "<br/>";
	echo Captain_America;
	echo "<br/>";
	echo IronMan;
		
?>