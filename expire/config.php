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
		else { echo "<b>" . $row[$i] . "</b>" . " ";
		echo "\n";}
	}

}



function expireContent ($arr, $key)
{	

	$now = strtotime(date('Y-m-d H:i:s'));
	$set = strtotime($arr[$key]);
	global $now, $set;

	if ($now > $set)
	{
		echo "display: block;";
	}
	else 
	{
		echo "display: none;";
	}
}

$arr = array("0"=>"2012-02-02 14:24:00", "1"=>"2019-02-01 14:24:00", "2"=>"2039-02-01 14:24:00", "3"=>"2049-02-01 14:24:00");

$rez = count($arr);

echo expireContent($arr, "1") . "<br />";

function array_compare($arr)
{
	$rez = count($arr);
	$now = strtotime(date('Y-m-d H:i:s'));
	for ($i=0; $i<$rez; $i++)
	{
		if ($now < strtotime($arr[$i]))
		{echo $arr[$i] . " ";
		echo "\n";
		}
		else { echo "<b>" . $arr[$i] . "</b>" . " ";
		echo "\n";}
	}
	
}
	
echo array_compare($arr);




mysql_close($connection);


?>