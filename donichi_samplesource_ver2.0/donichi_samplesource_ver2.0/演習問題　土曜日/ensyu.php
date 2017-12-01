<?php
$str=" 曜日でわかるPHP プログラミング教室";
$nichigetsu="";
$array_week=array(" 日"," 月"," 火"," 水"," 木"," 金"," 土");
for($i=0;$i<7;$i++){
	if ($array_week[$i]==" 日" || $array_week[$i]==" 月"){
		$nichigetsu=$nichigetsu.$array_week[$i];
	}else{
		print $array_week[$i].$str;
		print "<br>";
	}
}
print $nichigetsu.$str;