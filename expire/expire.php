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

// expired arrays admin view



/*
function expireAdmin ($arr, $key)
{
	$now = strtotime(date('Y-m-d H:i:s'));
	$set = strtotime($arr[$key]);

	if ($now > $set)
	{
		
	

	}
}
*/



function printre ( $object , $name = '' ) {

    print ( '\'' . $name . '\' : ' ) ;

    if ( is_array ( $object ) ) {
        print ( '<pre>' )  ;
        print_r ( $object ) ; 
        print ( '</pre>' ) ;
    } else {
        var_dump ( $object ) ;
    }

}



?>

<html>
<head>
<title>Expire</title>
</head>
<body>


<div style="<?php echo expireContent($arr, "a"); ?>">dasdas</div>

<br />

<pre>
<?php
uksort($arr, 'strcasecmp');
echo "<pre>" . print_r($arr) ."</pre>";
?>
</pre>

<?php

echo implode(" >> ",$arr)."<br>";


?>


<?php

	$arr = array("0"=>"2012-02-02 14:24:00", "1"=>"2019-02-01 14:24:00", "2"=>"2039-02-01 14:24:00", "3"=>"2049-02-01 14:24:00");
  	$now = strtotime(date('Y-m-d H:i:s'));
  	$i = 0;
  	$i++;
	$set = strtotime($arr[$i]);
	
	if ($set > $now)
	{
		
  	    echo $arr[$i];
	}
	else 
	{
		echo "f" ."\n";
	}


?>
</body>
</html>