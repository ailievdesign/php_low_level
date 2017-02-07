<?php
	//$var = 15 + 1;
	//$var2 = 15;
	//$str = 'string here';
	//$str2 = 'true';
	//$str3 = 'damn false';
	//define("CONSTASGF", 'константа');
	
	//echo $var+$var2 . '<br>' . $str . "<br />$str";
	//echo '<br>' . CONSTASGF;
	
	//if ($var == $var * 1 ){
	//	echo '<br>' . $str2;
	//}
	//else {
	//	echo '<br>' . $str3;
	//} 
	
	/*$student = array('първи', 'втори', 'трети');
	$plod = ['banica', 'med', 'hui'];
	$student[2] = '5';
	$mebeli = ['бук' => 'дъб', 'masa maika' => 'nqkyw'];
	//echo $mebeli['бук'];
	
	foreach ($mebeli as $key => $value) {
		echo $value . " здрасти! <br>";
	}
	
	for($i=0; $i<10; $i++) {
		echo $i . '<br>';
	}
	*/
	
	echo "index";
	
	//var_dump ($_GET);
	
	echo '<br>';
	
	$pages = ["main", "cart"];
	
	if (isset($_GET['page'])) 
	{
		if (in_array ($_GET['page'], $pages))
			{
				include $_GET['page'] . '.php';
			}
		else {
			include 'error.php';
			}
	}
	else {
		include 'error.php';
	}

	
	/*switch ($_GET['page']) {
		case 'index':
			echo "index";
		break;		
		
		case 'cart':
			echo "cart";
		break;		
		
	}
	*/
	
?>
