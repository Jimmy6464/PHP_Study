<?php
	/*
	PHP是一个弱类型的语言
	由值决定类型
	getType(变量，常量)
	*/
	$name = array("jimmy","name");
	$srt = "string";
	echo getType($name);
	echo "<br>".getType($srt);
?>