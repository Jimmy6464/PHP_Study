<?php
/*
	��ֵ��ʽ
*/
	echo "<h1>��ֵ��ʽ</h1>";
	$phpName = "php Name";
	$bbs = $phpName;//��ֵ��ֵ��ʽ,copy phpName��ֵ
	$address = &$phpName;//��ַ,address ��phpNameָ��ͬһ�ڴ�
	echo $address;
	$phpName = "change";
	echo $phpName;
	echo "<br>";
	echo $bbs;
	echo $address;
	/*
		������ֵʼ�ձ��ֲ���ĵ�Ԫ
		1.define('��������','ֵ')
		2.���ִ�Сд
		3.ֻ�����ڱ������ַ���(string),����(int),������(float),������(bool)
	*/
	define('NORMALVALUE','Jimmy is so handsome');
	//define('NORMALVALUE','Jimmy is so good');
	echo "<h1>������ֵʼ�ձ��ֲ���ĵ�Ԫ</h1>";
	echo NORMALVALUE;
	echo "<p>'PHP_VERSION' print php version name</p>";
	echo PHP_VERSION;
	echo "<p>'PHP_OS' print php system name</p>";
	echo PHP_OS;
	/*
		ħ������
		__CLASS__:����������
	*/
	echo "<h1>ħ������</h1>";
	echo "<p><strong>��ʾ�к�</strong></p>";
	echo __LINE__;//��ʾ�к�
	echo __FILE__;//��ʾ��ǰ�ļ��ķ������ۺ�·��
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
	//�������Ƿ����
	echo "<p><strong>�������Ƿ����</strong></p>";
	$flag = isset($phpName);//isset() �������Ƿ����
	var_dump($flag);//����������
	$flag2 = defined('NORMALVALUE');//defined()��鳣���Ƿ����
	var_dump($flag2);
	echo "<p><strong>isset() �������Ƿ����</strong></p>";
	if($flag){
		echo "<br/>phpName ��������";
	}else {
		echo "<br/>phpName ����������";
	}
	echo "<p><strong>defined() ��鳣���Ƿ����</strong></p>";
	if($flag2){
		echo "<br/>NORMALVALUE��������";
	}else {
		echo "<br/>NORMALVALUE����������";
	}
?>