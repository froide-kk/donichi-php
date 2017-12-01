<?php
$str=" 曜日でわかるPHPプログラミング教室";
$array_week=array("Sun"=>" 日","Mon"=>" 月","Tue"=>" 火","Wed"=>" 水","Thr"=>" 木","Fri"=>" 金","Sat"=>" 土");
foreach($array_week as $value){
	print $value.$str;
	print "<br>";
}