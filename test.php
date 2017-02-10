<?php 

$grb = 1;
   $now = date('Y-m-d H:i:s');
   $set = '2017-02-02 14:24:00';
   $set2 = '2018-02-02 14:24:00';
   $array = array('2017-02-02 14:24:00', '2019-02-02 14:24:00');

echo 'server time - ' . $now;
echo "<br />";
echo 'time set - ' . $set;

if ($now > $set) 
{
	$display = "display: none;";
}

else {
	
	$display = "font-weight: bold;";

}

?>



<html>
<head>

</head>
<body>
<div style="color: red; <?php echo $display; ?>">test</div>
<br />
<div style="color: red; <?php echo $display; ?>">test2</div>

<br />

<button onclick="myFunction()">Try it</button>

<script>
var a = new Date();
function myFunction() {
    alert(a);
}
</script>

<br />
<br />

<?php
$lenghts = array(0, 107, 207, 400, 475); 

foreach ($lenghts as $cm)
{
	$inch = $cm / 2.45;
	echo "$cm centimeters = $inch inches\n" . "<br>";
}

?>

<br />
<br />

<?php

$planets = array(
				"mars"  => array("dist"=>1, "DIA"=>0.38),
				"venera"=> array("net"=>5, "mia"=>50, "moons"=>array("moon", 5)),	
				);
echo $planets["venera"]["moons"][1] * $planets["mars"]["dist"];

?>

<br />
<br />

<?php
$bands = array("foo fighters"=>"alt rock", "nirvana"=>"grunge", "sex pistols"=>"punk"); 

foreach ($bands as $band => $genre)
{
	echo "The best $genre band is $band." . "<br>";
}

?>

<br />
<br />

<?php
$masiv = array("a", "b", "c");
//echo current($masiv) . "<br />";
print_r (each($masiv));
echo "<br />";
// each prev end key reset
print_r (reset($masiv));
echo "<br />";

?>
<br />
<br />
<br />
<?php 
$numberos = array(10, 11, 20, 15464654564);
if(in_array(10, $numberos, true))
echo "n";
?>

<br />
<br />

<?php 

$numz = array("leko", "tejko", "sredno", 10);
$ne_index = array_reverse($numz, false);
print_r($ne_index);


?>
<br />
<br />
<br />

<?php
$nomera = array(7, 9, 11, 1, 3, 55, 99);
sort($nomera, SORT_STRING);

foreach($nomera as $n1)
echo $n1 . " ";
print_r($nomera)
?>
<br />
<br />
<?php
$alphabet = array("o"=>"a", "n"=>"z", "x"=>"l", "z"=>"b");
arsort($alphabet);
print_r($alphabet);
?>
<br />
<br />
<?php

function fst($aa, $bb)
{
	if(strlen($aa) < strlen($bb)) return -1;
		if(strlen($aa) > strlen($bb)) return 1;
			return 0;
}
$na_array = array("ho", "hoe", "hole");

usort($na_array, "fst");
print_r($na_array);
?>
<br />
<?php
echo "dsa \336 das";
?>
<br />
<br />

<?php

$gosti = "vanko, danko, canko, ganko, tanko";
$gost = "petar petrov";

if(strpos($gosti, $gost) === false)
{
	$gostiARR = explode(", ", $gosti); // правя масива
	sort($gostiARR);
	echo "sori, $gost , nqma ta, brato " . "<br>";
	echo "gostite sa: " . implode(", ", $gostiARR); // развалям масива на стринг
}

?>

<br />
<br />

<?php

$promenliva = "edno tri 55 5 6 7 8 edno";
echo substr_replace($promenliva, " 4 ", 9, 2) . "<br />"; // 9- от кой символ replace, 2- колко брой replace-нати символи
echo str_replace("edno", "nula", $promenliva);

?>
<br />
<br />

<?php
// Letter
$pismo = "Dear #titla - #ime, ti she prepodavash #predmet";
$poleta = array("#titla", "#ime", "#predmet");
$prepodavateli = array(array("phd", "Gercheva", "psyhology"),
					   array("zam-boss", "bat venko", "java"),
					   array("as", "evgeni", "php OP"));
foreach($prepodavateli as $prepodavatel)

	echo "<p>" . str_replace($poleta, $prepodavatel, $pismo);
   // str_replace(search, replace, subject)


?>

</body>
</html>