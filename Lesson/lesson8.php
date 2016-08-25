<?php
	/*
		运算符类型
		1.算术运算符
		2.递增递减运算符
		3.比较运算符
		4.逻辑运算符
		5.位运算符
		6.其它运算符
	*/
	echo "<h1>运算符</h1>";
	echo "<h2>算术运算符</h2>";
	$num1 = 100;
	$num2 = 134;
	$c = $num1+$num2;
	$r = $num2-$num1;
	echo "{$num1} + {$num2} ={$c} <br>";
	echo "{$num2} - {$num1} = {$r}<br>";
	/*
	递增递减运算符 +=,-=,++,--
	*/
	echo "<h2>递增递减运算符</h2>";
	$num3 = 10;
	echo "num3 = {$num3}<br>num3++ = ".$num3++;
	echo "<br>num3 = {$num3}<br>++num3 = ".++$num3;
	/*
	比较运算符
	*/
	echo "<h2>比较运算符</h2>";

?>