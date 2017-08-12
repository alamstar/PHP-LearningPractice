<?php

	$days = date("t");   // date function: gives out the present date and time.
	
	if($days < 31)
	{
		echo "Feb, April, June, Sept, Nov" . "</br>";
		echo "This is the if block" . "</br></br>";
	}
	
	else
	{
		echo "Jan, Mar, May, July, Aug, Oct, Dec" . "</br>";
		echo "This is the else block" . "</br></br>";
	}

?>

<?php

	$day = date("w");
	
	if($day == 0)
	{
		echo "Sunday";
	}
	else if($day == 1)
	{
		echo "Monday";
	}
	else if($day == 2)
	{
		echo "Tuesday";
	}
	else if($day == 3)
	{
		echo "Wednesday";
	}
	else if($day == 4)
	{
		echo "Thursday";
	}
	else if($day == 5)
	{
		echo "Friday";
	}
	else
	{
		echo "Saturday";
	}

?>