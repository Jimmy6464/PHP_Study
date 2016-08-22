<?php
	/*
		变量
	*/
	$webName = "bbs.hoadf";//变量
	$webName = "fdfdf";
	echo $webName;
	var_dump($webName);//"var_dump":输出变量类型和变量长度和值
	/*
		可变变量
	*/
	$$webName = "JImmy";//可变变量
	echo $$webName."_____".$fdfdf;

	echo $_GET['webIp'];//输出地址参数
	echo $_POST['uName'];//输出文本框的内容
?>
<a href="lesson2.php?webIp=jimmyNg&uName=king">点击提交站点</a>
<form action="lesson2.php" method="post">
	<input type="text" name="uName"><br/>
	<input type="submit" value="提交表单">
</form>