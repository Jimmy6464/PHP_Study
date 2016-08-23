<?php
/*
	传值方式
*/
	echo "<h1>传值方式</h1>";
	$phpName = "php Name";
	$bbs = $phpName;//传值赋值方式,copy phpName的值
	$address = &$phpName;//传址,address 和phpName指向同一内存
	echo $address;
	$phpName = "change";
	echo $phpName;
	echo "<br>";
	echo $bbs;
	echo $address;
	/*
		常量：值始终保持不变的单元
		1.define('常量名称','值')
		2.区分大小写
		3.只能用于标量：字符串(string),整型(int),浮点型(float),布尔型(bool)
	*/
	define('NORMALVALUE','Jimmy is so handsome');
	//define('NORMALVALUE','Jimmy is so good');
	echo "<h1>常量：值始终保持不变的单元</h1>";
	echo NORMALVALUE;
	echo "<p>'PHP_VERSION' print php version name</p>";
	echo PHP_VERSION;
	echo "<p>'PHP_OS' print php system name</p>";
	echo PHP_OS;
	/*
		魔术常量
		__CLASS__:返回类名，
	*/
	echo "<h1>魔术常量</h1>";
	echo "<p><strong>显示行号</strong></p>";
	echo __LINE__;//显示行号
	echo __FILE__;//显示当前文件的服务器综合路径
	function fune(){
		echo "<p>'__FUNCTION__' print function name</p>";
		echo __FUNCTION__;
	}
	fune();
	class person{
		function fun1(){
			echo "<p><strong>print class name</strong></p>";
			echo __Class__;
			echo "<br/>---------------<br/>";
			echo "<p><strong>print class method name</strong></p>";
			echo __METHOD__;
		}
	}
	$ob1 = new person();
	$ob1->fun1();
	//检查变量是否存在
	echo "<p><strong>检查变量是否存在</strong></p>";
	$flag = isset($phpName);//isset() 检查变量是否存在
	var_dump($flag);//检查变量类型
	$flag2 = defined('NORMALVALUE');//defined()检查常量是否存在
	var_dump($flag2);
	echo "<p><strong>isset() 检查变量是否存在</strong></p>";
	if($flag){
		echo "<br/>phpName 变量存在";
	}else {
		echo "<br/>phpName 变量不存在";
	}
	echo "<p><strong>defined() 检查常量是否存在</strong></p>";
	if($flag2){
		echo "<br/>NORMALVALUE常量存在";
	}else {
		echo "<br/>NORMALVALUE常量不存在";
	}
?>