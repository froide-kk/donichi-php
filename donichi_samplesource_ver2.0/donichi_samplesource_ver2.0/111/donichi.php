<?php
print "<h1>".date("F")."</h1>";
print "Today:".date("Y/m/d");
print "<br>";
//$arrayweek=array("|Sun","Mon","Tue","Wed","Thu","Fri","Sat");
$arrayweek=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
//$p=" | ";
foreach($arrayweek as $value){
	// print $value.$p;
	print $value;
}
print "<br>";
for($i=0;$i<date("t");$i++){
	$week_number = date("w", mktime(0, 0, 0, date("n"), $i+1, date("Y")));
	//print $p.($i+1);
	print $i+1;
	if ($week_number == 6) {
		print "<br>";
	}
}