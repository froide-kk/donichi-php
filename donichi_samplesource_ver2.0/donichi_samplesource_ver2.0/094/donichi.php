<?php
$str=" 曜日でわかるPHPプログラミング教室";
$array_week=array(" 日"," 月"," 火"," 水"," 木"," 金"," 土");
$donichi="";
for($i=6;$i>=0;$i--){
	if ($array_week[$i]==" 土"){
		$donichi= $array_week[$i];
	}elseif ($array_week[$i]==" 日"){
		$donichi=$donichi.$array_week[$i];
	}else{
		print $array_week[$i].$str;
		print "<br>";
	}
}
print $donichi." でわかるPHPプログラミング教室";