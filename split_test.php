<?php 
	$scode = "M-1101";
	$arr = explode("-", $scode);
	$code = $arr[1];
	echo $code;
	echo "\\n";

	$ss = substr($code,0,2);
	$sub = "-".$ss;
	echo $sub;


 ?>