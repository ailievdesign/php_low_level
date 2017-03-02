<?php
// 000 webhost database - VFU-expire 1.0

$connection = mysql_connect('localhost', 'id859927_3xpir3', 'vfuexpire');

mysql_select_db("id859927_expire", $connection);
$result = mysql_query("SELECT date_expire FROM expire", $connection);

$now = strtotime(date('Y-m-d H:i:s'));


while ($row = mysql_fetch_row($result))
{
	for ($i=0; $i<mysql_num_fields($result); $i++)
	{
		if ($now < strtotime($row[$i]))
		{echo $row[$i] . " ";
		echo "\n";
		}
		else { echo 'fuck';}
	}

}


mysql_close($connection);


?>