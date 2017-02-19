<?php
// ---> mf starboy functions 
function tap_bold($str)
{
	echo "<strong>" . $str . "</strong>";
}

class Counter
{
	var $count = 0;
	var $startPoint = 0;
	
	function startCountAt($i) 
	{
		$this->count = $i;
		$this->startPoint = $i;
	}
	
	function increment() 
	{
		$this->count++;
	}
	
	function reset() 
	{
		$this->count = $this->startPoint;
	}
	
	function showvalue()
	{
		print $this->count;
	}
}

?>