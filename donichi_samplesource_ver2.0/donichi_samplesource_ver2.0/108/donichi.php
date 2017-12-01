<?php
print "<h1>".date("F")."</h1>";
print "Today:".date("Y/m/d");
print "<br>";
$arrayweek=array("|Sun","Mon","Tue","Wed","Thu","Fri","Sat");
$p=" | ";
foreach($arrayweek as $value){
	print $value.$p;
}
print "<br>";
for($i=0;$i<date("t");$i++){
	print $p.($i+1);
}