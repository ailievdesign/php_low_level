<?php

/*$arr = ['var1'=>'value1', 'var2'=>'value2'];


$arr_keys = array_keys($arr);

var_dump ($arr_keys);
*/

echo "cart we";

$var = 10;

function user($var){
	global $var;
	echo '<br>' . "woot:" . $var;
	
}

user('param');


?>