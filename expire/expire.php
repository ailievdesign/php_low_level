<?php
// VFU expire content

  // $now = date('Y-m-d H:i:s');
  // $set = '2017-02-02 14:24:00';
  // $set2 = '2018-02-02 14:24:00';

$arr = array("0"=>"2012-02-02 14:24:00", "1"=>"2019-02-01 14:24:00", "2"=>"2039-02-01 14:24:00", "3"=>"2049-02-01 14:24:00");

function expireContent ($arr, $key)
{
	$now = strtotime(date('Y-m-d H:i:s'));
	$set = strtotime($arr[$key]);

	if ($now > $set)
	{
		echo "display: block;";
	}
	else 
	{
		echo "display: none;";
	}
}

//echo expireContent($arr, "1") . "<br />";

?>

<?php
$arrr = array("0"=>"2012-02-02 14:24:00", "1"=>"2019-02-01 14:24:00", "2"=>"2006-02-01 14:24:00", "3"=>"2019-02-01 14:24:00", "4"=>"2009-02-01 14:24:00");



function array_compare($arrr)
{
	$rez = count($arrr);
	$now = strtotime(date('Y-m-d H:i:s'));
	for ($i=0; $i<$rez; $i++)
	{
		if ($now < strtotime($arrr[$i]))
		{echo $arrr[$i] . " " . "<br />";
		echo "\n";
		}
		else { echo "<b>" . $arrr[$i] . "</b>" . " " . "<br />";
		echo "\n";}
	}
	
}
	
echo array_compare($arrr);


?>
