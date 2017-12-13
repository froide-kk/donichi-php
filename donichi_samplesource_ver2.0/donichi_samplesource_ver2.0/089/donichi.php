<?php
$str=" 曜日でわかるPHPプログラミング教室";
$array_week=array(" 日"," 月"," 火"," 水"," 木"," 金"," 土");
for($i=0;$i<7;$i++){
	print $array_week[$i].$str;
	print "<br>";
}