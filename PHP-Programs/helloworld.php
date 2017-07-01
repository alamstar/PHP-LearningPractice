<!doctype html>

<html>
<body>
<pre>
<?php

	echo "Hello! World.";
	ECHO "<br/>"; // Not case-sensitive.
	eChO "Wassup"; // not case-sensitive.
	
	$x = 10;
	echo "<br/><br/>";
	print $x;
	echo "<br/> <br/>";
	// print $X; this will give an error. Case-sensitive.
	$cmd = "ping 127.0.0.1";
	print shell_exec($cmd);
	
	echo "<br/>";
	
	$cm = "ping 127.0.0.1";
	print shell_exec($cm);
?>
</pre>
</body>
</html>