<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br><br>";

#echo "Step 2: <br>";
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

if ($date > $tar) {
	echo "The future";
}
elseif ($date < $tar) {
	# code...
	echo "The past";
}
else{
	echo "Oops";
}
echo "<br>";

$pattern  = "/";
$count = 0;
$pos = array();
for ($i = 0; $i < strlen($date); $i ++){
	$p = strpos($date, $pattern, $count);
	if ($p == $count){
		$pos[] = $p;
	}
	$count ++;
}
foreach ($pos as $p){
	echo $p." ";
}
echo "<br>";

$num_words = 0;
for ($i = 0; $i < strlen($date); $i ++){
	if ($date[$i] == "/"){
		$num_words ++;
	}
}
echo $num_words+1;
echo "<br>";

$str = "Jimmy";
echo "The length of the string 'Jimmy' is: ".strlen($str);
echo "<br>";

echo ord($str[0]);
echo "<br>";

$len = strlen($date);
echo $date[$len-2];
echo $date[$len-1];
echo "<br>";

$sp = explode("/",$date);
foreach ($sp as $s){
	echo $s." ";
};
echo "<br>";

foreach ($year as $y){
	#echo $y;
	switch ($y % 4) {
		case 0:
			if ((($y % 100) > 0) || (($y % 400) == 0)){
				echo "True ";
			}
			else {
				echo "False ";
			} 
			break;
		
		case 1:
			echo "False ";
			break;
		case 2:
			echo "False ";
			break;
		case 3:
			echo "False ";
			break;
		#default:
			#echo "False ";
	}
};
echo "<br>";
for ($i = 0; $i < sizeof($year); $i ++){
	$y = $year[$i];
	switch ($y % 4) {
		case 0:
			if ((($y % 100) > 0) || (($y % 400) == 0)){
				echo "True ";
			}
			else {
				echo "False ";
			} 
			break;
		
		case 1:
			echo "False ";
			break;
		case 2:
			echo "False ";
			break;
		case 3:
			echo "False ";
			break;
		#default:
			#echo "False ";
	}
}
?>