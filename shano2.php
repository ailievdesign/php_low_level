<?php
include "functions.inc";

class BottleCounter extends Counter
{
	function addCase()
	{
		$this->count += 12;
	}

	function caseCount()
	{
		return ceil($this->count / 12);
	}

	function BottleCounter($startCount)
	{
		$this->count = $startCount;
	}

}

$temp = new BottleCounter(12);

$temp->addCase();

$temp->showvalue();

$cases = $temp->caseCount();
echo "<br />" . $cases;


?>

