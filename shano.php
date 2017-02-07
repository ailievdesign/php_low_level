<?php




$lenghts = array(0, 107, 202, 400, 475);

foreach ($lenghts as $cm) 
{
	$inch = $cm / 2.45;
	echo "$cm centimeters = $inch inches\n";
}


echo "<BR /><BR /><BR />";


for ($start=1; $start<13; $start++)
{
	if ($start % 2 == 0)
	{
	echo "<b>$start x 1 = " . $start * 1 . "<br></b>";
	}
	else {
		echo "$start x 1 = " . $start * 1 . "<br>";
	}
	
	
}




?>