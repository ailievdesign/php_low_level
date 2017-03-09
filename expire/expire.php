<?php
// VFU expire content

  // $now = date('Y-m-d H:i:s');
  // $set = '2017-02-02 14:24:00';
  // $set2 = '2018-02-02 14:24:00';

$arr = array("0"=>"2012-02-02 14:24:00", "1"=>"2019-02-01 14:24:00", "2"=>"2018-02-01 14:24:00", "3"=>"2017-03-19 10:24:00");

function expireContent ($arr, $key)
{
	$now = strtotime(date('Y-m-d H:i:s'));
	$set = strtotime($arr[$key]);
	
	// none - expire
	if ($now > $set)
	{
		echo "display: none;";
	}
	else 
	{
		echo "display: block;";
	}
}

echo expireContent($arr, "0") . "<br />";

?>

<?php
$arrr = array("0"=>"2012-02-02 14:24:00", "1"=>"2019-02-01 14:24:00", "2"=>"2006-02-01 14:24:00", "3"=>"2019-02-01 14:24:00", "4"=>"2009-02-01 14:24:00");



function array_compare($arr)
{
	$rez = count($arr);
	$now = strtotime(date('Y-m-d H:i:s'));
	for ($i=0; $i<$rez; $i++)
	{
		// bold - expire
		if ($now < strtotime($arr[$i]))
		{echo $arr[$i] . " " . "<br />";
		echo "\n";
		}
		else 
		{ echo "<b>" . $arr[$i] . "</b>" . " " . "<br />";
		echo "\n";
		}
	}
	
}
	
echo array_compare($arr);

?>
