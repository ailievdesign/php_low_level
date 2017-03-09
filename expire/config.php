<?php
// local database - VFU-expire 1.0

$connection = mysql_connect('localhost', 'root', '');

mysql_select_db("expire", $connection);
$result = mysql_query("SELECT date_expire FROM expire", $connection);
 
$now = strtotime(date('Y-m-d H:i:s'));

mysql_data_seek($result, 2);


while ($row = mysql_fetch_row($result))
{

	echo "$row[0]<br>";

}


//working date sort - expire 

/*
while ($row = mysql_fetch_row($result))
{
	
	for ($i=0; $i<mysql_num_fields($result); $i++)
	{
		// bold - expire
		if ($now < strtotime($row[$i]))
		{echo $row[$i] . " ";
		echo "<br>";
		}
		else { echo "<b>" . $row[$i] . "</b>" . " ";
		echo "<br>";} 
	}	

}
*/

echo "<br>";
echo "<br>";
echo "<br>";

mysql_close($connection);
?>