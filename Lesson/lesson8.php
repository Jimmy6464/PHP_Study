<?php
	/*
		���������
		1.���������
		2.�����ݼ������
		3.�Ƚ������
		4.�߼������
		5.λ�����
		6.���������
	*/
	echo "<h1>�����</h1>";
	echo "<h2>���������</h2>";
	$num1 = 100;
	$num2 = 134;
	$c = $num1+$num2;
	$r = $num2-$num1;
	echo "{$num1} + {$num2} ={$c} <br>";
	echo "{$num2} - {$num1} = {$r}<br>";
	/*
	�����ݼ������ +=,-=,++,--
	*/
	echo "<h2>�����ݼ������</h2>";
	$num3 = 10;
	echo "num3 = {$num3}<br>num3++ = ".$num3++;
	echo "<br>num3 = {$num3}<br>++num3 = ".++$num3;
	/*
	�Ƚ������
	*/
	echo "<h2>�Ƚ������</h2>";

?>