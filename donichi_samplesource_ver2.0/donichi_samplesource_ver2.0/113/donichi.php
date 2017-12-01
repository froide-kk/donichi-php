<?php
print "<h1>".date("F")."</h1>";
print "Today:".date("Y/m/d");
print "<br>";
$arrayweek=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
print "<table border=1><tr>";
foreach($arrayweek as $value){
	print "<th>".$value. "</th>";
	//print $value;
}
print "</tr></table>";
print "<br>";
for($i=0;$i<date("t");$i++){
	$week_number = date("w", mktime(0, 0, 0, date("n"), $i+1, date("Y")));
	print $i+1;
	if ($week_number == 6) {
		print "<br>";
	}
}