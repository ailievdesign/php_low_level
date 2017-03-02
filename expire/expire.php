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

echo expireContent($arr, "1") . "<br />";


</body>
</html>