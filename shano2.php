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
echo "<br />" . $cases . "<br />" . "<br />";

function volumeDiscount($var)
{
	if($var->count > 24)
		return 0.95;
	else
		return 1.0;
}

$bottles = new BottleCounter(10);
$cans = new CanCounter(24);

error_reporting(E_ALL);

$bottleDiscountFactor = volumeDiscount($bottles);
$canDiscountFactor = volumeDiscount($cans);





?>

