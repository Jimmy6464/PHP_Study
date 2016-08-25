<?php
	/*
	PHP是一个弱类型的语言
	由值决定类型
	getType(变量，常量)
	is_int(),is_float(),is_string(),is_array(). is_null(),is_resource(),is_object(),判断类型
	*/
	$name = array("jimmy","name");
	$srt = "string";
	echo getType($name);
	echo "<br>".getType($srt);
	define('URL','baidu.com');
	echo "<br>".getType(URL);
	if(is_string(URL)){
		echo "<br>Yes，URL is <span style='color:#f00'>string</span>";
	}else{
		echo "NO";
	}
	
	$student = array("King","Jimmy","Amanda");
	if(is_array($student)){
		echo "<br>This is a array<br>";
		foreach($student as $key=>$value){
			echo "student ".$key."'s name is ".$value."<br>";
		}
	}else{
		echo "<br>No.this";
	}
?>