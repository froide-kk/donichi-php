<?php
class Print_Calender extends Today_Calender {
	static function space_cell($count){
		if ($count!=0){
			for($i=0;$i<$count;$i++){
				print "<td></td>";
			}
		}
	}
}
class Today_Calender {
	function today($day){
		if (date("Y/m/d")==date("Y/m/d",mktime(0, 0, 0, date("n"),$day,date("Y")))){
			return "<b>".$day."</b>";
		}else{
			return $day;
		}
	}
}
print "<h1>".date("F")."</h1>";
print "Today:".date("Y/m/d");
print "<br>";
$array_week=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
print "<table border=1><tr>";
foreach($array_week as $value){
	print "<th>".$value. "</th>";
}
print "</tr><tr>";
for($i=0;$i<date("t");$i++){
	$week_number = date("w", mktime(0, 0, 0, date("n"), $i+1, date("Y")));
	if ($i==0) {
		print "<tr>";
		Print_Calender::space_cell($week_number);
	}elseif ($week_number == 0) {
		print "<tr>";
	}
	// print "<td>".($i+1)."</td>";
	print "<td>". Print_Calender:: today($i+1)."</td>";
	if($i+1==date("t")){
		Print_Calender::space_cell(6-$week_number);
		print "</tr>";
	}elseif ($week_number == 6) {
		print "</tr>";
	}
}
print "</table>";