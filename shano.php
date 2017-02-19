<?php




$lenghts = array(0, 107, 202, 400, 475);

foreach ($lenghts as $cm) 
{
	$inch = $cm / 2.45;
	echo "$cm centimeters = $inch inches\n";
}


echo "<BR /><BR /><BR />";


for ($start=1; $start<13; $start++)
{
	if ($start % 2 == 0)
	{
	echo "<b>$start x 1 = " . $start * 1 . "<br></b>";
	}
	else {
		echo "$start x 1 = " . $start * 1 . "<br>";
	}
	
	
}


echo "<BR /><BR /><BR />";


?>


<?php

$teams = array("ac milan"=>"italy", "chelsea"=>"england", "beroe"=>"Bulgaria");
echo "<pre>";
echo str_pad("Teams", 50, " - ", STR_PAD_BOTH) . "<br>";

foreach($teams as $team=>$country)
{
	echo str_pad($team, 25, ".") . str_pad($country, 25, ".", STR_PAD_LEFT) . "<br>";
}
echo "</pre>";
echo "<BR /><BR /><BR />";
?>

<?php
print strcmp("vanko", "vanko") . "\n";
print strncmp("ivanko", "ivan", 4);
?>

<?php
$br = "<br />";
echo $br . $br;

$prazen_masiv = array();
$datata = "2017-01-02";
$pat = '^([0-9]{4})-([0-9]{2})-([0-9]{2})$';

ereg($pat, $datata, $prazen_masiv);

print_r($prazen_masiv);

?>

<?php
echo $br . $br;
$dablife = "\xf6 dsad pedal\tgei\n\tne ";
echo ereg_replace("[^ -~]+", " ", $dablife);

$niz = "da\tberoe";
if (ereg('\n', $niz)) {
	echo 5;
}

?>

<?php
echo $br . $br;
$sentence = "there is something bigger than me";
$s_words = split("[^a-zA-Z]+",  $sentence);

print_r($s_words);

?>

<?php
echo $br . $br;
$f_date = mktime(0, 0, 0, 2, 12, 2015);
echo date('d/m/y', "$f_date");
$varec = checkdate(2, 28, 2017);
echo $br . $br;

var_dump($varec);

echo $br . $br;
echo cos(60);
echo $br . $br;

$random = (float) microtime( ) * 1000000000;
srand($random);
print($random);
echo $br . $br;
print rand(1, 9);

?>

// functions 
<?php
echo $br . $br;

function bold($string)
{
	echo "<strong>" . $string . "</strong>";
}
bold("bold strong");
bold($sentence);
echo $br . $br;

function zaglavie($tekst, $zaglavieto = 3)
{
	switch ($zaglavieto)
	{
		case 1:
			$rezultat = "<h1>" . ucwords($tekst) . "</h1>";
			break;
			
		case 2:
			$rezultat = "<h2>" . ucwords($tekst) . "</h2>";
			break;
			
		case 3:
			$rezultat = '<h3 style="color: red;">' . ucwords($tekst) . "</h3>";
			break;
			
		default:
			$rezultat = '<p style="color: red;"><strong>' . ucfirst($tekst) . "</strong></p>";
	}
	return ($rezultat);
}

$niz1 = "bai ivan e pederast";
echo zaglavie($niz1);

echo $br . $br;

function sabirane($a, $b)
{
	return ($a+$b);
}

echo sabirane(4, 1);

echo $br . $br;

function dvoino($temp)
{
	//global $temp;
	$temp = $temp*2;
}

$temp = 60;
dvoino($temp);
echo "temp is: $temp";
echo $br . $br;
$xx = 1;
$yy = &$xx;
$yy++;
unset($yy);
$yy = 1;
echo $yy;

?>

<?php
include "functions.inc";

$theCounter = new Counter;

$theCounter->startCountAt(10);

$theCounter->increment();
echo $theCounter->showvalue() . "<p>the counter is: " . $br;

$theCounter->reset( );
echo $br . "<p>the counter is: " . $theCounter->showvalue( );

$azbe = new Counter;
$azbe->startCountAt(55);
echo $azbe->showvalue();

?>
dsa
